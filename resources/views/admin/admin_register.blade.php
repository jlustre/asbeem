    @include('common.head')

    <title>Admin Registration</title>
  
	@include('common.styles')	

</head>

<body class="hold-transition theme-primary bg-gradient-primary">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="content-top-agile p-10">
							<h2 class="text-white">{{ __('Admin Registration') }}</h2>
							<p class="text-white-50">{{ __('Register As A New Admin') }}</p>							
						</div>
						<div class="p-30 rounded30 box-shadowed b-2 b-dashed">
							<form action="{{ route('admin_create') }}" method="post">
                                @csrf
								@include('common.register_form')
							</form>													

							@include('common.register_options')

							<div class="text-center">
								<p class="mt-15 mb-0 text-white">{{ __('Already have an account?') }}<a href="{{ route('admin_login_from') }}" class="text-white ml-5"> {{ __('Login') }}</a></p>
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
