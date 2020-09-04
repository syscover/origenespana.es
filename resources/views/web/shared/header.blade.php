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
                            <img src="{{ asset('/images/origen-logo-desc.png') }}" alt="" title="">
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
                                <li class="@if(strpos(request()->route()->getName(), 'web.home') !== false){{ 'current' }}@endif">
                                    <a href="{{ route('web.home') }}">Inicio</a>
                                </li>
                                <li class="dropdown @if(strpos(request()->route()->getName(), 'web.about') !== false){{ 'current' }}@endif">
                                    <a>Nosotros</a>
                                    <ul>
                                        <li class="@if(strpos(request()->route()->getName(), 'web.about.general') !== false){{ 'current' }}@endif">
                                            <a href="{{ route('web.about.general') }}">Quiénes somos</a>
                                        </li>
                                        <li class="@if(strpos(request()->route()->getName(), 'web.about.objectives') !== false){{ 'current' }}@endif">
                                            <a href="{{ route('web.about.objectives') }}">Objetivos</a>
                                        </li>
                                        <li class="@if(strpos(request()->route()->getName(), 'web.about.organisation') !== false){{ 'current' }}@endif">
                                            <a href="{{ route('web.about.organisation') }}">Órganos de representación</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="@if(strpos(request()->route()->getName(), 'web.seals') !== false){{ 'current' }}@endif">
                                    <a href="{{ route('web.seals') }}">Sellos DOP e IGP</a>
                                </li>
                                <li class="@if(strpos(request()->route()->getName(), 'web.relations') !== false){{ 'current' }}@endif">
                                    <a href="{{ route('web.relations') }}">Relaciones institucionales</a>
                                </li>
                                <li class="@if(strpos(request()->route()->getName(), 'web.partners') !== false){{ 'current' }}@endif">
                                    <a href="{{ route('web.partners.list') }}">Socios</a>
                                </li>
                                <li class="@if(strpos(request()->route()->getName(), 'web.blog') !== false){{ 'current' }}@endif">
                                    <a href="{{ route('web.blog.list') }}">Noticias</a>
                                </li>
                                <li class="@if(strpos(request()->route()->getName(), 'web.contact') !== false){{ 'current' }}@endif">
                                    <a href="{{ route('web.contact') }}">Contacto</a>
                                </li>
                            </ul>
                            <a class="theme-btn btn-style-two" data-toggle="modal" data-target="#partnerModal">hazte socio</a>
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
                    <img src="{{ asset('/images/origen-logo-desc.png') }}" alt="" title="">
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
                            <li class="@if(strpos(request()->route()->getName(), 'web.home') !== false){{ 'current' }}@endif">
                                <a href="{{ route('web.home') }}">Inicio</a>
                            </li>
                            <li class="dropdown @if(strpos(request()->route()->getName(), 'web.about') !== false){{ 'current' }}@endif">
                                <a>Nosotros</a>
                                <ul>
                                    <li class="@if(strpos(request()->route()->getName(), 'web.about.general') !== false){{ 'current' }}@endif">
                                        <a href="{{ route('web.about.general') }}">Quiénes somos</a>
                                    </li>
                                    <li class="@if(strpos(request()->route()->getName(), 'web.about.objectives') !== false){{ 'current' }}@endif">
                                        <a href="{{ route('web.about.objectives') }}">Objetivos</a>
                                    </li>
                                    <li class="@if(strpos(request()->route()->getName(), 'web.about.organisation') !== false){{ 'current' }}@endif">
                                        <a href="{{ route('web.about.organisation') }}">Órganos de representación</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="@if(strpos(request()->route()->getName(), 'web.seals') !== false){{ 'current' }}@endif">
                                <a href="{{ route('web.seals') }}">Sellos DOP e IGP</a>
                            </li>
                            <li class="@if(strpos(request()->route()->getName(), 'web.relations') !== false){{ 'current' }}@endif">
                                <a href="{{ route('web.relations') }}">Relaciones institucionales</a>
                            </li>
                            <li class="@if(strpos(request()->route()->getName(), 'web.partners') !== false){{ 'current' }}@endif">
                                <a href="{{ route('web.partners.list') }}">Socios</a>
                            </li>
                            <li class="@if(strpos(request()->route()->getName(), 'web.blog') !== false){{ 'current' }}@endif">
                                <a href="{{ route('web.blog.list') }}">Noticias</a>
                            </li>
                            <li class="@if(strpos(request()->route()->getName(), 'web.contact') !== false){{ 'current' }}@endif">
                                <a href="{{ route('web.contact') }}">Contacto</a>
                            </li>
                        </ul>
                        <a class="theme-btn btn-style-two" data-toggle="modal" data-target="#partnerModal">hazte socio</a>
                    </div>
                </nav><!-- Main Menu End-->
            </div>
            
        </div>
    </div>
    <!--End Sticky Header-->

</header>
<!--End Main Header -->

<!--Start Hazte Socio Modal -->
<div class="modal fade partner-modal" id="partnerModal" tabindex="-1" role="dialog" aria-labelledby="partnerModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header"></div>

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="container">
                    <div class="row align-items-center mb-4">
                        <div class="col-md-8 col-sm-7 col-12">
                            <p class="modal-title">
                                Hazte <span class="theme_color">Socio</span>
                            </p>
                            <p class="text">
                                Somos la voz de la calidad diferenciada agroalimentaria española por lo que estamos deseando dar la bienvenida a todas las DOP e IGP nacionales, para que formen parte de ORIGEN ESPAÑA como asociadas.
                            </p>
                            <p class="text">
                                ¡Sumándote, el sector de la calidad diferenciada será aún más fuerte!
                            </p>
                            <p class="text">
                                Por favor, escríbenos y nos pondremos en contacto contigo a la mayor brevedad posible.
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-5 hidden-xs-down">
                            <img src="{{ asset('images/bgs/home/partner-modal.jpg') }}" alt="Grow Together" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Contact Form -->
                            <div class="contact-form ">
                                <form method="post" id="contact-form">
                                    
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Nombre completo" required>
                                    </div>
    
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Correo electrónico" required>
                                    </div>
    
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="Número de teléfono" required>
                                    </div>
    
                                    <div class="form-group">
                                        <input type="text" name="subject" placeholder="Asunto" required>
                                    </div>
    
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Mensaje" required></textarea>
                                    </div>
    
                                    <div class="form-group">
                                        <button class="theme-btn message-btn" type="submit" name="submit-form">Enviar mensaje</button>
                                    </div>
    
                                </form>
                            </div>
                            <!--End Contact Form -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!--End Hazte Socio Modal -->

