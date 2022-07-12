@extends('website.layouts.main-layout')

@section('title', 'Contact Us')

@section('page-content')

        <!--=====================================-->
        <!--=          Header Menu Start       	=-->
        <!--=====================================-->
        @include('website.layouts.header-area')

        <!--=====================================-->
        <!--=          Banner Start       		=-->
        <!--=====================================-->
        @include('website.layouts.breadcrumbs-banner-section')

        <!--=====================================-->
        <!--=          Contact Page Start       =-->
        <!--=====================================-->
        <section class="contact-page">
            <div class="map-area">
                <div id="googleMap" class="google-map"></div>
            </div>
            <div class="contact-box-wrap">
                <div class="container">
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="contact-box">
                                    <h3 class="item-title">Get In Touch</h3>
                                    <form id="contact-form">
                                        <div class="row gutters-20">
                                            <div class="col-lg-6 form-group">
                                                <input type="text" class="form-control" name="fname" placeholder="First Name">
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <input type="text" class="form-control" name="lname" placeholder="Last Name">
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <input type="email" class="form-control" name="email" placeholder="E-mail">
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <input type="text" class="form-control" name="phone" placeholder="Phone">
                                            </div>
                                            <div class="col-12 form-group">
                                                <textarea name="message" id="message" cols="30" rows="3" class="textarea form-control" placeholder="Message"></textarea>
                                            </div>
                                            <div class="col-12 form-group">
                                                <input type="submit" class="submit-btn" value="Send Us Message">
                                            </div>
                                        </div>
                                        <div class="form-response"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="contact-box contact-method">
                                    <h3 class="item-title">Contact Info.</h3>
                                    <ul>
                                        <li><i class="icofont-location-pin"></i>598 Kazi Avenue, Douala, Cameroon</li>
                                        <li><i class="icofont-ui-message"></i>raye.travels@hotmail.com</li>
                                        <li><i class="icofont-phone"></i>(+237) 699 789 542</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=====================================-->
        <!--=          NewsLetter Start       		=-->
        <!--=====================================-->
        @include('website.layouts.banner-newsletter-section')

@endsection
