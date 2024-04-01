<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Young Artist Club</title>

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
    /*-------------- team----------------- */
    .team-section .heading-team-section {
      width: 28%;
      text-align: center;
      background-color: #fea1c0;
    }

    .team-section-last-heading-row {
      display: flex;
      justify-content: space-around;
      align-items: center;
    }
    .team-section-last-heading-row h5 {
      font-weight: bold;
    }
    @media only screen and (max-width: 768px) {
      .team-section .heading-team-section {
        width: auto;
      }
      .team-section-last-heading-row {
        display: block !important;
      }
    }
    /*-------------- team end----------------- */
    /*   The-Title-Project 3 box list */
    .team-section {
      margin-bottom: 50px !important;
    }

    .card-container-3-card-list-second {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-evenly;
      margin: 0px 50px;
    }

    .card-container-3-card-list-second .card {
      flex: 0 0 calc(30% - 20px); /* Adjust width as needed with margin accounted for */
      margin-bottom: 20px;
      background-color: #f9f9f9;
      border: 2px solid #000;
      border-radius: 5px;
      padding: 20px;
    }

    .card-container-3-card-list-second .card h2 {
      margin-top: 0;
    }

    .card-container-3-card-list-second .card ul {
      list-style-type: disc;
      padding-left: 20px;
    }

    @media screen and (max-width: 768px) {
      .card-container-3-card-list-second .card {
        flex-basis: calc(50% - 20px);
      }
      .card-row-event-pricelist-first {
        display: block !important;
      }
    }

    @media screen and (max-width: 576px) {
      .card-container-3-card-list-second .card {
        flex-basis: 100%;
      }
    }

    /*   /*end The-Title-Project 3 box list */

    /*  event list with price */
    .card-row-event-pricelist-first {
      display: flex;
      justify-content: space-evenly;
      flex-wrap: wrap;
    }

    .card-row-event-pricelist-first .card-small {
      flex: 0 0 calc(20% - 20px); /* Adjust card width and margin as needed */
      margin-bottom: 20px;
      background-color: #fea1c0;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
    }

    .card-row-event-pricelist-first .large-card {
      flex: 0 0 calc(30% - 20px); /* Make the first card wider */
      border: 2px solid #000;
      padding: 18px;
    }

    .card-row-event-pricelist-first .card-small h2 {
      margin-top: 0;
    }

    .card-row-event-pricelist-first .card-small ul {
      list-style-type: disc;
      padding-left: 20px;
    }

    /* Style for check icon */
    .card-row-event-pricelist-first .card-small ul {
      list-style-type: none;
      padding-left: 0;
    }

    .card-row-event-pricelist-first .card-small ul li {
      position: relative;
      padding-left: 30px; /* Adjust as needed */
      margin-bottom: 5px;
    }

    .card-row-event-pricelist-first .card-small ul li::before {
      content: "\2714"; /* Unicode character for check icon */
      position: absolute;
      left: 0;
      top: 0;
      font-size: 16px; /* Adjust icon size as needed */
      line-height: 1;
      color: #000 !important; /* Adjust icon color as needed */
    }
    .enroll-now {
      background-color: #000;
      color: #fff;
      font-weight: 600;
      outline: none;
      border: none;
      padding: 6px 10px;
    }
    .plans-label-tag {
      background-color: #000;
      color: #fff;
      padding: -1px;
      margin-left: -42px;
      width: 50%;
      display: flex !important;
      justify-content: center;
      align-items: center;
      text-align: center;
      height: 28px;
      padding: 1px;
      margin-bottom: 10px;
    }
    .card-row-event-pricelist-first h6 {
      margin-bottom: 0px !important;
    }
    .young-artist-club-heading {
      margin-left: 38px;
    }
    @media screen and (max-width: 768px) {
      .young-artist-club-heading {
        margin: 0px !important;
      }
    }
    /* end event list with price */
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
    <!-- Meet Our Team Section -->
    <section class="team-section">
      <div class="container">
        <br />
        <center>
          <h2 class="heading-team-section">Young Artists Club</h2>
        </center>
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
                    Step into our After School Program and watch as your child's
                    creativity takes flight like a majestic butterfly. Our
                    program is not just about creating art; it's about fostering
                    a love for self-expression and unleashing the artistic
                    genius within.Eachmonth,wehighlightaparticular Artist and
                    their art works,.Aswe journey through there alms of artistic
                    expression, yourchild willnotonly learnabout the techniques
                    of the masters but also discover their own unique style.
                  </p>

                  <p>
                    <em>
                      <strong
                        >We've got you covered with all the supplies!
                        <br /> </strong
                    ></em>
                  </p>
                  <div class="team-section-last-heading-row">
                    <h5>Age:4-8years <br />8-12years-Senior</h5>
                    <h5>8 sessions/month</h5>
                  </div>
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
                    Get your little ones ready for an arts yadventure with The
                    Little Project! Everymonth,they'llget 8 super cool art
                    projects,each with aspecial theme.Not only will they make
                    master pieces based on their favorite themes,butthey'll also
                    be working on their fine motor skills and pin cergrip
                    strength while they create.It'sawin-win for everyone!
                  </p>
                  <p>
                    <em
                      ><strong
                        >We've got you covered with all the art supplies!<br />
                        The kid should have been exposed to school
                        environment.<br />
                        This session is exclusively for children;<br />
                        parents are not permitted in the classroom.</strong
                      ></em
                    >
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
    <!-- End Meet Our Team Section -->

    <!-- The-Title project three card list-->
    <div class="card-container-3-card-list-second">
      <div class="card">
        <h3>What you will learn</h3>
        <ul>
          <li>Learn about artists and their art works.</li>
          <li>Explore a wide range of art mediums.</li>
          <li>Tap into personal creativity and style.</li>
        </ul>
      </div>
      <div class="card">
        <h3>What you will get</h3>
        <ul>
          <li>
            8 student-made art works to take home at the end of each batch.
          </li>
          <li>A warm, friendly and, supportive environment.</li>
          <li>Aprogress card after 8 classes to track their achievements.</li>
        </ul>
      </div>
      <div class="card">
        <h3>We do not provide Trial classes or Compensation classes!</h3>

        <span>Read our Refund Policy</span>
        <span>Read our Terms and Conditions </span>
      </div>
    </div>

    <!--end The-Title project three card list-->

    <!--  event list with price -->

    <div class="young-artist-club-heading">
      <h3>Young Artists Club Junior</h3>
    </div>
    <div class="card-row-event-pricelist-first">
      <div class="card large-card">
        <h4>Weekday Batch</h4>
        <span>Tuesday & Thursday </span>
        <span>Evening Batch-5:00pm to 6:00pm </span>
        <br />
        <h4>Weekend Batch</h4>
        <span>Saturday & Sunday </span>
        <span>Morning Batch-10:00am to 11:00am </span>
      </div>
      <div class="card-small">
        <div class="plans-label-tag">
          <h6>STANDARD</h6>
        </div>

        <ul>
          <li>8 sessions</li>
          <li>1 month validity</li>
          <li>10% offer on 1 weekend programs</li>
          <li>10% offer on 3 hours Toddler Art lab session</li>

          <!-- Add more features as needed -->
        </ul>
        <form action="{{route('youngArtistClub.payment.information.show')}}" method="post">
            @csrf
            <input type="hidden" value="4899" name="price"/>
            <button class="btn-primary" type="submit">4,899 ₹</button>
        </form>
      
      </div>
      <div class="card-small">
        <div class="plans-label-tag">
          <h6>ADVANCED</h6>
        </div>
        <ul>
          <li>24 sessions</li>
          <li>3 months validity</li>
          <li>10% offer on 3 weekend programs</li>
          <li>20% offer on 5 hours Toddler Art lab session</li>
          <!-- Add more features as needed -->
        </ul>
        <form action="{{route('youngArtistClub.payment.information.show')}}" method="post">
            @csrf
            <input type="hidden" value="12899" name="price"/>
            <button class="btn-primary" type="submit">12,899 ₹</button>
        </form>
        <!-- <center><b>12,899₹</b></center> -->
      </div>
      <div class="card-small">
        <div class="plans-label-tag">
          <h6>PRO</h6>
        </div>
        <ul>
          <li>48 sessions</li>
          <li>6 months validity</li>
          <li>10% offer on 6 weekend programs</li>
          <li>30% offer on 8 hours Toddler Art lab session</li>
          <!-- Add more features as needed -->
        </ul>
        <form action="{{route('youngArtistClub.payment.information.show')}}" method="post">
            @csrf
            <input type="hidden" value="23899" name="price"/>
            <button class="btn-primary" type="submit">23,899 ₹</button>
        </form>
        <!-- <center><b>23,899₹ </b></center> -->
      </div>

      <h3>
        Ready to dive in to this Program? Checkout our Subscription Planand
        click below
      </h3>
    </div>
    <br />
    <center><button class="enroll-now">Entroll Now</button></center>

    <!-- event list with price -->

    <!--  event list with price second-->

    <div class="young-artist-club-heading">
      <h3>Young Artists Club Senior</h3>
    </div>
    <div class="card-row-event-pricelist-first">
      <div class="card large-card">
        <h4>Weekday Batch</h4>
        <span>Wednesday & Friday </span>
        <span>Evening Batch-5:00pm to 6:00pm </span>
        <br />
        <h4>Weekend Batch</h4>
        <span>Saturday & Sunday </span>
        <span>Morning Batch-10:30am to 11:30am </span>
      </div>
      <div class="card-small">
        <div class="plans-label-tag">
          <h6>STANDARD</h6>
        </div>

        <ul>
          <li>8 sessions</li>
          <li>1 month validity</li>
          <li>10% offer on 1 weekend programs</li>
          <li>10% offer on 3 hours Toddler Art lab session</li>

          <!-- Add more features as needed -->
        </ul>
        <form action="{{route('youngArtistClub.payment.information.show')}}" method="post">
            @csrf
            <input type="hidden" value="5899" name="price"/>
            <button class="btn-primary" type="submit">5,899 ₹</button>
        </form>
        <!-- <center><b>5,899₹</b></center> -->
      </div>
      <div class="card-small">
        <div class="plans-label-tag">
          <h6>ADVANCED</h6>
        </div>
        <ul>
          <li>24 sessions</li>
          <li>3 months validity</li>
          <li>10% offer on 3 weekend programs</li>
          <li>20% offer on 5 hours Toddler Art lab session</li>
          <!-- Add more features as needed -->
        </ul>
        <form action="{{route('youngArtistClub.payment.information.show')}}" method="post">
            @csrf
            <input type="hidden" value="15899" name="price"/>
            <button class="btn-primary" type="submit">15,899 ₹</button>
        </form>
        <!-- <center><b>15,899₹</b></center> -->
      </div>
      <div class="card-small">
        <div class="plans-label-tag">
          <h6>PRO</h6>
        </div>
        <ul>
          <li>48 sessions</li>
          <li>6 months validity</li>
          <li>10% offer on 6 weekend programs</li>
          <li>30% offer on 8 hours Toddler Art lab session</li>
          <!-- Add more features as needed -->
        </ul>
        <form action="{{route('youngArtistClub.payment.information.show')}}" method="post">
            @csrf
            <input type="hidden" value="28899" name="price"/>
            <button class="btn-primary" type="submit">28,899 ₹</button>
        </form>
        <!-- <center><b>28,899₹ </b></center> -->
      </div>

      <h3>
        Ready to dive in to this Program? Checkout our Subscription Planand
        click below
      </h3>
    </div>
    <br />
    <center><button class="enroll-now">Entroll Now</button></center>
@include('footer')
    <!-- event list with price second -->

    <!-- Swiper JS -->

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
