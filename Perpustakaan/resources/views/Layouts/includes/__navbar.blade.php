@php
    $user = User::userLogined();
@endphp

<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md">
        <div class="navbar-header" data-logobg="skin6">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-brand">
                <!-- Logo icon -->
                <a href="index.html">
                    <b class="logo-icon">
                        <!-- Dark Logo icon -->
                        <img src="{{url('vendor/assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="{{url('vendor/assets/images/logo-icon.png')}}" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                        <!-- dark Logo text -->
                        <img src="{{url('vendor/assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                        <img src="{{url('vendor/assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" />
                    </span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav ml-auto">
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item d-none d-md-block">
                    <a class="nav-link" href="javascript:void(0)">
                        <form>
                            <div class="customize-input">
                                <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                    type="search" placeholder="Search" aria-label="Search">
                                <i class="form-control-icon" data-feather="search"></i>
                            </div>
                        </form>
                    </a>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                <img src="{{$user['avatar']}}" alt="user" class="rounded-circle"
                            width="40">
                        <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                class="text-dark">{{$user['name']}}</span> <i data-feather="chevron-down"
                                class="svg-icon"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                    <a class="dropdown-item"
                     href="{{auth()->user()->role == 'student' ? '/profile_student/'.auth()->user()->student->id : '/profile_operator/'.auth()->user()->operator->id}}">
                     <i data-feather="user" class="svg-icon mr-2 ml-1"></i>
                            My Profile</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card"
                                class="svg-icon mr-2 ml-1"></i>
                            My Balance</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"
                                class="svg-icon mr-2 ml-1"></i>
                            Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                class="svg-icon mr-2 ml-1"></i>
                            Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout"><i data-feather="power"
                                class="svg-icon mr-2 ml-1"></i>
                            Logout</a>
                        <div class="dropdown-divider"></div>
                        <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                Profile</a></div>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>