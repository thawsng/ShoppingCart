<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Dashboard | JSOFT Themes | JSOFT-Admin</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
    <meta name="author" content="JSOFT.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor content-bodyCSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

    <!-- Specific Page Vendor CSS -->
    @yield('page_css')

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/stylesheets/theme.css')}}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/stylesheets/skins/default.css')}}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/stylesheets/theme-custom.css')}}">

    <!-- Head Libs -->
    <script src="{{URL::asset('assets/vendor/modernizr/modernizr.js')}}"></script>

</head>
<body>
<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="../" class="logo">
                <img src="{{URL::asset('assets/images/logo.png')}}" height="35" alt="JSOFT Admin" />
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">

            <form action="pages-search-results.html" class="search nav-form">
                <div class="input-group input-search">
                    <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                    <span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
                </div>
            </form>

            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown">
                    <figure class="profile-picture">
                        <img src="{{URL::asset('assets/images/!logged-user.jpg')}}" alt="Joseph Doe" class="img-circle" data-lock-picture="{{URL::asset('assets/images/!logged-user.jpg')}}" />
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                        <span class="name">John Doe Junior</span>
                        <span class="role">administrator</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">

            <div class="sidebar-header">
                <div class="sidebar-title">
                    Navigation
                </div>
                <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <div class="nano">
                <div class="nano-content">
                    <nav id="menu" class="nav-main" role="navigation">
                        <ul class="nav nav-main">
                            <li class="nav-active">
                                <a href="index.html">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailbox-folder.html">
                                    <span class="pull-right label label-primary">182</span>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>Mailbox</span>
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>Maps</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="maps-google-maps.html">
                                            Basic
                                        </a>
                                    </li>
                                    <li>
                                        <a href="maps-google-maps-builder.html">
                                            Map Builder
                                        </a>
                                    </li>
                                    <li>
                                        <a href="maps-vector.html">
                                            Vector
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <hr class="separator" />
                </div>

            </div>

        </aside>
        <!-- end: sidebar -->
        <section role="main" class="content-body">
            @yield('content')
        </section>
    </div>

    <aside id="sidebar-right" class="sidebar-right">
        <div class="nano">
            <div class="nano-content">
                <a href="#" class="mobile-close visible-xs">
                    Collapse <i class="fa fa-chevron-right"></i>
                </a>

                <div class="sidebar-right-wrapper">

                    <div class="sidebar-widget widget-calendar">
                        <h6>Upcoming Tasks</h6>
                        <div data-plugin-datepicker data-plugin-skin="dark" ></div>

                        <ul>
                            <li>
                                <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                                <span>Company Meeting</span>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-widget widget-friends">
                        <h6>Friends</h6>
                        <ul>
                            <li class="status-online">
                                <figure class="profile-picture">
                                    <img src="{{URL::asset('assets/images/!sample-user.jpg')}}" alt="Joseph Doe" class="img-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class="status-online">
                                <figure class="profile-picture">
                                    <img src="{{URL::asset('assets/images/!sample-user.jpg')}}" alt="Joseph Doe" class="img-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class="status-offline">
                                <figure class="profile-picture">
                                    <img src="{{URL::asset('assets/images/!sample-user.jpg')}}" alt="Joseph Doe" class="img-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class="status-offline">
                                <figure class="profile-picture">
                                    <img src="{{URL::asset('assets/images/!sample-user.jpg')}}" alt="Joseph Doe" class="img-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </aside>
</section>

<!-- Vendor -->
<script src="{{URL::asset('assets/vendor/jquery/jquery.js')}}"></script>
<script src="{{URL::asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
<script src="{{URL::asset('assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{URL::asset('assets/vendor/nanoscroller/nanoscroller.js')}}"></script>
<script src="{{URL::asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{URL::asset('assets/vendor/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{URL::asset('assets/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

<!-- Specific Page Vendor -->
@yield('page_js')

<!-- Theme Base, Components and Settings -->
<script src="{{URL::asset('assets/javascripts/theme.js')}}"></script>

<!-- Theme Custom -->
<script src="{{URL::asset('assets/javascripts/theme.custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{URL::asset('assets/javascripts/theme.init.js')}}"></script>

<!-- Examples -->
<script src="{{URL::asset('assets/javascripts/dashboard/examples.dashboard.js')}}"></script>

</body>
</html>
