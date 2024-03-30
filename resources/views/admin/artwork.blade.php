@extends('admin.layout')
@section('admin_body_section')
<div class="container-art-work">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"></h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary text-center" >Registered User</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th >S NO : </th>
                        <th>Name</th>
           
                        <th>Age</th>
                        <th>Contact</th>
                       
                        <th>Location</th>
                        <th>Price</th>
                        <th>Payment status</th>
                        <th>Created At</th>
                        <th>Delete</th>
                    </tr>
                </thead>
             
                <tbody>
              
                  @forelse ($data as $key => $row)
                  <tr>
                        <td class="text-center"> {{ ++$key}}</td>
                        <td> {{ $row->Name }}</td>
                 
                        <td>{{ $row->Age }}</td>
                        <td>{{ $row->Contact }}</td>
                       
                        <td>{{ $row->Location }}</td>
                        <td>{{ $row->Price }}</td>
                        <td>{{ $row->Payment_status }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td class="text-center "> <a onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger btn-sm " href="/art-work-delete?id={{$row->id}}" >Delete</a></td>
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