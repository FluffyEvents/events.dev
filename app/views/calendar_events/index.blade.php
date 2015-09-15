@extends('layouts.master')

@section('title')
<title>Events Index</title>
@stop

@section('content')

<div class="content-area">

    <section class="page-section image breadcrumbs overlay">
        <div class="container">
            <h1>EVENT DETAIL PAGE</h1>
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a class="active disabled" href="#">Events</a></li>
            </ul>
        </div>
    </section>


    <!-- PAGE -->
    <section class="page-section with-sidebar sidebar-right first-section">
        <div class="container">

            

            <hr class="page-divider transparent visible-xs">

            <!-- Content -->
            <section id="content" class="content col-sm-8 events-listing">

                <div class="tab-content">
                    <div id="list-view" class="tab-pane fade active in" role="tabpanel">
                        <div class="thumbnails events vertical">
                        	@foreach($events as $event)

                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-4">
                                        <div class="media">
                                            <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                            <img src="assets/img/preview/event-1.jpg" alt="">
                                            <div class="caption hovered"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-8">
                                        <div class="caption">
                                            <a href="#" class="pull-right">
                                                <span class="fa-stack fa-lg">
                                                    <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                    <i class="fa fa-stack-1x fa-share-alt"></i>
                                                </span>
                                            </a>
                                            <h3 class="caption-title"><a href="#">{{ $event->title }}</a></h3>
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

                            {{ $events->links() }}

                            

                        <!-- Pagination -->
                        <div class="pagination-wrapper">
                            <ul class="pagination">
                                <li class="disabled"><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- /Pagination -->
                    </div>
                </div>
            </section>
            <!-- /Content -->

        </div>
    </section>
    <!-- /PAGE -->

</div>

@stop