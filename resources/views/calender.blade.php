

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
    <style>
    .calender-2{
        background-color: #fdf6ed;
    }
    
    .row h3{
       padding-top:10px;
    }
       @media only screen and (max-width: 760px),
        (min-device-width: 802px) and (max-device-width: 1020px) {

            /* Force table to not be like tables anymore */
            table, thead, tbody, th, td, tr {
                display: block;

            }
            
            

            .empty {
                display: none;
            }

            /* Hide table headers (but not display: none;, for accessibility) */
            th {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                border: 1px solid #ccc;
            }

            td {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
            }



            /*
		Label the data
		*/
            td:nth-of-type(1):before {
                content: "Sunday";
            }
            td:nth-of-type(2):before {
                content: "Monday";
            }
            td:nth-of-type(3):before {
                content: "Tuesday";
            }
            td:nth-of-type(4):before {
                content: "Wednesday";
            }
            td:nth-of-type(5):before {
                content: "Thursday";
            }
            td:nth-of-type(6):before {
                content: "Friday";
            }
            td:nth-of-type(7):before {
                content: "Saturday";
            }


        }

        /* Smartphones (portrait and landscape) ----------- */

        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
            body {
                padding: 0;
                margin: 0;
            }
        }

        /* iPads (portrait and landscape) ----------- */

        @media only screen and (min-device-width: 802px) and (max-device-width: 1020px) {
            body {
                width: 495px;
            }
        }

        @media (min-width:641px) {
            table {
                table-layout: fixed;
            }
            td {
                width: 33%;
            }
        }
        
        .row{
            margin-top: 20px;
        }
        
        .today{
            background:yellow;
        }
        
        
        
    </style>
</head>

<body>
 @include('header');
    <section class="calender-2">
    <div class="container">
        
        <div class="row">
            <center><h3> ART HOUR</h3></center>
            
            <br>
            <br>
            <br>
            <center><p>Book an hour at our art and craft experience centre to spend a joyful hour filled with colours and creativity.</p></center>
            <br>
            <div class="col-md-12">
           
           <table class='table table-bordered'>
           <center><h2>{{getMonthName($month)}} {{$year}}</h2>
           <a class='btn btn-xs btn-primary' href="{{route('ArtHour.Calender',getMonthAndYearFromDate($previousDate))}}">Previous Month</a> 
           <a class='btn btn-xs btn-primary'href="{{route('ArtHour.Calender',getMonthAndYearFromDate())}}">Current Month</a> 
           <a class='btn btn-xs btn-primary'href="{{route('ArtHour.Calender',getMonthAndYearFromDate($nextDate))}}">Next Month</a> 
           <tr>
            @php 
                $dayOfWeek =getDayOfWeek($selectedDate);
              
                $noOfDays = getNoOfDayInSelectedMonth($selectedDate);
            @endphp
            @foreach(getWeekDays() as $day)
              <th  class='header'>{{ $day }}</th>
            @endforeach 
           </tr>
           <tr>
        
            @if($dayOfWeek >0)
                @for($i=0;$i<$dayOfWeek;$i++)
                    <td  class='empty'></td>
                @endfor
            @endif
            @for ($i=0;$i<$noOfDays;$i++)
                @if($dayOfWeek==7)
                    @php $dayOfWeek = 0; @endphp
                    </tr><tr>
                @endif

                

                <td><h4>{{$i+1}}</h4> 
                @if($dayOfWeek==1)
                    <button class='btn btn-warning btn-xs'>Holiday</button>
                @elseif(isBookingAvailable($month,$year,$i+1))
                    <a href="{{url('/kids-slot-booking',['date'=>getDateFromYearMonthAndDay($year,$month,$i+1)])}}" class='btn btn-success btn-xs'>Book</a>
                @else
                    </h4> <button class='btn btn-danger btn-xs'>N/A</button>
                @endif
                </td>

               
            @php $dayOfWeek++ @endphp
            @endfor
          
            </tr>
           </table>
            </div>
        </div>
    </div>
      <div class="class-shape">
                <div class="shape-1">
                    <img src="assets/img/newsletter/1.png" alt="image">
                </div>
                <div class="shape-2">
                    <img src="assets/img/class/class-shape-2.png" alt="image">
                </div>
            </div>
    </section>
@include('footer')
</body>

</html>
