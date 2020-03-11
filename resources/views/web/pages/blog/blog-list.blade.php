@extends('web.layout.default')

@section('content')

<section class="page-title" style="background-image:url({{ asset('images/theme/background/6.jpg') }})">
    <div class="auto-container">
        <h1>Noticias</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('web.home') }}">Inicio</a></li>
            <li>Noticias</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Blog Classic Section-->
<div class="blog-classic-section">
    <div class="auto-container">
    
        <!--News Block-->
        <div class="news-block-eight">
            <div class="inner-box">
                <div class="image">
                    <a href="{{ route('web.blog.post', ['slug' => 'nombre-del-post']) }}"><img src="{{ asset('images/theme/resource/news-13.jpg') }}" alt="" /></a>
                </div>
                <div class="content">
                    <div class="clearfix">
                        <div class="pull-left">
                            <ul class="post-meta clearfix">
                                <li>September 23, 2018</li>
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
                    <h2><a href="{{ route('web.blog.post', ['slug' => 'nombre-del-post']) }}">Isolate your beliefs for better future</a></h2>
                    <div class="text">Duis aute irure dolor reprehenderit in voluptate velit essl cillum dolore eud fugiat nulla pariatur. Excepteur sint ocaec atus cupdatat proident suntin culpa qui officia deserunt mol anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</div>
                    <a class="read-more" href="{{ route('web.blog.post', ['slug' => 'nombre-del-post']) }}">Read more</a>
                </div>
            </div>
        </div>
        
        <!--News Block-->
        <div class="news-block-eight">
            <div class="inner-box">
                <div class="image">
                    <a href="{{ route('web.blog.post', ['slug' => 'nombre-del-post']) }}"><img src="{{ asset('images/theme/resource/news-13.jpg') }}" alt="" /></a>
                </div>
                <div class="content">
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
                    <h2><a href="{{ route('web.blog.post', ['slug' => 'nombre-del-post']) }}">Take action & grow the business</a></h2>
                    <div class="text">Duis aute irure dolor reprehenderit in voluptate velit essl cillum dolore eud fugiat nulla pariatur. Excepteur sint ocaec atus cupdatat proident suntin culpa qui officia deserunt mol anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</div>
                    <a class="read-more" href="{{ route('web.blog.post', ['slug' => 'nombre-del-post']) }}">Read more</a>
                </div>
            </div>
        </div>
        
        <!--News Block-->
        <div class="news-block-eight">
            <div class="inner-box">
                <div class="image">
                    <a href="{{ route('web.blog.post', ['slug' => 'nombre-del-post']) }}"><img src="{{ asset('images/theme/resource/news-13.jpg') }}" alt="" /></a>
                </div>
                <div class="content">
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
                    <h2><a href="{{ route('web.blog.post', ['slug' => 'nombre-del-post']) }}">Improve your corporate ideas</a></h2>
                    <div class="text">Duis aute irure dolor reprehenderit in voluptate velit essl cillum dolore eud fugiat nulla pariatur. Excepteur sint ocaec atus cupdatat proident suntin culpa qui officia deserunt mol anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</div>
                    <a class="read-more" href="{{ route('web.blog.post', ['slug' => 'nombre-del-post']) }}">Read more</a>
                </div>
            </div>
        </div>
        
        <!--News Block-->
        <div class="news-block-eight">
            <div class="inner-box">
                <div class="image">
                    <a href="{{ route('web.blog.post', ['slug' => 'nombre-del-post']) }}"><img src="{{ asset('images/theme/resource/news-13.jpg') }}" alt="" /></a>
                </div>
                <div class="content">
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
                    <h2><a href="{{ route('web.blog.post', ['slug' => 'nombre-del-post']) }}">Isolate your beliefs for better future</a></h2>
                    <div class="text">Duis aute irure dolor reprehenderit in voluptate velit essl cillum dolore eud fugiat nulla pariatur. Excepteur sint ocaec atus cupdatat proident suntin culpa qui officia deserunt mol anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</div>
                    <a class="read-more" href="{{ route('web.blog.post', ['slug' => 'nombre-del-post']) }}">Read more</a>
                </div>
            </div>
        </div>
        
        <!--News Block-->
        <div class="news-block-eight">
            <div class="inner-box">
                <div class="image">
                    <a href="{{ route('web.blog.post', ['slug' => 'nombre-del-post']) }}"><img src="{{ asset('images/theme/resource/news-13.jpg') }}" alt="" /></a>
                </div>
                <div class="content">
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
                    <h2><a href="{{ route('web.blog.post', ['slug' => 'nombre-del-post']) }}">Take action & grow the business</a></h2>
                    <div class="text">Duis aute irure dolor reprehenderit in voluptate velit essl cillum dolore eud fugiat nulla pariatur. Excepteur sint ocaec atus cupdatat proident suntin culpa qui officia deserunt mol anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</div>
                    <a class="read-more" href="{{ route('web.blog.post', ['slug' => 'nombre-del-post']) }}">Read more</a>
                </div>
            </div>
        </div>
        
        <!--Styled Pagination-->
        <div class="pagination-outer">
            <div class="styled-pagination text-center">
                <ul class="inner-box clearfix">
                    <li class="prev"><a href="#"><span class="fa fa-angle-double-left"></span></a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="next"><a href="#"><span class="fa fa-angle-double-right"></span></a></li>
                </ul>
            </div>
        </div>
        <!--End Styled Pagination-->
        
    </div>
</div>
<!--End Blog Classic Section-->

@endsection