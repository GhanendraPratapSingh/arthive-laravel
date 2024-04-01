<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Private Art Party</title>
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
  </head>
  <style>
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
    /* fisrt section with parent*/
    .private-art-parent {
      margin: 0px 40px;
    }
    /* fisrt section with parent end*/

    /* image row*/
    .image-row-parent {
      display: flex;
      flex-wrap: wrap;
      margin: 0px 30px;
    }
    .image-row-parent .column {
      flex: 1; /* Occupy 33.33% of the container */
      padding: 10px;
    }
    .image-row-parent .column img{
        max-width: 100%; /* Ensure the image doesn't exceed its container */
        height: auto; /* Maintain aspect ratio */
        display: block; /* Remove any default inline styles */
        margin: 0 auto; /
    }
    .private-art-contact-btn{
        background-color:#fea1c0 ;
        border: none;
        font-weight: bold;
        padding: 5px 10px;
    }
     @media only screen and (max-width: 768px){
        .image-row-parent{
            display: block !important;
        }
     }
    /* image row end*/
  </style>
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

    <!-- Fisrt section -->
    <div class="private-art-parent">
      <center>
        <h3><b>Private Art Party</b></h3>
      </center>

      <p style="text-align: center">
        Get Your Creative Juices Flowing with Our Art Party! <br />Let's
        kickstart your paint party with a bang! We specialize in hosting
        one-of-a-kind<br />
        art-vities. You can customize your own theme or select from other themes
        we provide. <br />Choose from our available Studio space or let us bring
        the party to you.<br />
        Regardless of your choice, we'll curate the perfect<br />
        art activities to match your theme, so you can express your creativity
        with confidence.
      </p>
    </div>
    <!-- Fisrt section end-->

    <!-- -----image row -->
    <div class="image-row-parent">
      <!-- Column 1 -->
      <div class="column">
        <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Image 1" />
      </div>
      <!-- Column 2 -->
      <div class="column">
        <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Image 2" />
      </div>
      <!-- Column 3 -->
      <div class="column">
        <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Image 3" />
      </div>
    </div>
    <center><a class="private-art-contact-btn" href="{{url('/contact')}}">Contact Us</a></center>
    <br /><br />
    <!-- end image row -->

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
    <!-- Bootstrap JS (Optional, if needed for other Bootstrap components) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

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
</html>
