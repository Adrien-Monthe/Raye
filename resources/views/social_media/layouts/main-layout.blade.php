<!DOCTYPE html>
<html class="no-js" lang="">


<!-- Mirrored from radiustheme.com/demo/html/cirkle/newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jul 2022 08:16:13 GMT -->

<head>
    <!-- Meta Data -->
    @include('social_media.layouts.meta')
    <!-- Favicon -->
    @include('social_media.layouts.fav-icon')
    <!-- Site Stylesheet -->
    @include('social_media.layouts.css')

    @livewireStyles

    <!-- Google Web Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,400&amp;display=swap"
        rel="stylesheet">
</head>

<body class="bg-link-water">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="icofont-bubble-up"></i>
    </a>
    <!-- Preloader Start Here -->
    @include('website.layouts.preloader')
    <!-- Preloader End Here -->

    <div id="wrapper" class="wrapper">
        <!-- Top Header -->
        @include('social_media.layouts.top-header-area')
        <!-- Sidebar Left -->
        @include('social_media.layouts.left-sidebar-area')
        <!-- Sidebar Right -->
        {{-- @include('social_media.layouts.right-sidebar-area') --}}
        <!-- Page Content -->
        <div class="page-content">

            <!--=====================================-->
            <!--=        Newsfeed  Area Start       =-->
            <!--=====================================-->
            <div class="container">
                <!-- Banner Area Start -->
                @include('social_media.layouts.newsfeed-banner-section')

                @include('social_media.layouts.newsfeed-search-section')

                @yield('page-content')
            </div>
            @include('social_media.layouts.footer-section')



        </div>
        <!-- Chat Modal Here -->
        @include('social_media.layouts.chat-modal-section')
    </div>
    <!-- Jquery Js -->
    @include('social_media.layouts.jquery-js-section')
    <!-- Site Scripts -->
    @include('social_media.layouts.scripts')

    @livewireScripts
</body>


<!-- Mirrored from radiustheme.com/demo/html/cirkle/newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jul 2022 08:16:33 GMT -->

</html>
