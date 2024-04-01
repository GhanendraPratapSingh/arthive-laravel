<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--  Bootstrap CSS navbar link  -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS navbar link end -->

    <!-- font poppins link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- font poppins link end -->


    <link rel="stylesheet" href="./assets/css/new-header_style.css">

    <!-- navbar jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- navbar jQuery end -->

    <!-- Bootstrap js navbar link  -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap js navbar link end  -->




</head>

<body>

    <header>
        <div class="high-class">
            <div class="sticky">
                <div class="new-header-top-heading">
                    <h3>Yes, you can join classes anytime!</h3>
                </div>
                <div>
                    <center>
                        <img class="header-img-logo" src="assets/pictures/logoattached.png" alt="">
                    </center>

                </div>
                <nav class="navbar navbar-default nav-bar-main" role="navigation">
                    <div class="navbar-header mobile-nav-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>


                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav new-parent-navbar">
                            <li class="active"><a href="{{url('/about')}}">ABOUT US</a></li>
                            <li class="dropdown kids-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">KIDS<b class="caret"></b></a>
                                <ul class="dropdown-menu kids-dropdown-menu">
                                    <li><a href="{{asset('/d-long-term-program')}}">Long Term Programs</a></li>
                                    <li><a href="{{asset('/d-kids-weekend-program')}}">Weekend Workshops</a></li>

                                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle"
                                            data-toggle="dropdown">Art Labs</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('/d-kids-art-labs')}}">Kids Art Labs</a></li>
                                            <li><a href="{{url('/d-toddler-labs')}}">Toddler Art Labs</a></li>
                                            
                                            

                                        </ul>
                                        <li><a href="{{url('/young-artist-club')}}">Young Artist Club</a></li>
                                            <li><a href="{{url('/private-art-party')}}">Private Art Party</a></li>
                                    </li>
                                 

                                </ul>
                            </li>
                            <li class="dropdown adults-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">ADULTS <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu adults-dropdown-menu">
                                    <li><a href="a-long-term-program">Long Terms Programs</a></li>
                                    <li><a href="{{url('/a-weekend-program')}}">Weekend Workshops</a></li>
                                    
                                    <li><a href="a-art-cafe">Art Cafe</a></li>
                                    <li><a href="{{url('/wall-art-workshop')}}">Wall Art workshop</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="#">AWARDS & MEDIA</a></li>
                            <li class="active"><a href="career">CAREER</a></li>
                            <li class="active"><a href="#">FAQs</a></li>
                            <li class="active"><a href="contact">CONTACT US</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>


        </div>
    </header>





    <script>
        $(document).ready(function () {
            // Function to handle dropdown toggle
            $('.dropdown-toggle').on('click', function () {
                var $el = $(this);
                var $parent = $el.offsetParent(".dropdown-menu");
                if (!$el.next().hasClass('show')) {
                    $el.parents('.dropdown-menu').first().find('.show').removeClass('show');
                }
                var $subMenu = $el.next(".dropdown-menu");
                $subMenu.toggleClass('show');

                $el.closest('li').toggleClass('open');

                return false;
            });

            // Function to close dropdowns when clicking outside
            $(document).on('click', function (e) {
                if (!$(e.target).closest('.dropdown-menu').length && !$(e.target).closest('.dropdown-toggle').length) {
                    $('.dropdown-menu').removeClass('show');
                    $('.dropdown-toggle').closest('li').removeClass('open');
                }
            });
        });
    </script>

</body>

</html>