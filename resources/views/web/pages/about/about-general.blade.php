@extends('web.layout.default')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('images/theme/background/6.jpg') }})">
    <div class="auto-container">
        <h1>Qué es Origen España</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('web.home') }}">Inicio</a></li>
            <li>Nosotros</li>
            <li>Qué es Origen España</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Services Title Box-->
<section class="services-title-box">
    <div class="auto-container">
        <!--Title Box-->
        <div class="title-box">
            <div class="title">Automate & Simplify The Whole Process</div>
            <h2>We Offer Solutions to <br> Develop Better <span class="theme_color">Strategies</span></h2>
            <div class="text">Duis aute irure dolor reprehenderit in voluptate velit essl cillum dolore eud fugiat nulla pariatur. Excepteur sint ocaec atus cupdatat proident suntin culpa qui officia deserunt mol anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
        </div>
    </div>
</section>
<!--End Services Title Box-->

<!--Featured Section Two-->
<section class="featured-section-two">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Feature Block Four-->
            <div class="feature-block-four col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-graph-1"></span>
                    </div>
                    <h3>Advanced Business Solutions</h3>
                    <div class="text">Acepteur sintas haecat sed cupida non dui proident sunt culps qui off ipsum tempor eserunt.</div>
                </div>
            </div>
            
            <!--Feature Block Four-->
            <div class="feature-block-four col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-strategy"></span>
                    </div>
                    <h3>Best Strategies That Really Pays</h3>
                    <div class="text">Acepteur sintas haecat sed cupida non dui proident sunt culps qui off ipsum tempor eserunt.</div>
                </div>
            </div>
            
            <!--Feature Block Four-->
            <div class="feature-block-four col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-sports-and-competition"></span>
                    </div>
                    <h3>Increase Your Online Presence</h3>
                    <div class="text">Acepteur sintas haecat sed cupida non dui proident sunt culps qui off ipsum tempor eserunt.</div>
                </div>
            </div>
            
            <!--Feature Block Four-->
            <div class="feature-block-four col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="750ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-graph"></span>
                    </div>
                    <h3>Become Successful & Superior</h3>
                    <div class="text">Acepteur sintas haecat sed cupida non dui proident sunt culps qui off ipsum tempor eserunt.</div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!--About Section-->
<section class="about-section">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Title Column-->
            <div class="title-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!--Sec Title-->
                    <div class="sec-title">
                        <h2>Future Leaders</h2>
                        <div class="title-text">Automate & Simplify The Whole Process</div>
                    </div>
                    <div class="text">Duis aute irure dolor reprehenderit in voluptate velit essle cillum dolore eu fugiat nulla pariatur. Excepteur sint ocaec at cupdatat proident suntin culpa qui officia deserunt mol anim id esa laborum perspiciatis omnis.</div>
                    <a href="#" class="theme-btn btn-style-five">Who We Are</a>
                </div>
            </div>
            
            <!--Video Column-->
            <div class="video-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    
                    <!--Video Box-->
                    <div class="video-box">
                        <figure class="image">
                            <img src="{{ asset('images/theme/resource/video-img.jpg') }}" alt="">
                        </figure>
                        {{-- <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-arrow"></span></a> --}}
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End About Section-->

<!--Counter Section-->
<section class="counter-section-two">
    <div class="auto-container">
        <div class="inner-section">

            <div class="fact-counter">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-4 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="260">0</span>+
                                </div>
                                <h4 class="counter-title">Expert Consultants</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-4 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box alternate">
                                    <span class="count-text" data-speed="3000" data-stop="975">0</span>+
                                </div>
                                <h4 class="counter-title">Orders in queue</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-4 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="318">0</span>+
                                </div>
                                <h4 class="counter-title">activated clients</h4>
                            </div>
                        </div>
                    </div>
                    
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-4 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box alternate">
                                    <span class="count-text" data-speed="3000" data-stop="650">0</span>+
                                </div>
                                <h4 class="counter-title">Successful projects</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
	


@endsection