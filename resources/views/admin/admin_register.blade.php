<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        
        @include('admin.body.styles')
    </head>
    <body id="page-top">
        <!-- preloader -->
        <div class="preloader">
            <img src="{{ asset('panel/assets/images/preloader.gif') }}" alt="">
        </div>
        
         <div class="wrapper without_header_sidebar">
            <!-- contnet wrapper -->
            <div class="content_wrapper">
                <!-- page content -->
                <div class="registration_page center_container">
                    <div class="center_content">
                        <div class="logo">
                            <img src="{{ asset('panel/assets/images/logo.png') }}" alt="" class="img-fluid">
                        </div>
                        <form action="{{ route('admin_create') }}" method="post">
                           @csrf
                            <div class="form-group icon_parent">
                                <label for="name">Username</label>
                                <input id="name" type="text" class="form-control" name="name" autofocus placeholder="Full Name">
                                
                                <span class="icon_soon_bottom_right"><i class="fas fa-user"></i></span>
                            </div>
                            <div class="form-group icon_parent">
                                <label for="email">E-mail</label>
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email Address">

                                
                                <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
                            </div>
                            <div class="form-group icon_parent">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                                 
                                <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                            </div>
                            <div class="form-group icon_parent">
                                <label for="rtpassword">Re-type Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                            </div>
                            <div class="form-group">
                                <a class="registration" href="{{ route('admin_login_from') }}">Already have an account</a><br>
                                <button type="submit" class="btn btn-blue">Signup</button>
                            </div>
                        </form>
                        <div class="footer">
                            <p>Copyright &copy; 2020 <a href="https://easylearningbd.com/">easy Learning</a>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div><!--/ content wrapper -->
        </div><!--/ wrapper -->
    
        @include('admin.body.scripts')
        
    </body>
</html>