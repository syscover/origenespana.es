@extends('web.layout.default')

@section('content')
<!--Main Slider-->
<section class="main-slider">
                
    <div class="main-slider-carousel owl-carousel owl-theme">
        
        <div class="slide" style="background-image:url({{ asset('https://loremflickr.com/1920/960/food') }})">
            <div class="auto-container">
                <div class="content">
                    <h3>Get The Success You Need</h3>
                    <h2>Business Growth</h2>
                    <div class="text">We are working with thousands of business companies around <br> the world & delivering ideas for your business</div>
                    <div class="link-box">
                        <a href="#" class="theme-btn btn-style-two">learn more</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="slide" style="background-image:url({{ asset('/images/theme/main-slider/image-2.jpg') }})">
            <div class="auto-container">
                <div class="content">
                    <h3 class="style-two">Get The Success You Need</h3>
                    <h2>We Accomplish</h2>
                    <div class="text">We are working with thousands of business companies around <br> the world & delivering ideas for your business</div>
                    <div class="link-box">
                        <a href="#" class="theme-btn btn-style-two">learn more</a>
                        <a href="#" class="theme-btn btn-style-three">Our Servics</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!--End Main Slider-->

<!--Services Title Box-->
<section class="services-title-box">
    <div class="auto-container">
        <!--Title Box-->
        <div class="title-box">
            <div class="title">Asociación Española de Denominación de Origen</div>
            <h2>Bienvenido a <span class="theme_color">Origen España</span></h2>
            <div class="text">
                Duis aute irure dolor reprehenderit in voluptate velit essl cillum dolore eud fugiat nulla pariatur. Excepteur sint ocaec atus cupdatat proident suntin culpa qui officia deserunt mol anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Duis aute irure dolor reprehenderit in voluptate velit essl cillum dolore eud fugiat nulla pariatur. Excepteur sint ocaec atus cupdatat proident suntin culpa qui officia deserunt mol anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </div>
        </div>
    </div>
</section>
<!--End Services Title Box-->

