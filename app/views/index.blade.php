@extends('layouts.master')

@section('title')
<title>Welcome to Fluffy Events</title>
<meta id="featured-countdown" name="countdown" value="{{ $featuredEvent->start_time->format('m-d-y G:i') }}">

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
                                    <h3 class="caption-subtitle" data-animation="fadeInUp" data-animation-delay="300">{{ $featuredEvent->title }} in {{ $featuredEvent->location->city }}</h3>
                                    <h2 data-animation="fadeInDown" data-animation-delay="100"><span> {{ $featuredEvent->start_time->format('F jS h:i a') }} - {{ $featuredEvent->end_time->format('F jS h:i a') }}</span></h2>
                                    <div class="countdown-wrapper">
                                        <div id="defaultCountdown" class="defaultCountdown clearfix"></div>
                                    </div>
                                    <p class="caption-text">
                                        <a class="btn btn-theme scroll-to" href="/events/{{ $featuredEvent->id }}" data-animation="flipInY" data-animation-delay="600">Register</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Slide -->


                <!-- Slide -->
                <div class="item page text-center slide4">
                    <div class="caption">
                        <div class="container">
                            <div class="div-table">
                                <div class="div-cell">
                                    <h2 class="caption-subtitle">Furry Fun</h2>
                                    <p class="caption-text">
                                        <a class="btn btn-theme btn-theme btn-theme-dark scroll-to" href="/login#signup" data-animation="flipInY" data-animation-delay="600">Sign Up Today!</a><!--
                                        --><a class="btn btn-theme btn-theme btn-theme-dark scroll-to" href="/events" data-animation="flipInY" data-animation-delay="600">See The Latest Events</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Slide -->
            </div>

        </div>
    </section>
    <!-- /SLIDER -->
</div>

<section class="page-section no-padding-bottom">
    <div class="container">
        <h1>Fluffy Events is the site for finding parties and get-togethers for our furry friends.<small> View <a href="/events">all event listings</a> as well as create your own by <a href="/login#signup">signing up</a> with Fluffy Events.</small></h1>
    </div>
</section>


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

            {{-- wrap repeat around this div --}}
            @foreach($events as $event)
            <div class="col-md-3 col-sm-6 isotope-item photos" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                <div class="thumbnail no-border no-padding">
                    <div class="media">
                        <img src="assets/img/kitty-1.jpg" alt="">
                        <div class="caption hovered">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <p class="caption-text">
                                        <a href="/events/{{ $event->id }}" class="btn btn-theme scroll-to">Details <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="caption hovered back">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <h3 class="caption-title">{{ $event->title }}</h3>
                                    <p class="caption-category">in {{ $event->location->city}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- end repeat around this div --}}

        </div>
        <div class="text-center margin-top">
            <a data-animation="flipInY" data-animation-delay="500" href="/events" class="btn btn-theme btn-theme-grey-dark btn-theme-md animated flipInY visible"><i class="fa fa-photo"></i> See All Gallery</a>
        </div>

    </div>
</section>

@stop

@section('scripts')
{{-- <script src="moment.min.js"></script>
<script src="countdown.min.js"></script>
<script src="moment-countdown.min.js"></script> --}}
<script>
//LOL THIS ACTUALLY ISNT WORKING - TAKE A LOOK AT THEME.js for the  initcountdown function
// var featuredCountdown = document.getElementById('featured-countdown').getAttribute('value');
// $('#defaultCountdown').moment(featuredCountdown).countdown().toString();
// $('#defaultCountdown2').moment(featuredCountdown).countdown().toString();
</script>
@endsection
