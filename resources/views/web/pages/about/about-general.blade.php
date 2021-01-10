@extends('web.layout.default')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('images/bgs/about/quienes.jpg') }}); background-position: 50% 100%;">
    <div class="auto-container">
        <h1>Quiénes somos</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('web.home') }}">Inicio</a></li>
            <li>Nosotros</li>
            <li>Quiénes somos</li>
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
            <h2>Proteger e impulsar las <span class="theme_color">DOP</span> e <span class="theme_color">IGP</span> agroalimentarias</h2>
            <div class="text">
                La Asociación Española de Denominaciones de Origen – ORIGEN ESPAÑA – permite a sus socios compartir experiencias para establecer, desarrollar y proteger las denominaciones de origen agroalimentarias, además de facilitar el intercambio de información entre productores españoles de DOP e IGP. Asimismo, actúa como vector de comunicación e interlocutor destacado ante los organismos vinculados a las denominaciones de origen a nivel nacional, europeo e internacional.
            </div>
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
                    <h3>Representación sectorial</h3>
                    <div class="text">Interlocutor de la calidad diferencia a nivel nacional e internacional.</div>
                </div>
            </div>
            
            <!--Feature Block Four-->
            <div class="feature-block-four col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-strategy"></span>
                    </div>
                    <h3>Defensa de los esquemas de calidad diferenciada</h3>
                    <div class="text">Lucha contra la picaresca y el fraude de estos productos.</div>
                </div>
            </div>
            
            <!--Feature Block Four-->
            <div class="feature-block-four col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-sports-and-competition"></span>
                    </div>
                    <h3>Impulso de las DOP e IGP</h3>
                    <div class="text">A través de la firma de convenios.</div>
                </div>
            </div>
            
            <!--Feature Block Four-->
            <div class="feature-block-four col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="750ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-graph"></span>
                    </div>
                    <h3>Comunicación y promoción</h3>
                    <div class="text">Para difundir el valor y significado de estos productos.</div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!--Counter Section-->
<section class="counter-section-two">
    <div class="auto-container">
        <div class="inner-section">

            <div class="fact-counter">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-md-4 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="77.67">0</span> <small>%</small>
                                </div>
                                <h4 class="counter-title">Representatividad</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-md-4 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box alternate">
                                    <span class="count-text" data-speed="2750" data-stop="63">0</span>
                                </div>
                                <h4 class="counter-title">Asociados</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-md-4 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3500" data-stop="3455">0</span>
                                </div>
                                <h4 class="counter-title">Industrias adscritas a las DO en España</h4>
                            </div>
                        </div>
                    </div>

                    <div class="w-100"></div>

                    <!--Column-->
                    <div class="column counter-column col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="1268.86">0</span> <small>mill. €</small>
                                </div>
                                <h4 class="counter-title">Valor económico de los socios</h4>
                            </div>
                        </div>
                    </div>
                    
                    <!--Column-->
                    <div class="column counter-column col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box alternate">
                                    <span class="count-text" data-speed="3250" data-stop="195155">0</span>
                                </div>
                                <h4 class="counter-title">Operadores primarios vinculados a las DO en España</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
	


@endsection