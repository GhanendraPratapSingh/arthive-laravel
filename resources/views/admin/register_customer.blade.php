@extends('admin.layout')

@section('admin_body_section')

<div >

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"></h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary text-center">Registered User</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S NO : </th>
                        <th>Name</th>

                        <th>Mobile</th>
                        <th>Amount</th>

                        <th>Payment Status</th>
                        <th>Date</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                  @forelse ($data as $key=>$item)
                  <tr>
                                <td class="text-center"><?= $key++ ?></td>
                                <td>{{$item->yourname}}</td>

                                <td>{{ $item->studing }}</td>
                                <td>{{ $item->amount }}</td>

                                <td>{{ $item->Payment_Status }}</td>
                                <td>{{ $item->date }}</td>
                                <td class="text-center "> <a onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger btn-sm " href="registerdelete.php?id=$item->id">Delete</a></td>
                            </tr>
                  @empty
                    <tr>
                        <td>No data found!</td>
                    </tr>
                  @endforelse
                            


                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection