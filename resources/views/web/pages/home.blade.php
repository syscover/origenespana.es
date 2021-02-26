@extends('web.layout.default')

@section('content')
<!--Main Slider-->
<section class="main-slider">

    <div class="main-slider-carousel owl-carousel owl-theme">

        <div class="slide" style="background-image:url({{ asset('images/bgs/home/home-1.jpg') }})">
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

        <div class="slide" style="background-image:url({{ asset('images/bgs/home/home-2.jpg') }})">
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

        <div class="slide" style="background-image:url({{ asset('images/bgs/home/home-3.jpg') }})">
            <div class="auto-container">
                <div class="content">
                    <h3 class="style-two">Somos ORIGEN, CALIDAD, TRADICIÓN Y GARANTÍA</h3>
                    <h2>Productos únicos de orígenes únicos</h2>
                    <div class="text">
                        <br>
                        Puedes saber más sobre productos agroalimentarios españoles con DOP e IGP pinchando en “Más información”
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

<!--Call To Action Section-->
<section class="call-to-action-two" style="background-image: url({{ asset('images/historias-mesa.jpg') }})">
    <div class="auto-container">
        <h2>Campañas de promoción sobre<br>productos con DOP e IGP</h2>
        {{-- <div class="text">Visita la web de "Historias en tu mesa"</div> --}}
        <a href="https://abrelosojosydisfruta.es/" target="_blank" class="theme-btn btn-style-five">Visita "Abre los ojos y disfruta"</a>
        <a href="https://www.historiasentumesa.es/" target="_blank" class="theme-btn btn-style-five ml-5">Visita "Historias en tu mesa"</a>
    </div>
</section>
<!--End Call To Action Section-->

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
            <div class="title-text">Asociación Española de Denominaciones de Origen</div>
        </div>
    </div>
    <div class="four-item-carousel owl-carousel owl-theme">

        @foreach($highlightsPartners as $partner)
        <!--Case Block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="{{ asset($partner->listImage) }}" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <div class="text">
                                {{ strlen(strip_tags($partner->description)) > 200 ? substr(strip_tags($partner->description), 0, 200) . '...' : strip_tags($partner->description)  }}
                                </div>
                                <a href="{{ route('web.partners.item', ['slug' => $partner->slug]) }}" class="read-more"><span class="fa fa-angle-right"></span> Más detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <!-- <div class="category"></div> -->
                    <h3><a href="{{ route('web.partners.item', ['slug' => $partner->slug]) }}">{{ $partner->name }}</a></h3>
                </div>
            </div>
        </div>
        @endforeach

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

                    @foreach($news as $newsItem)
                    <!--News Block-->
                    <div class="news-block">
                        <div class="inner-box">
                            <ul class="post-info">
                                <li>{{ $newsItem->date }}</li>
                                <!-- <li>Consultant</li> -->
                            </ul>
                            <h3><a href="{{ route('web.blog.post', ['slug' => $newsItem->slug]) }}">{{ $newsItem->excerpt }}</a></h3>
                        </div>
                    </div>
                    @endforeach

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

<!--Expert Section-->
<section class="expert-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title">
            <h2>Relaciones institucionales</h2>
        </div>

        <div class="row clearfix">

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
                                    <h3><a href="{{ route('web.relations') }}">Ministerio de Agricultura, Pesca y Alimentacion</a></h3>
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
                                    <h3><a href="{{ route('web.relations') }}">Oficina de Patentes y Marcas</a></h3>
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
                                    <h3><a href="{{ route('web.relations') }}">Guardia Civil</a></h3>
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
                                    <h3><a href="{{ route('web.relations') }}">Asociación de Cadenas Españolas de Supermercados</a></h3>
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
                                    <h3><a href="{{ route('web.relations') }}">Consejo Regulador del Tequila</a></h3>
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
                                    <h3><a href="{{ route('web.relations') }}">Basque Culinary Center</a></h3>
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
                                    <h3><a href="{{ route('web.relations') }}">Organization for an International Geographical Indications Network</a></h3>
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
                                    <h3><a href="{{ route('web.relations') }}">Asociación Española para la Calidad</a></h3>
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
                                    <h3><a href="{{ route('web.relations') }}">Entidad Nacional de Acreditación</a></h3>
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
                                    <h3><a href="{{ route('web.relations') }}">Asociación Internacional para la Protección de la Propiedad Intelectual</a></h3>
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