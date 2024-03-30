@extends('admin.layout')
@section('admin_body_section')
<!-- Begin Page Content -->
<div class="slot-booking-container">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary text-center"> Booked Slots </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">S.no :</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Booking Date</th>
                            <th>Slot time</th>
                            <th> No of Slot</th>
                            <th>Payment Status </th>
                            <th>Booking (Date & Time)</th>
                            <th>Delete </th>
                        </tr>
                    </thead>

                    <tbody>
                    
                    @forelse ($data as $key => $row)
                    <tr>
                        <td>{{ ++$key }} </td>
                        <td>{{ $row->name }} </td>
                        <td>{{ $row->mobile }} </td>
                        <td>{{ $row->email }} </td>
                        <td>{{ $row->date }} </td>
                        <td>{{ $row->timeslot }} </td>
                        <td>{{ $row->quantity }} </td>
                        <td>{{ $row->payment_status }} </td>
                        <td>{{ $row->created_at }} </td>
                        <td class="text-center "> <a onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger btn-sm " href="slotdelete.php?id={{$row->id}}">Delete</a></td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="10">
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