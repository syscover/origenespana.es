@extends('web.layout.default')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('images/bgs/relations/relaciones.jpg') }}); background-position: 50% 50%;">
    <div class="auto-container">
        <h1>Relaciones Institucionales</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('web.home') }}">Inicio</a></li>
            <li>Relaciones Institucionales</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Services Title Box-->
<section class="services-title-box services-title-box--left">
    <div class="auto-container">
        <!--Title Box-->
        <div class="title-box">
            <div class="title">&nbsp;</div>
            <h2><span class="theme_color">Convenios</span></h2>
            {{-- <div class="text">Duis aute irure dolor reprehenderit in voluptate velit essl cillum dolore eud fugiat nulla pariatur. Excepteur sint ocaec atus cupdatat proident suntin culpa qui officia deserunt mol anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div> --}}
        </div>
    </div>
</section>
<!--End Services Title Box-->

<!--Offer Section-->
<section class="offer-section offer-section--relations">
    <div class="auto-container">
        
        <div class="row clearfix">
            
            <!--Offer Block-->
            <div class="offer-block col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('images/conv/originals/ministerio.png') }}" alt="Ministerio de Agricultura, Pesca y Alimentación"/>
                    </div>
                    <div class="lower-content">
                        <h3>Ministerio de Agricultura, Pesca y Alimentación</h3>
                        <div class="text">
                            <span class="theme_color">Finalidad convenio firmado:</span> Fomentar la promoción alimentaria y ser órgano de consulta para temas de política sectorial.
                        </div>
                        <a class="read-more" href="https://www.mapa.gob.es/" target="_blank"><span class="fa fa-angle-right"></span> Más información</a>
                    </div>
                </div>
            </div>
            
            <!--Offer Block-->
            <div class="offer-block col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('images/conv/originals/patentes.png') }}" alt="Oficina Española de Patentes y Marcas" />
                    </div>
                    <div class="lower-content">
                        <h3>Oficina Española de Patentes y Marcas</h3>
                        <div class="text">
                            <span class="theme_color">Finalidad convenio firmado:</span> Facilitar, impulsar y estimular el conocimiento y la utilización de los derechos de Propiedad Industrial dentro del sector de las DOP e IGP agroalimentarias. Defensa del término “ORIGEN”.
                        </div>
                        <a class="read-more" href="https://www.oepm.es/" target="_blank"><span class="fa fa-angle-right"></span> Más información</a>
                    </div>
                </div>
            </div>
            
            <!--Offer Block-->
            <div class="offer-block col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('images/conv/originals/gc.jpg') }}" alt="Guardia Civil" />
                    </div>
                    <div class="lower-content">
                        <h3>Guardia Civil</h3>
                        <div class="text">
                            <span class="theme_color">Finalidad convenio firmado:</span> Promover la colaboración para mejorar la investigación de actividades ilícitas en el ámbito de la producción y tráfico de alimentos, así como su adulteración o falsificación.
                        </div>
                        <a class="read-more" href="https://www.guardiacivil.es/" target="_blank"><span class="fa fa-angle-right"></span> Más información</a>
                    </div>
                </div>
            </div>
            
            <!--Offer Block-->
            <div class="offer-block col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('images/conv/originals/aces.png') }}" alt="Asociación de Cadenas Españolas de Supermercados" />
                    </div>
                    <div class="lower-content">
                        <h3>Asociación de Cadenas Españolas de Supermercados</h3>
                        <div class="text">
                            <span class="theme_color">Finalidad convenio firmado:</span> Cooperación en materia de protección de las figuras de calidad alimentaria DOP e IGP en los supermercados nacionales. 
                        </div>
                        <a class="read-more" href="http://www.asociacionsupermercados.com/" target="_blank"><span class="fa fa-angle-right"></span> Más información</a>
                    </div>
                </div>
            </div>
            
            <!--Offer Block-->
            <div class="offer-block col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('images/conv/originals/tequila.png') }}" alt="Consejo Regulador del Tequila" />
                    </div>
                    <div class="lower-content">
                        <h3>Consejo Regulador del Tequila</h3>
                        <div class="text">
                            <span class="theme_color">Finalidad convenio firmado:</span> Potenciar la calidad diferenciada e impulsar la protección de las denominaciones de origen en Méjico y España.
                        </div>
                        <a class="read-more" href="https://www.crt.org.mx/" target="_blank"><span class="fa fa-angle-right"></span> Más información</a>
                    </div>
                </div>
            </div>
            
            <!--Offer Block-->
            <div class="offer-block col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('images/conv/originals/basque.jpg') }}" alt="Basque Culinary Center" />
                    </div>
                    <div class="lower-content">
                        <h3>Basque Culinary Center</h3>
                        <div class="text">
                            <span class="theme_color">Finalidad convenio firmado:</span> Trabajar en actuaciones orientadas a destacar las DOP e IGP en la gastronomía.
                        </div>
                        <a class="read-more" href="https://www.bculinary.com/" target="_blank"><span class="fa fa-angle-right"></span> Más información</a>
                    </div>
                </div>
            </div>
                        
        </div>
        
    </div>
