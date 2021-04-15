<!DOCTYPE html>
<html lang="es">

    @include('layouts.src.head')

	<body>      
        <div class="gtco-loader"></div>
        <div id="page">

            @yield('content')
        
            <!-- <div class="page-inner"> -->
            @include('layouts.src.nav')
            
            
        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>
        
        <!-- jQuery -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <!-- jQuery Easing -->
        <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- Waypoints -->
        <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
        <!-- Carousel -->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- countTo -->
        <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>

        <!-- Stellar Parallax -->
        <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>

        <!-- Magnific Popup 	-->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/magnific-popup-options.js')}}"></script>
        
        <script src="{{asset('assets/js/moment.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>


        <!-- Main -->
        <script src="{{asset('assets/js/main.js')}}"></script> 

        <!-- Combox Dimanicos -->
        <script type="text/javascript" src="{{asset('assets/js/index.js')}}"></script>
        

	</body>
</html>

