<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Dashboard | </title>

   <link href="{{ asset('admin-panel/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin-panel/css/font-awesome.min.css') }}" rel="stylesheet">
   
   
    <link href="{{ asset('admin-panel/css/nprogress.css') }}" rel="stylesheet">
    
    <link href="{{ asset('admin-panel/css/animate.min.css') }}" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <!-- Custom Theme Style -->
    <link href="{{ asset('admin-panel/css/custom.min.css') }}" rel="stylesheet">
  
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        @include('admin-panel.layouts.sidebar')

        <!-- top navigation -->
        @include('admin-panel.layouts.navbar')
        <!-- /top navigation -->

        <!-- page content -->
       @yield('content')

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('admin-panel/js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admin-panel/js/bootstrap.min.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('admin-panel/js/custom.min.js') }}"></script>
	
  </body>
</html>
