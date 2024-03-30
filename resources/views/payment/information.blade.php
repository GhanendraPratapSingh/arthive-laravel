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
                    <form action="{{route('artwork.initiatePayment')}}" method="post" name="myForm" >
                        @csrf
                        <input type="hidden" name="price" value="{{$price}}" />
                        <input type="hidden" name="user_type" value="{{$user_type}}" />
                        <input type="hidden" name="order_type" value="{{$order_type}}" />
                        
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Your Name">

                            <span id="un" class="text-danger font-weight-bold"></span>

                        </div>


                        <div class="form-group">
                            <input type="number" class="form-control" id="studying" placeholder="Contact No"
                                name="mobile" min='10' >

                            <span id="mb" class="text-danger font-weight-bold"></span>

                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" id="studying" placeholder="email" name="email">

                            <span id="mb" class="text-danger font-weight-bold"></span>

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
@include('footer');