<!--Testimonial Section-->
<section class="testimonial-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title">
            <h2>Últimos socios</h2>
            <div class="title-text">Asociación Española de Denominación de Origen</div>
        </div>
        <div class="single-item-carousel owl-carousel owl-theme">
            
            <!--Testimonial Block Two-->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="row flex-sm-row-reverse clearfix">
                        <!--Image Column-->
                        <div class="image-column col-lg-5 col-md-5 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="{{ asset('/images/theme/resource/author-1.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>
                        <!--Content Column-->
                        <div class="content-column col-lg-7 col-md-7 col-sm-12">
                            <div class="inner-column">
                                <div class="text">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comod duis aute irure dolor reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur eaxcepteur sint occaecat cupidatat non proident sunt in culpa qui officia.</div>
                                <div class="author">Camron White</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Testimonial Block Two-->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="row flex-sm-row-reverse clearfix">
                        <!--Image Column-->
                        <div class="image-column col-lg-5 col-md-5 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="{{ asset('/images/theme/resource/author-1.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>
                        <!--Content Column-->
                        <div class="content-column col-lg-7 col-md-7 col-sm-12">
                            <div class="inner-column">
                                <div class="text">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comod duis aute irure dolor reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur eaxcepteur sint occaecat cupidatat non proident sunt in culpa qui officia.</div>
                                <div class="author">Camron White</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Testimonial Block Two-->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="row flex-sm-row-reverse clearfix">
                        <!--Image Column-->
                        <div class="image-column col-lg-5 col-md-5 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="{{ asset('/images/theme/resource/author-1.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>
                        <!--Content Column-->
                        <div class="content-column col-lg-7 col-md-7 col-sm-12">
                            <div class="inner-column">
                                <div class="text">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comod duis aute irure dolor reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur eaxcepteur sint occaecat cupidatat non proident sunt in culpa qui officia.</div>
                                <div class="author">Camron White</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Testimonial Block Two-->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="row flex-sm-row-reverse clearfix">
                        <!--Image Column-->
                        <div class="image-column col-lg-5 col-md-5 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="{{ asset('/images/theme/resource/author-1.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>
                        <!--Content Column-->
                        <div class="content-column col-lg-7 col-md-7 col-sm-12">
                            <div class="inner-column">
                                <div class="text">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comod duis aute irure dolor reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur eaxcepteur sint occaecat cupidatat non proident sunt in culpa qui officia.</div>
                                <div class="author">Camron White</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End Testimonial Section-->

<!--Case Section-->
<section class="case-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h2>Nuestros Socios</h2>
            <div class="title-text">Asociación Española de Denominación de Origen</div>
        </div>
    </div>
    <div class="four-item-carousel owl-carousel owl-theme">
    
        <!--Case Block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="{{ asset('/images/theme/resource/case-1.jpg') }}" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <div class="text">Lorem ipsum dolor sit amet adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Utna enim ad minim veniam quis nostrud exercitation ulamco laboris nisi aliquip exea comm ayodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</div>
                                <a href="global-coach.html" class="read-more"><span class="fa fa-angle-right"></span> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="category">case study - strategies</div>
                    <h3><a href="global-coach.html">Global Business Managment Tracking Apps</a></h3>
                </div>
            </div>
        </div>
        
        <!--Case Block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="{{ asset('/images/theme/resource/case-2.jpg') }}" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <div class="text">Lorem ipsum dolor sit amet adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Utna enim ad minim veniam quis nostrud exercitation ulamco laboris nisi aliquip exea comm ayodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</div>
                                <a href="global-coach.html" class="read-more"><span class="fa fa-angle-right"></span> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="category">case study - managment</div>
                    <h3><a href="global-coach.html">Business & Planning With Task Completion</a></h3>
                </div>
            </div>
        </div>
        
        <!--Case Block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="{{ asset('/images/theme/resource/case-3.jpg') }}" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <div class="text">Lorem ipsum dolor sit amet adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Utna enim ad minim veniam quis nostrud exercitation ulamco laboris nisi aliquip exea comm ayodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</div>
                                <a href="global-coach.html" class="read-more"><span class="fa fa-angle-right"></span> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="category">case study - corporate</div>
                    <h3><a href="global-coach.html">Business & Planning With Task Completion</a></h3>
                </div>
            </div>
        </div>
        
        <!--Case Block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="{{ asset('/images/theme/resource/case-4.jpg') }}" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <div class="text">Lorem ipsum dolor sit amet adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Utna enim ad minim veniam quis nostrud exercitation ulamco laboris nisi aliquip exea comm ayodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</div>
                                <a href="global-coach.html" class="read-more"><span class="fa fa-angle-right"></span> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="category">case study - financial</div>
                    <h3><a href="global-coach.html">Full Training & Workshop Inventory System</a></h3>
                </div>
            </div>
        </div>
        
        <!--Case Block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="{{ asset('/images/theme/resource/case-1.jpg') }}" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <div class="text">Lorem ipsum dolor sit amet adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Utna enim ad minim veniam quis nostrud exercitation ulamco laboris nisi aliquip exea comm ayodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</div>
                                <a href="global-coach.html" class="read-more"><span class="fa fa-angle-right"></span> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="category">case study - strategies</div>
                    <h3><a href="global-coach.html">Global Business Managment Tracking Apps</a></h3>
                </div>
            </div>
        </div>
        
        <!--Case Block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="{{ asset('/images/theme/resource/case-2.jpg') }}" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <div class="text">Lorem ipsum dolor sit amet adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Utna enim ad minim veniam quis nostrud exercitation ulamco laboris nisi aliquip exea comm ayodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</div>
                                <a href="global-coach.html" class="read-more"><span class="fa fa-angle-right"></span> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="category">case study - managment</div>
                    <h3><a href="global-coach.html">Business & Planning With Task Completion</a></h3>
                </div>
            </div>
        </div>
        
        <!--Case Block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="{{ asset('/images/theme/resource/case-3.jpg') }}" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <div class="text">Lorem ipsum dolor sit amet adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Utna enim ad minim veniam quis nostrud exercitation ulamco laboris nisi aliquip exea comm ayodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</div>
                                <a href="global-coach.html" class="read-more"><span class="fa fa-angle-right"></span> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="category">case study - corporate</div>
                    <h3><a href="global-coach.html">Business & Planning With Task Completion</a></h3>
                </div>
            </div>
        </div>
        
        <!--Case Block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="{{ asset('/images/theme/resource/case-4.jpg') }}" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <div class="text">Lorem ipsum dolor sit amet adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Utna enim ad minim veniam quis nostrud exercitation ulamco laboris nisi aliquip exea comm ayodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</div>
                                <a href="global-coach.html" class="read-more"><span class="fa fa-angle-right"></span> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="category">case study - financial</div>
                    <h3><a href="global-coach.html">Full Training & Workshop Inventory System</a></h3>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!--End Case Section-->

<!--News Section-->
<section class="news-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title">
            <h2>Últimas noticias</h2>
            <div class="title-text">Asociación Española de Denominación de Origen</div>
        </div>
        <div class="row clearfix">
            
            <!--Blocks Column-->
            <div class="blocks-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                
                    <!--News Block-->
                    <div class="news-block">
                        <div class="inner-box">
                            <ul class="post-info">
                                <li>SEPtember 23, 2018</li>
                                <li>Consultant</li>
                            </ul>
                            <h3><a href="blog-single.html">Consecter elit duied aiusmod tempor didunt labore dolory</a></h3>
                        </div>
                    </div>
                    
                    <!--News Block-->
                    <div class="news-block">
                        <div class="inner-box">
                            <ul class="post-info">
                                <li>august 25, 2018</li>
                                <li>finance</li>
                            </ul>
                            <h3><a href="blog-single.html">Ipsum dolor sit amet adipisicing elit, dolore magns aliqua enim </a></h3>
                        </div>
                    </div>
                    
                    <!--News Block-->
                    <div class="news-block">
                        <div class="inner-box">
                            <ul class="post-info">
                                <li>SEPtember 23, 2018</li>
                                <li>business</li>
                            </ul>
                            <h3><a href="blog-single.html">Sunt in culpa qui officia deserunt mollit animed kyest laborum</a></h3>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!--Image Column-->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('/images/theme/resource/news-1.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End News Section-->

<!--Call To Action Section-->
<section class="call-to-action-two" style="background-image: url(https://placehold.it/1920x1080)">
    <div class="auto-container">
        <h2>¿Quieres conocer productos con DOP o IGP?</h2>
        {{-- <div class="text">Visita la web de "Historias en tu mesa"</div> --}}
        <a href="https://www.historiasentumesa.es/" target="_blank" class="theme-btn btn-style-five">Visita "Historias en tu mesa"</a>
    </div>
</section>
<!--End Call To Action Section-->

<!--Expert Section-->
<section class="expert-section">
    <div class="auto-container">
        <!--Sec Title-->
        {{-- <div class="sec-title">
            <h2>Our Expert <br> Consultants</h2>
        </div> --}}

        <div class="row clearfix">
            
            <!--Counter Column-->
            {{-- <div class="counter-column col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="text">Voluptate velit essle duis irurey dolor reprehenderit cillum dolorete fugiat nulla pariatur excpteur sinton capdatat proident suntin culpa officia.</div>
                    <div class="fact-counter">
                        <div class="row clearfix">

                            <!--Column-->
                            <div class="column counter-column col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        <div class="count-outer count-box alternate">
                                            <span class="count-text" data-speed="2500" data-stop="260">0</span>+
                                        </div>
                                        <h4 class="counter-title">Expert Consultants</h4>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-md-6 col-sm-12">
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
                            <div class="column counter-column col-md-6 col-sm-12">
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
                            <div class="column counter-column col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000" data-stop="650">0</span>+
                                        </div>
                                        <h4 class="counter-title">projects done</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> --}}
            
            <!--Blocks Column-->
            <div class="blocks-column col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="experts-carousel owl-carousel owl-theme">
                        
                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="https://placehold.it/120" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">David Smith</a></h3>
                                    <div class="designation">Founder</div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="https://placehold.it/120" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">Salina White</a></h3>
                                    <div class="designation">Consultant</div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="https://placehold.it/120" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">Kane Bruce</a></h3>
                                    <div class="designation">Marketing</div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="https://placehold.it/120" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">David Smith</a></h3>
                                    <div class="designation">Founder</div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="https://placehold.it/120" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">Salina White</a></h3>
                                    <div class="designation">Consultant</div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="https://placehold.it/120" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">Kane Bruce</a></h3>
                                    <div class="designation">Marketing</div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="https://placehold.it/120" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">David Smith</a></h3>
                                    <div class="designation">Founder</div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="https://placehold.it/120" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">Salina White</a></h3>
                                    <div class="designation">Consultant</div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="https://placehold.it/120" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">Kane Bruce</a></h3>
                                    <div class="designation">Marketing</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End Expert Section-->

@endsection