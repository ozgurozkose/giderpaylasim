<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>GiderPaylaşım</title>
    <meta name="keywords" content="Anasayfa | GiderPaylaşım" />
    <meta name="description" content="Anasayfa | GiderPaylaşım">


    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/animate/animate.compat.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor/font-awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/jquery-ui/jquery-ui.theme.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/morris/morris.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/theme.css')}}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/skins/default.css')}}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('/assets/vendor/modernizr/modernizr.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/my.css')}}" />

</head>
<body>
<section class="body">

    <div style="margin-top:20px;" class="">
        <!-- start: sidebar -->
        @include('body.nav')
        <!-- end: sidebar -->

        <section role="main" class="content-body">
           @yield('home_content')
            <!-- end: page -->
        </section>
    </div>



</section>

<!-- Vendor -->
<script src="{{asset('/assets/vendor/jquery/jquery.js')}}"></script>
<script src="{{asset('/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
<script src="{{asset('/assets/vendor/popper/umd/popper.min.js')}}"></script>
<script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('/assets/vendor/common/common.js')}}"></script>
<script src="{{asset('/assets/vendor/nanoscroller/nanoscroller.js')}}"></script>
<script src="{{asset('/assets/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('/assets/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

<!-- Specific Page Vendor -->
<script src="{{asset('/assets/vendor/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('/assets/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js')}}"></script>
<script src="{{asset('/assets/vendor/jquery-appear/jquery.appear.js')}}"></script>
<script src="{{asset('/assets/vendor/bootstrapv5-multiselect/js/bootstrap-multiselect.js')}}"></script>
<script src="{{asset('/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.js')}}"></script>
<script src="{{asset('/assets/vendor/flot/jquery.flot.js')}}"></script>
<script src="{{asset('/assets/vendor/flot.tooltip/jquery.flot.tooltip.js')}}"></script>
<script src="{{asset('/assets/vendor/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('/assets/vendor/flot/jquery.flot.categories.js')}}"></script>
<script src="{{asset('/assets/vendor/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('/assets/vendor/jquery-sparkline/jquery.sparkline.js')}}"></script>
<script src="{{asset('/assets/vendor/raphael/raphael.js')}}"></script>
<script src="{{asset('/assets/vendor/morris/morris.js')}}"></script>
<script src="{{asset('/assets/vendor/gauge/gauge.js')}}"></script>
<script src="{{asset('/assets/vendor/snap.svg/snap.svg.js')}}"></script>
<script src="{{asset('/assets/vendor/liquid-meter/liquid.meter.js')}}"></script>


<!-- Theme Base, Components and Settings -->
<script src="{{asset('/assets/js/theme.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('/assets/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('/assets/js/theme.init.js')}}"></script>

<!-- Examples -->
<script src="{{asset('/assets/js/examples/examples.dashboard.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@include('sweetalert::alert')
</body>
</html>
