/vagrant/sites/fluffyevents.dev/app/views/calendar_events/show.blade.php

@extends('layouts.master')


@section('content')
<div class="content-area">

                <section class="page-section image breadcrumbs overlay">
                    <div class="container">
                        <h1>EVENT DETAIL PAGE</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Events</a></li>
                            <li class="active">Event Detail Page</li>
                        </ul>
                    </div>
                </section>


                <!-- PAGE -->
                <section class="page-section with-sidebar sidebar-right first-section light">
                    <div class="container">

                        <!-- Content -->
                        <section id="content" class="content col-sm-12 col-md-8 col-lg-9">

                            <div class="owl-carousel img-carousel owl-theme owl-loaded">
                                
                                
                                
                                
                            <div class="owl-stage-outer" style="padding-left: 0px; padding-right: 0px;"><div class="owl-stage" style="width: 3582px; transform: translate3d(-597px, 0px, 0px); transition: 0s;"><div class="owl-item cloned" style="width: 597px; margin-right: 0px;"><div class="item"><img class="img-responsive" src="assets/img/preview/img-slider-1.jpg" alt=""></div></div><div class="owl-item active" style="width: 597px; margin-right: 0px;"><div class="item"><img class="img-responsive" src="assets/img/preview/img-slider-1.jpg" alt=""></div></div><div class="owl-item" style="width: 597px; margin-right: 0px;"><div class="item"><img class="img-responsive" src="assets/img/preview/img-slider-1.jpg" alt=""></div></div><div class="owl-item" style="width: 597px; margin-right: 0px;"><div class="item"><img class="img-responsive" src="assets/img/preview/img-slider-1.jpg" alt=""></div></div><div class="owl-item" style="width: 597px; margin-right: 0px;"><div class="item"><img class="img-responsive" src="assets/img/preview/img-slider-1.jpg" alt=""></div></div><div class="owl-item cloned" style="width: 597px; margin-right: 0px;"><div class="item"><img class="img-responsive" src="assets/img/preview/img-slider-1.jpg" alt=""></div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="fa fa-angle-left"></i></div><div class="owl-next" style=""><i class="fa fa-angle-right"></i></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>

                            <!-- -->
                            <hr class="page-divider transparent half">
                            <!-- -->

                            <h1 class="section-title">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-star fa-stack-1x"></i></span></span>
                                <span class="title-inner">What's about event <small>/ whats going on there come and learn</small></span>
                            </h1>
                            <p class="font_roboto font_size16">Praesent ac sem in neque venenatis tristique. Morbi et ligula velit. Nullam a augue vel mi porta vestibulum non ac elit. Vivamus convallis tortor et fermentum semper.</p>
                            <p class="font_roboto font_size16">In hac habitasse platea dictumst. Curabitur eget dui id metus pulvinar suscipit. Quisque vitae ligula laoreet, scelerisque leo quis, facilisis metus. Sed pellentesque, urna sed varius consectetur, eros augue fringilla magna, id sem magna vel diam. Nulla sed hendrerit nunc.</p>
                            <p class="btn-row">
                                <a href="#" class="btn btn-theme btn-theme-xl scroll-to">Register <i class="fa fa-arrow-circle-right"></i></a><!--
                                --><a href="#" class="btn btn-theme btn-theme-xl btn-theme-transparent">Watch video</a>
                            </p>

                            <!-- -->
                            <hr class="page-divider transparent">
                            <!-- -->

                            <!-- Schedule -->
                            <div class="schedule-wrapper schedule-alt clear">
                                <div class="schedule-tabs lv1">
                                    <ul id="tabs-lv1" class="nav nav-justified"><!--
                                        --><li class="active"><a href="#tab-first" data-toggle="tab">
                                                <span class="line1">January</span>
                                                <span class="line2">15</span>
                                                <span class="line3">Event Day 01</span>
                                            </a></li><!--
                                        --><li><a href="#tab-second" data-toggle="tab">
                                                <span class="line1">January</span>
                                                <span class="line2">16</span>
                                                <span class="line3">Event Day 02</span>
                                            </a></li><!--
                                        --><li><a href="#tab-third" data-toggle="tab">
                                                <span class="line1">January</span>
                                                <span class="line2">17</span>
                                                <span class="line3">Event Day 03</span>
                                            </a></li><!--
                                        --><li><a href="#tab-last" data-toggle="tab">
                                                <span class="line1">January</span>
                                                <span class="line2">18</span>
                                                <span class="line3">Event Day 04</span>
                                            </a></li>
                                    </ul>
                                </div>
                                <div class="tab-content lv1">
                                    <!-- tab1 -->
                                    <div id="tab-first" class="tab-pane fade in active">
                                        <div class="schedule-tabs lv2">
                                            <ul id="tabs-lv21" class="nav nav-justified">
                                                <li class="active"><a href="#tab-lv21-first" data-toggle="tab">HAll A</a></li>
                                                <li><a href="#tab-lv21-second" data-toggle="tab">HAll B</a></li>
                                                <li><a href="#tab-lv21-third" data-toggle="tab">HAll C</a></li>
                                                <li><a href="#tab-lv21-last" data-toggle="tab">HAll D</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content lv2">
                                            <div id="tab-lv21-first" class="tab-pane fade in active">
                                                <div class="timeline">

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-1.jpg" alt="" class="media-object">
                                                                <span class="about"><strong>John Doe</strong></span>
                                                                <span class="about">CEO at Crown.io</span>
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. </p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> <strong>Speakers:</strong> John Doe, Staven Mane; Andy Garcia &nbsp;
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media without-img pull-left"></div>
                                                            <!-- -->
                                                            <div class="media-body without-img">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 12:00am - 13:45pm</span>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Resting and Lunch Break Time</a></h2>
                                                                </div>
                                                                <div class="post-footer"></div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-3.jpg" alt="" class="media-object">
                                                                <span class="about"><strong>John Doe</strong></span>
                                                                <span class="about">CEO at Crown.io</span>
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. </p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> <strong>Speakers:</strong> John Doe, Staven Mane; Andy Garcia &nbsp;
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                </div>
                                            </div>
                                            <div id="tab-lv21-second" class="tab-pane fade">
                                                <div class="timeline">

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-2.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-3.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-4.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                </div>
                                            </div>
                                            <div id="tab-lv21-third" class="tab-pane fade">
                                                <div class="timeline">

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-3.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-4.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                </div>
                                            </div>
                                            <div id="tab-lv21-last" class="tab-pane fade">
                                                <div class="timeline">

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-2.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-3.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- tab2 -->
                                    <div id="tab-second" class="tab-pane fade">
                                        <div class="schedule-tabs lv2">
                                            <ul id="tabs-lv22" class="nav nav-justified">
                                                <li class="active"><a href="#tab-lv22-first" data-toggle="tab">HAll A</a></li>
                                                <li><a href="#tab-lv22-second" data-toggle="tab">HAll B</a></li>
                                                <li><a href="#tab-lv22-third" data-toggle="tab">HAll C</a></li>
                                                <li><a href="#tab-lv22-last" data-toggle="tab">HAll D</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content lv2">
                                            <div id="tab-lv22-first" class="tab-pane fade in active">
                                                <div class="timeline">

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-2.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-1.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> <strong>John Doe</strong> / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-3.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-4.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                </div>
                                            </div>
                                            <div id="tab-lv22-second" class="tab-pane fade">
                                                <div class="timeline">

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-2.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-3.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-4.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                </div>
                                            </div>
                                            <div id="tab-lv22-third" class="tab-pane fade">
                                                <div class="timeline">

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-3.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-4.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                </div>
                                            </div>
                                            <div id="tab-lv22-last" class="tab-pane fade">
                                                <div class="timeline">

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-2.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-3.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- tab3 -->
                                    <div id="tab-third" class="tab-pane fade">
                                        <div class="schedule-tabs lv2">
                                            <ul id="tabs-lv23" class="nav nav-justified">
                                                <li class="active"><a href="#tab-lv23-first" data-toggle="tab">HAll A</a></li>
                                                <li><a href="#tab-lv23-second" data-toggle="tab">HAll B</a></li>
                                                <li><a href="#tab-lv23-third" data-toggle="tab">HAll C</a></li>
                                                <li><a href="#tab-lv23-last" data-toggle="tab">HAll D</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content lv2">
                                            <div id="tab-lv23-first" class="tab-pane fade in active">
                                                <div class="timeline">

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-2.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-3.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-4.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                </div>
                                            </div>
                                            <div id="tab-lv23-second" class="tab-pane fade">
                                                <div class="timeline">

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-3.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-4.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                </div>
                                            </div>
                                            <div id="tab-lv23-third" class="tab-pane fade">
                                                <div class="timeline">

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-2.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-3.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                </div>
                                            </div>
                                            <div id="tab-lv23-last" class="tab-pane fade"><div class="timeline">

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-1.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> <strong>John Doe</strong> / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-2.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-3.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-4.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                </div></div>
                                        </div>
                                    </div>
                                    <!-- tab4 -->
                                    <div id="tab-last" class="tab-pane fade">
                                        <div class="schedule-tabs lv2">
                                            <ul id="tabs-lv24" class="nav nav-justified">
                                                <li class="active"><a href="#tab-lv24-first" data-toggle="tab">HAll A</a></li>
                                                <li><a href="#tab-lv24-second" data-toggle="tab">HAll B</a></li>
                                                <li><a href="#tab-lv24-third" data-toggle="tab">HAll C</a></li>
                                                <li><a href="#tab-lv24-last" data-toggle="tab">HAll D</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content lv2">
                                            <div id="tab-lv24-first" class="tab-pane fade in active">
                                                <div class="timeline">

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-2.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-3.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                </div>
                                            </div>
                                            <div id="tab-lv24-second" class="tab-pane fade">
                                                <div class="timeline">

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-3.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-4.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                </div>
                                            </div>
                                            <div id="tab-lv24-third" class="tab-pane fade">
                                                <div class="timeline">

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-2.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-3.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                </div>
                                            </div>
                                            <div id="tab-lv24-last" class="tab-pane fade">
                                                <div class="timeline">

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-1.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> <strong>John Doe</strong> / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-2.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-3.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                    <article class="post-wrap">
                                                        <div class="media">
                                                            <!-- -->
                                                            <div class="post-media pull-left">
                                                                <img src="assets/img/preview/avatar-v2-4.jpg" alt="" class="media-object">
                                                            </div>
                                                            <!-- -->
                                                            <div class="media-body">
                                                                <div class="post-header">
                                                                    <div class="post-meta">
                                                                        <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                        <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <h2 class="post-title"><a href="#">Speaker Content Header Is Header</a></h2>
                                                                </div>
                                                                <div class="post-body">
                                                                    <div class="post-excerpt">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis in feugiat mollis, libero eros consectetur elit non cursus lacus nisl at dolor.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!-- -->
                                                        </div>
                                                    </article>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Schedule -->

                            <!-- -->
                            <hr class="page-divider transparent half2">
                            <!-- -->

                            <h1 class="section-title">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-thumbs-up fa-stack-1x"></i></span></span>
                                <span class="title-inner">Event Sponsors <small> / dont forget it</small></span>
                            </h1>
                            <div class="partners-carousel-2">
                                <div class="owl-carousel owl-theme owl-loaded">
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <div class="owl-stage-outer" style="padding-left: 0px; padding-right: 0px;"><div class="owl-stage" style="width: 2736.8px; transform: translate3d(-1617.2px, 0px, 0px); transition: 0.25s;"><div class="owl-item cloned" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-2.png" alt=""></a></div></div><div class="owl-item cloned" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-3.png" alt=""></a></div></div><div class="owl-item cloned" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-4.png" alt=""></a></div></div><div class="owl-item cloned" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-5.png" alt=""></a></div></div><div class="owl-item cloned" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-6.png" alt=""></a></div></div><div class="owl-item" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-1.png" alt=""></a></div></div><div class="owl-item" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-2.png" alt=""></a></div></div><div class="owl-item" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-3.png" alt=""></a></div></div><div class="owl-item" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-4.png" alt=""></a></div></div><div class="owl-item" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-5.png" alt=""></a></div></div><div class="owl-item" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-6.png" alt=""></a></div></div><div class="owl-item" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-1.png" alt=""></a></div></div><div class="owl-item" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-2.png" alt=""></a></div></div><div class="owl-item active" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-3.png" alt=""></a></div></div><div class="owl-item active" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-4.png" alt=""></a></div></div><div class="owl-item active" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-5.png" alt=""></a></div></div><div class="owl-item active" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-6.png" alt=""></a></div></div><div class="owl-item cloned active" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-1.png" alt=""></a></div></div><div class="owl-item cloned" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-2.png" alt=""></a></div></div><div class="owl-item cloned" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-3.png" alt=""></a></div></div><div class="owl-item cloned" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-4.png" alt=""></a></div></div><div class="owl-item cloned" style="width: 99.4px; margin-right: 25px;"><div><a href="#"><img src="assets/img/partner/light/partner-5.png" alt=""></a></div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="fa fa-caret-left"></i></div><div class="owl-next" style=""><i class="fa fa-caret-right"></i></div></div><div class="owl-dots" style="display: none;"></div></div></div>
                            </div>
                            <div class="text-center margin-top">
                                <a href="#" class="btn btn-theme"><i class="fa fa-thumbs-up"></i> Become a sponsor</a>
                            </div>

                            <!-- -->
                            <hr class="page-divider line large">
                            <!-- -->

                            <h1 class="section-title">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
                                <span class="title-inner">Event Speakers <small> / meet with greaters</small></span>
                            </h1>

                            <!-- Speakers row -->
                            <div class="thumbnails clear">
                                <div class="carousel-slider">
                                    <div class="owl-carousel slide-3 owl-theme owl-loaded">
                                        
                                        <!-- -->
                                        
                                        <!-- -->
                                        
                                    <div class="owl-stage-outer" style="padding-left: 0px; padding-right: 0px;"><div class="owl-stage" style="width: 1881px; transform: translate3d(-1045px, 0px, 0px); transition: 0.25s;"><div class="owl-item cloned" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding text-center">
                                                <div class="rehex speaker-avatar">
                                                    <div class="rehex-deg">
                                                        <div class="rehex-deg">
                                                            <div class="rehex-inner">
                                                                <div class="media">
                                                                    <img src="assets/img/preview/speaker-1.jpg" alt="">
                                                                    <div class="caption hovered">
                                                                        <div class="caption-wrapper div-table">
                                                                            <div class="caption-inner div-cell">
                                                                                <p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-link"></i></a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption before-media">
                                                    <h3 class="caption-title">Speaker name here</h3>
                                                    <p class="caption-category">Co Founder</p>
                                                </div>
                                                <div class="caption">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>
                                                    <ul class="social-line list-inline text-center">
                                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding text-center">
                                                <div class="rehex speaker-avatar">
                                                    <div class="rehex-deg">
                                                        <div class="rehex-deg">
                                                            <div class="rehex-inner">
                                                                <div class="media">
                                                                    <img src="assets/img/preview/speaker-2.jpg" alt="">
                                                                    <div class="caption hovered">
                                                                        <div class="caption-wrapper div-table">
                                                                            <div class="caption-inner div-cell">
                                                                                <p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-link"></i></a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption before-media">
                                                    <h3 class="caption-title">Speaker name here</h3>
                                                    <p class="caption-category">Co Founder</p>
                                                </div>
                                                <div class="caption">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>
                                                    <ul class="social-line list-inline text-center">
                                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding text-center">
                                                <div class="rehex speaker-avatar">
                                                    <div class="rehex-deg">
                                                        <div class="rehex-deg">
                                                            <div class="rehex-inner">
                                                                <div class="media">
                                                                    <img src="assets/img/preview/speaker-3.jpg" alt="">
                                                                    <div class="caption hovered">
                                                                        <div class="caption-wrapper div-table">
                                                                            <div class="caption-inner div-cell">
                                                                                <p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-link"></i></a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption before-media">
                                                    <h3 class="caption-title">Speaker name here</h3>
                                                    <p class="caption-category">Co Founder</p>
                                                </div>
                                                <div class="caption">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>
                                                    <ul class="social-line list-inline text-center">
                                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding text-center">
                                                <div class="rehex speaker-avatar">
                                                    <div class="rehex-deg">
                                                        <div class="rehex-deg">
                                                            <div class="rehex-inner">
                                                                <div class="media">
                                                                    <img src="assets/img/preview/speaker-1.jpg" alt="">
                                                                    <div class="caption hovered">
                                                                        <div class="caption-wrapper div-table">
                                                                            <div class="caption-inner div-cell">
                                                                                <p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-link"></i></a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption before-media">
                                                    <h3 class="caption-title">Speaker name here</h3>
                                                    <p class="caption-category">Co Founder</p>
                                                </div>
                                                <div class="caption">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>
                                                    <ul class="social-line list-inline text-center">
                                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding text-center">
                                                <div class="rehex speaker-avatar">
                                                    <div class="rehex-deg">
                                                        <div class="rehex-deg">
                                                            <div class="rehex-inner">
                                                                <div class="media">
                                                                    <img src="assets/img/preview/speaker-2.jpg" alt="">
                                                                    <div class="caption hovered">
                                                                        <div class="caption-wrapper div-table">
                                                                            <div class="caption-inner div-cell">
                                                                                <p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-link"></i></a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption before-media">
                                                    <h3 class="caption-title">Speaker name here</h3>
                                                    <p class="caption-category">Co Founder</p>
                                                </div>
                                                <div class="caption">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>
                                                    <ul class="social-line list-inline text-center">
                                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding text-center">
                                                <div class="rehex speaker-avatar">
                                                    <div class="rehex-deg">
                                                        <div class="rehex-deg">
                                                            <div class="rehex-inner">
                                                                <div class="media">
                                                                    <img src="assets/img/preview/speaker-3.jpg" alt="">
                                                                    <div class="caption hovered">
                                                                        <div class="caption-wrapper div-table">
                                                                            <div class="caption-inner div-cell">
                                                                                <p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-link"></i></a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption before-media">
                                                    <h3 class="caption-title">Speaker name here</h3>
                                                    <p class="caption-category">Co Founder</p>
                                                </div>
                                                <div class="caption">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>
                                                    <ul class="social-line list-inline text-center">
                                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned active" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding text-center">
                                                <div class="rehex speaker-avatar">
                                                    <div class="rehex-deg">
                                                        <div class="rehex-deg">
                                                            <div class="rehex-inner">
                                                                <div class="media">
                                                                    <img src="assets/img/preview/speaker-1.jpg" alt="">
                                                                    <div class="caption hovered">
                                                                        <div class="caption-wrapper div-table">
                                                                            <div class="caption-inner div-cell">
                                                                                <p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-link"></i></a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption before-media">
                                                    <h3 class="caption-title">Speaker name here</h3>
                                                    <p class="caption-category">Co Founder</p>
                                                </div>
                                                <div class="caption">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>
                                                    <ul class="social-line list-inline text-center">
                                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned active" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding text-center">
                                                <div class="rehex speaker-avatar">
                                                    <div class="rehex-deg">
                                                        <div class="rehex-deg">
                                                            <div class="rehex-inner">
                                                                <div class="media">
                                                                    <img src="assets/img/preview/speaker-2.jpg" alt="">
                                                                    <div class="caption hovered">
                                                                        <div class="caption-wrapper div-table">
                                                                            <div class="caption-inner div-cell">
                                                                                <p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-link"></i></a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption before-media">
                                                    <h3 class="caption-title">Speaker name here</h3>
                                                    <p class="caption-category">Co Founder</p>
                                                </div>
                                                <div class="caption">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>
                                                    <ul class="social-line list-inline text-center">
                                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding text-center">
                                                <div class="rehex speaker-avatar">
                                                    <div class="rehex-deg">
                                                        <div class="rehex-deg">
                                                            <div class="rehex-inner">
                                                                <div class="media">
                                                                    <img src="assets/img/preview/speaker-3.jpg" alt="">
                                                                    <div class="caption hovered">
                                                                        <div class="caption-wrapper div-table">
                                                                            <div class="caption-inner div-cell">
                                                                                <p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-link"></i></a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption before-media">
                                                    <h3 class="caption-title">Speaker name here</h3>
                                                    <p class="caption-category">Co Founder</p>
                                                </div>
                                                <div class="caption">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>
                                                    <ul class="social-line list-inline text-center">
                                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="fa fa-caret-left"></i></div><div class="owl-next" style=""><i class="fa fa-caret-right"></i></div></div><div class="owl-dots" style="display: none;"></div></div></div>
                                </div>
                            </div>
                            <!-- /Speakers row -->

                            <div class="text-center margin-top">
                                <a href="#" class="btn btn-theme btn-theme-grey-dark"><i class="fa fa-user"></i> See all speakers</a>
                            </div>

                            <!-- -->
                            <hr class="page-divider line">
                            <!-- -->

                            <h1 class="section-title clearfix">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
                                <span class="title-inner">Event Price list <small> / perfect price for event</small></span>
                            </h1>
                            <div class="row price-tables">
                                <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                                    <div class="price-table">
                                        <div class="price-table-header">
                                            <div class="price-label">
                                                <h2 class="price-label-title">Personal</h2>
                                            </div>
                                            <div class="price-value">
                                                <span class="price-number">111</span><span class="price-unit">$</span><span class="price-per"></span>
                                            </div>
                                        </div>
                                        <div class="price-table-rows">
                                            <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Lorem ipsum dolor sit amet</div>
                                            <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Consectetur adipiscing elit</div>
                                            <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Sed vitae diam metus</div>
                                            <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Donec cursus magna</div>
                                            <div class="price-table-row-bottom">
                                                <a class="btn btn-theme scroll-to" href="#">Register</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                                    <div class="price-table featured">
                                        <div class="price-table-header">
                                            <div class="price-label">
                                                <h2 class="price-label-title">Company</h2>
                                            </div>
                                            <div class="price-value">
                                                <span class="price-number">124</span><span class="price-unit">$</span><span class="price-per"></span>
                                            </div>
                                        </div>
                                        <div class="price-table-rows">
                                            <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Lorem ipsum dolor sit amet</div>
                                            <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Consectetur adipiscing elit</div>
                                            <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Sed vitae diam metus</div>
                                            <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Donec cursus magna</div>
                                            <div class="price-table-row-bottom">
                                                <a class="btn btn-theme scroll-to" href="#">Register</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                                    <div class="price-table">
                                        <div class="price-table-header">
                                            <div class="price-label">
                                                <h2 class="price-label-title">Business</h2>
                                            </div>
                                            <div class="price-value">
                                                <span class="price-number">175</span><span class="price-unit">$</span><span class="price-per"></span>
                                            </div>
                                        </div>
                                        <div class="price-table-rows">
                                            <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Lorem ipsum dolor sit amet</div>
                                            <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Consectetur adipiscing elit</div>
                                            <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Sed vitae diam metus</div>
                                            <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Donec cursus magna</div>
                                            <div class="price-table-row-bottom">
                                                <a class="btn btn-theme scroll-to" href="#">Register</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- -->
                            <hr class="page-divider line large">
                            <!-- -->

                            <div class="row">
                                <div class="col-md-8 pull-left">
                                    <h1 class="section-title">
                                        <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-question fa-stack-1x"></i></span></span>
                                        <span class="title-inner">Event FAQS <small> / find your answers</small></span>
                                    </h1>
                                </div>
                                <div class="col-md-4 text-right-md pull-right">
                                    <a href="#" class="btn btn-theme btn-theme-lg btn-theme-transparent-grey pull-right"><i class="fa fa-pencil"></i> Open a ticket</a>
                                </div>
                            </div>

                            <div class="row faq-alt">
                                <div class="col-md-6">

                                    <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne1">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                                        How to make  New Event ?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                <div class="panel-body">
                                                    Praesent ac sem in neque venenatis tristique. Morbi et ligula velit. Nullam a augue vel mi porta vestibulum non ac elit. Vivamus convallis tortor et. Hac habitasse platea dictumst.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo1">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                                        How to make  New Event ?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo1">
                                                <div class="panel-body">
                                                    Praesent ac sem in neque venenatis tristique. Morbi et ligula velit. Nullam a augue vel mi porta vestibulum non ac elit. Vivamus convallis tortor et. Hac habitasse platea dictumst.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree1">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                                                        How to make  New Event ?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree1">
                                                <div class="panel-body">
                                                    Praesent ac sem in neque venenatis tristique. Morbi et ligula velit. Nullam a augue vel mi porta vestibulum non ac elit. Vivamus convallis tortor et. Hac habitasse platea dictumst.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne2">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                                        How to make  New Event ?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne2">
                                                <div class="panel-body">
                                                    Praesent ac sem in neque venenatis tristique. Morbi et ligula velit. Nullam a augue vel mi porta vestibulum non ac elit. Vivamus convallis tortor et. Hac habitasse platea dictumst.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo2">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                        How to make  New Event ?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                                <div class="panel-body">
                                                    Praesent ac sem in neque venenatis tristique. Morbi et ligula velit. Nullam a augue vel mi porta vestibulum non ac elit. Vivamus convallis tortor et. Hac habitasse platea dictumst.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree2">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                                        How to make  New Event ?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree2">
                                                <div class="panel-body">
                                                    Praesent ac sem in neque venenatis tristique. Morbi et ligula velit. Nullam a augue vel mi porta vestibulum non ac elit. Vivamus convallis tortor et. Hac habitasse platea dictumst.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- -->
                            <hr class="page-divider line large">
                            <!-- -->

                            <h1 class="section-title">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                                <span class="title-inner">Register now <small> / dont mıss event!</small></span>
                            </h1>

                            <form id="registration-form" name="registration-form" class="registration-form registration-form-alt" action="#" method="post">
                                <div class="row">
                                    <div class="col-sm-12 form-alert"></div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group with-icon">
                                            <i class="fa fa-user"></i>
                                            <input type="text" class="form-control input-name" data-toggle="tooltip" title="" data-original-title="Name is required">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group with-icon">
                                            <i class="fa fa-globe"></i>
                                            <input type="text" class="form-control input-email" data-toggle="tooltip" title="" data-original-title="Mail is required">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group selectpicker-wrapper">
                                            <select class="selectpicker input-price" data-live-search="true" data-width="100%" data-toggle="tooltip" title="Select Your Price Tab" style="display: none;">
                                                <option>Select Your Price Tab</option>
                                                <option>$100</option>
                                                <option>$200</option>
                                            </select><div class="btn-group bootstrap-select input-price" style="width: 100%;"><button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" title="Select Your Price Tab"><span class="filter-option pull-left">Select Your Price Tab</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><div class="bootstrap-select-searchbox"><input type="text" class="input-block-level form-control"></div><ul class="dropdown-menu inner selectpicker" role="menu"><li rel="0" class="selected"><a tabindex="0" class="" style=""><span class="text">Select Your Price Tab</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="1"><a tabindex="0" class="" style=""><span class="text">$100</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="2"><a tabindex="0" class="" style=""><span class="text">$200</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li></ul></div></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 overflowed">
                                        <div class="text-center margin-top">
                                            <button class="btn btn-theme btn-theme-xl submit-button" type="submit"> Register Now <i class="fa fa-arrow-circle-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <!-- -->
                            <hr class="page-divider line large">
                            <!-- -->

                            <h1 class="section-title">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-star fa-stack-1x"></i></span></span>
                                <span class="title-inner">You May Like</span>
                            </h1>

                            <div class="thumbnails events">
                                <div class="carousel-slider">
                                    <div class="owl-carousel slide-3 owl-theme owl-loaded">
                                        

                                        

                                        
                                    <div class="owl-stage-outer" style="padding-left: 0px; padding-right: 0px;"><div class="owl-stage" style="width: 1875px; transform: translate3d(-1041.66px, 0px, 0px); transition: 0.25s;"><div class="owl-item cloned" style="width: 178.333px; margin-right: 30px;"><div class="isotope-item festival">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from $49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 178.333px; margin-right: 30px;"><div class="isotope-item festival">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from $49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 178.333px; margin-right: 30px;"><div class="isotope-item festival">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from $49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 178.333px; margin-right: 30px;"><div class="isotope-item festival">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from $49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 178.333px; margin-right: 30px;"><div class="isotope-item festival">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from $49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 178.333px; margin-right: 30px;"><div class="isotope-item festival">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from $49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned active" style="width: 178.333px; margin-right: 30px;"><div class="isotope-item festival">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from $49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned active" style="width: 178.333px; margin-right: 30px;"><div class="isotope-item festival">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from $49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 178.333px; margin-right: 30px;"><div class="isotope-item festival">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from $49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="fa fa-caret-left"></i></div><div class="owl-next" style=""><i class="fa fa-caret-right"></i></div></div><div class="owl-dots" style="display: none;"></div></div></div>
                                </div>
                            </div>

                            <!-- -->
                            <hr class="page-divider transparent small">
                            <!-- -->

                            <h1 class="section-title">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-h-square fa-stack-1x"></i></span></span>
                                <span class="title-inner">HOTELS <small> / dont forget book your room</small></span>
                            </h1>

                            <div class="thumbnails hotels">
                                <div class="carousel-slider">
                                    <div class="owl-carousel slide-3 owl-theme owl-loaded">
                                        

                                        

                                        
                                    <div class="owl-stage-outer" style="padding-left: 0px; padding-right: 0px;"><div class="owl-stage" style="width: 1881px; transform: translate3d(-1045px, 0px, 0px); transition: 0.25s;"><div class="owl-item cloned" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered">
                                                        <div class="caption-wrapper div-table">
                                                            <div class="caption-inner div-cell">
                                                                <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>
                                                    <div class="caption-rating rating">
                                                        <span class="star"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span>
                                                    </div>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered">
                                                        <div class="caption-wrapper div-table">
                                                            <div class="caption-inner div-cell">
                                                                <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>
                                                    <div class="caption-rating rating">
                                                        <span class="star"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span>
                                                    </div>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered">
                                                        <div class="caption-wrapper div-table">
                                                            <div class="caption-inner div-cell">
                                                                <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>
                                                    <div class="caption-rating rating">
                                                        <span class="star"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span>
                                                    </div>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered">
                                                        <div class="caption-wrapper div-table">
                                                            <div class="caption-inner div-cell">
                                                                <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>
                                                    <div class="caption-rating rating">
                                                        <span class="star"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span>
                                                    </div>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered">
                                                        <div class="caption-wrapper div-table">
                                                            <div class="caption-inner div-cell">
                                                                <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>
                                                    <div class="caption-rating rating">
                                                        <span class="star"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span>
                                                    </div>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered">
                                                        <div class="caption-wrapper div-table">
                                                            <div class="caption-inner div-cell">
                                                                <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>
                                                    <div class="caption-rating rating">
                                                        <span class="star"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span>
                                                    </div>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned active" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered">
                                                        <div class="caption-wrapper div-table">
                                                            <div class="caption-inner div-cell">
                                                                <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>
                                                    <div class="caption-rating rating">
                                                        <span class="star"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span>
                                                    </div>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned active" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered">
                                                        <div class="caption-wrapper div-table">
                                                            <div class="caption-inner div-cell">
                                                                <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>
                                                    <div class="caption-rating rating">
                                                        <span class="star"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span>
                                                    </div>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 179px; margin-right: 30px;"><div>
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered">
                                                        <div class="caption-wrapper div-table">
                                                            <div class="caption-inner div-cell">
                                                                <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>
                                                    <div class="caption-rating rating">
                                                        <span class="star"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span>
                                                    </div>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                                </div>
                                            </div>
                                        </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="fa fa-caret-left"></i></div><div class="owl-next" style=""><i class="fa fa-caret-right"></i></div></div><div class="owl-dots" style="display: none;"></div></div></div>
                                </div>
                            </div>

                        </section>
                        <!-- /Content -->

                        <hr class="page-divider transparent visible-xs">

                        <!-- Sidebar -->
                        <aside id="sidebar" class="sidebar col-sm-12 col-md-4 col-lg-3">

                            <div class="widget google-map-widget">
                                <!-- Google map -->
                                <div class="google-map">
                                    <div id="map-canvas" style="position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(https://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 26px; top: -155px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 26px; top: 101px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -230px; top: -155px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -230px; top: 101px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 282px; top: -155px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 282px; top: 101px;"></div></div></div></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 26px; top: -155px;"><canvas draggable="false" height="256" width="256" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 26px; top: 101px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -230px; top: -155px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -230px; top: 101px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 282px; top: -155px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 282px; top: 101px;"></div></div></div></div><div style="position: absolute; z-index: 0; transform: translateZ(0px); left: 0px; top: 0px;"><div style="overflow: hidden; width: 283px; height: 200px;"><img src="https://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i152038&amp;2i98203&amp;2e1&amp;3u10&amp;4m2&amp;1u283&amp;2u200&amp;5m5&amp;1e0&amp;5sen-US&amp;6sus&amp;10b1&amp;12b1&amp;token=117243" style="width: 283px; height: 200px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="transform: translateZ(0px); position: absolute; left: 26px; top: -155px; transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i10!2i594!3i383!2m3!1e0!2sm!3i321478968!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="transform: translateZ(0px); position: absolute; left: 26px; top: 101px; transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i10!2i594!3i384!2m3!1e0!2sm!3i321478968!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="transform: translateZ(0px); position: absolute; left: -230px; top: -155px; transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i10!2i593!3i383!2m3!1e0!2sm!3i321478968!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="transform: translateZ(0px); position: absolute; left: -230px; top: 101px; transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i10!2i593!3i384!2m3!1e0!2sm!3i321478968!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="transform: translateZ(0px); position: absolute; left: 282px; top: -155px; transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i10!2i595!3i383!2m3!1e0!2sm!3i321478968!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="transform: translateZ(0px); position: absolute; left: 282px; top: 101px; transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i10!2i595!3i384!2m3!1e0!2sm!3i321478968!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=40.980765,28.986652&amp;z=10&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 62px; height: 26px; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/google_white2.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 229px; height: 148px; position: absolute; left: 5px; top: 10px; background-color: white;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2015 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 71px; bottom: 0px; width: 121px;"><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2015 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2015 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; -webkit-user-select: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@40.9807648,28.9866516,10z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint" draggable="false" controlwidth="32" controlheight="84" style="margin: 5px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"><div controlwidth="32" controlheight="40" style="cursor: url(https://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; position: absolute; left: 0px; top: 0px;"><div aria-label="Street View Pegman Control" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -9px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div aria-label="Pegman is disabled" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -107px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div aria-label="Pegman is on top of the Map" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -58px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div aria-label="Street View Pegman Control" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -205px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="0" controlheight="0" style="opacity: 0.6; display: none; position: absolute;"><div title="Rotate map 90 degrees" style="width: 22px; height: 22px; overflow: hidden; position: absolute; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -38px; top: -360px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="20" controlheight="39" style="position: absolute; left: 6px; top: 45px;"><div style="width: 20px; height: 39px; overflow: hidden; position: absolute;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -39px; top: -401px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div title="Zoom in" style="position: absolute; left: 0px; top: 2px; width: 20px; height: 17px; cursor: pointer;"></div><div title="Zoom out" style="position: absolute; left: 0px; top: 19px; width: 20px; height: 17px; cursor: pointer;"></div></div></div><div class="gmnoprint gm-style-mtc" style="margin: 5px; z-index: 0; position: absolute; cursor: pointer; text-align: left; width: 85px; right: 0px; top: 0px;"><div draggable="false" title="Change map style" style="direction: ltr; overflow: hidden; text-align: left; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 1px 6px; border-radius: 2px; -webkit-background-clip: padding-box; border: 1px solid rgba(0, 0, 0, 0.14902); box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; font-weight: 500; background-color: rgb(255, 255, 255); background-clip: padding-box;">Map<img src="https://maps.gstatic.com/mapfiles/arrow-down.png" draggable="false" style="-webkit-user-select: none; border: 0px; padding: 0px; margin: -2px 0px 0px; position: absolute; right: 6px; top: 50%; width: 7px; height: 4px;"></div><div style="z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; top: 100%; left: 0px; right: 0px; text-align: left; display: none; background-color: white; background-clip: padding-box;"><div draggable="false" title="Show street map" style="color: black; font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px; font-weight: 500; background-color: rgb(255, 255, 255);">Map</div><div draggable="false" title="Show satellite imagery" style="color: black; font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px; background-color: rgb(255, 255, 255);">Satellite</div><div style="margin: 1px 0px; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(235, 235, 235);"></div><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div><div style="margin: 1px 0px; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(235, 235, 235); display: none;"></div><div draggable="false" title="Zoom in to show 45 degree view" style="color: rgb(184, 184, 184); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; display: none; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(241, 241, 241); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">45°</label></div><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; display: none; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div>
                                </div>
                                <!-- /Google map -->
                                <a href="#" class="link"><i class="fa fa-map-marker"></i> Go to LOCATION</a>
                            </div>

                            <div class="widget">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    When &amp; Where
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <ul>
                                                    <li><a href="#">NYC - Financial Freedom Investor</a></li>
                                                    <li>Madison Ave</li>
                                                    <li>New York, NY 10010</li>
                                                    <li>Thursday, January 8, 2015</li>
                                                    <li>from 6:30 PM to 8:30 PM (EST)</li>
                                                </ul>
                                                <a href="#"><i class="fa fa-calendar"></i> Add to My Calendar</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Organizer
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis <a href="#">more...</a></p>
                                                <ul>
                                                    <li><i class="fa fa-facebook"></i> facebook.com/imorganiser</li>
                                                    <li><i class="fa fa-twitter"></i> @imorganiser</li>
                                                    <li><i class="fa fa-globe"></i> http://www.organiserweb.com</li>
                                                </ul>
                                                <a href="#" class="btn btn-theme btn-theme-grey-dark btn-theme-md">Send Message <i class="fa fa-plus-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </aside>
                        <!-- /Sidebar -->

                    </div>
                </section>
                <!-- /PAGE -->

            </div>