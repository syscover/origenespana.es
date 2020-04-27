@extends('web.layout.default')

@section('content')

<section class="page-title" style="background-image:url({{ asset('images/theme/background/6.jpg') }})">
    <div class="auto-container">
        <h1>Nombre del Socio</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('web.home') }}">Inicio</a></li>
            <li><a href="{{ route('web.partners.list') }}">Socios</a></li>
            <li>Nombre del Socio</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Portfolio Single Section-->
<section class="portfolio-single-section">
    <div class="auto-container">
        <div class="row flex-md-row-reverse clearfix">
        
            <!--Content Column-->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h2>Nombre del socio</h2>
                    <div class="title">Categoria-1 Categoria-2</div>
                    <div class="text">
                        <p>Duis aute irure dolor reprehenderit in voluptate velit essl cillum dolore eudys sint ocaec atus cupdatat proident suntin culpa qui officia deserunt mol anim consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolr minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        <p>Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehende um dolore eu fugiat nulla pariatur excepteur sint occaecat cupidata lorem ip sum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incid sidunt ut labore et dolore magna aliqua. </p>
                        <p>Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi utmas aliquip ex ea duis aute irure dolor in reprehenderit.</p>
                        <!--Featured Block Two-->
                        <div class="feature-block-two style-two">
                            <div class="inner-box">
                                <h3>The Leadership Ideas</h3>
                                <div class="text">Excepteur sint ocaec at cupdatat proide eserunt mol anim.</div>
                            </div>
                        </div>

                        <!--Featured Block Two-->
                        <div class="feature-block-two style-two">
                            <div class="inner-box">
                                <h3>Transform Yourself</h3>
                                <div class="text">Excepteur sint ocaec at cupdatat proide eserunta laborum.</div>
                            </div>
                        </div>
                        <p>Duis aute irure dolor reprehenderit in voluptate velit essl cillum dolore eudys sint ocaec atus cupdatat proident suntin culpa qui officia deserunt mol anim consectetur adipisicing elit sed do eiusmod tempor.</p>
                    </div>
                    <ul class="porfolio-info">
                        <li>
                            <span>Direccion:</span><br/>
                            Consejo Regulador de las IGP de Carne de Vacuno de Galicia<br/>
                            Recinto Ferial, Amio S/N<br/>
                            15891 Santiago de Compostela (A Coruña)
                        </li>
                        <li>
                            <span>Teléfonos:</span><br/>
                            <a href="tel:981 57 57 86" target="_blank">Fijo: 981 57 57 86</a>
                            <a href="tel:981 57 48 95" target="_blank">Fax: 981 57 48 95</a>
                        </li>
                        <li>
                            <span>Email:</span><br/>
                            <a href="mailto:consello@vacundegalicia.com" target="_blank" class="lowercase">consello@vacundegalicia.com</a>
                        </li>
                        <li>
                            <span>Web:</span><br/>
                            <a href="https://google.com" target="_blank" class="lowercase">google.com</a>
                        </li>
                        <li>
                            <span>Redes sociales:</span><br/>
                            <a href="https://google.com" target="_blank" class="lowercase"><i class="fa fa-facebook"></i></a>
                            <a href="https://google.com" target="_blank" class="lowercase"><i class="fa fa-twitter"></i></a>
                            <a href="https://google.com" target="_blank" class="lowercase"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                    {{-- <ul class="portfolio-share">
                        <li><span class="icon fa fa-share-alt"></span>Share This</li>
                        <li><span class="icon fa fa-heart-o"></span>153</li>
                    </ul> --}}
                </div>
            </div>
            
            <!--Image Column-->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image">
                        <img src="{{ asset('images/theme/gallery/26.jpg') }}" alt="" />
                    </div>
                    <div class="image">
                        <img src="{{ asset('images/theme/gallery/27.jpg') }}" alt="" />
                    </div>
                    <div class="image">
                        <img src="{{ asset('images/theme/gallery/28.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
            
        </div>
        
        <!--New Posts-->
        <div class="new-posts clearfix">
            <a href="#" class="prev-post"><span class="icon fa fa-caret-left"></span> Socio anterior</a>
            <a href="#" class="next-post">Socio siguiente <span class="icon fa fa-caret-right"></span></a>
        </div>
        
    </div>
</section>
<!--End Portfolio Single Section-->

<!--Related Projects-->
<section class="related-posts">
    <div class="auto-container">
        
        <!--Sec Title-->
        <div class="sec-title centered">
            <h2>Socios relacionados</h2>
            <div class="title-text">Automate & Simplify The Whole Process</div>
        </div>
        <div class="row clearfix">
           
            <!--Gallery Block-->
            <div class="gallery-block-two col-lg-4 col-md-6 col-sm-12">
                <a href="{{ route('web.partners.item', ['slug' => 'nombre-socio']) }}">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="https://placehold.it/555x400?text=Image1" alt="" class="image image--normal">
                            <img src="https://placehold.it/555x400?text=Image2" alt="" class="image image--hover">
                        </figure>
                    </div>
                    <div class="text-box">
                        <h3>Nombre del socio</h3>
                        <p>Categoria-2</p>
                    </div>
                </a>
            </div>
            
            <!--Gallery Block-->
            <div class="gallery-block-two col-lg-4 col-md-6 col-sm-12">
                <a href="{{ route('web.partners.item', ['slug' => 'nombre-socio']) }}">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="https://placehold.it/555x400?text=Image1" alt="" class="image image--normal">
                            <img src="https://placehold.it/555x400?text=Image2" alt="" class="image image--hover">
                        </figure>
                    </div>
                    <div class="text-box">
                        <h3>Nombre del socio</h3>
                        <p>Categoria-2</p>
                    </div>
                </a>
            </div>
            
            <!--Gallery Block-->
            <div class="gallery-block-two col-lg-4 col-md-6 col-sm-12">
                <a href="{{ route('web.partners.item', ['slug' => 'nombre-socio']) }}">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="https://placehold.it/555x400?text=Image1" alt="" class="image image--normal">
                            <img src="https://placehold.it/555x400?text=Image2" alt="" class="image image--hover">
                        </figure>
                    </div>
                    <div class="text-box">
                        <h3>Nombre del socio</h3>
                        <p>Categoria-2</p>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
</section>
<!--End Related Projects-->

<!--File Modal-->
<div class="modal fade" id="fileModal" tabindex="-1" role="dialog" aria-labelledby="fileModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pliego de condiciones de "Nombre del socio"</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe src="http://origenespana.es/wp-content/uploads/2013/09/Pliego_de_condiciones_Ternera_Gallega_enero_20131.pdf" frameborder="0"></iframe>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!--End File Modal-->


@endsection