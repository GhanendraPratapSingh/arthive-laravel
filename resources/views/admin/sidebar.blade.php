        <!-- Sidebar -->
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
                <a class="nav-link" href="/admin/registered-users">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Registered User</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item ">
                <a class="nav-link" href="/admin/slot-bookings">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Art Hour Slot</span></a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/artwork">
                   
                    <i class="fas fa-drum"></i>
                    <span>Arthours membership</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="/admin/mannual-booking">
                   
                    <i class="fas fa-fw fa-cog"></i>
                    <span> Manual Booking  </span></a>
            </li>
            
             <li class="nav-item">
                <a class="nav-link" href="/admin/contact-us">
                   
                    <i class="fas  fa-fw fa-clipboard"></i>
                    <span>Contact Us </span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/events')}}">
                   
                    <i class="fas  fa-fw fa-clipboard"></i>
                    <span>Events </span></a>
            </li>
            
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>