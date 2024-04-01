<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wall art Workshop</title>
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
    /* Style for the container */
    .Easer-sensory-parent {
      display: flex;
      align-items: center; /* Align items vertically in the center */
    }

    /* Style for the left column */
    .Easer-sensory-parent .left-column {
      flex: 1; /* Occupy 50% of the container */
    }

    /* Style for the image */
    .Easer-sensory-parent .left-column img {
      max-width: 100%; /* Ensure the image doesn't exceed its container */
      width: 500px;
      height: 400px;
      display: block; /* Remove any default inline styles */
    }

    /* Style for the right column */
    .Easer-sensory-parent .right-column {
      flex: 1; /* Occupy 50% of the container */
      padding: 0 20px; /* Add padding for spacing */
    }
    .heading-team-section {
      width: 28%;
      text-align: center;
      background-color: #5062c3;
    }

    @media only screen and (max-width: 768px) {
      .Easer-sensory-parent {
        display: block !important;
      }
      .team-section .heading-team-section {
        width: auto !important;
      }
      .last-row-price-date {
        display: block !important;
      }
      .heading-team-section {
        width: auto !important;
      }
    }
    .enroll-now-easer-sensory {
      background-color: black;
      color: #fff;
      border: none;
      padding: 5px 10px;
    }
    .last-row-price-date {
      display: flex;
      align-items: center;
      gap: 30px;
      font-weight: bold;
    }
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
    <center>
      <h2 class="heading-team-section">Wall Art Workshop</h2>
    </center>
    <div class="Easer-sensory-parent">
      <!-- Left Column -->
      <div class="left-column">
        <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Image" />
      </div>
      <!-- Right Column -->
      <div class="right-column">
        <span><b>Happening on March April 13 & 14</b></span>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat
          est et nisi commodo, eget mattis purus condimentum. Integer ac viverra
          elit. Sed ac feugiat nisi. Aliquam erat volutpat. Quisque quis odio
          metus. Suspendisse potenti.
        </p>
        <p>
          <em
            ><b>Pick anyone day,to join in the fun! </b><br />
            <b> We've got you covered with all the supplies! </b><br />
            <b>Arrive on time.We finish right on the time.</b> <br />
            <b> Arrive on time.We finish right on the time.</b>
          </em>
        </p>
        <div class="last-row-price-date">
          <span>16years+</span>
          <span>2:00-5:00pm</span>
          <span>3,899/- </span>
        </div>

        <button class="enroll-now-easer-sensory">Enroll Now</button>
      </div>
    </div>
    @include('footer')
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
