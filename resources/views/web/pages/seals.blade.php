@extends('web.layout.default')

@section('content')

<section class="page-title" style="background-image:url({{ asset('images/bgs/seals/igp.jpg') }}); background-position: 50% 35%;">
    <div class="auto-container">
        <h1>Sellos DOP <span class="lowercase">e</span> IGP</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('web.home') }}">Inicio</a></li>
            <li>Sellos DOP <span class="lowercase">e</span> IGP</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Services Title Box-->
{{-- <section class="services-title-box">
    <div class="auto-container">
        <!--Title Box-->
        <div class="title-box">
            <div class="title">Automate & Simplify The Whole Process</div>
            <h2>We Offer Solutions to <br> Develop Better <span class="theme_color">Strategies</span></h2>
            <div class="text">Duis aute irure dolor reprehenderit in voluptate velit essl cillum dolore eud fugiat nulla pariatur. Excepteur sint ocaec atus cupdatat proident suntin culpa qui officia deserunt mol anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
        </div>
    </div>
</section> --}}
<!--End Services Title Box-->

<!--Offer Section-->
<section class="offer-section">
    <div class="auto-container">

        <div class="row clearfix">

            <!--Offer Block-->
            <div class="offer-block col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                    <div class="image">
                        <img src="{{ asset('images/dop.png') }}" alt="">
                    </div>
                    <div class="lower-content">
                        <h3>Denominación de Origen Protegida (D.O.P.)</h3>
                        <div class="text">
                            Este sello identifica un producto originario de un lugar determinado y su relación con el área geográfica es esencial para la calidad o las características del producto. Además, todas las fases de producción se realizan en esa área concreta.
                        </div>
                        {{-- <a class="read-more" href="financial-investment.html"><span class="fa fa-angle-right"></span> Read more</a> --}}
                    </div>
                </div>
            </div>

            <!--Offer Block-->
            <div class="offer-block col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                    <div class="image">
                        <img src="{{ asset('images/igp.png') }}" alt="">
                    </div>
                    <div class="lower-content">
                        <h3>Indicación Geográfica Protegida (I.G.P.)</h3>
                        <div class="text">
                            Este sello identifica un producto originario de un lugar determinado y su relación con el área geográfica es esencial para una cualidad determinada, reputación u otras característica del producto. Al menos una fase de producción se realiza en esa área concreta.                        </div>
                        {{-- <a class="read-more" href="financial-investment.html"><span class="fa fa-angle-right"></span> Read more</a> --}}
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!--End Offer Section-->

<!--Services Section-->
<section class="services-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">

                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-analysis"></span>
                        </div>
                        <h3>Política de calidad diferenciada de la Unión Europea</h3>
                        {{-- <div class="text">Acepteur sintas haecat sed cupidatat non dui proident sunt culpa qui officia sed ipsum tempor eserunt.</div> --}}
                        <div class="more-link">
                            <a class="read-more" href="https://ec.europa.eu/info/food-farming-fisheries/food-safety-and-quality/certification/quality-labels" target="_blank">
                                <span class="arrow fa fa-angle-right"></span> Más información
                            </a>
                        </div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-sports-and-competition"></span>
                        </div>
                        <h3>Base de datos de Indicaciones Geográficas de la UE - <span class="nowrap">e-Ambrosia</span></h3>
                        {{-- <div class="text">Acepteur sintas haecat sed cupidatat non dui proident sunt culpa qui officia sed ipsum tempor eserunt.</div> --}}
                        <div class="more-link">
                            <a class="read-more" href="https://ec.europa.eu/info/food-farming-fisheries/food-safety-and-quality/certification/quality-labels/geographical-indications-register/" target="_blank">
                                <span class="arrow fa fa-angle-right"></span> Más información
                            </a>
                        </div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-graph"></span>
                        </div>
                        <h3>DOP e IGP – Ministerio de Agricultura, Pesca y Alimentación</h3>
                        {{-- <div class="text">Acepteur sintas haecat sed cupidatat non dui proident sunt culpa qui officia sed ipsum tempor eserunt.</div> --}}
                        <div class="more-link">
                            <a class="read-more" href="https://www.mapa.gob.es/es/alimentacion/temas/calidad-diferenciada/dop-igp/" target="_blank">
                                <span class="arrow fa fa-angle-right"></span> Más información
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--End Services Section-->

<!--About Section-->
<section class="about-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Title Column-->
            <div class="title-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!--Sec Title-->
                    <div class="sec-title">
                        {{-- <h2>Lorem ipsum dolor sit</h2> --}}
                        <div class="title-text">&nbsp;</div>
                    </div>
                    <div class="text">
                        Los productos que pueden presumir de tener el sello de Denominación de Origen no son como los demás. Ese sello es la demostración de que cada uno de ellos tiene una historia en la que la tradición, el origen y la calidad se mezclan para que cuando lleguen a tu mesa, la descubras al paladearlos.
                    </div>
                    {{-- <a href="#" class="theme-btn btn-style-five">Who We Are</a> --}}
                </div>
            </div>

            <!--Video Column-->
            <div class="video-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">

                    <!--Video Box-->
                    <div class="video-box">
                        <figure class="image">
                            <img src="{{ asset('images/historias-mesa.jpg') }}" alt="Historias en tu mesa">
                        </figure>
                        <a href="https://www.youtube.com/watch?v=zoZNf0XXOJg" class="lightbox-image overlay-box"><span class="flaticon-arrow"></span></a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!--End About Section-->


@endsection