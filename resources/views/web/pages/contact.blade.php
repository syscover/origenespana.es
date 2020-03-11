@extends('web.layout.default')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('images/theme/background/6.jpg') }})">
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
                        <h2>Do you want to reach at the next level of Business Success?</h2>
                        <div class="title">Book a Complimentary Consultation by visiting or calling us!</div>
                        <ul class="list-style-three">
                            <li><span class="icon fa fa-map-marker"></span>58 BalSouth Lane, Harward Street <br> Newyork 33025</li>
                            <li><span class="icon fa fa-phone"></span>1-800-369-8527</li>
                            <li><span class="icon fa fa-envelope"></span>support@zemenconsult.net</li>
                            <li><span class="icon fa fa-clock-o"></span>Monday to Friday 9 am - 6 pm</li>
                        </ul>
                        <!--Social Boxed-->
                        <ul class="social-boxed">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!--Form Column-->
            <div class="form-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h2>Send a Message</h2>
                    <div class="title">We are working with thousands of business companies around the globe & delivering ideas for their business success.</div>
                    <!-- Contact Form -->
                    <div class="contact-form ">
                        <!--Comment Form-->
                        <form method="post" action="sendemail.php" id="contact-form">
                            
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Your Name" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email address" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Phone" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Subject" required>
                            </div>

                            <div class="form-group">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>

                            <div class="form-group">
                                <button class="theme-btn message-btn" type="submit" name="submit-form">send message</button>
                            </div>

                        </form>

                    </div>
                    <!--End Comment Form -->
                </div>
            </div>
            
        </div>
    </div>
</section>	
<!--End Contact Section-->

@endsection