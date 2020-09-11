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

<!--Testimonial Section-->
<section class="testimonial-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title">
            <h2>Asambleas</h2>
            <div class="title-text">Asambleas y Jornadas Técnicas de Origen España.</div>
        </div>
        <div class="testimonials">
            
            <!--Testimonial Block Two-->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="row flex-sm-row-reverse clearfix">
                        <!--Image Column-->
                        <div class="image-column col-lg-5 col-md-5 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img class="img-fluid" src="{{ asset('/images/asambleas/asamblea-2019.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>
                        <!--Content Column-->
                        <div class="content-column col-lg-7 col-md-7 col-sm-12">
                            <div class="inner-column">
                                <p class="title">Asamblea 2019 <small>(5 al 7 de junio)</small></p>
                                <div class="text">
                                    Jerez de la Frontera se convirtió en la capital española de las DOP e IGP del 5 al 7 de junio de 2019. Allí celebró la asociación la undécima edición de las jornadas técnicas y asamblea general anual, organizadas por la <strong>DOP Vinagre de Jerez</strong> como parte de los actos conmemorativos del 25 aniversario de su creación.     
                                </div>
                                {{-- <div class="author">Camron White</div> --}}
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
                                    <img class="img-fluid" src="{{ asset('/images/asambleas/asamblea-2018.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>
                        <!--Content Column-->
                        <div class="content-column col-lg-7 col-md-7 col-sm-12">
                            <div class="inner-column">
                                <p class="title">Asamblea 2018 <small>(13 al 15 de junio)</small></p>
                                <div class="text">
                                    Del 13 al 15 de junio de 2018 celebramos el 10º aniversario de ORIGEN ESPAÑA en Zamora. En esta edición, las jornadas técnicas y la asamblea general estuvieron organizadas por la <strong>DOP Queso Zamorano</strong>, que celebraba su aniversario al cumplir 25 años de reconocimiento como DOP.
                                </div>
                                {{-- <div class="author">Camron White</div> --}}
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
                                    <img class="img-fluid" src="{{ asset('/images/asambleas/asamblea-2017.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>
                        <!--Content Column-->
                        <div class="content-column col-lg-7 col-md-7 col-sm-12">
                            <div class="inner-column">
                                <p class="title">Asamblea 2017 <small>(8 al 10 de noviembre)</small></p>
                                <div class="text">
                                    ORIGEN ESPAÑA celebró su 9ª edición de jornadas técnicas y asamblea general del 8 al 10 de noviembre de 2017. El anfitrión, en esta ocasión, fue la <strong>DOP Jabugo</strong>, quien nos acogió en su sede ubicada en el emblemático Edificio El Tiro, en el municipio de Jabugo.
                                </div>
                                {{-- <div class="author">Camron White</div> --}}
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
                                    <img class="img-fluid" src="{{ asset('/images/asambleas/asamblea-2016.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>
                        <!--Content Column-->
                        <div class="content-column col-lg-7 col-md-7 col-sm-12">
                            <div class="inner-column">
                                <p class="title">Asamblea 2016 <small>(17 al 18 de noviembre)</small></p>
                                <div class="text">
                                    La 8ª edición de las jornadas técnicas y asamblea general se celebraron en San Sebastián del 17 al 18 de noviembre de 2016, organizadas por la <strong>DOP Idiazabal</strong>. En esa edición ORIGEN ESPAÑA comunicó a los asociados que la Comisión Europea aprobaba nuestro proyecto de promoción “Historias en tu mesa”.
                                </div>
                                {{-- <div class="author">Camron White</div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End Testimonial Section-->


@endsection