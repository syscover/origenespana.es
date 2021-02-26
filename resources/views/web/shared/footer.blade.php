<!--Main Footer-->
<footer class="main-footer custom-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            {{-- <div class="row clearfix">

                <!--Column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('/images/theme/footer-logo.png') }}" alt="" /></a>
                                </div>
                                <div class="text">58 BalSouth Lane, Harward Street Newyork 33025</div>
                                <ul class="list-style-one">
                                    <li><span>Phone:</span>  1-800-369-8527</li>
                                    <li><span>Email:</span>  support@zemencon.com</li>
                                    <li><span>Working Hours:</span>  Mon - Fri: 9am - 6pm</li>
                                </ul>
                                <!--Social Icon One-->
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                    <li><a href="#"><span class="fa fa-vimeo"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2>Quick Links</h2>
                                <ul class="footer-link">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Our Projects</a></li>
                                    <li><a href="#">Latest News</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget posts-widget">
                                <h2>Recent Posts</h2>

                                <article class="post">
                                    <div class="text"><a href="blog-single.html">Isolate & Reframe Your Beliefs</a></div>
                                    <ul class="post-date">
                                        <li>By Ken Smith</li>
                                        <li>Sep 25 2018</li>
                                    </ul>
                                </article>

                                <article class="post">
                                    <div class="text"><a href="blog-single.html">Take Action For Your Business</a></div>
                                    <ul class="post-date">
                                        <li>By Thomas</li>
                                        <li>Sep 25 2018</li>
                                    </ul>
                                </article>

                                <article class="post">
                                    <div class="text"><a href="blog-single.html">Improve Your Business Ideas</a></div>
                                    <ul class="post-date">
                                        <li>By Admin</li>
                                        <li>Sep 25 2018</li>
                                    </ul>
                                </article>

                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <h2>Our Newsletter</h2>
                                <div class="text">Get in your inbox the latest News and Offers from zemen</div>
                                <div class="newsletter-form">
                                    <form method="post" action="contact.html">
                                        <div class="form-group">
                                            <input type="email" name="email" value="" placeholder="Email address" required="">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn btn-style-one">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div> --}}
        </div>
    </div>
    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row flex-md-row-reverse clearfix">
                <div class="column col-md-6 col-sm-12 col-xs-12">
                    <ul class="footer-nav">
                        <li><a data-toggle="modal" data-target="#partnerModal">Hazte socio</a></li>
                        <li><a href="{{ route('web.blog.list') }}">Convocatorias</a></li>
                        <li><a href="{{ route('web.contact') }}">Contacto</a></li>
                        <li><a href="{{ route('web.legalAdvice') }}">Aviso legal</a></li>
                    </ul>
                </div>
                <div class="column col-md-6 col-sm-12 col-xs-12">
                    <div class="copyright">Copyright &copy; {{ date('Y') }} - Origen España. Todos los derechos reservados. </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End Main Footer-->
