@extends('admin.layout')
@section('admin_body_section')
<div class="container-contact-us">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"></h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary text-center">Contact US </h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Mobile </th>
                        <th>Message</th>

                    </tr>
                </thead>

                <tbody>
                    @forelse ($data as $key => $row)
                        
                    <tr>
                        <td>{{ $row->first_name }}</td>
                        <td>{{ $row->last_name }}</td>
                        <td>{{ $row->mobile }}</td>
                        <td>{{ $row->message }}</td>
                    </tr>   
                    @empty
                        <tr>
                            <td colspan="4">No data found!</td>
                        </tr>
                    @endforelse

               
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection