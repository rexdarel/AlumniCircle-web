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
    <!-- Vendor CSS -->
    <link href="{{ elixir('assets/vendors/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ elixir('assets/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ elixir('assets/vendors/bower_components/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ elixir('assets/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet">
    <!-- <link href="assets/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">  -->
    <link href="{{ elixir('assets/vendors/bower_components/dropzone/dist/min/dropzone.min.css') }}" rel="stylesheet">
    <link href="{{ elixir('assets/vendors/farbtastic/farbtastic.css') }}" rel="stylesheet">
    <link href="{{ elixir('assets/vendors/bower_components/chosen/chosen.css') }}" rel="stylesheet">
    <link href="{{ elixir('assets/vendors/summernote/dist/summernote.css') }}" rel="stylesheet">

    <!-- CSS -->
    <link href="{{ elixir('assets/css/app_1.min.css') }}" rel="stylesheet">
    <link href="{{ elixir('assets/css/app_2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    @yield('css')
    <!-- Javascript -->
    <!-- Javascript Libraries -->
    <script src="{{ elixir('assets/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ elixir('assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    
    <script src="{{ elixir('assets/vendors/bower_components/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ elixir('assets/vendors/bower_components/Waves/dist/waves.min.js') }}"></script>
    <!-- <script src="assets/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->
    <script src="https://www.gstatic.com/firebasejs/3.6.4/firebase.js"></script>
    <script type="text/javascript" src="{{ elixir('assets/js/chat.js') }}"></script>
    <script src="{{ elixir('assets/vendors/bootstrap-growl/bootstrap-growl.min.js') }}"></script>

    <script src="{{ elixir('assets/js/app.min.js') }}"></script>

@yield('avatar-update')
@yield('js')

</head>
<body id="body">
@section('title')
    Login
@endsection


<div class="login-content">
            <!-- Login -->
            <div class="lc-block toggled" id="l-login">
                <div class="lcb-form">
                    @if(session('errors_login'))
                    <div class="alert alert-info alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Oppss! </strong>{{ session('errors_login') }}
                            </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="input-group m-b-20">
                            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                            <div class="fg-line">
                                <input type="text" name="username" id="username" class="form-control" placeholder="firstname.lastname">
                            </div>
                        </div>

                        <div class="input-group m-b-20">
                            <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                            <div class="fg-line">
                                <input type="password" name="password" id="password" class="form-control" placeholder="password">
                            </div>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <i class="input-helper"></i>
                                Keep me signed in
                            </label>
                        </div>

                        <button type="submit" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
                    </form>
                </div>

                <div class="lcb-navigation">
                    <a href="#" data-ma-action="login-switch" data-ma-block="#l-register"><i class="zmdi zmdi-plus"></i> <span>Register</span></a>
                    <a href="" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
                </div>
            </div>

            <!-- Register -->
            <div class="lc-block" id="l-register">
                <div class="lcb-form">
                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="fg-line">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                    </div>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                        <div class="fg-line">
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                    </div>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                        <div class="fg-line">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                    </div>

                    <a href="#" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-check"></i></a>
                </div>

                <div class="lcb-navigation">
                    <a href="#" data-ma-action="login-switch" data-ma-block="#l-login"><i class="zmdi zmdi-long-arrow-right"></i> <span>Sign in</span></a>
                    <a href="#" data-ma-action="login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
                </div>
            </div>

            <!-- Forgot Password -->
            <div class="lc-block" id="l-forget-password">
                <div class="lcb-form">
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                        <div class="fg-line">
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                    </div>

                    <a href="#" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-check"></i></a>
                </div>

                <div class="lcb-navigation">
                    <a href="#" data-ma-action="login-switch" data-ma-block="#l-login"><i class="zmdi zmdi-long-arrow-right"></i> <span>Sign in</span></a>
                    <a href="#" data-ma-action="login-switch" data-ma-block="#l-register"><i class="zmdi zmdi-plus"></i> <span>Register</span></a>
                </div>
            </div>
        </div>

        </body>



<!-- <script type="text/javascript" src="assets/js/post.js"></script> -->

</html>
