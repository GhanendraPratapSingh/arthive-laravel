        <!-- Sidebar -->
        <!-- Bootstrap CSS -->




        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="{{asset('/assets/img/logo.png')}}" alt="logo" width="100" height="auto"><img>
                </div>
                <div class="sidebar-brand-text mx-3"> Admin Panel </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active ">
                <a class="nav-link" href="index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/class-registerations')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Class Registrations</span></a>
            </li>


            <!-- Nav Item - Tables -->
            <li class="nav-item ">
                <a class="nav-link" href="/admin/slot-bookings">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Art Hour Slot</span></a>
            </li>
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown"> <!-- Add 'dropdown' class to make it a dropdown -->
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-clipboard"></i>
                            <span>Kids & Toddller</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <!-- Dropdown menu items -->
                            <a class="dropdown-item" href="{{url('/admin/creative-toddler')}}">Creative Toddller</a>
                            <a class="dropdown-item" href="{{url('/admin/little-project')}}">little-project</a>
                            <a class="dropdown-item" href="{{url('/admin/the-color-world')}}">The Color World</a>
                            <a class="dropdown-item" href="{{url('/admin/kids-art-labs')}}">Kids Art Lab</a>
                            <a class="dropdown-item" href="{{url('/admin/toddller-art-lab')}}">Toddller Art Lab</a>
                            <a class="dropdown-item" href="{{url('/admin/young-artist-club')}}">Young Artist Club</a>
                            <!-- <a class="dropdown-item" href="{{url('/admin/private-art-party')}}">Private Art Part</a> -->
                            <!-- Add more dropdown items as needed -->
                        </div>
                    </li>
                </ul>
            </nav>




            <li class="nav-item">
                <a class="nav-link" href="/admin/artwork">

                    <i class="fas fa-drum"></i>
                    <span>Arthours membership</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/mannual-booking">

                    <i class="fas fa-fw fa-cog"></i>
                    <span> Manual Booking </span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/admin/contact-us">

                    <i class="fas  fa-fw fa-clipboard"></i>
                    <span>Contact Us </span></a>
            </li>
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown"> <!-- Add 'dropdown' class to make it a dropdown -->
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-clipboard"></i>
                            <span>Events</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <!-- Dropdown menu items -->
                            <a class="dropdown-item" href="{{url('/admin/events')}}">View All Events</a>
                            <a class="dropdown-item" href="{{url('/admin/events/create')}}">Add New Event</a>
                            <!-- Add more dropdown items as needed -->
                        </div>
                    </li>
                </ul>
            </nav>






            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>