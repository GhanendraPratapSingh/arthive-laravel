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
    <title>About Us</title>

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    />

    <link href="./style.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
      body {
        background: url("./images/");
        background-position: top;
        background-repeat: no-repeat;
        background-size: cover;
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

      @media only screen and (max-width: 600px) {
        .swiper-wrapper .btn {
          padding-left: 180px;
        }
      }

      @media only screen and (max-width: 400px) {
        .swiper-wrapper .btn {
          padding-left: 180px;
        }
      }
    </style>
    <style>
        .container-fluid {
  background-color: #43b443;
  width: 100%;
  height: 100vh;
  padding: 0px 20px;
}
.row.main-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  margin: 0px 20px;
}

.column.main-colum {
  flex-basis: 48%; /* Adjust as needed */
  margin-bottom: 20px; /* Adjust spacing */
}

@media screen and (max-width: 768px) {
  .column.main-colum {
    flex-basis: 100%; /* Full width on smaller screens */
  }
}

/* Additional styling for the image */
img {
  width: 100%; /* Ensures the image takes up the full width of its container */
  height: auto; /* Allows the image to scale proportionally */
  max-width: 100%; /* Ensures the image does not exceed its original size */
  max-height: 350px; /* Set maximum height as per your requirement */
}

/* ------------------------meet our team--------------------- */
/* Custom CSS */
.team-section {
  padding: 50px 0;
  background-color: #f8f9fa; /* Adjust as needed */
}

.team-member {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 30px;
}

.team-member img {
  max-width: 100%;
  height: auto;
}

.team-member-content {
  flex-basis: 60%; /* Adjust width of content column */
  padding: 0 20px; /* Adjust spacing */
}

.team-member-content h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

.team-member-content p {
  font-size: 16px;
  margin-bottom: 20px;
}
.carousel-control-next-icon {
  background-color: blue;
}
@media (max-width: 768px) {
  .team-member {
    flex-direction: column;
    text-align: center;
  }

  .team-member-content {
    flex-basis: 100%;
    margin-top: 20px;
  }
}
/* ------------------------meet our team- end-------------------- */

    </style>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <!-- Swiper -->
  </head>

  <body>
    @include('header');
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

    <!-- Swiper JS -->

    <!-- ---------------------A letter from the background----------------------- -->
    <div class="container-fluid">
      <br /><br />
      <h1>A Letter from The Founder</h1>
      <div class="row main-wrapper">
        <div class="column main-colum">
          <p>
            It is a long established fact that a reader will be distracted by
            the readable content of a page when looking at its layout. The point
            of using Lorem Ipsum is that it has a more-or-less normal
            distribution of letters, as opposed to using 'Content here, content
            here', making it look like readable English. Many desktop publishing
            packages and web page editors now use Lorem Ipsum as their default
            model text, and a search for
          </p>
        </div>
        <div class="column">
          <img src="{{asset('/assets/img/bg/1.jpg')}}" alt="Your Image" />
        </div>
      </div>
    </div>

    <!-- ---------------------A letter from the background end----------------------- -->

    <!-- ------------------------------meet our team--------------------------- -->
    <!-- Meet Our Team Section -->
    <section class="team-section">
      <div class="container">
        <div id="teamCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <img
                    src="{{asset('assets/img/bg/1.jpg')}}"
                    class="d-block w-100"
                    alt="Team Member Image"
                  />
                </div>
                <div class="col-md-6 team-member-content">
                  <h2>John Doe</h2>
                  <p>
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, as opposed to
                    using
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <img
                    src="{{asset('assets/img/bg/1.jpg')}}"
                    class="d-block w-100"
                    alt="Team Member Image"
                  />
                </div>
                <div class="col-md-6 team-member-content">
                  <h2>Jane Smith</h2>
                  <p>
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, as opposed to
                    using
                  </p>
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
    @include('footer');
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

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
  </body>

  <!-- Mirrored from www.trpentertainment.com/mpcg by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Aug 2021 04:09:47 GMT -->
</html>
