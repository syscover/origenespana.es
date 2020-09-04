@extends('web.layout.default')

@section('content')
	
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('images/bgs/partners/socios.jpg') }}); background-position: 50% 65%;">
    <div class="auto-container">
        <h1>Socios</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('web.home') }}">Inicio</a></li>
            <li>Socios</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Portfolio Page Section-->
<section class="portfolio-page-section">
    <div class="auto-container">
        <!--MixitUp Galery-->
        <div class="mixitup-gallery">
            
            <!--Filter-->
            <div class="filters text-center clearfix">
                
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter="all">Todos <span class="dots"></span></li>
                    <li class="filter" data-role="button" data-filter=".category-1">Categoria 1 <span class="dots"></span></li>
                    <li class="filter" data-role="button" data-filter=".category-2">Categoria 2 <span class="dots"></span></li>
                    <li class="filter" data-role="button" data-filter=".category-3">Categoria 3 <span class="dots"></span></li>
                    <li class="filter" data-role="button" data-filter=".category-4">Categoria 4 <span class="dots"></span></li>
                </ul>
                
            </div>
            
            <div class="filter-list row clearfix">
                
                <!--Gallery Block Two-->
                <div class="gallery-block-two mix all category-4 category-2 col-lg-4 col-md-6 col-sm-12">
                    <a href="{{ route('web.partners.item', ['slug' => 'nombre-socio']) }}">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://placehold.it/555x400?text=Image1" alt="" class="image image--normal">
                                <img src="https://placehold.it/555x400?text=Image2" alt="" class="image image--hover">
                            </figure>
                        </div>
                        <div class="text-box">
                            <h3>Nombre del socio</h3>
                            <p>Categoria-2 Categoria-4</p>
                        </div>
                    </a>
                </div>               
                
                <!--Gallery Block Two-->
                <div class="gallery-block-two mix all category-1 category-2 col-lg-4 col-md-6 col-sm-12">
                    <a href="{{ route('web.partners.item', ['slug' => 'nombre-socio']) }}">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://placehold.it/555x400?text=Image1" alt="" class="image image--normal">
                                <img src="https://placehold.it/555x400?text=Image2" alt="" class="image image--hover">
                            </figure>
                        </div>
                        <div class="text-box">
                            <h3>Nombre del socio</h3>
                            <p>Categoria-1 Categoria-2</p>
                        </div>
                    </a>
                </div>
                
                <!--Gallery Block Two-->
                <div class="gallery-block-two mix all category-3 category-4 col-lg-4 col-md-6 col-sm-12">
                    <a href="{{ route('web.partners.item', ['slug' => 'nombre-socio']) }}">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://placehold.it/555x400?text=Image1" alt="" class="image image--normal">
                                <img src="https://placehold.it/555x400?text=Image2" alt="" class="image image--hover">
                            </figure>
                        </div>
                        <div class="text-box">
                            <h3>Nombre del socio</h3>
                            <p>Categoria-3 Categoria-4</p>
                        </div>
                    </a>
                </div>
                
                <!--Gallery Block Two-->
                <div class="gallery-block-two mix all category-1 col-lg-4 col-md-6 col-sm-12">
                    <a href="{{ route('web.partners.item', ['slug' => 'nombre-socio']) }}">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://placehold.it/555x400?text=Image1" alt="" class="image image--normal">
                                <img src="https://placehold.it/555x400?text=Image2" alt="" class="image image--hover">
                            </figure>
                        </div>
                        <div class="text-box">
                            <h3>Nombre del socio</h3>
                            <p>Categoria-1</p>
                        </div>
                    </a>
                </div>
                
                <!--Gallery Block Two-->
                <div class="gallery-block-two mix all category-1 category-4 col-lg-4 col-md-6 col-sm-12">
                    <a href="{{ route('web.partners.item', ['slug' => 'nombre-socio']) }}">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://placehold.it/555x400?text=Image1" alt="" class="image image--normal">
                                <img src="https://placehold.it/555x400?text=Image2" alt="" class="image image--hover">
                            </figure>
                        </div>
                        <div class="text-box">
                            <h3>Nombre del socio</h3>
                            <p>Categoria-1 Categoria-4</p>
                        </div>
                    </a>
                </div>
                
                <!--Gallery Block Two-->
                <div class="gallery-block-two mix all category-1 col-lg-4 col-md-6 col-sm-12">
                    <a href="{{ route('web.partners.item', ['slug' => 'nombre-socio']) }}">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://placehold.it/555x400?text=Image1" alt="" class="image image--normal">
                                <img src="https://placehold.it/555x400?text=Image2" alt="" class="image image--hover">
                            </figure>
                        </div>
                        <div class="text-box">
                            <h3>Nombre del socio</h3>
                            <p>Categoria-1</p>
                        </div>
                    </a>
                </div>
                
                <!--Gallery Block Two-->
                <div class="gallery-block-two mix all category-2 category-4 col-lg-4 col-md-6 col-sm-12">
                    <a href="{{ route('web.partners.item', ['slug' => 'nombre-socio']) }}">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://placehold.it/555x400?text=Image1" alt="" class="image image--normal">
                                <img src="https://placehold.it/555x400?text=Image2" alt="" class="image image--hover">
                            </figure>
                        </div>
                        <div class="text-box">
                            <h3>Nombre del socio</h3>
                            <p>Categoria-2 Categoria-4</p>
                        </div>
                    </a>
                </div>
                
                <!--Gallery Block Two-->
                <div class="gallery-block-two mix all category-4 col-lg-4 col-md-6 col-sm-12">
                    <a href="{{ route('web.partners.item', ['slug' => 'nombre-socio']) }}">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://placehold.it/555x400?text=Image1" alt="" class="image image--normal">
                                <img src="https://placehold.it/555x400?text=Image2" alt="" class="image image--hover">
                            </figure>
                        </div>
                        <div class="text-box">
                            <h3>Nombre del socio</h3>
                            <p>Categoria-4</p>
                        </div>
                    </a>
                </div>
                
                <!--Gallery Block Two-->
                <div class="gallery-block-two mix all category-3 col-lg-4 col-md-6 col-sm-12">
                    <a href="{{ route('web.partners.item', ['slug' => 'nombre-socio']) }}">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://placehold.it/555x400?text=Image1" alt="" class="image image--normal">
                                <img src="https://placehold.it/555x400?text=Image2" alt="" class="image image--hover">
                            </figure>
                        </div>
                        <div class="text-box">
                            <h3>Nombre del socio</h3>
                            <p>Categoria-3</p>
                        </div>
                    </a>
                </div>
                
            </div>
            
            <!--Button Box-->
            <div class="button-box text-center">
                <a href="#" class="theme-btn btn-style-five">Load More</a>
            </div>
            
        </div>
        
    </div>
</section>
<!--End Portfolio Page Section-->

<!--Call To Action Section-->
<section class="call-to-action-two" style="background-image: url(https://placehold.it/1920x1080)">
    <div class="auto-container">
        <h2>¿Quieres formar parte de Origen España?</h2>
        <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non vero praesentium, quibusdam, repudiandae provident molestiae nam dolores impedit quam, sequi ipsum perspiciatis vitae facere dignissimos voluptatem ipsam voluptatum repellendus velit.</div>
        <a href="" class="theme-btn btn-style-five">Hazte Socio</a>
    </div>
</section>
<!--End Call To Action Section-->

@endsection