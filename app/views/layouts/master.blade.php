<!DOCTYPE html>

<head>

	<style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style><link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}.gm-style img{max-width:none}</style>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('title')

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <!-- CSS Global -->
        <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="/assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <link href="/assets/plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="/assets/plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
        <link href="/assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
        <link href="/assets/plugins/animate/animate.min.css" rel="stylesheet">
        <link href="/assets/plugins/countdown/jquery.countdown.css" rel="stylesheet">

        <link href="/assets/css/theme.css" rel="stylesheet">
        <link href="/assets/css/custom.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.min.js"></script>
        <![endif]-->
    <meta name="chromesniffer" id="chromesniffer_meta" content="{&quot;Bootstrap&quot;:-1,&quot;jQuery&quot;:&quot;2.1.1&quot;,&quot;Modernizr&quot;:&quot;2.7.1&quot;,&quot;GoogleMapApi&quot;:-1}"><script type="text/javascript" src="chrome-extension://homgcnaoacgigpkkljjjekpignblkeae/detector.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/22/2/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/22/2/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/22/2/stats.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/22/2/map.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/22/2/marker.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/22/2/onion.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/22/2/controls.js"></script>
</head>



<body id="home" class="wide body-light multipage">

    <!-- Preloader -->
    <div id="preloader" style="display: none;">
        <div id="status" style="display: none;">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Wrap all content -->
    <div class="wrapper">

       <header class="header fixed shrink">

                <!-- Top Line -->
                <div class="top-line">
                    <div class="container">
                        <ul class="user-menu">
                            <li><a href="#popup-login" data-toggle="modal"><i class="fa fa-file-text-o"></i> Register Now</a></li>
                            <li><a href="#popup-login" data-toggle="modal"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                        <div class="hot-line"><span><i class="fa fa-calendar"></i> <strong>Latest Event:</strong></span>  Standart Event Name Here  "15 October at 20:00 - 22:00 on Manhattan / New York"</div>
                    </div>
                </div>
                <!-- /Top Line -->

                <div class="container">
                    <div class="header-wrapper clearfix">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ action('HomeController@showWelcome')}}" class="scroll-to">
                                <span class="fa-stack">
                                    <i class="fa logo-hex fa-stack-2x"></i>
                                    <i class="fa logo-fa fa-paw fa-stack-1x"></i>
                                </span>
                                Fluffy Events
                            </a>
                        </div>
                        <!-- /Logo -->

                        <!-- Navigation -->
                        <div id="mobile-menu"></div>
                        <nav class="navigation closed clearfix">
                            <a href="#" class="menu-toggle btn"><i class="fa fa-bars"></i></a>
                            <ul class="sf-menu nav sf-js-enabled sf-arrows">
                                <li class="active">
                                    <a href="index.html" class="sf-with-ul">Home</a>
                                    <ul style="display: none;">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="event-list.html" class="sf-with-ul">Events</a>
                                    <ul style="display: none;">
                                        <li><a href="event-list.html">Event List</a></li>
                                        <li><a href="event-grid.html">Event Grid</a></li>
                                        <li><a href="event-single.html">Single Event</a></li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="blog.html" class="sf-with-ul">Pages</a>
                                    <ul style="display: none;">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                        <li><a href="search-results.html">Search Results</a></li>
                                        <li><a href="coming-soon-1.html">Coming Soon 1</a></li>
                                        <li><a href="coming-soon-2.html">Coming Soon 2</a></li>
                                        <li><a href="coming-soon-3.html">Coming Soon 3</a></li>
                                        <li><a href="error-page.html">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li class="header-search-wrapper">
                                    <form action="#" class="header-search-form">
                                        <input type="text" class="form-control header-search">
                                        <input type="submit" hidden="hidden">
                                    </form>
                                </li>
                                <li><a href="#" class="btn-search-toggle"><i class="fa fa-search"></i></a></li>
                                <li><a href="#" class="btn btn-theme btn-submit-event">SUBMIT EVENT <i class="fa fa-plus-circle"></i></a></li>
                            </ul>
                        </nav>
                        <!-- /Navigation -->

                    </div>
                </div>
            </header>
        <!-- /HEADER -->

        <!-- Content area -->
            <div class="content-area">

                @yield('content')






        <!-- FOOTER -->
        <footer class="footer">
            <div class="footer-meta">
                <div class="container text-center">
                    <div class="clearfix">
                        <ul class="social-line list-inline">
                            <li data-animation="flipInY" data-animation-delay="100" class="animated flipInY visible"><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li data-animation="flipInY" data-animation-delay="200" class="animated flipInY visible"><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                            <li data-animation="flipInY" data-animation-delay="300" class="animated flipInY visible"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li data-animation="flipInY" data-animation-delay="400" class="animated flipInY visible"><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                            <li data-animation="flipInY" data-animation-delay="500" class="animated flipInY visible"><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li data-animation="flipInY" data-animation-delay="600" class="animated flipInY visible"><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li data-animation="flipInY" data-animation-delay="700" class="animated flipInY visible"><a href="#" class="skype"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                    <span class="copyright animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="100">© 2015 im Event — The Event Manager Theme made with passion by jThemes Studio</span>
                </div>
            </div>
        </footer>
        <!-- /FOOTER -->

        <div class="to-top" style="bottom: 15px;"><i class="fa fa-angle-up"></i></div>


    </div>

    <!-- Popup: Login -->
    <div class="modal fade login-register" id="popup-login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" id="main-slider">
            <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

            <div class="form-background">
                <div class="col-sm-6 popup-form">
                    <div class="form-header color">
                        <h1 class="section-title">
                            <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                            <span class="title-inner">Login</span>
                        </h1>
                    </div>
                    <form method="post" action="#" class="registration-form alt" name="registration-form-alt" id="registration-form-alt">
                        <div class="row">
                            <div class="col-sm-12 form-alert"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" title="" data-toggle="tooltip" class="form-control input-name" data-original-title="Name is required">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" title="" data-toggle="tooltip" class="form-control input-password" data-original-title="Password">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-theme btn-block submit-button animated flipInY visible" data-animation-delay="100" data-animation="flipInY"> Log in <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="form-footer color">
                        <a href="#" class="popup-password"> Lost your password?</a>
                    </div>
                </div>

                <div class="popup-form col-sm-6">
                    <div class="form-header color">
                        <h1 class="section-title">
                            <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                            <span class="title-inner">Register</span>
                        </h1>
                    </div>
                    <form method="post" action="#" class="registration-form alt" name="registration-form-alt" id="registration-form-alt">
                        <div class="row">
                            <div class="col-sm-12 form-alert"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" title="" data-toggle="tooltip" class="form-control input-name" data-original-title="Name is required">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" title="" data-toggle="tooltip" class="form-control input-password" data-original-title="Password">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-theme btn-block submit-button animated flipInY visible" data-animation-delay="100" data-animation="flipInY"> Register Now <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>


    <!-- JS Global -->

    <!--[if lt IE 9]><script src="/assets/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->
    <!--[if gte IE 9]><!--><script src="/assets/plugins/jquery/jquery-2.1.1.min.js"></script><!--<![endif]-->
    <script src="/assets/plugins/modernizr.custom.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/assets/plugins/superfish/js/superfish.js"></script>
    <script src="/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
    <script src="/assets/plugins/placeholdem.min.js"></script>
    <script src="/assets/plugins/jquery.smoothscroll.min.js"></script>
    <script src="/assets/plugins/jquery.easing.min.js"></script>
    <script src="/assets/plugins/smooth-scrollbar.min.js"></script>

    <!-- JS Page Level -->
    <script src="/assets/plugins/owlcarousel2/owl.carousel.min.js"></script>
    <script src="/assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="/assets/plugins/countdown/jquery.plugin.min.js"></script>
    <script src="/assets/plugins/countdown/jquery.countdown.min.js"></script>
    <script src="/assets/plugins/isotope/jquery.isotope.min.js"></script>
    <!--script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script><script src="https://maps.googleapis.com/maps-api-v3/api/js/22/2/main.js"></script-->

    <script src="/assets/js/theme-ajax-mail.js"></script>
    <script src="/assets/js/theme.js"></script>
    <script src="/assets/js/custom.js"></script>

    <script type="text/javascript">
        "use strict";
        jQuery(document).ready(function () {
            theme.init();
            theme.initMainSlider();
            theme.initCountDown();
            theme.initPartnerSlider();
            theme.initTestimonials();
            theme.initCorouselSlider4();
            theme.initCorouselSlider3();
            theme.initGoogleMap();
        });
        jQuery(window).load(function () {
            theme.initAnimation();
        });

        jQuery(window).load(function () {
            jQuery('body').scrollspy({offset: 100, target: '.navigation'});
        });
        jQuery(window).load(function () {
            jQuery('body').scrollspy('refresh');
        });
        jQuery(window).resize(function () {
            jQuery('body').scrollspy('refresh');
        });

        jQuery(document).ready(function () {
            theme.onResize();
        });
        jQuery(window).load(function () {
            theme.onResize();
        });
        jQuery(window).resize(function () {
            theme.onResize();
        });

        jQuery(window).load(function () {
            if (location.hash != '') {
                var hash = '#' + window.location.hash.substr(1);
                if (hash.length) {
                    jQuery('html,body').delay(0).animate({
                        scrollTop: jQuery(hash).offset().top - 44 + 'px'
                    }, {
                        duration: 1200,
                        easing: "easeInOutExpo"
                    });
                }
            }
        });

    </script>

</body>

</html>
