@extends('web.layout.default')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('images/theme/background/6.jpg') }})">
    <div class="auto-container">
        <h1>Nombre del post</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('web.home') }}">Inicio</a></li>
            <li><a href="{{ route('web.blog.list') }}">Noticias</a></li>
            <li>Nombre del post</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<section class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
                        
            <!--Content Side-->
            <div class="content-side col-md-12 col-sm-12">
                <div class="blog-single">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('images/theme/resource/news-9.jpg') }}" alt="" />
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <ul class="post-meta clearfix">
                                        <li>SEPtember 23, 2018</li>
                                        <li>Consultant</li>
                                        {{-- <li><span class="icon fa fa-comment-o"></span> 86</li> --}}
                                    </ul>
                                </div>
                                <div class="pull-right">
                                    <ul class="post-meta clearfix">
                                        {{-- <li class="pull-right"><span class="icon fa fa-heart-o"></span> 153</li> --}}
                                    </ul>
                                </div>
                            </div>
                            <h2>Isolate your beliefs for better future</h2>
                            <div class="text">
                                <p>Duis aute irure dolor reprehenderit in voluptate velit essl cillum dolore eud fugiat nulla pariatur. Excepteur sint ocaec atus cupdatat proident suntin culpa qui officia deserunt mol anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                                <p>Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
                                <blockquote>
                                    <div class="quote-icon flaticon-two-quotes"></div>
                                    <div class="blockquote-text">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. voluptate velit esse cillum dolore eu fugiat nulla pariatur cepteur sint occaecat cupid deserunt mollit anim id est laborum sed ut perspiciatis.</div>
                                </blockquote>
                                <p>Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
                                <p>Mollit anim id est laborum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                            </div>

                            {{-- <!--post-share-options-->
                            <div class="post-share-options">
                                <div class="post-share-inner clearfix">
                                    <div class="pull-left tags">
                                        <span>Tags: </span><a href="#">Marketing</a> <a href="#">Business</a> <a href="#">Consulting</a>
                                    </div>
                                    <ul class="pull-right info-links clearfix">
                                        <li><a href="#"><span class="fa fa-share-alt"></span></a>Share This</li>
                                    </ul>
                                </div>
                            </div> --}}
                            
                        </div>
                        
                        <!--New Posts-->
                        <div class="new-posts">
                            <div class="clearfix">
                                
                                <div class="pull-left prev-post">
                                    <a href="#"> prev article</a>
                                    {{-- <h4>Business & Planning With <br> Task Completion</h4> --}}
                                </div>
                                
                                <div class="pull-right next-post">
                                    <a href="#">next article </a>
                                    {{-- <h4>Global Business Tracking <br> & Inventory Apps</h4> --}}
                                </div>
                                
                            </div>
                        </div>
                        
                        {{-- <!--Comments Area-->
                        <div class="comments-area">
                            <div class="group-title">
                                <h2>Comments</h2>
                            </div>
                            <!--Comment Box-->
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="images/resource/author-4.jpg" alt=""></div>
                                    <div class="comment-inner clearfix">
                                        <div class="comment-info clearfix"><strong>Maria Davis</strong><div class="comment-time">September 28, 2018 at 10:05 PM</div></div>
                                        <div class="text">Voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo beritatis et quasi architecto beatae vitae dicta sed ipsum dui sunt.</div>
                                        <a class="comment-reply" href="#"><span class="fa fa-angle-right"></span> Reply</a>
                                    </div>
                                </div>
                            </div>

                            <!--Comment Box-->
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="images/resource/author-5.jpg" alt=""></div>
                                    <div class="comment-inner clearfix">
                                        <div class="comment-info clearfix"><strong>Charles Luke</strong><div class="comment-time">September 28, 2018 at 10:05 PM</div></div>
                                        <div class="text">Voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo beritatis et quasi architecto beatae vitae dicta sed ipsum dui sunt.</div>
                                        <a class="comment-reply" href="#"><span class="fa fa-angle-right"></span> Reply</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--End Comments Area--> --}}
                        
                        {{-- <!--Comment Form-->
                        <div class="comment-form">
                            <div class="group-title">
                                <h2>Post A Reply</h2>
                            </div>
                            <form method="post" action="contact.html">
                                <div class="row clearfix">
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="username" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="subject" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button class="theme-btn btn-style-five" type="submit" name="submit-form">Post Comment</button>
                                </div>
                            </form>
                        </div>
                        <!--End Comment Form--> --}}
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End Sidebar Page Container-->


@endsection