<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from www.trpentertainment.com/mpcg by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Aug 2021 04:08:39 GMT -->
  <!-- Added by HTTrack -->
  <meta
    http-equiv="content-type"
    content="text/html;charset=utf-8"
  /><!-- /Added by HTTrack -->

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Weekend Programs</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- font -->
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    />

    <style type="text/css">
      body {
        background: url("./images/");
        background-position: top;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: "Poppins", sans-serif;
      }

      #slider {
        overflow: hidden;
      }

      #slider figure {
        position: relative;
        width: 500%;
        margin: 0;
        left: 0;
        animation: 20s slider infinite;
      }

      #slider figure img {
        width: 20%;
        float: left;
      }

      @keyframes slider {
        0% {
          left: 0;
        }

        20% {
          left: 0;
        }

        25% {
          left: -100%;
        }

        45% {
          left: -100%;
        }

        50% {
          left: -200%;
        }

        70% {
          left: -200%;
        }

        75% {
          left: -300%;
        }

        95% {
          left: -300%;
        }

        100% {
          left: -400%;
        }
      }
    </style>

    <style>
      .frm ::placeholder {
        color: black;
        font-weight: bold;
      }

      .swiper-container {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        position: relative;
        text-align: center;
        font-size: 18px;
        background: linear-gradient(
          to right,
          rgb(232, 236, 236),
          rgb(224, 220, 221)
        );
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-wrapper img {
        /* width: 100%; */
        height: 400px;
        object-fit: cover;
        background-position: center;
        background-size: cover;
      }

      .swipe-wrapper {
        position: absolute;
      }

      #sub {
        background-color: #cd0257 !important;
        border-color: transparent;

        border-radius: 2%;
        text-align: center;
        animation: radial-pulse 1s infinite;
      }

      .swiper-wrapper .btn {
        position: absolute;

        font-family: "Times New Roman", Times, serif !important;
        color: black;
        font-size: 25px;
        font-weight: 600;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        top: 0;
        right: 0;
        background-color: transparent;
      }

      @media only screen and (max-width: 768px) {
        .swiper-wrapper .btn {
          padding-left: 180px;
        }
        .card-row-long-term {
          display: block !important;
        }
      }

      @media only screen and (max-width: 768px) {
        .swiper-wrapper .btn {
          padding-left: 180px;
        }
      }

      /* Long term program */

      .card-row-long-term {
        display: flex;
        margin-bottom: 50px;
        margin-left: 40px;
        margin-right: 40px;
      }

      .card-row-long-term .card {
        flex: 1;
        margin: 0 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
      }

      .card-row-long-term .card img {
        width: 100%;
        height: auto;
      }

      .card-row-long-term .content {
        padding: 20px;
        text-align: center;
      }

      .card-row-long-term h3 {
        margin-top: 0;
      }

      .card-row-long-term .long-term-button {
        background-color: #fea1c0;
        color: #000;
        border: none;
        border-radius: 5px;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
      }

      .card-row-long-term .long-term-button:hover {
        background-color: #fea1c0;
      }
      @media only screen and (max-width: 768px) {
        .card-row-long-term {
          margin-left: 0px;
          margin-right: 0px;
        }
      }
      /* Long term program */

      /* ---------what people say --------*/
      .team-section .team-member-content {
        text-align: center;
      }
      /* --------- what people say--------- */
    </style>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <!-- Swiper -->
  </head>

  <body>
    @include('header')
    <div class="swiper-container laptop" id="slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img alt="sliderimage1" id="image1" src="{{asset('/assets/img/bg/bg3.jpg')}}" />
        </div>

        <div class="swiper-button-next"></div>
        <!--<div class="swiper-button-prev"></div>-->
      </div>

      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
    </div>
    <br />
    <!-- Swiper JS -->

    <!-- ---------------------Long Term Program----------------------- -->
    <h2 style="text-align: center">Weekend Programs</h2>
    <br />
    <h4 style="text-align: center">
      Special weekend art sessions to sprinkle joy on your<br />
      little one like confetti!
    </h4>
    <br />
    <div class="card-row-long-term">
      <div class="card">
        <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Image 1" />
        <div class="content">
          <h5>Easter Sensory Play</h5>
          <p>1-6 years</p>
          <span>4:00-5:00pm </span><br />
          <a class="long-term-button" href="{{url('/easter-sensory')}}">Learn More</a>
        </div>
      </div>

      <div class="card">
        <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Image 2" />
        <div class="content">
          <h5>Pyjama Rainbow Party</h5>
          <p>1-6years</p>
          <span>5:00-6:00pm </span><br />
          <button class="long-term-button">Learn More</button>
        </div>
      </div>

      <div class="card">
        <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Image 3" />
        <div class="content">
          <h5>Eat & Paint:Cupcake</h5>
          <p>4-12years</p>
          <span>4:00-5:00pm </span><br />
          <button class="long-term-button">Learn More</button>
        </div>
      </div>
    </div>
    <div class="card-row-long-term">
      <div class="card">
        <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Image 1" />
        <div class="content">
          <h5>Crackling Colours Party</h5>
          <p>2-6 years</p>
          <span>4:00-5:00pm </span><br />
          <button class="long-term-button">Learn More</button>
        </div>
      </div>

      <div class="card">
        <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Image 2" />
        <div class="content">
          <h5>Story+Art</h5>
          <p>4-10years</p>
          <span>5:00-6:00pm </span><br />
          <button class="long-term-button">Learn More</button>
        </div>
      </div>

      <div class="card">
        <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Image 3" />
        <div class="content">
          <h5>Super hero Art Party</h5>
          <p>3-10years</p>
          <span>4:00-5:00pm </span><br />
          <button class="long-term-button">Learn More</button>
        </div>
      </div>
    </div>

    @include('footer')

    <!-- ---------------------Long Term Program- end---------------------- -->

    <!-- End Meet Our Team Section -->
    <!-- Bootstrap JS (Optional, if needed for other Bootstrap components) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- ------------------------------meet our team------------------------ -->

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
  </body>

  <!-- Mirrored from www.trpentertainment.com/mpcg by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Aug 2021 04:09:47 GMT -->
</html>
