@extends('social_media.layouts.main-layout')

@section('title', 'NEWSFEED')

@section('page-content')

    <div class="row">
        <div class="col-lg-8">
            <div class="block-box post-input-tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="top" title="STATUS">
                        <a class="nav-link active" data-toggle="tab" href="#post-status" role="tab"
                            aria-selected="true"><i class="icofont-copy"></i>Status</a>
                    </li>
                    <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="top" title="MEDIA">
                        <a class="nav-link" data-toggle="tab" href="#post-media" role="tab" aria-selected="false"><i
                                class="icofont-image"></i>Photo/ Video Album</a>
                    </li>
                    <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="top" title="BLOG">
                        <a class="nav-link" data-toggle="tab" href="#post-blog" role="tab" aria-selected="false"><i
                                class="icofont-list"></i>Blog</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="post-status" role="tabpanel">
                        <textarea name="status-input" id="status-input1" class="form-control textarea"
                            placeholder="Share what are you thinking . . ." cols="30" rows="6"></textarea>
                    </div>
                    <div class="tab-pane fade" id="post-media" role="tabpanel">

                        <textarea name="status-input" id="status-input2" class="form-control textarea"
                            placeholder="Share what are you thinking . . ." cols="30" rows="6"></textarea>
                    </div>
                    <div class="tab-pane fade" id="post-blog" role="tabpanel">
                        <textarea name="status-input" id="status-input3" class="form-control textarea"
                            placeholder="Share what are you thinking . . ." cols="30" rows="6"></textarea>
                    </div>
                </div>
                <div class="post-footer">
                    <div class="insert-btn">
                        <a href="#"><i class="icofont-photobucket"></i></a>
                        <a href="#"><i class="icofont-tags"></i></a>
                        <a href="#"><i class="icofont-location-pin"></i></a>
                    </div>
                    <div class="submit-btn">
                        <a href="#">Post Submit</a>
                    </div>
                </div>
            </div>
            <div class="block-box post-view">
                <div class="post-header">
                    <div class="media">
                        <div class="user-img">
                            <img src="{{ asset('website/media/figure/chat_10.jpg') }}" alt="Aahat">
                        </div>
                        <div class="media-body">
                            <div class="user-title"><a href="user-timeline.html">Aahat Akter</a> <i
                                    class="icofont-check"></i> posted in the group <a href="#">Tourist Guide</a>
                            </div>
                            <ul class="entry-meta">
                                <li class="meta-privacy"><i class="icofont-world"></i> Public</li>
                                <li class="meta-time">2 mins ago</li>
                            </ul>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            ...
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Close</a>
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="post-body">
                    <p>Dhaka is wonderful no matter what! <i class="icofont-wink-smile"></i></p>
                    <div class="post-img">
                        <img src="{{ asset('website/media/figure/post_1.jpg') }}" alt="Post">
                    </div>
                    <div class="post-meta-wrap">
                        <div class="post-meta">
                            <div class="post-reaction">
                                <div class="reaction-icon">
                                    <img src="{{ asset('website/media/figure/reaction_1.png') }}" alt="icon">
                                    <img src="{{ asset('website/media/figure/reaction_2.png') }}" alt="icon">
                                </div>
                                <div class="meta-text">15</div>
                            </div>
                        </div>
                        <div class="post-meta">
                            <div class="meta-text">2 Comments</div>
                            <div class="meta-text">05 Share</div>
                        </div>
                    </div>
                </div>
                <div class="post-footer">
                    <ul>
                        <li class="post-react">
                            <a href="#"><i class="icofont-thumbs-up"></i>React!</a>
                            <ul class="react-list">
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_1.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_3.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_4.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_2.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_7.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_6.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_5.png') }}"
                                            alt="Like"></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="icofont-comment"></i>Comment</a></li>
                        <li class="post-share">
                            <a href="javascript:void(0);" class="share-btn"><i class="icofont-share"></i>Share</a>
                            <ul class="share-list">
                                <li><a href="#" class="color-fb"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#" class="color-messenger"><i
                                            class="icofont-facebook-messenger"></i></a></li>
                                <li><a href="#" class="color-instagram"><i class="icofont-instagram"></i></a></li>
                                <li><a href="#" class="color-whatsapp"><i class="icofont-brand-whatsapp"></i></a>
                                </li>
                                <li><a href="#" class="color-twitter"><i class="icofont-twitter"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="block-box post-view">
                <div class="post-header">
                    <div class="media">
                        <div class="user-img">
                            <img src="{{ asset('website/media/figure/chat_5.jpg') }}" alt="Aahat">
                        </div>
                        <div class="media-body">
                            <div class="user-title"><a href="#">Jessica Rose</a> <i class="icofont-check"></i> and
                                <a href="#">Aahat
                                    Akter <i class="icofont-check"></i> </a> are now friends</div>
                            <ul class="entry-meta">
                                <li class="meta-privacy"><i class="icofont-world"></i> Public</li>
                                <li class="meta-time">3 Hrs ago</li>
                            </ul>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            ...
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Close</a>
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="post-body">
                    <div class="post-friends-view">
                        <div class="profile-thumb">
                            <div class="cover-img">
                                <img src="{{ asset('website/media/figure/post_2.jpg') }}" alt="cover-pic">
                            </div>
                            <div class="media">
                                <div class="profile-img">
                                    <a href="#"><img src="{{ asset('website/media/figure/post_3.jpg') }}"
                                            alt="profile"></a>
                                </div>
                                <div class="media-body">
                                    <div class="profile-name"><a href="#">Aahat Akter</a></div>
                                    <div class="user-name">@Aahat</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-box post-view">
                <div class="post-header">
                    <div class="media">
                        <div class="user-img">
                            <img src="{{ asset('website/media/figure/chat_13.jpg') }}" alt="Aahat">
                        </div>
                        <div class="media-body">
                            <div class="user-title"><a href="#">Julia Zessy</a> <i class="icofont-check"></i>
                                uploaded <a href="#">10 new
                                    photos</a> </div>
                            <ul class="entry-meta">
                                <li class="meta-privacy"><i class="icofont-world"></i> Public</li>
                                <li class="meta-time">10 mins ago</li>
                            </ul>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            ...
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Close</a>
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="post-body">
                    <p>Here are some of the photos from my last visit to Cox’s Bazar</p>
                    <ul class="post-img-list">
                        <li><a href="#"><img src="{{ asset('website/media/figure/post_4.jpg') }}"
                                    alt="Post"></a></li>
                        <li><a href="#"><img src="{{ asset('website/media/figure/post_5.jpg') }}"
                                    alt="Post"></a></li>
                        <li><a href="#"><img src="{{ asset('website/media/figure/post_6.jpg') }}"
                                    alt="Post"></a></li>
                        <li><a href="#"><img src="{{ asset('website/media/figure/post_7.jpg') }}"
                                    alt="Post"></a></li>
                        <li><a href="#" data-photo="+5"><img src="{{ asset('website/media/figure/post_8.jpg') }}"
                                    alt="Post"></a></li>
                    </ul>
                    <div class="post-meta-wrap">
                        <div class="post-meta">
                            <div class="post-reaction">
                                <div class="reaction-icon">
                                    <img src="{{ asset('website/media/figure/reaction_1.png') }}" alt="icon">
                                    <img src="{{ asset('website/media/figure/reaction_2.png') }}" alt="icon">
                                    <img src="{{ asset('website/media/figure/reaction_3.png') }}" alt="icon">
                                </div>
                                <div class="meta-text">25</div>
                            </div>
                        </div>
                        <div class="post-meta">
                            <div class="meta-text">2 Comments</div>
                            <div class="meta-text">05 Share</div>
                        </div>
                    </div>
                </div>
                <div class="post-footer">
                    <ul>
                        <li class="post-react">
                            <a href="#"><i class="icofont-thumbs-up"></i>React!</a>
                            <ul class="react-list">
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_1.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_3.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_4.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_2.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_7.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_6.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_5.png') }}"
                                            alt="Like"></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="icofont-comment"></i>Comment</a></li>
                        <li class="post-share">
                            <a href="javascript:void(0);" class="share-btn"><i class="icofont-share"></i>Share</a>
                            <ul class="share-list">
                                <li><a href="#" class="color-fb"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#" class="color-messenger"><i
                                            class="icofont-facebook-messenger"></i></a></li>
                                <li><a href="#" class="color-instagram"><i class="icofont-instagram"></i></a></li>
                                <li><a href="#" class="color-whatsapp"><i class="icofont-brand-whatsapp"></i></a>
                                </li>
                                <li><a href="#" class="color-twitter"><i class="icofont-twitter"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="block-box post-view">
                <div class="post-header">
                    <div class="media">
                        <div class="user-img">
                            <img src="{{ asset('website/media/figure/chat_8.jpg')}}" alt="Aahat">
                        </div>
                        <div class="media-body">
                            <div class="user-title"><a href="user-timeline.html">Abul Hassan</a> <i
                                    class="icofont-check"></i> posted in the group <a href="#">Kito
                                    Development</a> </div>
                            <ul class="entry-meta">
                                <li class="meta-privacy"><i class="icofont-world"></i> Public</li>
                                <li class="meta-time">10 mins ago</li>
                            </ul>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            ...
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Close</a>
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="post-body">
                    <p>This is a dream come true, thanks to all for the support!!!</p>
                    <div class="post-video">
                        <img src="{{ asset('website/media/figure/post_9.jpg')}}" alt="Post">
                        <a href="#" class="video-btn"><i class="icofont-ui-play"></i></a>
                    </div>
                    <div class="post-meta-wrap">
                        <div class="post-meta">
                            <div class="post-reaction">
                                <div class="reaction-icon">
                                    <img src="{{ asset('website/media/figure/reaction_1.png')}}" alt="icon">
                                    <img src="{{ asset('website/media/figure/reaction_2.png')}}" alt="icon">
                                    <img src="{{ asset('website/media/figure/reaction_3.png')}}" alt="icon">
                                </div>
                                <div class="meta-text">50</div>
                            </div>
                        </div>
                        <div class="post-meta">
                            <div class="meta-text">5 Comments</div>
                            <div class="meta-text">02 Share</div>
                        </div>
                    </div>
                </div>
                <div class="post-footer">
                    <ul>
                        <li class="post-react">
                            <a href="#"><i class="icofont-thumbs-up"></i>React!</a>
                            <ul class="react-list">
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_1.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_3.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_4.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_2.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_7.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_6.png') }}"
                                            alt="Like"></a></li>
                                <li><a href="#"><img src="{{ asset('website/media/figure/reaction_5.png') }}"
                                            alt="Like"></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="icofont-comment"></i>Comment</a></li>
                        <li class="post-share">
                            <a href="javascript:void(0);" class="share-btn"><i class="icofont-share"></i>Share</a>
                            <ul class="share-list">
                                <li><a href="#" class="color-fb"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#" class="color-messenger"><i
                                            class="icofont-facebook-messenger"></i></a></li>
                                <li><a href="#" class="color-instagram"><i class="icofont-instagram"></i></a></li>
                                <li><a href="#" class="color-whatsapp"><i class="icofont-brand-whatsapp"></i></a>
                                </li>
                                <li><a href="#" class="color-twitter"><i class="icofont-twitter"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="block-box load-more-btn">
                <a href="#" class="item-btn"><i class="icofont-refresh"></i>Load More Posts</a>
            </div>
        </div>
        <div class="col-lg-4 widget-block widget-break-lg">
            <div class="widget widget-author">
                <div class="author-heading">
                    <div class="cover-img">
                        <img src="{{ asset('website/media/figure/shape_12.jpg')}}" alt="cover">
                    </div>
                    <div class="profile-img">
                        <a href="#">
                            <img src="{{ asset('website/media/figure/author_1.jpg')}}" alt="author">
                        </a>
                    </div>
                    <div class="profile-name">
                        <h4 class="author-name"><a href="#">{{ auth()->user()->first_name }}</a></h4>
                        <div class="author-location">United State Of America</div>
                    </div>
                </div>
                <ul class="author-badge">
                    <li><a href="#" class="bg-salmon-gradient"><i class="icofont-star"></i></a>
                    </li>
                    <li><a href="#" class="bg-amethyst-gradient"><i class="icofont-ui-play"></i></a></li>
                    <li><a href="#" class="bg-sun-gradient"><i class="icofont-squirrel"></i></a>
                    </li>
                    <li><a href="#" class="profile-circle">+5</a></li>
                </ul>
                <ul class="author-statistics">
                    <li>
                        <a href="#"><span class="item-number">30</span> <span class="item-text">POSTS</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="item-number">12</span> <span class="item-text">COMMENTS</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="item-number">1,125</span> <span class="item-text">VIEWS</span></a>
                    </li>
                </ul>
            </div>
            <div class="widget widget-memebers">
                <div class="widget-heading">
                    <h3 class="widget-title">Members</h3>
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            ...
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Close</a>
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#newest-member" role="tab"
                            aria-selected="true">NEWEST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#popular-member" role="tab"
                            aria-selected="false">POPULAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#active-member" role="tab"
                            aria-selected="false">ACTIVE</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="newest-member" role="tabpanel">
                        <div class="members-list">
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/figure/chat_1.jpg')}}" alt="Chat">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Aahat Akter</a></h4>
                                    <div class="item-username">@Aahat </div>
                                    <div class="member-status online"><i class="icofont-check"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/figure/chat_2.jpg')}}" alt="Chat">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Kazi Rahman</a></h4>
                                    <div class="item-username">@Rahman</div>
                                    <div class="member-status online"><i class="icofont-check"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/figure/chat_3.jpg')}}" alt="Chat">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Alia Karon</a></h4>
                                    <div class="item-username">@Alia</div>
                                    <div class="member-status online"><i class="icofont-check"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/figure/chat_4.jpg')}}" alt="Chat">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Masterero</a></h4>
                                    <div class="item-username">@Master</div>
                                    <div class="member-status offline"><i class="icofont-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="popular-member" role="tabpanel">
                        <div class="members-list">
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/figure/chat_1.jpg')}}" alt="Chat">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Aahat Akter</a></h4>
                                    <div class="item-username">@Aahat </div>
                                    <div class="member-status online"><i class="icofont-check"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/figure/chat_2.jpg')}}" alt="Chat">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Kazi Rahman</a></h4>
                                    <div class="item-username">@Rahman</div>
                                    <div class="member-status online"><i class="icofont-check"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/figure/chat_3.jpg')}}" alt="Chat">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Alia Karon</a></h4>
                                    <div class="item-username">@Alia</div>
                                    <div class="member-status online"><i class="icofont-check"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/figure/chat_4.jpg')}}" alt="Chat">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Masterero</a></h4>
                                    <div class="item-username">@Master</div>
                                    <div class="member-status offline"><i class="icofont-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="active-member" role="tabpanel">
                        <div class="members-list">
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/figure/chat_1.jpg')}}" alt="Chat">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Aahat Akter</a></h4>
                                    <div class="item-username">@Aahat </div>
                                    <div class="member-status online"><i class="icofont-check"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/figure/chat_2.jpg')}}" alt="Chat">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Kazi Rahman</a></h4>
                                    <div class="item-username">@Rahman</div>
                                    <div class="member-status online"><i class="icofont-check"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/figure/chat_3.jpg')}}" alt="Chat">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Alia Karon</a></h4>
                                    <div class="item-username">@Alia</div>
                                    <div class="member-status online"><i class="icofont-check"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/figure/chat_4.jpg')}}" alt="Chat">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Masterero</a></h4>
                                    <div class="item-username">@Master</div>
                                    <div class="member-status offline"><i class="icofont-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget widget-groups">
                <div class="widget-heading">
                    <h3 class="widget-title">Groups</h3>
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            ...
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Close</a>
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#active-group" role="tab"
                            aria-selected="true">ACTIVE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#popular-group" role="tab"
                            aria-selected="false">POPULAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#newest-group" role="tab"
                            aria-selected="false">NEWEST</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="active-group" role="tabpanel">
                        <div class="group-list">
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/groups/groups_9.jpg')}}" alt="group">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Kito Development</a></h4>
                                    <div class="item-member">265 Members</div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/groups/groups_10.jpg')}}" alt="group">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Chef Express</a></h4>
                                    <div class="item-member">4,265 Members</div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/groups/groups_11.jpg')}}" alt="group">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Photo Contest</a></h4>
                                    <div class="item-member">1,265 Members</div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/groups/groups_12.jpg')}}" alt="group">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">WP Developers</a></h4>
                                    <div class="item-member">265 Members</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="popular-group" role="tabpanel">
                        <div class="group-list">
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/groups/groups_9.jpg')}}" alt="group">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Kito Development</a></h4>
                                    <div class="item-member">265 Members</div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/groups/groups_10.jpg') }}" alt="group">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Chef Express</a></h4>
                                    <div class="item-member">4,265 Members</div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/groups/groups_11.jpg') }}" alt="group">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Photo Contest</a></h4>
                                    <div class="item-member">1,265 Members</div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/groups/groups_12.jpg') }}" alt="group">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">WP Developers</a></h4>
                                    <div class="item-member">265 Members</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="newest-group" role="tabpanel">
                        <div class="group-list">
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/groups/groups_9.jpg') }}" alt="group">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Kito Development</a></h4>
                                    <div class="item-member">265 Members</div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/groups/groups_10.jpg') }}" alt="group">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Chef Express</a></h4>
                                    <div class="item-member">4,265 Members</div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/groups/groups_11.jpg') }}" alt="group">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">Photo Contest</a></h4>
                                    <div class="item-member">1,265 Members</div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img">
                                    <a href="#">
                                        <img src="{{ asset('website/media/groups/groups_12.jpg') }}" alt="group">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="item-title"><a href="#">WP Developers</a></h4>
                                    <div class="item-member">265 Members</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget widget-banner">
                <h3 class="item-title">Most Popular</h3>
                <div class="item-subtitle">Circle Application</div>
                <a href="#" class="item-btn">
                    <span class="btn-text">Register Now</span>
                    <span class="btn-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21px"
                            height="10px">
                            <path fill-rule="evenodd"
                                d="M16.671,9.998 L12.997,9.998 L16.462,6.000 L5.000,6.000 L5.000,4.000 L16.462,4.000 L12.997,0.002 L16.671,0.002 L21.003,5.000 L16.671,9.998 ZM17.000,5.379 L17.328,5.000 L17.000,4.621 L17.000,5.379 ZM-0.000,4.000 L3.000,4.000 L3.000,6.000 L-0.000,6.000 L-0.000,4.000 Z" />
                        </svg>
                    </span>
                </a>
                <div class="item-img">
                    <img src="{{ asset('website/media/figure/widget_banner_1.png')}}" alt="banner">
                </div>
            </div>
            <div class="widget widget-memebers widget-activity">
                <div class="widget-heading">
                    <h3 class="widget-title">Friends Activity</h3>
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            ...
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Close</a>
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="activity-list">
                    <div class="media">
                        <div class="item-img">
                            <a href="#">
                                <img src="{{ asset('webstite/media/figure/chat_10.jpg')}}" alt="Chat">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="item-title">
                                <a href="#" class="author-name">Aahat Akter</a>
                                commented on Destroy Dex's
                                <a href="#" class="activity-link">Photo</a>
                            </h4>
                            <div class="activity-time">20 minutes ago</div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="item-img">
                            <a href="#">
                                <img src="{{ asset('website/media/figure/chat_8.jpg')}}" alt="Chat">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="item-title">
                                <a href="#" class="author-name">Neko Bebop</a>
                                liked Marina
                                <a href="#" class="activity-link">Status</a>
                            </h4>
                            <div class="activity-time">15 minutes ago</div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="item-img">
                            <a href="#">
                                <img src="{{ asset('website/media/figure/chat_1.jpg')}}" alt="Chat">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="item-title">
                                <a href="#" class="author-name">Neko Bebop</a>
                                commented on Destroy Dex's
                                <a href="#" class="activity-link">Photo</a>
                            </h4>
                            <div class="activity-time">20 minutes ago</div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="item-img">
                            <a href="#">
                                <img src="{{ asset('website/media/figure/chat_6.jpg')}}" alt="Chat">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="item-title">
                                <a href="#" class="author-name">Neko Bebop</a>
                                commented on Destroy Dex's
                                <a href="#" class="activity-link">Photo</a>
                            </h4>
                            <div class="activity-time">20 minutes ago</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
