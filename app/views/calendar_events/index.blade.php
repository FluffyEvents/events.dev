@extends('layouts.master')

@section('title')
<title>Events Index</title>
@stop

@section('content')

<div class="content-area">

    <section class="page-section image breadcrumbs overlay">
        <div class="container">
            <h1 class="section-title">EVENTS</h1>
        </div>
    </section>


    <!-- PAGE -->
    <section class="page-section with-sidebar sidebar-right first-section">
        <div class="container">

            <!-- Content -->
            <section id="content" class="content col-sm-offset-2 col-sm-8">

                <div class="tab-content">
                    <div id="list-view" class="tab-pane fade active in" role="tabpanel">
                        <div class="thumbnails events vertical">
                        	@foreach($events as $event)

                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-4">
                                        <div class="media">
                                            <img src="assets/img/kitty-1.jpg" alt="">
                                            <div class="caption hovered"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-8">
                                        <div class="caption">
                                            <h2 class="caption-title"><a href="#">{{ $event->title }}</a></h2>
											<p class="caption-category"><i class="fa fa-file-text-o"></i> {{ $event->start_time }} - {{ $event->end_time }} @ {{ $event->location->city}} // {{ $event->location->state }}</p>
											<p class="caption-price">Tickets from ${{ $event->price }}</p>
											<p class="caption-text">{{ $event->description }}</p>
											<p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="page-divider half">
                            @endforeach

                            <div class="pagination-wrapper text-center">
	                            {{ $events->links() }}
	                        </div>
                    </div>
                </div>
            </section>
            <!-- /Content -->

        </div>
    </section>
    <!-- /PAGE -->

</div>

@stop