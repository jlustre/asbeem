    @include('common.head')

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
