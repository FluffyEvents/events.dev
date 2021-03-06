<!DOCTYPE html>

<head>

	<style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style><link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}.gm-style img{max-width:none}</style>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('title')
		@yield('style')
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
		<link rel="stylesheet" type="text/css" href="/assets/css/jquery.datetimepicker.css"/ >

        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.min.js"></script>
        <![endif]-->
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

            <div class="container">
                <div class="header-wrapper clearfix">

                    <!-- Logo -->
                    <div class="logo">
                        <a href="/" class="scroll-to">
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

                            <li class="header-search-wrapper">
								{{ Form::open(array('action' => 'CalendarEventsController@index', 'method' => 'GET', 'class' => 'header-search-form')) }}
                                    <input type="text" name="q" class="form-control header-search" placeholder="Search Fluffy">
                                    <input type="submit" hidden="hidden">
                                {{ Form::close() }}
                            </li>
                            <li><a href="#" class="btn-search-toggle"><i class="fa fa-search"></i></a></li>


                            @if ( Auth::check() )
                                <li><a href="/events/manage" class="btn btn-theme btn-submit-event">Manage Your Events</a></li>
                                <li><a href="/events/create" class="">Create New Event <i class="fa fa-plus-circle"></i></a></li>
                                <li class=""><a href="{{ action('HomeController@submitLogout')}}">Logout <i class="fa fa-sign-out"></i></a></li>
                            @else
                                <li><a href="/events" class="btn btn-theme btn-submit-event">View All Events <i class="fa fa-arrow-circle-right"></i></a></li>
                                <li class=""><a href="/login">Login / Register Now <i class="fa fa-street-view"></i></a></li>
                            @endif
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
                    <span class="copyright animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="100">© 2015 BEERE INDUSTRIES — The Event Manager Theme made with passion by CiaoRachel Studios</span>
                </div>
            </div>
        </footer>
        <!-- /FOOTER -->

        <div class="to-top" style="bottom: 15px;"><i class="fa fa-angle-up"></i></div>


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
    <!-- <script src="/assets/plugins/smooth-scrollbar.min.js"></script> -->

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

    @yield('scripts')

</body>

</html>
