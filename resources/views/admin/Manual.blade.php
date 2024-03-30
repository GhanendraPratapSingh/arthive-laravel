@extends('admin.layout')

@section('admin_body_section')
<div class="container-mannual-register">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary text-center"> Manual Booking </h5>
        </div>
    
        
        <div class="card-body">
            <div class="container">
            @if (Session::has('bookedError'))
                <div class='alert alert-danger'>{{ Session::get('bookedError') }}</div>
            @endif
            @if (Session::has('success'))
                <div class='alert alert-success'>{{ Session::get('success') }}</div>
            @endif
                <form action="{{route('admin.mannual.register')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Name </label>
                        <input type="Name" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name" required>
                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMobile">Mobile</label>
                        <input type="Phone" name="mobile" class="form-control" id="exampleInputMobile" placeholder="Enter Mobile" required>
                    </div>
                    <div class="form-group">
                        <label class="form-check-label" for="exampledate">Choose Booking Date</label>
                        <input type="date" name="date" class="form-control" id="exampledate" required>

                    </div>
                    <div class="form-group">
                        <label class="form-check-label" for="slotselect">Select a slot</label>
                        <select class="form-control" id="slotselect" name="timeslot" required>
                            <option value="" selected disabled> -- Select Slot Option -- </option>
                            <option value="12:00PM - 14:00PM"> 12:00PM - 01:00PM </option>
                            <option value="13:00PM - 14:00PM"> 01:00PM - 02:00PM </option>
                            <option value="14:00PM - 15:00PM"> 02:00PM - 03:00PM </option>
                            <option value="15:00PM - 16:00PM"> 03:00PM - 04:00PM </option>
                            <option value="16:00PM - 17:00PM"> 04:00PM - 05:00PM </option>
                            <option value="17:00PM - 18:00PM"> 05:00PM - 06:00PM </option>
                            <option value="18:00PM - 19:00PM"> 06:00PM - 07:00PM </option>
                            <option value="19:00PM - 20:00PM"> 07:00PM - 08:00PM </option>
                        </select>

                    </div>

                    <button type="submit"  class="btn btn-outline-primary ">Book</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection