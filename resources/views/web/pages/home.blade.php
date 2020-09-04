@extends('web.layout.default')

@section('content')
<!--Main Slider-->
<section class="main-slider">
                
    <div class="main-slider-carousel owl-carousel owl-theme">
        
        <div class="slide" style="background-image:url({{ asset('images/bgs/home/home-slide1.jpg') }})">
            <div class="auto-container">
                <div class="content">
                    <h3>Denominación de Origen Protegida</h3>
                    <h2>
                        <img src="{{ asset('images/dop.png') }}" alt="DOP">
                    </h2>
                    <div class="text">
                        Estos sellos no son una etiqueta más, son la garantía de que tras cada producto con denominación de origen hay una historia de esfuerzo, tradición y calidad. Un producto con origen único garantizado que llega a nosotros cada vez que los disfrutamos.    
                    </div>
                    <div class="link-box">
                        <a href="{{ route('web.seals') }}" class="theme-btn btn-style-two">Más información</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide" style="background-image:url({{ asset('images/bgs/home/home-slide2.jpg') }})">
            <div class="auto-container">
                <div class="content">
                    <h3>Indicación Geográfica Protegida</h3>
                    <h2>
                        <img src="{{ asset('images/igp.png') }}" alt="IGP">
                    </h2>
                    <div class="text">
                        Estos sellos no son una etiqueta más, son la garantía de que tras cada producto con denominación de origen hay una historia de esfuerzo, tradición y calidad. Un producto con origen único garantizado que llega a nosotros cada vez que los disfrutamos.    
                    </div>
                    <div class="link-box">
                        <a href="{{ route('web.seals') }}" class="theme-btn btn-style-two">Más información</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="slide" style="background-image:url({{ asset('images/bgs/home/home-slide3.jpg') }})">
            <div class="auto-container">
                <div class="content">
                    <h3 class="style-two">¿Tienes una DOP o IGP?</h3>
                    <h2>Hazte socio</h2>
                    <div class="text">
                        <br>
                        Puedes saber más sobre nuestros socios y sus beneficios pinchando en "Más información"
                        <br>
                        <br>
                    </div>
                    <div class="link-box">
                        <a href="{{ route('web.partners.list') }}" class="theme-btn btn-style-two">Más informacion</a>
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
            <div class="title">Asociación Española de Denominaciones de Origen</div>
            <h2>Bienvenido a <span class="theme_color">Origen España</span></h2>
            <div class="text">
                Nos pusimos en marcha en marzo de 2008 por la inquietud común de un grupo de productores de productos agroalimentarios por fomentar el reconocimiento del papel esencial de las Denominaciones de Origen Protegidas (DOP) e Indicaciones Geográficas Protegidas (IGP) españolas, más conocidas globalmente en España como “denominaciones de origen”.
                <br><br>
                Origen España aúna las voces de las DOP e IGP en un interlocutor único, impulsando la protección de estas figuras de calidad diferenciada, defendiendo y protegiendo el esfuerzo de quienes día a día trabajan por conseguir productos agroalimentarios de calidad, con tradición, prestigio y reputación únicas.
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
            <h2>Últimas asambleas</h2>
            <div class="title-text">Asambleas y Jornadas Técnicas de Origen España.</div>
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
        <div>
            <br>
            <a href="{{ route('web.about.organisation') }}" class="theme-btn btn-style-two">Ver todas las asambleas</a>
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
<section class="call-to-action-two" style="background-image: url({{ asset('images/historias-mesa.jpg') }})">
    <div class="auto-container">
        <h2>Campañas de promoción sobre<br>productos con DOP e IGP</h2>
        {{-- <div class="text">Visita la web de "Historias en tu mesa"</div> --}}
        <a href="https://www.historiasentumesa.es/" target="_blank" class="theme-btn btn-style-five">Visita "Historias en tu mesa"</a>
    </div>
</section>
<!--End Call To Action Section-->

<!--Expert Section-->
<section class="expert-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title">
            <h2>Convenios firmados</h2>
        </div>

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
                                <div class="image" data-tooltip="Fomentar la promoción alimentaria y ser órgano de consulta para temas de política sectorial.">
                                    <img src="{{ asset('images/conv/originals/ministerio.png') }}" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a >Ministerio de Agricultura, Pesca y Alimentacion</a></h3>
                                    <div class="designation">Convenio</div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image" data-tooltip="Facilitar, impulsar y estimular el conocimiento y la utilización de los derechos de Propiedad Industrial dentro del sector de las DOP e IGP agroalimentarias. Defensa del término “ORIGEN”.">
                                    <img src="{{ asset('images/conv/originals/patentes.png') }}" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a >Oficina de Patentes y Marcas</a></h3>
                                    <div class="designation">Convenio</div>
                                </div>
                            </div>
                        </div>

                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image" data-tooltip="Promover la colaboración para mejorar la investigación de actividades ilícitas en el ámbito de la producción y tráfico de alimentos, así como su adulteración o falsificación.">
                                    <img src="{{ asset('images/conv/originals/gc.jpg') }}" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a >Guardia Civil</a></h3>
                                    <div class="designation">Convenio</div>
                                </div>
                            </div>
                        </div>

                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image" data-tooltip="Cooperación en materia de protección de las figuras de calidad alimentaria DOP e IGP en los supermercados nacionales.">
                                    <img src="{{ asset('images/conv/originals/aces.png') }}" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a >Asociación de Cadenas Españolas de Supermercados</a></h3>
                                    <div class="designation">Convenio</div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image" data-tooltip="Potenciar la calidad diferenciada e impulsar la protección de las denominaciones de origen en Méjico y España.">
                                    <img src="{{ asset('images/conv/originals/tequila.png') }}" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a >Consejo Regulador del Tequila</a></h3>
                                    <div class="designation">Convenio</div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image" data-tooltip="Trabajar en actuaciones orientadas a destacar las DOP e IGP en la gastronomía.">
                                    <img src="{{ asset('images/conv/originals/basque.jpg') }}" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a >Basque Culinary Center</a></h3>
                                    <div class="designation">Convenio</div>
                                </div>
                            </div>
                        </div>
                                                
                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('images/conv/originals/origin.png') }}" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a href="https://www.origin-gi.com/" target="_blank">Organization for an International Geographical Indications Network</a></h3>
                                    <div class="designation">Formamos parte de</div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('images/conv/originals/aec.png') }}" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a href="https://www.aec.es/" target="_blank">Asociación Española para la Calidad</a></h3>
                                    <div class="designation">Formamos parte de</div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('images/conv/originals/enac.png') }}" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a href="https://www.enac.es/" target="_blank">Entidad Nacional de Acreditación</a></h3>
                                    <div class="designation">Formamos parte de</div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Expert Block-->
                        <div class="expert-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('images/conv/originals/aippi.png') }}" alt="" />
                                </div>
                                <div class="lower-content">
                                    <h3><a href="https://aippi.org/" target="_blank">Asociación Internacional para la Protección de la Propiedad Intelectual</a></h3>
                                    <div class="designation">Formamos parte de</div>
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