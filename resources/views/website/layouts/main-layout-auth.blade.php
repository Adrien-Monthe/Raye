<!DOCTYPE html>
<html class="no-js" lang="">


<!-- Mirrored from radiustheme.com/demo/html/cirkle/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jul 2022 08:15:04 GMT -->
@include('website.layouts.head')

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="icofont-bubble-up"></i>
    </a>
    <!-- Preloader Start Here -->
    @include('website.layouts.preloader')
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper overflow-hidden">

        @yield('page-content')



    </div>
    @include('website.layouts.scripts')
</body>


<!-- Mirrored from radiustheme.com/demo/html/cirkle/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jul 2022 08:15:53 GMT -->

</html>
