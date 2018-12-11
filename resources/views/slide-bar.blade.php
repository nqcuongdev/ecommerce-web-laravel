<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">

                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>
                    <a href="{{route('index')}}">
                        <img class="img-fluid" src="{{url('Admin/files/assets/images/logo.png')}}" alt="Theme-Logo"/>
                    </a>
                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>
                @if(Auth::guard('admins')->check())
                <div class="navbar-container container-fluid">
                    <ul class="nav-right">
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{url('Admin/files/assets/images/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                    <span>{{Auth::guard('admins')->user()->name}}</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu"
                                    data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="user-profile.html">
                                            <i class="feather icon-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('get.adminlogout')}}">
                                            <i class="feather icon-log-out"></i> Logout
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </li>
                    </ul>
                </div>
                @endif
            </div>
        </nav>
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigatio-lavel">Navigation</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li>
                                <a href="{{route('dashboard')}}">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('getslides')}}">
                                    <span class="pcoded-micon"><i class="typcn typcn-device-desktop"></i></span>
                                    <span class="pcoded-mtext">Index</span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu active pcoded-trigger">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-tag"></i></span>
                                    <span class="pcoded-mtext">Products Management</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li>
                                        <a href="{{route('admin.getproducts')}}">
                                            <span class="pcoded-mtext">Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('getcategory')}}">
                                            <span class="pcoded-mtext">Category and Type</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
