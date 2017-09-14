<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bower_components/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="assets/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
</head>
<body data-ma-theme="cyan">
    @yield('content');
</body>
<!-- Javascript -->
<!-- Vendors -->
<script src="assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/vendors/bower_components/tether/dist/js/tether.min.js"></script>
<script src="assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/vendors/bower_components/Waves/dist/waves.min.js"></script>
<script src="assets/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>
@yield('dashboard')




@yield('tables')


<!-- App functions and actions -->
<script src="assets/js/app.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/3.6.4/firebase.js"></script>
<script type="text/javascript" src="assets/js/chat.js"></script>
<script type="text/javascript" src="assets/js/post.js"></script>

</html>
