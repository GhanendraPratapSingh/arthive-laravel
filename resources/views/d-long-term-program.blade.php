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
    <title>Long Term Program</title>
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
        background-color: pink;
        color: #000;
        border: none;
        border-radius: 5px;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
      }

      .card-row-long-term .long-term-button:hover {
        background-color: pink;
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
    <h2 style="text-align: center">Long Term Programs</h2>
    <br />
    <h4 style="text-align: center">
      Sign up your mini artist for our creativity-igniting art sessions!
    </h4>
    <br />
    <div class="card-row-long-term">
      <div class="card">
        <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Image 1" />
        <div class="content">
          <h5>Creative Toddler Program</h5>
          <p>1-3 years</p>
          <span>1 hour x 8 sessions </span><br />
          <a class="long-term-button" href="{{url('/creative-toddler-program')}}">Learn More</a>
        </div>
      </div>

      <div class="card">
        <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Image 2" />
        <div class="content">
          <h5>The Little Project</h5>
          <p>2-4 years</p>
          <span>1 hour x 8 sessions </span><br />
          <a class="long-term-button" href="{{url('/the-little-project')}}">Learn More</a>
        </div>
      </div>

      <div class="card">
        <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Image 3" />
        <div class="content">
          <h5>The Colour World</h5>
          <p>4-7 years</p>
          <span>1 hour x 8 sessions </span><br />
          <a class="long-term-button" href="{{url('/the-color-world')}}">Learn More</a>
        </div>
      </div>
    </div>
    <div class="card-row-long-term">
      <div class="card">
        <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Image 1" />
        <div class="content">
          <h5>Creative Toddler Program</h5>
          <p>1-3 years</p>
          <span>1 hour x 8 sessions </span><br />
          <a class="long-term-button" href="{{url('/creative-toddler-program')}}">Learn More</a>
        </div>
      </div>

      <div class="card">
        <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Image 2" />
        <div class="content">
          <h5>The Little Project</h5>
          <p>2-4 years</p>
          <span>1 hour x 8 sessions </span><br />
          <a class="long-term-button" href="{{url('/the-little-project')}}">Learn More</a>
        </div>
      </div>

      <div class="card">
        <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Image 3" />
        <div class="content">
          <h5>The Colour World</h5>
          <p>4-7 years</p>
          <span>1 hour x 8 sessions </span><br />
          <a class="long-term-button" href="{{url('/the-color-world')}}">Learn More</a>
        </div>
      </div>
    </div>

    <!-- ---------------------Long Term Program- end---------------------- -->

    <!-- ---------------------what do people say?---------------------- -->
    <!-- Meet Our Team Section -->
    <section class="team-section" style="background-color: pink">
      <div class="container">
        <br />
        <h2 style="text-align: center">What do people say?</h2>
        <br />
        <div id="teamCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <img
                    src="{{asset('/assets/img/bg/1.jpg')}}"
                    class="d-block w-100"
                    alt="Team Member Image"
                  />
                </div>
                <div class="col-md-6 team-member-content">
                  <p>
                    My daughter who is 2.9year old enjoys going to the ArtHive’s
                    art classes.Every week she’s so excited to be at art class
                    where she enjoys their “little project” which is theme
                    based.Ms.Varshini,her art instructor is so kind and patient.
                    Images be loware my favourites of my daughter’s art-theme
                    autumn. Highly recommend their classes.
                  </p>
                  <span><b>Jane Smith</b></span>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <img
                    src="{{asset('/assets/img/bg/1.jpg')}}"
                    class="d-block w-100"
                    alt="Team Member Image"
                  />
                </div>
                <div class="col-md-6 team-member-content">
                  <p>
                    My daughter who is 2.9year old enjoys going to the ArtHive’s
                    art classes.Every week she’s so excited to be at art class
                    where she enjoys their “little project” which is theme
                    based.Ms.Varshini,her art instructor is so kind and patient.
                    Images be loware my favourites of my daughter’s art-theme
                    autumn. Highly recommend their classes.
                  </p>
                  <span><b>Jane Smith</b></span>
                </div>
              </div>
            </div>
            <!-- Add more carousel items as needed -->
          </div>
          <a
            class="carousel-control-prev"
            href="#teamCarousel"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#teamCarousel"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    @include('footer')
    <!-- End Meet Our Team Section -->

    <!-- ---------------------what do people say? end---------------------- -->

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
