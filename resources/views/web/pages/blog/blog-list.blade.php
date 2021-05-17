@extends('web.layout.default')

@section('content')

<section class="page-title" style="background-image:url({{ asset('images/bgs/news/noticias.jpg') }}); background-position: 50% 65%;">
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

        @foreach($news as $newsItem)
        <!--News Block-->
        <div class="news-block-eight">
            <div class="inner-box">
                <div class="image">
                    <a href="{{ route('web.blog.post', ['slug' => $newsItem->slug]) }}"><img src="{{ asset($newsItem->image) }}" alt="" /></a>
                </div>
                <div class="content">
                    <div class="clearfix">
                        <div class="pull-left">
                            <ul class="post-meta clearfix">
                                <li>{{ $newsItem->date }}</li>
                                <!-- <li>Consultant</li> -->
                                {{-- <li><span class="icon fa fa-comment-o"></span> 86</li> --}}
                            </ul>
                        </div>
                        <div class="pull-right">
                            <ul class="post-meta clearfix">
                                {{-- <li class="pull-right"><span class="icon fa fa-heart-o"></span> 153</li> --}}
                            </ul>
                        </div>
                    </div>
                    <h2><a href="{{ route('web.blog.post', ['slug' => $newsItem->slug]) }}">{{ $newsItem->title }}</a></h2>
                    <div class="text">{!! $newsItem->summary !!}</div>
                    <a class="read-more" href="{{ route('web.blog.post', ['slug' => $newsItem->slug]) }}">Leer más</a>
                </div>
            </div>
        </div>
        @endforeach

        <!--Styled Pagination-->
        <!-- <div class="pagination-outer">
            <div class="styled-pagination text-center">
                <ul class="inner-box clearfix">
                    <li class="prev"><a href="#"><span class="fa fa-angle-double-left"></span></a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="next"><a href="#"><span class="fa fa-angle-double-right"></span></a></li>
                </ul>
            </div>
        </div> -->
        <!--End Styled Pagination-->

    </div>
</div>
<!--End Blog Classic Section-->

@endsection
