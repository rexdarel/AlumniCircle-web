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
    

</head>
<body id="body">
    @include('shared.header')
    <section id="main">
        @include('shared.sidebar')
        <section id="content">
            <div id="pjax-container">
            @yield('content')
        </div>
        </section>
    </section>
    


</body>
<!-- Javascript -->
    <!-- Javascript Libraries -->
    <!-- <script src="{{ elixir('assets/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script> -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="{{ elixir('assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
   <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/1.9.6/jquery.pjax.min.js"></script> -->
    
    <script src="{{ elixir('assets/vendors/bower_components/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ elixir('assets/vendors/bower_components/Waves/dist/waves.min.js') }}"></script>
    <!-- <script src="assets/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->
    <script src="https://www.gstatic.com/firebasejs/3.6.4/firebase.js"></script>
    <script type="text/javascript" src="{{ elixir('assets/js/chat.js') }}"></script>
    <script src="{{ elixir('assets/vendors/bootstrap-growl/bootstrap-growl.min.js') }}"></script>

    <script src="{{ elixir('assets/js/app.min.js') }}"></script>

    <!-- <script>
        $(document).pjax('a', '#pjax-container');
    </script> -->
    
<script type="text/javascript">
    
            $('#photo-avatar').click(function(event){
                event.preventDefault();
                swal({   
                    title: "Update Profile Image",   
                    text: "You will not be able to recover this imaginary file!",   
                    type: "info", 
                    html: '<form enctype="multipart/form-data" action="/profile" method="POST">' +
                '<input type="file" name="avatar" required>'+
                '<input type="hidden" name="_token" value="{{ csrf_token() }}">'+
                '<input type="submit" class="btn btn-sm btn-primary">'+
            '</form>',  
            showCloseButton: true,
                    showCancelButton: true, 
                     
                    showConfirmButton: false,
                    confirmButtonText: "Yes, delete it!",
                }).then(function(){
                    swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
                });
            });
</script>

@yield('js')


<!-- <script type="text/javascript" src="assets/js/post.js"></script> -->

</html>
