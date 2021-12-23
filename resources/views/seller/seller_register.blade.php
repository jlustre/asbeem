<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('backend/images/favicon.ico') }}">

    <title>Seller Registration </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">	

</head>

<body class="hold-transition theme-primary bg-gradient-primary">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="content-top-agile p-10">
							<h2 class="text-white">{{ __('Seller Registration') }}</h2>
							<p class="text-white-50">{{ __('Register As A New Seller') }}</p>							
						</div>
						<div class="p-30 rounded30 box-shadowed b-2 b-dashed">
							<form action="{{ route('seller_create') }}" method="post">
                                @csrf
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
										</div>
										<input type="text" name="name" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="{{ __('Username') }}">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-email"></i></span>
										</div>
										<input type="email" name="email" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="{{ __('Email Address') }}">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-lock"></i></span>
										</div>
										<input type="password" name="password" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="{{ __('Password') }}">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-lock"></i></span>
										</div>
										<input type="password" name="confirm_password" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="{{ __('Confirm Password') }}">
									</div>
								</div>
								  <div class="row">
									<div class="col-12">
									  <div class="checkbox text-white">
										<input type="checkbox" name="terms" id="basic_checkbox_1" >
										<label for="basic_checkbox_1">{{ __('I agree to the') }} <a href="#" class="text-warning"><b>{{ __('Terms') }}</b></a></label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-info btn-rounded margin-top-10">{{ __('SIGN UP') }}</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>													

							<div class="text-center text-white">
							  <p class="mt-20">- {{ __('Register With') }} -</p>
							  <p class="gap-items-2 mb-20">
								  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-facebook"></i></a>
								  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-twitter"></i></a>
								  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-google-plus"></i></a>
								  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-instagram"></i></a>
								</p>	
							</div>

							<div class="text-center">
								<p class="mt-15 mb-0 text-white">{{ __('Already have an account?') }}<a href="{{ route('seller_login_from') }}" class="text-white ml-5"> {{ __('Login') }}</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>	
	
	
</body>
</html>
