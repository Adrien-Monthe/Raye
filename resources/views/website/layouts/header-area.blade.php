<header class="header">
    <div id="rt-sticky-placeholder"></div>
    <div id="header-menu" class="header-menu menu-layout1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2">

                        <a href="{{ route("home", app()->getLocale()) }}"><img src="{{ asset('website/media/3.png') }}" alt="Logo"></a>

                </div>
                <div class="col-xl-6 col-lg-7 col-sm-7 col-8 d-flex justify-content-xl-start justify-content-center">
                    <div class="mobile-nav-item hide-on-desktop-menu">
                        <div class="mobile-toggler">
                            <button type="button" class="mobile-menu-toggle">
                                <i class="icofont-navigation-menu"></i>
                            </button>
                        </div>
                        <div class="mobile-logo">
                            <a href="#">
                                <img src="{{ asset('website/media/mobile_logo.png')}}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <nav id="dropdown" class="template-main-menu">
                        <button type="button" class="mobile-menu-toggle mobile-toggle-close">
                            <i class="icofont-close"></i>
                        </button>
                        <ul class="menu-content">
                            <li class="header-nav-item">
                                <a href="{{ route("home", app()->getLocale()) }}" class="menu-link active">{{ __("header-area.header-area-home")}}</a>
                            </li>
                            <li class="hide-on-mobile-menu">
                                <a href="#" class="menu-link">{{ __("header-area.header-area-community")}}</a>
                                {{-- <ul class="mega-menu mega-menu-col-2">
                                    <li>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">NewsFeed</a>
                                            </li>
                                            <li>
                                                <a href="#">Profile Timeline</a>
                                            </li>
                                            <li>
                                                <a href="#">Profile About</a>
                                            </li>
                                            <li>
                                                <a href="#">Profile Friends</a>
                                            </li>
                                            <li>
                                                <a href="#">Profile Group</a>
                                            </li>
                                            <li>
                                                <a href="#">Profile Photo</a>
                                            </li>
                                            <li>
                                                <a href="#">Profile Video</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">Profile Badges</a>
                                            </li>
                                            <li>
                                                <a href="#">Forums</a>
                                            </li>
                                            <li>
                                                <a href="#">Forums Topic</a>
                                            </li>
                                            <li>
                                                <a href="#">Forums Timeline</a>
                                            </li>
                                            <li>
                                                <a href="#">Forums Info</a>
                                            </li>
                                            <li>
                                                <a href="#">Forums Members</a>
                                            </li>
                                            <li>
                                                <a href="#">Forums Media</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul> --}}
                            </li>
                            <li class="header-nav-item hide-on-desktop-menu">
                                <a href="#" class="menu-link ">{{ __("header-area.header-area-community")}}</a>
                                {{-- <ul class="sub-menu">
                                    <li>
                                        <a href="#">NewsFeed</a>
                                    </li>
                                    <li>
                                        <a href="#">Profile Timeline</a>
                                    </li>
                                    <li>
                                        <a href="#">Profile About</a>
                                    </li>
                                    <li>
                                        <a href="#">Profile Friends</a>
                                    </li>
                                    <li>
                                        <a href="#">Profile Group</a>
                                    </li>
                                    <li>
                                        <a href="#">Profile Photo</a>
                                    </li>
                                    <li>
                                        <a href="#">Profile Video</a>
                                    </li>
                                    <li>
                                        <a href="#">Profile Badges</a>
                                    </li>
                                    <li>
                                        <a href="#">Forums</a>
                                    </li>
                                    <li>
                                        <a href="#">Forums Topic</a>
                                    </li>
                                    <li>
                                        <a href="#">Forums Timeline</a>
                                    </li>
                                    <li>
                                        <a href="#">Forums Info</a>
                                    </li>
                                    <li>
                                        <a href="#">Forums Members</a>
                                    </li>
                                    <li>
                                        <a href="#">Forums Media</a>
                                    </li>
                                </ul> --}}
                            </li>
                            <li class="header-nav-item">
                                <a href="#" class="menu-link ">{{ __("header-area.header-area-tendance")}}</a>
                                {{-- <ul class="sub-menu">
                                    <li>
                                        <a href="#">Blog Grid</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog Details</a>
                                    </li>
                                </ul> --}}
                            </li>

                            <li class="header-nav-item">
                                <a href="#" class="menu-link">{{ __("header-area.header-area-mapping")}}</a>
                            </li>
                            {{-- <li class="header-nav-item">
                                <a href="#" class="menu-link have-sub">Pages</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li class="header-nav-item">
                                <a href="#" class="menu-link have-sub">Shop</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">Shop</a>
                                    </li>
                                    <li>
                                        <a href="#">Shop Details</a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class="header-nav-item">
                                <a href="{{ route("contact", app()->getLocale()) }}" class="menu-link">{{ __("header-area.header-area-contact")}}</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-4 col-lg-3 col-sm-5 col-4 d-flex justify-content-end">
                    <div class="header-action">
                        <ul>
                            <li class="header-social">
                                <a href="#"><i class="icofont-facebook"></i></a>
                                <a href="#"><i class="icofont-twitter"></i></a>
                                <a href="#"><i class="icofont-linkedin"></i></a>
                                <a href="#"><i class="icofont-pinterest"></i></a>
                                <a href="#"><i class="icofont-skype"></i></a>
                            </li>
                            {{-- <li class="header-search-icon">
                                <a href="#header-search" title="Search"><i class="icofont-search"></i></a>
                            </li> --}}
                            <li class="login-btn">
                                <a href="{{ route("newsfeed", app()->getLocale()) }}" class="item-btn"><i class="fas fa-user"></i>{{ __("header-area.header-area-login")}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
