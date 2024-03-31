@include('header')

<section class="quote-area pb-100" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="quote-image"></div>
            </div>

            <div class="col-lg-6">
                <div class="quote-item">
                    <div class="content">
                        <!--<span> U & ME</span>-->
                        <h3> Basic Details</h3>
                    </div>
                    <form action="{{route('artwork.initiatePayment')}}" method="post" name="myForm" onsubmit="return validateUserInfoForm()">
                        @csrf
                        <input type="hidden" name="price" value="{{$price}}" />
                        <input type="hidden" name="user_type" value="{{$user_type}}" />
                        <input type="hidden" name="order_type" value="{{$order_type}}" />

                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">

                            <span id="username_error" class="text-danger font-weight-bold">
                                @error('name')
                                <span>{{ $message }}</span>
                                @enderror
                            </span>

                        </div>


                        <div class="form-group">
                            <input type="number" class="form-control" id="studying" placeholder="Contact No" name="mobile" min='10'>

                            <span id="mobile_error" class="text-danger font-weight-bold">
                                @error('mobile')
                                <span>{{ $message }}</span>
                                @enderror
                            </span>

                        </div>

                        <div class="form-group">
                            <input class="form-control" id="studying" placeholder="email" name="email">

                            <span id="email_error" class="text-danger font-weight-bold">
                                @error('email')
                                <span>{{ $message }}</span>
                                @enderror
                            </span>

                        </div>

                        <div class="text-center">
                            <input type="submit" class="btn btn-outline-primary center" value="Pay Now">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function validateUserInfoForm() {
        try {
            let username = document.forms["myForm"]["name"].value;
            let mobile = document.forms["myForm"]["mobile"].value;
            let emailValue = document.forms["myForm"]["email"].value;
            // console.log('emialIs',emailValue);


            if (username == "") {
                document.getElementById('username_error').innerHTML = "Please enter your name";
                return false;
            }
            if ((username.length < 2) || (name.length > 35)) {
                document.getElementById('username_error').innerHTML = "User name must be atleast 2 characters";
                return false;
            } else {
                document.getElementById('username_error').innerHTML = "";
            }
            if (!isNaN(username)) {
                document.getElementById('username_error').innerHTML = "Only characters are allowed";
                return false;
            } else {
                document.getElementById('username_error').innerHTML = "";
            }


            if (username.search(/^[A-Za-z\s]+$/)) {
                document.getElementById('username_error').innerHTML = "Only characters are allowed";
                return false;
            } else {
                document.getElementById('username_error').innerHTML = "";
            }
            //   mobile validation start
            if (mobile == "") {
                document.getElementById('mobile_error').innerHTML = "Please enter your mobile number";
                return false;
            } else {
                document.getElementById('mobile_error').innerHTML = "";

            }
            if (isNaN(mobile)) {

                document.getElementById('mobile_error').innerHTML = "Only digits are allowed";
                return false;
            } else {
                document.getElementById('mobile_error').innerHTML = "";
            }

            if ((mobile.length < 10) || (mobile.length > 10)) {
                document.getElementById('mobile_error').innerHTML = "Mobile number must be 10 digits only";
                return false;
            } else {
                document.getElementById('mobile_error').innerHTML = "";
            }

            if (mobile.search(/^[6-9]\d{9}$/gi)) {
                document.getElementById('mobile_error').innerHTML = "Invalid mobile number!";
                return false;
            } else {
                document.getElementById('mobile_error').innerHTML = "";
            }

            console.log('emailSecondIs', emailValue)
            if (emailValue == "") {
                document.getElementById('email_error').innerHTML = "Please enter your email";
                return false;
            } else {
                document.getElementById('email_error').innerHTML = "";
            }

            if (emailValue.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/) < 0) {
                document.getElementById('email_error').innerHTML = "Please enter a valid email";
                return false;
            } else {
                document.getElementById('email_error').innerHTML = "";
            }

        } catch (error) {
            console.log('errorIs', error);
            return false;
        }

        //    return false;


    }
</script>
@include('footer');