</section>
<!--End Offer Section-->

<!--Services Title Box-->
<section class="services-title-box services-title-box--left">
    <div class="auto-container">
        <!--Title Box-->
        <div class="title-box">
            <div class="title">&nbsp;</div>
            <h2>Formamos <span class="theme_color">parte de</span></h2>
            {{-- <div class="text">Duis aute irure dolor reprehenderit in voluptate velit essl cillum dolore eud fugiat nulla pariatur. Excepteur sint ocaec atus cupdatat proident suntin culpa qui officia deserunt mol anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div> --}}
        </div>
    </div>
</section>
<!--End Services Title Box-->

<!--Offer Section-->
<section class="offer-section offer-section--relations">
    <div class="auto-container">
        
        <div class="row clearfix">
            
            <!--Offer Block-->
            <div class="offer-block col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('images/conv/originals/origin.png') }}" alt="Organization for an International Geographical Indications Network" />
                    </div>
                    <div class="lower-content">
                        <h3>Organization for an International Geographical Indications Network</h3>
                        {{-- <div class="text">Acepteur sintas haecate sed ipsums cupidates nondui proident sunlt culpa qui tempore officia sed ipsum tempor eserunt.</div> --}}
                        <a class="read-more" href="https://www.origin-gi.com/" target="_blank"><span class="fa fa-angle-right"></span> Más información</a>
                    </div>
                </div>
            </div>
            
            <!--Offer Block-->
            <div class="offer-block col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('images/conv/originals/aec.png') }}" alt="Asociación Española para la Calidad" />
                    </div>
                    <div class="lower-content">
                        <h3>Asociación Española para la Calidad</h3>
                        {{-- <div class="text">Acepteur sintas haecate sed ipsums cupidates nondui proident sunlt culpa qui tempore officia sed ipsum tempor eserunt.</div> --}}
                        <a class="read-more" href="https://www.aec.es/" target="_blank"><span class="fa fa-angle-right"></span> Más información</a>
                    </div>
                </div>
            </div>
            
            <!--Offer Block-->
            <div class="offer-block col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('images/conv/originals/enac.png') }}" alt="Entidad Nacional de Acreditación" />
                    </div>
                    <div class="lower-content">
                        <h3>Entidad Nacional de Acreditación</h3>
                        {{-- <div class="text">Acepteur sintas haecate sed ipsums cupidates nondui proident sunlt culpa qui tempore officia sed ipsum tempor eserunt.</div> --}}
                        <a class="read-more" href="https://www.enac.es/" target="_blank"><span class="fa fa-angle-right"></span> Más información</a>
                    </div>
                </div>
            </div>
            
            <!--Offer Block-->
            <div class="offer-block col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('images/conv/originals/aippi.png') }}" alt="Asociación Internacional para la Protección de la Propiedad Intelectual" />
                    </div>
                    <div class="lower-content">
                        <h3>Asociación Internacional para la Protección de la Propiedad Intelectual</h3>
                        {{-- <div class="text">Acepteur sintas haecate sed ipsums cupidates nondui proident sunlt culpa qui tempore officia sed ipsum tempor eserunt.</div> --}}
                        <a class="read-more" href="https://aippi.org/" target="_blank"><span class="fa fa-angle-right"></span> Más información</a>
                    </div>
                </div>
            </div>
            
            
        </div>
        
    </div>
</section>
<!--End Offer Section-->


@endsection