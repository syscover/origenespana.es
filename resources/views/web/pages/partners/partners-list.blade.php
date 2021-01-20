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
                    <li class="filter" data-role="button" data-filter=".quesos">Quesos <span class="dots"></span></li>
                    <li class="filter" data-role="button" data-filter=".carnes">Carnes<span class="dots"></span></li>
                    <li class="filter" data-role="button" data-filter=".jamones">Jamones<span class="dots"></span></li>
                    <li class="filter" data-role="button" data-filter=".embutidos">Embutidos<span class="dots"></span></li>
                    <li class="filter" data-role="button" data-filter=".hortalizas">Hortalizas<span class="dots"></span></li>
                    <li class="filter" data-role="button" data-filter=".frutas">Frutas<span class="dots"></span></li>
                    <li class="filter" data-role="button" data-filter=".pimentones">Pimentones<span class="dots"></span></li>
                    <li class="filter" data-role="button" data-filter=".aove">Aove<span class="dots"></span></li>
                    <li class="filter" data-role="button" data-filter=".vinagres">Vinagres<span class="dots"></span></li>
                    <li class="filter" data-role="button" data-filter=".turrones">Turrones<span class="dots"></span></li>
                    <li class="filter" data-role="button" data-filter=".mieles">Mieles<span class="dots"></span></li>
                    <li class="filter" data-role="button" data-filter=".panes">Panes<span class="dots"></span></li>
                    <li class="filter" data-role="button" data-filter=".moluscos">Moluscos<span class="dots"></span></li>
                </ul>

            </div>

            <div class="filter-list row clearfix">

                @foreach($partners as $partner)
                <div class="gallery-block-two mix all col-lg-4 col-md-6 col-sm-12 {{ implode(' ', $partner->categories) }}">
                    <a href="{{ route('web.partners.item', ['slug' => $partner->slug]) }}">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ $partner->listImage }}" alt="" class="image image--normal">
                                <img src="{{ $partner->listImage }}" alt="" class="image image--hover">
                            </figure>
                        </div>
                        <div class="text-box">
                            <h3>{{ $partner->name }}</h3>
                            <p>{{ $partner->position }}</p>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>

            <!--Button Box-->
            <!-- <div class="button-box text-center">
                <a href="#" class="theme-btn btn-style-five">Load More</a>
            </div> -->

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