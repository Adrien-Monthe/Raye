<header class="fixed-header">
    <div class="header-menu">
        <div class="navbar">
            <div class="nav-item d-none d-sm-block">
                <div class="">
                    <a href="{{ route("home", app()->getLocale()) }}"><img src="{{ asset('website/media/3.png') }}" alt="Trip Story"></a>
                </div>
            </div>
            <div class="nav-item nav-top-menu">
                <nav id="dropdown" class="template-main-menu">
                    <ul class="menu-content">
                        <li class="header-nav-item">
                            <a href="{{ route("home", app()->getLocale()) }}" class="menu-link active">Home</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="{{ route("home", app()->getLocale()) }}" class="menu-link">Community</a>
                            {{-- <ul class="mega-menu mega-menu-col-2">
                                <li>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="newsfeed.html">NewsFeed</a>
                                        </li>
                                        <li>
                                            <a href="user-timeline.html">Profile Timeline</a>
                                        </li>
                                        <li>
                                            <a href="user-about.html">Profile About</a>
                                        </li>
                                        <li>
                                            <a href="user-friends.html">Profile Friends</a>
                                        </li>
                                        <li>
                                            <a href="user-groups.html">Profile Group</a>
                                        </li>
                                        <li>
                                            <a href="user-photo.html">Profile Photo</a>
                                        </li>
                                        <li>
                                            <a href="user-video.html">Profile Video</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="user-badges.html">Profile Badges</a>
                                        </li>
                                        <li>
                                            <a href="forums.html">Forums</a>
                                        </li>
                                        <li>
                                            <a href="forums-forum.html">Forums Topic</a>
                                        </li>
                                        <li>
                                            <a href="forums-timeline.html">Forums Timeline</a>
                                        </li>
                                        <li>
                                            <a href="forums-info.html">Forums Info</a>
                                        </li>
                                        <li>
                                            <a href="forums-members.html">Forums Members</a>
                                        </li>
                                        <li>
                                            <a href="forums-media.html">Forums Media</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </li>
                        <li class="header-nav-item">
                            <a href="#" class="menu-link have-sub">Pages</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="about-us.html">About</a>
                                </li>
                                <li>
                                    <a href="user-blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="shop.html">Shop</a>
                                </li>
                                <li>
                                    <a href="single-blog.html">Blog Details</a>
                                </li>
                                <li>
                                    <a href="single-shop.html">Shop Details</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="nav-item header-control">
                {{-- <div class="inline-item d-none d-md-block">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search here.......">
                        <div class="input-group-append">
                            <button class="submit-btn" type="button"><i class="icofont-search"></i></button>
                        </div>
                    </div>
                </div> --}}
                <div class="inline-item d-flex align-items-center">
                    {{-- <div class="dropdown dropdown-cart">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="icofont-shopping-cart"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-heading">
                                <h6 class="heading-title">Shopping Cart: <span>3</span></h6>
                            </div>
                            <div class="item-body">
                                <div class="media">
                                    <div class="item-img">
                                        <img src="media/figure/cart_1.jpg" alt="Product">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="item-title"><a href="#">Black Coffee Mug</a></h6>
                                        <div class="item-category">COFFEE MUGS</div>
                                        <div class="item-price">$29 x 1</div>
                                        <div class="btn-area">
                                            <a href="#" class="close-btn"><i
                                                    class="icofont-ui-close"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img">
                                        <img src="media/figure/cart_2.jpg" alt="Product">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="item-title"><a href="#">Head Phone</a></h6>
                                        <div class="item-category">Assets</div>
                                        <div class="item-price">$15 x 1</div>
                                        <div class="btn-area">
                                            <a href="#" class="close-btn"><i
                                                    class="icofont-ui-close"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img">
                                        <img src="media/figure/cart_3.jpg" alt="Product">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="item-title"><a href="#">Black Watch</a></h6>
                                        <div class="item-category">Watch</div>
                                        <div class="item-price">$59 x 1</div>
                                        <div class="btn-area">
                                            <a href="#" class="close-btn"><i
                                                    class="icofont-ui-close"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-footer">
                                <a href="#" class="view-btn">View All Product</a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="dropdown dropdown-friend">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="icofont-users-alt-4"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-heading">
                                <h6 class="heading-title">Friend Requests</h6>
                                <div class="heading-btn">
                                    <a href="#">Settings</a>
                                    <a href="#">Mark all as Read</a>
                                </div>
                            </div>
                            <div class="item-body">
                                <div class="media">
                                    <div class="item-img">
                                        <img src="{{ asset('website/media/figure/chat_5.jpg')}}" alt="Notify">
                                        <span class="chat-status offline"></span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="item-title"><a href="#">Lily Zaman</a></h6>
                                        <p>4 in mutual friends</p>
                                        <div class="btn-area">
                                            <a href="#" class="item-btn"><i
                                                    class="icofont-plus"></i></a>
                                            <a href="#" class="item-btn"><i
                                                    class="icofont-minus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img">
                                        <img src="{{ asset('website/media/figure/chat_1.jpg')}}" alt="Notify">
                                        <span class="chat-status online"></span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="item-title"><a href="#">Ketty Rose</a></h6>
                                        <p>3 in mutual friends</p>
                                        <div class="btn-area">
                                            <a href="#" class="item-btn"><i
                                                    class="icofont-plus"></i></a>
                                            <a href="#" class="item-btn"><i
                                                    class="icofont-minus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img">
                                        <img src="{{ asset('website/media/figure/chat_8.jpg')}}" alt="Notify">
                                        <span class="chat-status online"></span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="item-title"><a href="#">Rustom vai</a></h6>
                                        <p>6 in mutual friends</p>
                                        <div class="btn-area">
                                            <a href="#" class="item-btn"><i
                                                    class="icofont-plus"></i></a>
                                            <a href="#" class="item-btn"><i
                                                    class="icofont-minus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-footer">
                                <a href="#" class="view-btn">View All Friend Request</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown dropdown-message">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="icofont-speech-comments"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-heading">
                                <h6 class="heading-title">Message</h6>
                                <div class="heading-btn">
                                    <a href="#">Settings</a>
                                    <a href="#">Mark all as Read</a>
                                </div>
                            </div>
                            <div class="item-body">
                                <a href="#" class="media">
                                    <div class="item-img">
                                        <img src="{{ asset('website/media/figure/notifiy_1.png')}}" alt="Notify">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="item-title">Diana Jameson</h6>
                                        <div class="item-time">15 mins ago</div>
                                        <p>when are nknowen printer took galley of types ...</p>
                                    </div>
                                </a>
                                <a href="#" class="media">
                                    <div class="item-img">
                                        <img src="{{ asset('website/media/figure/notifiy_2.png')}}" alt="Notify">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="item-title">Quirty</h6>
                                        <div class="item-time">15 mins ago</div>
                                        <p>when are nknowen printer took galley of types ...</p>
                                    </div>
                                </a>
                                <a href="#" class="media">
                                    <div class="item-img">
                                        <img src="{{ asset('website/media/figure/notifiy_3.png')}}" alt="Notify">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="item-title">Zinia Jessy</h6>
                                        <div class="item-time">15 mins ago</div>
                                        <p>when are nknowen printer took galley of types ...</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item-footer">
                                <a href="#" class="view-btn">View All Messages</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown dropdown-notification">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="icofont-notification"></i><span class="notify-count">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-heading">
                                <h6 class="heading-title">Notifications</h6>
                                <div class="heading-btn">
                                    <a href="#">Settings</a>
                                    <a href="#">Mark all as Read</a>
                                </div>
                            </div>
                            <div class="item-body">
                                <a href="#" class="media">
                                    <div class="item-img">
                                        <img src="{{ asset('website/media/figure/notifiy_1.png')}}" alt="Notify">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="item-title">Diana Jameson</h6>
                                        <div class="item-time">15 mins ago</div>
                                        <p>when are nknowen printer took galley of types ...</p>
                                    </div>
                                </a>
                                <a href="#" class="media">
                                    <div class="item-img">
                                        <img src="{{ asset('website/media/figure/notifiy_2.png')}}" alt="Notify">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="item-title">Quirty</h6>
                                        <div class="item-time">15 mins ago</div>
                                        <p>when are nknowen printer took galley of types ...</p>
                                    </div>
                                </a>
                                <a href="#" class="media">
                                    <div class="item-img">
                                        <img src="{{ asset('website/media/figure/notifiy_3.png')}}" alt="Notify">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="item-title">Zinia Jessy</h6>
                                        <div class="item-time">15 mins ago</div>
                                        <p>when are nknowen printer took galley of types ...</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item-footer">
                                <a href="#" class="view-btn">View All Notification</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inline-item">
                    <div class="dropdown dropdown-admin">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <span class="media">
                                <span class="item-img">
                                    <img src="{{asset('website/media/figure/chat_5.jpg')}}" alt="Chat">
                                    <span class="acc-verified"><i class="icofont-check"></i></span>
                                </span>
                                <span class="media-body">
                                    <span class="item-title">{{ auth()->user()->first_name }}</span>
                                </span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="admin-options">
                                <li><a href="#">Profile Settings</a></li>
                                <li><a href="#">Groups</a></li>
                                <li><a href="#">Forums</a></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="javascript:void" onclick="$('#logout-form').submit();"">Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<a >
    Logout
</a>

<form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
    @csrf
</form>
