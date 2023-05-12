<footer>
    <!--? Footer Start-->
    <div class="footer-area section-bg" data-background="/assets/img/gallery/section_bg03.png">
        <div class="container">
            <div class="footer-top footer-padding">
                <!-- Footer Menu -->
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>COMPANY</h4>
                                <ul>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/blog"> Press & Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Open hour</h4>
                                <ul>
                                @if (count ($schedule ?? '') > 0)
                                @foreach ($schedule as $schedule)
                                <li><a>{{$schedule->name}} {{$schedule->open}}-{{$schedule->close}}</a></li>
                                @endforeach
                                @else
                            <li><a> No data found</a></li>
                                @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href=""><img src="/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12">
                        <div class="footer-copy-right text-center">
                            <p>
                                IVKHK &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script src="/assets/js/language.js"></script>
<script src="/assets/js/app.js"></script>


<script src="/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<!-- Jquery Mobile Menu -->
<script src="/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/animated.headline.js"></script>
<script src="/assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="/assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="/assets/js/jquery.nice-select.min.js"></script>
<script src="/assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="/assets/js/jquery.counterup.min.js"></script>
<script src="/assets/js/waypoints.min.js"></script>
<script src="/assets/js/jquery.countdown.min.js"></script>
<script src="/assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="/assets/js/contact.js"></script>
<script src="/assets/js/jquery.form.js"></script>
<script src="/assets/js/jquery.validate.min.js"></script>
<script src="/assets/js/mail-script.js"></script>
<script src="/assets/js/jquery.ajaxchimp.min.js"></script>
<script src="/assets/js/mdb.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/main.js"></script>
<script type="text/javascript" src="/js/mdb.min.js"></script>

</body>

</html>
