@extends('admin.layout')

@section('admin_body_section')
<div class="container-mannual-register">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{url('/admin/events')}}">Back</a>
            <h5 class="m-0 font-weight-bold text-primary text-center"> Book Event </h5>
        </div>
 
        <div class="card-body">
            <div class="container">
                @if (Session::has('error'))
                <div class='alert alert-danger'>{{ Session::get('error') }}</div>
                @endif
             
                <form action="{{url('/admin/events/')}}" method="post" enctype="multipart/form-data" >
                    @csrf

                    <div class="form-group">
                        <label for="exampleStatus">Event Category</label>
                        <select  name="event_category[]" class="form-control" id="exampleStatus"  multiple>
                            <option value="toddler_labs"> Toddler Labs  </option>
                            <option value="kids_labs">Kids Labs  </option>
                            <option value="art_cafe">Art Cafe</option>
                        
                        </select>
                        <span  class="text-danger font-weight-bold">
                            @error('event_category')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputImage">Event Image</label>
                        <input type="file" name="event_img" class="form-control-file" id="event_image" >
                        <span  class="text-danger font-weight-bold">
                            @error('event_img')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputMobile">Event Date</label>
                        <input type="date" name="event_date" class="form-control" id="exampleInputMobile" placeholder="Enter Date" required>
                        <span  class="text-danger font-weight-bold">
                            @error('event_date')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleStatus">Status</label>
                        <select name="status" class="form-control" id="exampleStatus" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        <span  class="text-danger font-weight-bold">
                            @error('status')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                  

                    <button type="submit" class="btn btn-outline-primary">Book</button>
                </form>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
<script>
    return false;
document.getElementById('event_image').addEventListener('change', function() {
    var file = this.files[0];
    var maxSizeMB = 2; // Maximum allowed size in megabytes
    var allowedFormats = ['image/jpeg', 'image/png', 'image/gif']; // Allowed image formats

    // Validate file size
    if (file.size > maxSizeMB * 1024 * 1024) {
        alert('Please select an image file smaller than ' + maxSizeMB + 'MB');
        this.value = ''; // Clear the file input
        return;
    }

    // Validate file format
    if (!allowedFormats.includes(file.type)) {
        alert('Please select a valid image file format (JPEG, PNG, GIF)');
        this.value = ''; // Clear the file input
        return;
    }

    // If both size and format are valid, you can proceed with the file
    console.log('Selected file:', file);
});

// function validateEventForm(){
//     let username = document.forms["myForm"]["name"].value;
//         let mobile = document.forms["myForm"]["event_date"].value;
//         let emailValue = document.forms["myForm"]["email"].value;
//         // console.log('emialIs',emailValue);


//         if (username == "") {
//           document.getElementById('username_error').innerHTML = "Please enter your name";
//           return false;
//         }
//         if ((username.length < 2) || (name.length > 35)) {
//           document.getElementById('username_error').innerHTML = "User name must be atleast 2 characters";
//           return false;
//         } else {
//           document.getElementById('username_error').innerHTML = "";
//         }
// }
</script>
</div>
@endsection