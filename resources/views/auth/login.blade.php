@extends('website.layouts.main-layout-auth')

@section('title', 'LOGIN')

@section('page-content')

<div class="login-page-wrap">
    <div class="content-wrap">
        <div class="login-content">
            <div class="item-logo">
                <a href="#"><img src="{{ asset('website/media/3.png')}}" alt="logo"></a>
            </div>
            <div class="login-form-wrap">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#login-tab" role="tab" aria-selected="true"><i class="icofont-users-alt-4"></i> Sign In </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#registration-tab" role="tab" aria-selected="false"><i class="icofont-download"></i> Registration</a>
                    </li>
                </ul>
                <div class="tab-content">
                    @include('authentication.login-tab')
                    @include('authentication.register-tab')
                </div>
            </div>
        </div>
        <div class="map-line">
            <img src="{{ asset('website/media/banner/map_line.png')}}" alt="map">
            <ul class="map-marker">
                <li><img src="{{ asset('website/media/banner/marker_1.png')}}" alt="marker"></li>
                <li><img src="{{ asset('website/media/banner/marker_2.png')}}" alt="marker"></li>
                <li><img src="{{ asset('website/media/banner/marker_3.png')}}" alt="marker"></li>
                <li><img src="{{ asset('website/media/banner/marker_4.png')}}" alt="marker"></li>
            </ul>
        </div>
    </div>
</div>

@endsection
