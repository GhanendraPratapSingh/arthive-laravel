<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- font -->
    <title>Final Footer</title>
    <style>
      /* Reset default margin and padding */
      body,
      html {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
      }

      /* Style for the container */
      .parent-footer {
        display: flex;
        flex-wrap: wrap; /* Wrap items to next line if container width is not enough */
      }

      /* Style for the left column */
      .parent-footer .left-column {
        flex: 1; /* Occupy 50% of the container */
        padding: 20px; /* Add padding for spacing */
      }

      /* Style for the logos */
      .parent-footer .logo-container {
        display: flex;
        align-items: center; /* Align items vertically in the center */
        justify-content: center;
      }

      .parent-footer .logo {
        max-width: 326px; /* Adjust width of logos as needed */
        margin-right: 20px; /* Add spacing between logos */
      }

      /* Style for the right column */
      .parent-footer .right-column {
        flex: 1; /* Occupy 50% of the container */
        padding: 20px; /* Add padding for spacing */
      }

      /* Style for the contact information */
      .parent-footer .contact-info {
        font-size: 16px;
      }

      .parent-footer .contact-info p {
        margin: 5px 0;
      }

      /* Style for icons */
      .parent-footer .contact-info i {
        margin-right: 10px;
      }



      /* Style for the footer second part */
    .footer-second-part-three-card {
        display: flex;
        flex-wrap: wrap; /* Wrap items to next line if container width is not enough */
        gap: 30px;
       margin: 0px  30px;
    }

    /* Style for the columns */
  .footer-second-part-three-card  .column {
        flex: 1; /* Occupy equal width of the container */
        padding: 20px; /* Add padding for spacing */
        box-sizing: border-box; /* Include padding and border in the width */
        border: 2px solid #000;
    }

    /* Style for the heading */
   .footer-second-part-three-card .heading {
        font-size: 24px;
        margin-bottom: 10px;
    }

    /* Style for the content */
  .footer-second-part-three-card  .content {
        font-size: 16px;
    }

    /* Style for the social media icons */
  .footer-second-part-three-card  .social-icons {
        font-size: 24px;
    }

    /* Add spacing between social media icons */
  .footer-second-part-three-card  .social-icons i:not(:last-child) {
        margin-right: 10px;
    }


     @media only screen and (max-width: 768px){
        .parent-footer{
            display: block;
        }
        .parent-footer .logo{
            width: auto !important;
        }
     }
          /* Style for the footer second part  end*/

    </style>

  </head>
  <body>
 <!-- footer parnet fisrt part -->
    <div class="parent-footer">
      <!-- Left Column -->
      <div class="left-column">
        <div class="logo-container">
          <img class="logo" src="{{asset('/assets/img/footer/logo-footer.png')}}" alt="Logo 1" />
        </div>
      </div>

      <!-- Right Column -->

      <div class="right-column">
        <div class="contact-info">
          <h2>Contact Us</h2>
          <p>
            <p><i class="fas fa-phone"></i>7305949575 or 9841423978</p><br/>
            <p><i class="fas fa-envelope"></i> mailthearthive@gmail.com</p></p><br/>
            <i class="fas fa-map-marker-alt"></i>
            The Art Hive,Dowlani Towers,Dr Radha Krishnan Salai,Dwarka
            Colony,Mylapore,Chennai, Tamil Nadu 600004
          </p>
         
         
        </div>
      </div>
    </div>
     <!-- footer parnet fisrt part end -->



         <!-- footer parnet second part  -->
         <div class="footer-second-part-three-card">
            <!-- First Column -->
            <div class="column">
                <div class="heading"><strong>Policies</strong></div>
                <div class="content">
                 <p>RefundPolicy <br/>Termsand Conditions<br/>Privacy Policy </p>
                </div>
            </div>
            <!-- Second Column -->
            <div class="column">
                <div class="heading"><strong>Subscribe to our
                    newsletter!</strong></div>
                <div class="content">
                    <p>Dont miss out on our monthly
                        updates!</p><br/>
                        <b>Signup</b>
                </div>
            </div>
            <!-- Third Column -->
            <div class="column">
                <div class="heading"><strong>Share your <br/> master piece</strong></div>
                <div class="social-icons">
                    <!-- <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i> -->
                    <i class="fas fa-envelope"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
        </div>

           <!-- footer parnet second part  end-->

    <!-- Include Font Awesome for icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  </body>
</html>
