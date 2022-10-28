
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/cuba/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Feb 2021 13:20:15 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets/landing/img/LOGORISMA.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/landing/img/LOGORISMA.png') }}" type="image/x-icon">
    <title>{{ $title }}</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/vendors/date-picker.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/style.css">
    <link id="color" rel="stylesheet" href="{{ url('') }}/assets/admin/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/responsive.css">
</head>

<body onload="startTime()">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{ url('') }}/assets/admin/images/logo/logo.png" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
                </div>
                <div class="left-header col horizontal-wrapper ps-0">
                    <ul class="horizontal-menu">
                        
                    </ul>
                </div>
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>
                        
                        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="media profile-media"><img class="b-r-10" src="{{ url('') }}/assets/admin/images/dashboard/profile.jpg" alt="">
                                <div class="media-body"><span>{{ session()->get('nama') }}</span>
                                    <p class="mb-0 font-roboto">Admin <i class="middle fas fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="#"><i data-feather="user"></i><span>Profile</span></a></li>
                                {{-- <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                                <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li> --}}
                                <li><a href="{{ url('logout') }}"><i data-feather="log-out"> </i><span>Logout</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName"></div>
            </div>
            </div>
          </script>
                <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="{{ url('admin/dashboard') }}"><h2>RISMAJT</h2></a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="{{ url('admin/dashboard') }}"><img class="img-fluid" src="{{ url('') }}/assets/admin/images/logo/logo-icon.png" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links pb-5" id="simple-bar">
                                <li class="back-btn"><a href="index.html"><img class="img-fluid" src="{{ url('') }}/assets/images/logo/logo-icon.png" alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Master Data</h6>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    {{-- <label class="badge badge-danger">New</label> --}}
                                    <a class="sidebar-link sidebar-title" href="#">
                                        <i data-feather="users"></i> <span>Users </span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="{{ url('admin/pengurus_aktif') }}">Pengurus Aktif</a></li>
                                        <li><a href="projectcreate.html">Pengurus Tidak Aktif</a></li>
                                        <li><a href="projectcreate.html">Alumni</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('admin/jabatan') }}">
                                        <i data-feather="git-pull-request"> </i> <span>Jabatan</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('admin/departemen') }}">
                                        <i data-feather="git-pull-request"> </i> <span>Departemen</span>
                                    </a>
                                </li>
                                
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Content</h6>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('#') }}">
                                        <i data-feather="git-pull-request"> </i> <span>Content</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid pt-4">
                    @yield('content')
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2022 © RISMA Jawa Tengah </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ url('') }}/assets/admin/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="{{ url('') }}/assets/admin/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="{{ url('') }}/assets/admin/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{ url('') }}/assets/admin/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="{{ url('') }}/assets/admin/js/scrollbar/simplebar.js"></script>
    <script src="{{ url('') }}/assets/admin/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="{{ url('') }}/assets/admin/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="{{ url('') }}/assets/admin/js/sidebar-menu.js"></script>
    <script src="{{ url('') }}/assets/admin/js/chart/chartist/chartist.js"></script>
    <script src="{{ url('') }}/assets/admin/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="{{ url('') }}/assets/admin/js/select2/select2.full.min.js"></script>
    <script src="{{ url('') }}/assets/admin/js/select2/select2-custom.js"></script>
    <script src="{{ url('') }}/assets/admin/js/chart/knob/knob.min.js"></script>
    <script src="{{ url('') }}/assets/admin/js/chart/knob/knob-chart.js"></script>
    <script src="{{ url('') }}/assets/admin/js/chart/apex-chart/apex-chart.js"></script>
    <script src="{{ url('') }}/assets/admin/js/chart/apex-chart/stock-prices.js"></script>
    <script src="{{ url('') }}/assets/admin/js/notify/bootstrap-notify.min.js"></script>
    <script src="{{ url('') }}/assets/admin/js/dashboard/default.js"></script>
    <script src="{{ url('') }}/assets/admin/js/notify/index.js"></script>
    <script src="{{ url('') }}/assets/admin/js/datepicker/date-picker/datepicker.js"></script>
    <script src="{{ url('') }}/assets/admin/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="{{ url('') }}/assets/admin/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="{{ url('') }}/assets/admin/js/typeahead/handlebars.js"></script>
    <script src="{{ url('') }}/assets/admin/js/typeahead/typeahead.bundle.js"></script>
    <script src="{{ url('') }}/assets/admin/js/typeahead/typeahead.custom.js"></script>
    <script src="{{ url('') }}/assets/admin/js/typeahead-search/handlebars.js"></script>
    <script src="{{ url('') }}/assets/admin/js/typeahead-search/typeahead-custom.js"></script>
    <script src="{{ url('') }}/assets/admin/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ url('') }}/assets/admin/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

<!-- Mirrored from admin.pixelstrap.com/cuba/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Feb 2021 13:21:36 GMT -->

</html>