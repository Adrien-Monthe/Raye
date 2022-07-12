@extends('website.layouts.main-layout')

@section('title', 'HOME')

@section('page-content')

        <!--=====================================-->
        <!--=          Header Menu Start       	=-->
        <!--=====================================-->
        @include('website.layouts.header-area')
        <!--=====================================-->
        <!--=          Banner Start       		=-->
        <!--=====================================-->
        @include('website.layouts.hero-banner-area')
        <!--=====================================-->
        <!--=         Why Choose Start       	=-->
        <!--=====================================-->
        @include('website.layouts.why-choose-us-area')
        <!--=====================================-->
        <!--=         Community Start       	=-->
        <!--=====================================-->
        @include('website.layouts.community-network-area')
        <!--=====================================-->
        <!--=         Team Area  Start       	=-->
        <!--=====================================-->
        @include('website.layouts.team-circle-area')
        <!--=====================================-->
        <!--=         Why Choose  Start       	=-->
        <!--=====================================-->
        @include('website.layouts.why-choose-fluid-area')
        <!--=====================================-->
        <!--=         Location Find Start       =-->
        <!--=====================================-->
        @include('website.layouts.location-find-area')
        <!--=====================================-->
        <!--=         Banner Apps  Start       	=-->
        <!--=====================================-->
        @include('website.layouts.banner-apps-area')
        <!--=====================================-->
        <!--=         Groups Area  Start       	=-->
        <!--=====================================-->
        @include('website.layouts.group-section-area')
        <!--=====================================-->
        <!--=         Testimonial Start       	=-->
        <!--=====================================-->
        @include('website.layouts.testimonial-area')
        <!--=====================================-->
        <!--=         Blog Area Start       	=-->
        <!--=====================================-->
        @include('website.layouts.blog-area-section')
        <!--=====================================-->
        <!--=          NewsLetter Start       		=-->
        <!--=====================================-->
        @include('website.layouts.banner-newsletter-section')

@endsection
