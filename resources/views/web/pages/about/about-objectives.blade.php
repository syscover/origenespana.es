@extends('web.layout.default')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('images/bgs/about/objetivos.jpg') }}); background-position: 50% 80%;">
    <div class="auto-container">
        <h1>Objetivos</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('web.home') }}">Inicio</a></li>
            <li>Nosotros</li>
            <li>Objetivos</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Services Title Box-->
<section class="services-title-box">
    <div class="auto-container">
        <!--Title Box-->
        <div class="title-box">
            <div class="title">&nbsp;</div>
            <h2><span class="theme_color">Compartir experiencias.</span> Fomento del diálogo de defensa de las <span class="theme_color">DOP</span> e <span class="theme_color">IGP</span> agroalimentarias</h2>
            <div class="text">
                Los principales objetivos de la Asociación son dos. En primer lugar, impulsar el reconocimiento del papel que estos productos tienen en el desarrollo sostenible y, en segundo lugar, promover una mejor y más eficaz protección de las DOP e IGP agroalimentarias españolas.
            </div>
        </div>
    </div>
</section>
<!--End Services Title Box-->

<!--Services Section Four-->
<section class="services-section-four">
    <div class="auto-container">
        
        <div class="row align-items-stretch clearfix">
            
            <!--Services Block Four-->
            <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-path"></span>
                    </div>
                    <h3><a href="">Planificar estrategias</a></h3>
                    <div class="text">
                        Para promover el reconocimiento del papel esencial de los productos agroalimentarios con sello DOP e IGP en el desarrollo sostenible.
                    </div>
                </div>
            </div>
            
            <!--Services Block Four-->
            <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-startup"></span>
                    </div>
                    <h3><a href="">Intercambio de experiencias</a></h3>
                    <div class="text">
                        Fomento del intercambio de conocimientos y experiencias entre productores sobre el valor añadido que las DOP e IGP confieren a las comunidades locales agroalimentarias.
                    </div>
                </div>
            </div>
            
            <!--Services Block Four-->
            <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-line-graph"></span>
                    </div>
                    <h3><a href="">Defensa</a></h3>
                    <div class="text">
                        Para una mejor y más eficaz protección de las DOP e IGP españolas, promoviendo la lucha contra el uso ilícito de estos distintivos de calidad.
                    </div>
                </div>
            </div>
            
            <!--Services Block Four-->
            <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-speaker"></span>
                    </div>
                    <h3><a href="">Diálogo</a></h3>
                    <div class="text">
                        Fomentar la defensa de las DOP e IGP con las administraciones, autoridades y organizaciones nacionales, comunitarias e internacionales, además de consumidores.
                    </div>
                </div>
            </div>
            
            <!--Services Block Four-->
            <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-analytics"></span>
                    </div>
                    <h3><a href="">Promoción</a></h3>
                    <div class="text">
                        Para incrementar el conocimiento de los consumidores acerca de los sellos DOP e IGP y que los valore y demanden por lo que significan.
                    </div>
                </div>
            </div>
            
            <!--Services Block Four-->
            <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-handshake"></span>
                    </div>
                    <h3><a href="">Unión Sectorial</a></h3>
                    <div class="text">
                        Para que las demandas y necesidades de las DOP e IGP agroalimentarias nacionales estén unidas en una voz única.
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End Services Section Four-->
    
@endsection