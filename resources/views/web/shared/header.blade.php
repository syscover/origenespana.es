<!-- Main Header-->
<header class="main-header custom-header">
    
    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="clearfix">
                <!--Top Left-->
                <div class="top-left">
                    <ul class="header-info-list">
                        <li><a href="mailto:info@origenespana.es"><span class="icon fa fa-envelope"></span><strong>Email:</strong>info@origenespana.es</a></li>
                        <li><a href="tel:663075268"><span class="icon fa fa-phone"></span><strong>Teléfono:</strong>663 075 268</a></li>
                    </ul>
                </div>
                <!--Top Right-->
                <div class="top-right">
                    <!--Additional Link Box-->
                    <ul class="links-box">
                        <li><a href="https://cdata01.soljem.com/origenespana" target="_blank">Área de socios</a></li>
                    </ul>
                    <!--Social Box-->
                    <ul class="social-box">
                        {{-- <li class="share">Redes Sociales:</li> --}}
                        <li><a href="https://www.facebook.com/origenespana" target="_blank"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="https://twitter.com/origenespana" target="_blank"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="https://www.pinterest.com/origenespana/" target="_blank"><span class="fa fa-pinterest"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">
                
                <div class="pull-left logo-box">
                    <div class="logo">
                        <a href="{{ route('web.home') }}">
                            <img src="{{ asset('/images/logo-origen-header.svg') }}" alt="" title="">
                        </a>
                    </div>
                </div>
                
                <div class="nav-outer clearfix">
                
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{ route('web.home') }}">Inicio</a></li>
                                <li class="dropdown">
                                    <a>Nosotros</a>
                                    <ul>
                                        <li><a href="{{ route('web.about.general') }}">Qué es Origen España</a></li>
                                        <li><a href="{{ route('web.about.objectives') }}">Objetivos</a></li>
                                        <li><a href="{{ route('web.about.organisation') }}">Órganos de representación</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="{{ route('web.seals') }}">Sellos DOP e IGP</a></li>
                                <li class=""><a href="{{ route('web.relations') }}">Relaciones institucionales</a></li>
                                <li class=""><a href="{{ route('web.partners.list') }}">Socios</a></li>
                                <li class=""><a href="{{ route('web.blog.list') }}">Noticias</a></li>
                                <li class=""><a href="{{ route('web.contact') }}">Contacto</a></li>
                            </ul>
                            <a href="#" class="theme-btn btn-style-two">hazte socio</a>
                        </div>
                    </nav>

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->
    
    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{ route('web.home') }}">
                    <img src="{{ asset('/images/origen-logo.png') }}" alt="" title="">
                </a>
            </div>
            
            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">
                            <li class="current"><a href="{{ route('web.home') }}">Inicio</a></li>
                            <li class="dropdown">
                                <a>Nosotros</a>
                                <ul>
                                    <li><a href="{{ route('web.about.general') }}">Qué es Origen España</a></li>
                                    <li><a href="{{ route('web.about.objectives') }}">Objetivos</a></li>
                                    <li><a href="{{ route('web.about.organisation') }}">Órganos de representación</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="{{ route('web.seals') }}">Sellos DOP e IGP</a></li>
                            <li class=""><a href="{{ route('web.relations') }}">Relaciones institucionales</a></li>
                            <li class=""><a href="{{ route('web.partners.list') }}">Socios</a></li>
                            <li class=""><a href="{{ route('web.blog.list') }}">Noticias</a></li>
                            <li class=""><a href="{{ route('web.contact') }}">Contacto</a></li>
                        </ul>
                        <a href="#" class="theme-btn btn-style-two">hazte socio</a>
                    </div>
                </nav><!-- Main Menu End-->
            </div>
            
        </div>
    </div>
    <!--End Sticky Header-->

</header>
<!--End Main Header -->
