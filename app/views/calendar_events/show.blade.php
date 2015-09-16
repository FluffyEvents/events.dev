@extends('layouts.master')

@section('title')
<title>Event Details</title>
@stop

@section('content')

<div class="content-area">

    <section class="page-section image breadcrumbs overlay">
        <div class="container">
            <h1>{{ $event->title }}</h1>
        </div>
    </section>


    <!-- PAGE -->
    <section class="page-section with-sidebar sidebar-right first-section">
        <div class="container">

            <!-- Content -->
            <section id="content" class="content col-sm-12 col-md-8 col-lg-9">

                <h1 class="section-title">
                    <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-star fa-stack-1x"></i></span></span>
                    <span class="title-inner">Event Details</span>
                </h1>
                <h4 class="section-title">Start Time: <small>{{ $event->start_time }}</small></h3>
                <h4 class="section-title">End Time: <small>{{ $event->end_time }}</small></h3>
                <h4 class="section-title">Where: <small>{{ $event->location->city}}, {{ $event->location->state }}</small></h3>
                <h4 class="section-title">Description: <small>{{ $event->description }}</small></h3> 
                <p class="btn-row">
                    <a href="#" class="btn btn-theme btn-theme-xl scroll-to">RSVP <i class="fa fa-arrow-circle-right"></i></a>
                    <a href="#" class="btn btn-theme btn-theme-xl btn-theme-transparent">Contact Organizer</a>
                </p>

                <!-- -->
                <hr class="page-divider transparent">
                <!-- -->
    
			</section>
				 <!-- /Content -->

        </div>
    </section>
    <!-- /PAGE -->

</div>

@stop