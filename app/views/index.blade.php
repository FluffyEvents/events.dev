@extends('layouts.master')

@section('title')
<title>Welcome to Fluffy Events</title>
@stop

@section('content')
	
<div id="main">
    <!-- SLIDER -->
    <section class="page-section no-padding background-img-slider">
        <div class="container">

            <div id="main-slider" class="owl-carousel owl-theme">
                <!-- Slide -->
                <div class="item page text-center slide5">
                    <div class="caption">
                        <div class="container">
                            <div class="div-table">
                                <div class="div-cell">
                                    {{-- <p class="text-center avatar"><img src="assets/img/preview/slider-4-avatar.png" style="width: auto;" alt=""/></p> --}}
                                    <h2 data-animation="fadeInDown" data-animation-delay="100"><span>15 October at 20:00 - 22:00</span></h2>
                                    <h3 class="caption-subtitle" data-animation="fadeInUp" data-animation-delay="300">Fluffy-Con in San Antonio</h3>
                                    <div class="countdown-wrapper">
                                        <div id="defaultCountdown" class="defaultCountdown clearfix"></div>
                                    </div>
                                    <p class="caption-text">
                                        <a class="btn btn-theme btn-theme scroll-to" href="#" data-animation="flipInY" data-animation-delay="600">Register</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="item page text-center slide4">
                    <div class="caption">
                        <div class="container">
                            <div class="div-table">
                                <div class="div-cell">
                                    <h3 class="caption-subtitle">We Are<br>Fur-ious Event Planners</h3>
                                    <h4><span>You Can Find "<a href="#">Festivals</a>, <a href="#">Parties</a>, <a href="#">Conference</a>, <a href="#">Fairs</a>, <a href="#">Exhibitions</a>, <a href="#">Speakers</a> and more</span></h4>
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <form action="#" class="location-search">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control text" placeholder="FIND EXPERIENCES"/>
                                                        <select class="selectpicker">
                                                            <option>LOCATION</option>
                                                            <option>LOCATION</option>
                                                            <option>LOCATION</option>
                                                        </select>
                                                        <button class="form-control button-search"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <p class="caption-text">
                                        <a class="btn btn-theme btn-theme btn-theme-dark scroll-to" href="#" data-animation="flipInY" data-animation-delay="600">Popular Events</a><!--
                                        --><a class="btn btn-theme btn-theme btn-theme-transparent-white" href="http://www.youtube.com/watch?v=O-zpOMYRi0w" data-gal="prettyPhoto" data-animation="flipInY" data-animation-delay="900">Latest Events</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- /SLIDER -->
</div>

   

<section class="page-section no-padding-bottom">
    <div class="container">
        <div class="section-title pull-left" style="width: auto;">
            <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-picture-o fa-stack-1x"></i></span></span>
        </div>
        <ul id="filtrable-gallery" class="filtrable clearfix">
            <li class="all current"><a href="#" data-filter="*">All</a></li>
            <li class="photos"><a href="#" data-filter=".photos">Photos</a></li>
            <li class="videos"><a href="#" data-filter=".videos">Videos</a></li>
            <li class="gallery"><a href="#" data-filter=".gallery">Gallery</a></li>
        </ul>
        <div class="clear clearfix overflowed"></div>
    </div>
</section>




<section class="page-section no-padding-top light">
    <div class="container full-width">

        <div class="row thumbnails no-padding gallery isotope isotope-items" style="position: relative; overflow: hidden; height: 3032px;">

            <div class="col-md-3 col-sm-6 isotope-item photos" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                <div class="thumbnail no-border no-padding">
                    <div class="media">
                        <img src="assets/img/preview/latest-1a.jpg" alt="">
                        <div class="caption hovered">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <p class="caption-buttons">
                                        <a href="#" class="btn caption-zoom"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="btn caption-link"><i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption hovered back">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <h3 class="caption-title">CONFERENCE PARTY</h3>
                                    <p class="caption-category">in Istanbul</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 isotope-item videos" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 379px, 0px);">
                <div class="thumbnail no-border no-padding">
                    <div class="media">
                        <img src="assets/img/preview/latest-2a.jpg" alt="">
                        <div class="caption hovered">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <p class="caption-buttons">
                                        <a href="#" class="btn caption-zoom"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="btn caption-link"><i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption hovered back">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <h3 class="caption-title">FINDING NEW WAY EVENT</h3>
                                    <p class="caption-category">in Tokyo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 isotope-item gallery" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 758px, 0px);">
                <div class="thumbnail no-border no-padding">
                    <div class="media">
                        <img src="assets/img/preview/latest-3a.jpg" alt="">
                        <div class="caption hovered">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <p class="caption-buttons">
                                        <a href="#" class="btn caption-zoom"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="btn caption-link"><i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption hovered back">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <h3 class="caption-title">PHP MEETING</h3>
                                    <p class="caption-category">in Foshan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 isotope-item photos gallery" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 1137px, 0px);">
                <div class="thumbnail no-border no-padding">
                    <div class="media">
                        <img src="assets/img/preview/latest-4a.jpg" alt="">
                        <div class="caption hovered">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <p class="caption-buttons">
                                        <a href="#" class="btn caption-zoom"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="btn caption-link"><i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption hovered back">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <h3 class="caption-title">CONFERENCE PARTY</h3>
                                    <p class="caption-category">in Manhattan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 isotope-item photos videos" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 1516px, 0px);">
                <div class="thumbnail no-border no-padding">
                    <div class="media">
                        <img src="assets/img/preview/latest-5a.jpg" alt="">
                        <div class="caption hovered">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <p class="caption-buttons">
                                        <a href="#" class="btn caption-zoom"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="btn caption-link"><i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption hovered back">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <h3 class="caption-title">WINNING AWARDS MEETING</h3>
                                    <p class="caption-category">in Istanbul</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 isotope-item videos gallery" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 1895px, 0px);">
                <div class="thumbnail no-border no-padding">
                    <div class="media">
                        <img src="assets/img/preview/latest-6a.jpg" alt="">
                        <div class="caption hovered">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <p class="caption-buttons">
                                        <a href="#" class="btn caption-zoom"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="btn caption-link"><i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption hovered back">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <h3 class="caption-title">GALLERY IMAGE NAME</h3>
                                    <p class="caption-category">in Tokyo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 isotope-item photos videos" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 2274px, 0px);">
                <div class="thumbnail no-border no-padding">
                    <div class="media">
                        <img src="assets/img/preview/latest-7a.jpg" alt="">
                        <div class="caption hovered">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <p class="caption-buttons">
                                        <a href="#" class="btn caption-zoom"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="btn caption-link"><i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption hovered back">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <h3 class="caption-title">EVERYBODY HERE EVENT</h3>
                                    <p class="caption-category">in Foshan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 isotope-item gallery" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 2653px, 0px);">
                <div class="thumbnail no-border no-padding">
                    <div class="media">
                        <img src="assets/img/preview/latest-8a.jpg" alt="">
                        <div class="caption hovered">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <p class="caption-buttons">
                                        <a href="#" class="btn caption-zoom"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="btn caption-link"><i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption hovered back">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <h3 class="caption-title">YOGA CLASS MET AT AUGUST</h3>
                                    <p class="caption-category">in Manhattan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="text-center margin-top">
            <a data-animation="flipInY" data-animation-delay="500" href="#" class="btn btn-theme btn-theme-grey-dark btn-theme-md animated flipInY visible"><i class="fa fa-photo"></i> See All Gallery</a>
        </div>

    </div>
</section>        
                
                




@stop