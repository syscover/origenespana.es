@extends('web.layout.default')

@section('scripts')
<script>
    // contact form validation
    $('#contact2-form').validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true
            },
            subject: {
                required: true
            },
            message: {
                required: true
            }
        },
        messages: {
            name: {
                required: 'Por favor introduzca un nombre.'
            },
            email: {
                required: 'Por favor introduzca un correo electrónico.',
                email: 'Por favor introduzca un correo electrónico válido.'
            },
            phone: {
                required: 'Por favor introduzca un número de teléfono.'
            },
            subject: {
                required: 'Por favor introduzca un asunto.'
            },
            message: {
                required: 'Por favor escriba un mensaje.'
            }
        },
        submitHandler: function() {
            console.log('ENVIADO!!', $('#contact-form').serialize());

            $.ajax({
                dataType: 'json',
                type: 'POST',
                url: '/mail/contact',
                data: $('#contact2-form').serialize(),
                success: function (data) {
                    if(data.status == 'success')
                    {
                        $('.oe_fade-submit')
                            .fadeOut(300, function(){
                                $(this)
                                    .html('<p class="sys_aligncenter">Formulario enviado con exito. En breve nos pondremos en contacto contigo. Gracias.</p>')
                                    .fadeIn(300);
                            });
                    }
                    else
                    {
                        $('.oe_fade-submit')
                            .fadeOut(300, function(){
                                $(this)
                                    .html('<p class="sys_aligncenter">Fallo al enviar el formulario. Por favor recargue la página y pruebe de nuevo. Si el problema persiste por favor escribanos un email a info@roomandrevenue.com o llame al 675 96 70 06. Sentimos las molestias.</p>')
                                    .fadeIn(300);
                            });
                    }
                }
            });
        }
    });
</script>
@endsection


@section('content')

<!--Page Title-->
<section class="page-title page-title--contact" style="background-image:url({{ asset('images/bgs/contact/contacto.jpg') }}); background-position: 50% 30%;">
    <div class="auto-container">
        <h1>Contacto</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('web.home') }}">Inicio</a></li>
            <li>Contacto</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Contact Section-->
<section class="contact-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Info Column-->
            <div class="info-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="content-box">
                        <h2>Información de contacto</h2>
                        <div class="title"></div><br>
                        <ul class="list-style-three">
                            <li><span class="icon fa fa-map-marker"></span>Domicilio social de ORIGEN ESPAÑA:<br>C/ Agustín de Betancourt, 17, 4ª planta,<br>28003 Madrid</li>
                            <li><span class="icon fa fa-phone"></span>+34.663.07.52.68</li>
                            <li><span class="icon fa fa-envelope"></span>info@origenespana.es</li>
                            {{-- <li><span class="icon fa fa-clock-o"></span>Monday to Friday 9 am - 6 pm</li> --}}
                        </ul>
                        <!--Social Boxed-->
                        <ul class="social-boxed">
                            <li><a href="https://www.facebook.com/origenespana" target="_blank"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="https://twitter.com/origenespana" target="_blank"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="https://www.pinterest.com/origenespana/" target="_blank"><span class="fa fa-pinterest"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--Form Column-->
            <div class="form-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h2>Envíenos un mensaje</h2>
                    <div class="title">Por favor, escríbenos y nos pondremos en contacto contigo a la mayor brevedad posible.</div>
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <form method="post" id="contact2-form">

                            {{ csrf_field() }}

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

                            <div class="oe_fade-submit"></div>

                        </form>
                    </div>
                    <!--End Contact Form -->
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Contact Section-->

@endsection