@extends('web.layout.default')

@section('content')

<section class="page-title" style="background-image:url({{ asset($partner->headerImage ? $partner->headerImage : 'images/theme/random/partner/' . rand(1, 4) . '.jpg') }})">
    <div class="auto-container">
        <h1>{{ $partner->name }}</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('web.home') }}">Inicio</a></li>
            <li><a href="{{ route('web.partners.list') }}">Socios</a></li>
            <li>{{ $partner->name }}</li>
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
                     <h2 {{-- data-toggle="modal" data-target="#fileModal" --}} >{{ $partner->name }}</h2>
                    <div class="title">{{ $partner->position }}</div>
                    <div class="text">
                        {!! $partner->description !!}

                        <!-- <div class="feature-block-two style-two">
                            <div class="inner-box">
                                <h3>The Leadership Ideas</h3>
                                <div class="text">Excepteur sint ocaec at cupdatat proide eserunt mol anim.</div>
                            </div>
                        </div>

                        <div class="feature-block-two style-two">
                            <div class="inner-box">
                                <h3>Transform Yourself</h3>
                                <div class="text">Excepteur sint ocaec at cupdatat proide eserunta laborum.</div>
                            </div>
                        </div> -->
                    </div>

                    <ul class="porfolio-info">
                        <li>
                            <span>Direccion:</span><br/>
                            {{ $partner->recipient }}<br/>
                            {{ $partner->address }}<br/>
                            {{ $partner->zip }} {{ $partner->locality }} ({{ $partner->province }})
                        </li>
                        @if(isset($partner->phone) || isset($partner->fax))
                        <li>
                            <span>Teléfonos:</span><br/>
                            @isset($partner->phone)
                            <a href="tel:{{ $partner->phone }}" target="_blank">Fijo: {{ $partner->phone }}</a>
                            @endIsset
                            @isset($partner->fax)
                            <a href="tel:{{ $partner->fax }}" target="_blank">Fax: {{ $partner->fax }}</a>
                            @endIsset
                        </li>
                        @endIf
                        <li>
                            <span>Email:</span><br/>
                            <a href="mailto:{{ $partner->email }}" target="_blank" class="lowercase">{{ $partner->email }}</a>
                        </li>
                        <li>
                            <span>Web:</span><br/>
                            <a href="{{ $partner->webUrl }}" target="_blank" class="lowercase">{{ $partner->web }}</a>
                        </li>
                        <li>
                            <span>Redes sociales:</span><br/>
                            @isset($partner->social->facebook)
                            <a href="{{ $partner->social->facebook }}" target="_blank" class="lowercase"><i class="fa fa-facebook"></i></a>
                            @endIsset
                            @isset($partner->social->twitter)
                            <a href="{{ $partner->social->twitter }}" target="_blank" class="lowercase"><i class="fa fa-twitter"></i></a>
                            @endIsset
                            @isset($partner->social->instagram)
                            <a href="{{ $partner->social->instagram }}" target="_blank" class="lowercase"><i class="fa fa-instagram"></i></a>
                            @endIsset
                            @isset($partner->social->youtube)
                            <a href="{{ $partner->social->youtube }}" target="_blank" class="lowercase"><i class="fa fa-youtube"></i></a>
                            @endIsset
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
                    @foreach($partner->detailImages as $image)
                    <div class="image">
                        <img src="{{ asset($image) }}" alt="" />
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

        <!-- others partners -->
        <div class="new-posts clearfix">
            <a href="{{ route('web.partners.item', ['slug' => $previousSlug]) }}" class="prev-post"><span class="icon fa fa-caret-left"></span> Socio anterior</a>
            <a href="{{ route('web.partners.item', ['slug' => $nextSlug]) }}" class="next-post">Socio siguiente <span class="icon fa fa-caret-right"></span></a>
        </div>

    </div>
</section>
<!--End Portfolio Single Section-->

<!--Related Projects-->
<section class="related-posts">
    <div class="auto-container">

        <!--Sec Title-->
        <div class="sec-title centered">
            <h2>Otros socios</h2>
            <div class="title-text">Automate & Simplify The Whole Process</div>
        </div>
        <div class="row clearfix">

            @foreach($partnersRelated as $partner)
            <!--Gallery Block-->
            <div class="gallery-block-two col-lg-4 col-md-6 col-sm-12">
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