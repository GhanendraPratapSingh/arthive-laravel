
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.cdnfonts.com/css/garet" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
  <!-- CSS | menuzord megamenu skins -->
  <link id="menuzord-menu-skins" href="{{asset('assets/css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet" />
  <!-- CSS | Main style file -->
  <link href="{{asset('assets/css/style-main.css')}}" rel="stylesheet" type="text/css">
  <!-- CSS | Preloader Styles -->
  <link href="{{asset('assets/css/preloader.css')}}" rel="stylesheet" type="text/css">
  <!-- CSS | Custom Margin Padding Collection -->
  <link href="{{asset('assets/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
  <!-- external javascripts -->
  <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mali&display=swap" rel="stylesheet">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-K0WVMYG642"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <title>Contact Us</title>
</head>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins" !important;
  }

  body,
  input,
  textarea {
    /* font-family: 'Gareth', sans; */
    font-family: "Poppins" !important;
  }

  .container-102 {
    position: relative;
    width: 100%;

    padding: 2rem;

    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .form {
    width: 100%;
    max-width: 820px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    overflow: hidden;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
  }

  .contact-form {
    background-color: orange;
    position: relative;
  }



  .contact-form:before {
    content: "";
    position: absolute;
    width: 26px;
    height: 26px;
    background-color: orange;
    transform: rotate(45deg);
    top: 50px;
    left: -13px;
  }

  form {
    padding: 2.3rem 2.2rem;
    z-index: 10;
    overflow: hidden;
    position: relative;
  }

  .title {
    color: #fff;
    font-weight: 500;
    font-size: 1.5rem;
    line-height: 1;
    margin-bottom: 0.7rem;
  }

  .input-container {
    position: relative;
    margin: 1rem 0;
  }

  .input {
    width: 100%;
    outline: none;
    border: 2px solid #fafafa;
    background: none;
    padding: 0.6rem 1.2rem;
    color: #fff;
    font-weight: 500;
    font-size: 0.95rem;
    letter-spacing: 0.5px;
    border-radius: 25px;
    transition: 0.3s;
  }

  textarea.input {
    padding: 0.8rem 1.2rem;
    min-height: 150px;
    border-radius: 22px;
    resize: none;
    overflow-y: auto;
  }

  .input-container label {
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
    padding: 0 0.4rem;
    color: #fafafa;
    font-size: 0.9rem;
    font-weight: 400;
    pointer-events: none;
    z-index: 1000;
    transition: 0.5s;
  }

  .input-container.textarea label {
    top: 1rem;
    transform: translateY(0);
  }

  .btn {
    padding: 0.6rem 1.3rem;
    background-color: #fff;
    border: 2px solid #fafafa;
    font-size: 0.95rem;
    color: orange;
    line-height: 1;
    border-radius: 25px;
    outline: none;
    cursor: pointer;
    transition: 0.3s;
    margin: 0;
  }

  .btn:hover {
    background-color: transparent;
    color: #fff;
  }

  .input-container span {
    position: absolute;
    top: 0;
    left: 25px;
    transform: translateY(-50%);
    font-size: 0.8rem;
    padding: 0 0.4rem;
    color: transparent;
    pointer-events: none;
    z-index: 500;
  }

  .input-container span:before,
  .input-container span:after {
    content: "";
    position: absolute;
    width: 10%;
    opacity: 0;
    transition: 0.3s;
    height: 5px;
    background-color: orange;
    top: 50%;
    transform: translateY(-50%);
    border: orange 2px solid;
  }

  .input-container span:before {
    left: 50%;
  }

  .input-container span:after {
    right: 50%;
  }

  .input-container.focus label {
    top: 0;
    transform: translateY(-50%);
    left: 25px;
    font-size: 0.8rem;
  }

  .input-container.focus span:before,
  .input-container.focus span:after {
    width: 50%;
    opacity: 1;
  }

  .contact-info {
    padding: 2.3rem 2.2rem;
    position: relative;
    background-color: #00467a;
    border: orange 2px solid;
  }

  .contact-info .title {
    color: orange;
  }

  .text {
    color: #fff;
    margin: 1.5rem 0 2rem 0;
  }

  .information {
    display: flex;
    color: #fff;
    margin: 0.7rem 0;
    align-items: center;
    font-size: 0.95rem;
  }

  .icon {
    width: 28px;
    margin-right: 0.7rem;
    color: orange;
  }

  .social-media {
    padding: 2rem 0 0 0;
    color: orange;
  }

  .social-media p {
    color: #fff;
  }

  .social-icons {
    display: flex;
    margin-top: 0.5rem;
  }

  .social-icons a {
    width: 35px;
    height: 35px;
    border-radius: 5px;
    background: linear-gradient(45deg, orange, red);
    color: #fff;
    text-align: center;
    line-height: 35px;
    margin-right: 0.5rem;
    transition: 0.3s;
  }

  .social-icons a:hover {
    transform: scale(1.05);
  }






  .square {
    position: absolute;
    height: 400px;
    top: 50%;
    left: 50%;
    transform: translate(181%, 11%);
    opacity: 0.2;
  }

  @media (max-width: 850px) {
    .form {
      grid-template-columns: 1fr;
    }

    .contact-info:before {
      bottom: initial;
      top: -75px;
      right: 65px;
      transform: scale(0.95);
    }

    .contact-form:before {
      top: -13px;
      left: initial;
      right: 70px;
    }

    .square {
      transform: translate(140%, 43%);
      height: 350px;
    }

    .big-circle {
      bottom: 75%;
      transform: scale(0.9) translate(-40%, 30%);
      right: 50%;
    }

    .text {
      margin: 1rem 0 1.5rem 0;
    }

    .social-media {
      padding: 1.5rem 0 0 0;
    }
  }

  @media (max-width: 480px) {
    .container-102 {
      padding: 1.5rem;
    }

    .contact-info:before {
      display: none;
    }

    .square,
    .big-circle {
      display: none;
    }

    form,
    .contact-info {
      padding: 1.7rem 1.6rem;
    }

    .text,
    .information,
    .social-media p {
      font-size: 0.8rem;
    }

    .title {
      font-size: 1.15rem;
    }

    .social-icons a {
      width: 30px;
      height: 30px;
      line-height: 30px;
    }

    .icon {
      width: 23px;
    }

    .input {
      padding: 0.45rem 1.2rem;
    }

    .btn {
      padding: 0.45rem 1.2rem;
    }
  }



  .credit {
    text-align: center;
    color: #fff;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  }

  .credit a {
    text-decoration: none;
    color: #FBAB7E;
    font-weight: bold;
  }
</style>

<body>
  @include ('header')
  @include ('banner')


  <div class="container-102">

    <div class="form">
      <div class="contact-info">
        <h3 class="title">Let's Connect</h3>


        <!--<div class="info">-->
        <!--  <div class="information">-->
        <!--   <i class='bx bx-map'></i>-->
        <!--    <p> 1st Floor, Old No 52, New No. 1, 9th Street, F Block, 1st Avenue Main Road, R.V. Nagar, Anna Nagar East, Chennai-600102</p>-->
        <!--  </div>-->
        <!--  <div class="information">-->

        <!--    <p>mailthearthive@gmail.com</p>-->
        <!--  </div>-->
        <!--  <div class="information">-->

        <!--    <p>9840679575</p>-->
        <!--  </div>-->
        <!--</div>-->
        <div class="col-lg-3 col-sm-6">
          <div class="single-footer-widget">
            <ul class="footer-contact-info">
              <li>
                <i class='bx bxs-phone'></i>
                <span>Phone</span>
                <a href="tel:9840679575">7305949575</a><br>
                <a href="tel:9841423978">9841423978</a>
              </li>

              <li>
                <i class='bx bx-envelope'></i>
                <span>Email</span>
                <a href=""><span class="__cf_email__"
                    data-cfemail="771f121b1b18371c120316195914181a">mailthearthive@gmail.com</span></a>
                <a href=""><span class="__cf_email__"
                    data-cfemail="771f121b1b18371c120316195914181a">arthive.events@gmail.com</span></a>
              </li>
              <li>

                <i class='bx bx-map'></i>
                <span>Address</span>
                <P style="font-size:14px;"> The Art Hive, Ground Floor, Chaitanyam Apartment, 147, 3rd Street, AH Block,
                  Ishwarya Nagar, Shanthi Colony, Anna Nagar, Chennai - 600040</P>

              </li>
            </ul>
          </div>
        </div>


      </div>

      <!--<div class="single-footer-widget">-->
      <!--    <h3>Contact Us</h3>-->

      <!--    <ul class="footer-contact-info">-->
      <!--        <li>-->
      <!--            <i class='bx bxs-phone'></i>-->
      <!--            <span>Phone</span>-->
      <!--            <a href="tel:882569756">9840679575</a>-->
      <!--        </li>-->
      <!--        <li>-->
      <!--            <i class='bx bx-envelope'></i>-->
      <!--            <span>Email</span>-->
      <!--            <a href=""><span class="__cf_email__" data-cfemail="771f121b1b18371c120316195914181a">mailthearthive@gmail.com</span></a>-->
      <!--        </li>-->
      <!--        <li>-->
      <!--            <i class='bx bx-map'></i>-->
      <!--            <span>Address</span>-->
      <!--          1st Floor, Old No 52, New No. 1, 9th Street, F Block, 1st Avenue Main Road, R.V. Nagar, Anna Nagar East, Chennai-600102-->
      <!--        </li>-->
      <!--    </ul>-->
      <!--</div>-->


      <div class="contact-form">
        <span class="circle one"></span>
        <span class="circle two"></span>

        <form action="{{route('user.contactUs')}}" method="post" autocomplete="off">
          @csrf
          <h3 class="title">Contact us</h3>
          <div class="input-container">
            <input type="text" name="fname" class="input" required />
            <label for="">First Name</label>
            <span>First Name</span>
            @if($errors->has('fname'))
              <div class="error"></div>
            @endif
          </div>
          <div class="input-container">
            <input type="text" name="lname" class="input"  required />
            <label for="">Last Name</label>
            @if($errors->has('lname'))
              <div class="error"></div>
            @endif
          </div>

          <div class="input-container">
            <input type="tel" name="mob" class="input" required />
            <label for="">Phone</label>
            @if($errors->has('mob'))
              <div class="error"></div>
            @endif
          </div>
          <div class="input-container textarea" required>
            <textarea name="msg" class="input"></textarea>
            <label for="">Message</label>
            @if($errors->has('msg'))
              <div class="error"></div>
            @endif
          </div>
          <br>

          <!--    <button type="submit" class="contact_form_submit"  name="submit" class="default-btn">-->
          <!--Submit Now-->
          <!--</button>-->
          <button type="submit"  class="default-btn">
            Submit Now
          </button>
        </form>
      </div>
    </div>
  </div>


</body>
<script>
  const inputs = document.querySelectorAll(".input");

  function focusFunc() {
    let parent = this.parentNode;
    parent.classList.add("focus");
  }

  function blurFunc() {
    let parent = this.parentNode;
    if (this.value == "") {
      parent.classList.remove("focus");
    }
  }

  inputs.forEach((input) => {
    input.addEventListener("focus", focusFunc);
    input.addEventListener("blur", blurFunc);
  });

</script>

@include('footer');


</html>

