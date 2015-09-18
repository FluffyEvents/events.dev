@extends('layouts.master')

@section('title')
<meta id="event-id" name="id" value="{{ $event->id }}">
<title>Event Details</title>
<style type="text/css">
    #map-canvas {
        width: 700px;
        height: 411px;
    }
</style>
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
                <h4 class="section-title">Where: <small>{{ $event->location->name}} - {{ $event->location->address}}, {{ $event->location->city}}, {{ $event->location->state }} {{ $event->location->postal_code}}</small></h3>
                <h4 class="section-title">Description: <small>{{ $event->description }}</small></h3>
                <p class="btn-row">
	                <div class="col-sm-6 col-md-4">
	                    <div class="form-group selectpicker-wrapper">
	                        <select class="selectpicker input-price" data-width="100%" data-toggle="tooltip" title="Select Your Price Tab" style="display: none;">
	                            <option>RSVP</option>
	                            <option>$2 Now</option>
	                            <option>$2 At Will Call</option>
	                        </select>
	                    </div>
	                </div>
	                <div class="col-sm-6 col-md-4">
                    	<a href="#" class="btn btn-theme btn-theme-lg btn-theme-transparent">Contact Organizer <i class="fa fa-bullhorn"></i></a>
                    </div>
                </p>
                <!-- -->
                <hr class="page-divider transparent">
                <!-- -->
                <div id="map-canvas"></div>

			</section>
				 <!-- /Content -->

        </div>
    </section>
    <!-- /PAGE -->

</div>

@stop

@section('scripts')
<!-- Load the Google Maps API [DON'T FORGET TO USE A KEY] -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7iVpKmwhIwozVD3J2pDQobI23STztqgE"></script>
<script>
// Include code from previous example
(function() {
        "use strict";

        // Set our map options
        var mapOptions = {
            // Set the zoom level
            zoom: 18,
        };

        // Render the map
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);


        // Set our address to geocode
        var eventId = document.getElementById('event-id').getAttribute('value');

        var address = "";
        $.get("/getAddress/"+eventId).done(function(data) {
            console.log("Everything went great!");
            console.log(data.address + ", " + data.city + ", " + data.state + ", " + data.postal_code);
            var address = data.address + ", " + data.city + ", " + data.state + ", " + data.postal_code;

            var contentString = '<div id="content">'+
                '<h2 id="firstHeading" class="firstHeading">'+ data.name +'</h2>'+
                '<div id="bodyContent">'+'<p>'+ address +'</p>'+'</div>'+'</div>';


            // Init geocoder object
            var geocoder = new google.maps.Geocoder();
            // Geocode our address
            geocoder.geocode({ "address": address }, function(results, status) {

               // Check for a successful result
               if (status == google.maps.GeocoderStatus.OK) {

                   console.log(results[0].geometry.location);
                   // Recenter the map over the address
                   map.setCenter(results[0].geometry.location);
                   var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location
                    });

                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                      });

                    infowindow.open(map, marker);
               } else {

                   // Show an error message with the status if our request fails
                   alert("Geocoding was not successful - STATUS: " + status);
               }
            });
        }).fail(function() {
            console.log("Unable to get data for Google Map.");
        }).always(function(data) {
            console.log(data);
        });
})();
</script>
@stop
