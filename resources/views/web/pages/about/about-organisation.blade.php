@extends('web.layout.default')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('images/bgs/about/organos.jpg') }}); background-position: 50% 80%;">
    <div class="auto-container">
        <h1>Órganos de representación</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('web.home') }}">Inicio</a></li>
            <li>Nosotros</li>
            <li>Órganos de representación</li>
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
            <h2>La <span class="theme_color">Asamblea General</span> es el órgano supremo de gobierno de Origen España, integrada por <span class="theme_color">todos los asociados</span>.</h2>
            <div class="text">Actualmente, la Junta Directiva de ORIGEN ESPAÑA está formada por:</div>
        </div>
    </div>
</section>
<!--End Services Title Box-->

<!--Fluid Section Three-->
<section class="fluid-section-three">
    <div class="outer-box clearfix">
        <div class="container">
            <!--Content Column-->
            <div class="left-column">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>Junta Directiva</h2>
                    </div>
                    
                    <!--Featured Block Two-->
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <h3><a href="#">PRESIDENCIA:</a></h3>
                            <div class="text">CR IGPs de Carne de Vacuno de Galicia</div>
                            <div class="children">
                                <div class="inner-box">
                                    <h3><a href="#">VICEPRESIDENCIA 1ª:</a></h3>
                                    <div class="text">CR DOP Queso Manchego</div>
                                </div>
                                <div class="inner-box">
                                    <h3><a href="#">VICEPRESIDENCIA 2ª:</a></h3>
                                    <div class="text">CR DOP Jabugo</div>
                                </div>
                                <div class="inner-box">
                                    <h3><a href="#">VICEPRESIDENCIA 3ª:</a></h3>
                                    <div class="text">CR DOP Pimentón de la Vera</div>
                                    <div class="children">
                                        <div class="inner-box">
                                            <h3><a href="#">SECRETARIA:</a></h3>
                                            <div class="text">CR IGPs Jijona y Turrón de Alicante</div>
                                        </div>
                                        <div class="inner-box">
                                            <h3><a href="#">TESORERO:</a></h3>
                                            <div class="text">CR DOP Torta del Casar</div>
                                        </div>
                                        <div class="inner-box">
                                            <h3><a href="#">VOCAL:</a></h3>
                                            <div class="text">CR DOP Uva de Mesa Embolsada del Vinalopó</div>
                                        </div>
                                        <div class="inner-box">
                                            <h3><a href="#">VOCAL:</a></h3>
                                            <div class="text">CR DOP Los Pedroches</div>
                                        </div>
                                        <div class="inner-box">
                                            <h3><a href="#">VOCAL:</a></h3>
                                            <div class="text">CR DOP Sierra Mágina</div>
                                        </div>
                                        <div class="inner-box">
                                            <h3><a href="#">VOCAL:</a></h3>
                                            <div class="text">CR DOP Pimentón de Murcia</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text">Asimismo, existe un Comité Técnico encargado de asesorar a la Junta Directiva en diversas materias relacionadas con las DOP e IGP agroalimentarias.</div>
                        </div>
                    </div>
                    
                    {{-- <div class="btn-box">
                        <a href="#" class="theme-btn btn-style-five">View Our Programs</a>
                    </div> --}}
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Fluid Section Three-->

@endsection