<?php

namespace App\Http\Controllers;

use App\Models\EventCalender;
use App\Models\EventCalenderCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Throwable;

class EventController extends Controller
{
   
    public function index()
    {
        $data = EventCalender::get();
        return view('admin.event',compact('data'));
    }

    
    public function create()
    {
        return view('admin.event_create');
    }

   
    public function store(Request $request)
    {
        
        $validation = $request->validate([
            'event_img' => "image|mimes:jpg,png",
            // dimensions:min_width=100,min_height=200
            'event_date' => 'date',
            'event_category' => 'array',
            'status' => 'in:active,inactive'
        ]);
        try{

            $isEventExists = EventCalender::whereEventDate($request->event_date)->exists();
            if($isEventExists){
                Session::flash('error','event for this date is already exists');
                return back();
            }
            // dd($request->all());
            $imageName  = "";
            if ($request->hasFile('event_img')) {

                $image = $request->file('event_img');
                $originalName = $image->getClientOriginalName();

                $imageName = 'event_image_'.uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
               
                // Store the image in the 'public' disk under the 'images' directory with the new name
                $imagePath = $image->storeAs('/assets/img/event-calender/', $imageName, 'public');
            }
            $eventCalenderModel =  EventCalender::create([
                'event_img' => $imageName,
                'event_date' => $request->event_date,
                'status' => $request->status == 'active' ? 1 : 0
            ]);
            if($eventCalenderModel){
                $eventCategories = $request->event_category ?? "";
                if(!empty($eventCategories)){
                    $eventCategories = array_map(function($item) use($eventCalenderModel){
                        return [
                            'event_calender_id' => $eventCalenderModel->id,
                            'event_name' => $item,
                            'event_details' => null,
                            'redirect_url' => null,
                        ];
                    }, $eventCategories);
                    $eventCategory = EventCalenderCategory::insert($eventCategories);
                }
                
            }
            Session::flash('eventSuccess','Event registered successfully!');
            return redirect('/admin/events');
        }catch(Throwable $e){
            Session::flash('eventError','Something went wrong please try again!');
            return redirect('/admin/events');
            dd($e->getMessage());
        }
        
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }

    public function getEventCalender(Request $request){



        $now = Carbon::now();
        $type = $request->type ?? 'next';
        $month = $request->month ?? (clone $now)->format('m');
        $year = $request->year ?? (clone $now)->format('Y');

        $selectedDate = Carbon::createFromDate($year,$month,1);
        $previousDate =  (clone $selectedDate)->subMonth();
        $nextDate =  (clone $selectedDate)->addMonth();

        // echo "selectedDate ".$selectedDate."\n";
        // echo "previousDate ".$previousDate."\n";
        // echo "nextDate ".$nextDate."\n";
        $currentDate = (clone $now);

        $monthStartDate = (clone $selectedDate)->format('Y-m-d');
        $lastDayOfMonth = getNoOfDayInSelectedMonth($selectedDate);
        $monthLastDate = (clone $now)->year($year)->month($month)->day($lastDayOfMonth)->format('y-m-d');

        // dd($lastDateOfSelectedMonth);
        // get events data for the selected monthget
        $eventsData = EventCalender::whereBetween('event_date',[$monthStartDate,$monthLastDate])->get();
        $calenderEvents = [];
        // dd($eventsData);
        if($eventsData){
            foreach($eventsData as $event){
                $monthDate = $event->event_date;
                $dayFromDate = (int) Carbon::create($monthDate)->format('d');
                // echo 'dateFromDateIs'.$dayFromDate."\n";
                $calenderEvents[$dayFromDate] = [
                    'image'=>$event->event_img,
                    'event_categories' =>$event->getEventCategories
                ];
            
            }
        }
        // dd($calenderEvents);



        $nextMonth =  $month + 1;
        // dd($currentMonth->daysInMonth);

        $data = compact('month', 'year', 'selectedDate', 'previousDate', 'nextDate','calenderEvents');
        return view('calender-new',$data);
    }
}
