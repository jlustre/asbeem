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
        <!-- wrapper -->
        <div class="wrapper">
         
            @include('admin.body.header')
                
            @include('admin.body.sidebar')

            @yield('admin')

        </div><!--/ wrapper -->
        
        @include('admin.body.scripts')

    </body>
</html>