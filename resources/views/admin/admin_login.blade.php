    @include('common.head')

    <title>AsBeez Admin Log in </title>
  
	@include('common.styles')	

</head>
<body class="hold-transition theme-primary bg-gradient-primary">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="content-top-agile p-10">
							<h2 class="text-white">Admin Login</h2>
							<p class="text-white-50">Sign in to get started</p>							
						</div>
						@include('common.message')
						<div class="p-30 rounded30 box-shadowed b-2 b-dashed">
							<form action="{{ route('admin.login') }}" method="post">
                                @csrf
								@include('common.login_form')
							</form>														

							@include('common.register_options')
							
							<div class="text-center">
								<p class="mt-15 mb-0 text-white">Don't have an account? <a href="{{ route('admin_register') }}" class="text-white ml-5">Sign Up</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	@include('common.scripts2')	

</body>
</html>
