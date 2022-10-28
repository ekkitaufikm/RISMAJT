<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/vendors/icofont.css">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/vendors/themify.css">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/vendors/flag-icon.css">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/style.css">
    <link id="color" rel="stylesheet" href="{{ url('') }}/assets/admin/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/admin/css/responsive.css">
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            @yield('content')
        </div>
        <!-- latest jquery-->
        <script src="{{ url('') }}/assets/admin/js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap js-->
        <script src="{{ url('') }}/assets/admin/js/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- feather icon js-->
        <script src="{{ url('') }}/assets/admin/js/icons/feather-icon/feather.min.js"></script>
        <script src="{{ url('') }}/assets/admin/js/icons/feather-icon/feather-icon.js"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="{{ url('') }}/assets/admin/js/config.js"></script>
        <!-- Plugins JS start-->
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="{{ url('') }}/assets/admin/js/script.js"></script>
        <!-- login js-->
        <!-- Plugin used-->
    </div>
</body>

</html>