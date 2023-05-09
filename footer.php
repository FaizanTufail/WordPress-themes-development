   <!-- Start Footer Area -->
   <section class="footer-section pt-100 pb-70">
            <div class="container">
                <div class="subscribe-area">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="subscribe-content">
                                <h2>Join Our Newsletter</h2>
                                <p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <form class="newsletter-form">
                                <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                                <button type="submit">
                                    Subscribe Now
                                </button>
								
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="footer-heading">
                                <h3>About Us</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                            <ul class="footer-social">
                                <li>
                                    <a href="#">
                                    <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                    <i class="fa-brands fa-wordpress"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                    <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="footer-heading">
                                <h3>Important Links</h3>
                            </div>
                            <?php dynamic_sidebar('sidebar-1'); ?>
                        </div>    
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="footer-heading">
                                <h3>Featured Service</h3>
                            </div>
                            <?php dynamic_sidebar('sidebar-2'); ?>
                        </div>    
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="footer-heading">
                                <h3>Contact</h3>
                            </div>

                            <div class="footer-info-contact">
                            <i class="fa-regular fa-id-card"></i>
                                <h3>Phone</h3>
                                <span><a href="tel:+882-569-756">+123(456)123</a></span>
                            </div>

                            <div class="footer-info-contact">
                            <i class="fa-regular fa-id-card"></i>
                                <h3>Email</h3>
                                <span><a href="mailto:hello@fria.com">hello@fria.com</a></span>
                            </div>

                            <div class="footer-info-contact">
                            <i class="fa-regular fa-id-card"></i>
                                <h3>Address</h3>
                                <span>32 st Kilda Road, Melbourne VIC, 3004 Australia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Footer Area -->

        <!-- Start Copy Right Area -->
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-area-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <p>
                                Copyright @<script>document.write(new Date().getFullYear())</script> Fria All Rights Reserved by
                                <a href="https://envytheme.com/" target="_blank">
                                    EnvyTheme
                                </a>
                            </p>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <ul>
                                <li>
                                    <a href="terms-condition.html">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area -->

        <!-- Start Go Top Section -->
        <div class="go-top">
        <i class="fa-solid fa-jet-fighter-up"></i>
        <i class="fa-solid fa-jet-fighter-up"></i>
        </div>
        <!-- End Go Top Section -->

        <!-- dark version -->
        <div class="dark-version">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>
        <!-- dark version -->

        <!-- Jquery Slim JS -->
        <script src=" <?php echo get_template_directory_uri() ?>/assets/js/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src=" <?php echo get_template_directory_uri() ?>/assets/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src=" <?php echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
        <script src=" <?php echo get_template_directory_uri() ?>/assets/js/jquery.meanmenu.js"></script>
        <!-- Owl Carousel JS -->
		<script src=" <?php echo get_template_directory_uri() ?>/assets/js/owl.carousel.js"></script>
        <!-- Magnific JS -->
		<script src=" <?php echo get_template_directory_uri() ?>/assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Appear JS --> 
        <script src=" <?php echo get_template_directory_uri() ?>/assets/js/jquery.appear.min.js"></script>
		<!-- Odometer JS --> 
		<script src=" <?php echo get_template_directory_uri() ?>/assets/js/odometer.min.js"></script>
		<!-- Form Ajaxchimp JS -->
		<script src=" <?php echo get_template_directory_uri() ?>/assets/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Validator JS -->
		<script src=" <?php echo get_template_directory_uri() ?>/assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
        <script src=" <?php echo get_template_directory_uri() ?>/assets/js/contact-form-script.js"></script>
        <!-- Wow JS -->
        <script src=" <?php echo get_template_directory_uri() ?>/assets/js/wow.min.js"></script>
        <!-- Custom JS -->
        <script src=" <?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>
    </body>