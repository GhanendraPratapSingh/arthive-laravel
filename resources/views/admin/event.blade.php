@extends('admin.layout')
@section('admin_body_section')
<div class="container-art-work">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"></h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a class="btn btn-primary" href="{{url('/admin/events/create')}}">Add New Event</a>
        @if(Session::has('eventSuccess'))
            <div class="alert alert-success alert-dismissible mt-1">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{Session::get('eventSuccess')}}
            </div>
        @endif
        @if(Session::has('eventError'))
            <div class="alert alert-success alert-dismissible mt-1">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{Session::get('eventError')}}
            </div>
        @endif
        <h5 class="m-0 font-weight-bold text-primary text-center" >Events</h5>
    </div>
 
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th >S NO : </th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Categories</th>
                    </tr>
                </thead>
             
                <tbody>
              
                  @forelse ($data as $key => $row)
                  <tr>
                        <td class="text-center"> {{ ++$key}}</td>
                        <td>
                            @if(!is_null($row->event_img))
                               <img src="{{getImagePath($row->event_img,'EVENT_CALENDER')}}" width="30" height="30" />

                            @endif
                        </td>
                 
                        <td>{{ $row->event_date }}</td>
                        <td>{{ $row->Contact }}</td>
                       <td></td>
                        <!-- <td class="text-center "> <a onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger btn-sm " href="/art-work-delete?id={{$row->id}}" >Delete</a></td> -->
                    </tr>
                  @empty
                      <tr>
                        <td colspan="8">
                             No data found!
                        </td>
                      </tr>
                  @endforelse

                 
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

@endsection