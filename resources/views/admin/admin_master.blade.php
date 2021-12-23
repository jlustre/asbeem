<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('backend/images/favicon.ico') }}">

    <title>AsBeez Admin - Dashboard</title>
    
    @include('common.styles')
     
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">

    @include('admin.body.header')
    @include('admin.body.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
        @yield('admin')
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  
    @include('common.footer')

  <!-- Control Sidebar -->
    @include('admin.body.control_sidebar')
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
@include('common.scripts')
	
</body>
</html>
