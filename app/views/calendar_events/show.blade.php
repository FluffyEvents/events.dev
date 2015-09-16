@extends('layouts.master')

@section('title')
<title>Manage Events</title>
@stop

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
    <section class="page-section with-sidebar sidebar-right first-section">
        <div class="container">

            <!-- Sidebar -->
            <aside id="sidebar" class="sidebar col-sm-4 col-md-3">

                <div class="widget google-map-widget">
                    <!-- Google map -->
                    <div class="google-map1">
                        <div id="map-canvas1" style="position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(https://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -22px; top: -35px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -22px; top: 221px;"></div></div></div></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -22px; top: -35px;"><canvas draggable="false" height="256" width="256" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -22px; top: 221px;"></div></div></div></div><div style="position: absolute; z-index: 0; transform: translateZ(0px); left: 0px; top: 0px;"><div style="overflow: hidden; width: 205px; height: 250px;"><img src="https://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i152086&amp;2i98083&amp;2e1&amp;3u10&amp;4m2&amp;1u205&amp;2u250&amp;5m5&amp;1e0&amp;5sen-US&amp;6sus&amp;10b1&amp;12b1&amp;token=53133" style="width: 205px; height: 250px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="transform: translateZ(0px); position: absolute; left: -22px; top: -35px; transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i10!2i594!3i383!2m3!1e0!2sm!3i321478968!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="transform: translateZ(0px); position: absolute; left: -22px; top: 221px; transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i10!2i594!3i384!2m3!1e0!2sm!3i321478968!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=41.079379,28.998447&amp;z=10&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 62px; height: 26px; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/google_white2.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 151px; height: 148px; position: absolute; left: 5px; top: 35px; background-color: white;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2015 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 72px; bottom: 0px; width: 55px;"><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer;">Map Data</a><span style="display: none;">Map data ©2015 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2015 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; -webkit-user-select: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@41.079379,28.9984466,10z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint" draggable="false" controlwidth="32" controlheight="84" style="margin: 5px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"><div controlwidth="32" controlheight="40" style="cursor: url(https://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; position: absolute; left: 0px; top: 0px;"><div aria-label="Street View Pegman Control" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -9px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div aria-label="Pegman is disabled" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -107px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div aria-label="Pegman is on top of the Map" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -58px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div aria-label="Street View Pegman Control" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -205px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="0" controlheight="0" style="opacity: 0.6; display: none; position: absolute;"><div title="Rotate map 90 degrees" style="width: 22px; height: 22px; overflow: hidden; position: absolute; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -38px; top: -360px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="20" controlheight="39" style="position: absolute; left: 6px; top: 45px;"><div style="width: 20px; height: 39px; overflow: hidden; position: absolute;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -39px; top: -401px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div title="Zoom in" style="position: absolute; left: 0px; top: 2px; width: 20px; height: 17px; cursor: pointer;"></div><div title="Zoom out" style="position: absolute; left: 0px; top: 19px; width: 20px; height: 17px; cursor: pointer;"></div></div></div><div class="gmnoprint gm-style-mtc" style="margin: 5px; z-index: 0; position: absolute; cursor: pointer; text-align: left; width: 85px; right: 0px; top: 0px;"><div draggable="false" title="Change map style" style="direction: ltr; overflow: hidden; text-align: left; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 1px 6px; border-radius: 2px; -webkit-background-clip: padding-box; border: 1px solid rgba(0, 0, 0, 0.14902); box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; font-weight: 500; background-color: rgb(255, 255, 255); background-clip: padding-box;">Map<img src="https://maps.gstatic.com/mapfiles/arrow-down.png" draggable="false" style="-webkit-user-select: none; border: 0px; padding: 0px; margin: -2px 0px 0px; position: absolute; right: 6px; top: 50%; width: 7px; height: 4px;"></div><div style="z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; top: 100%; left: 0px; right: 0px; text-align: left; display: none; background-color: white; background-clip: padding-box;"><div draggable="false" title="Show street map" style="color: black; font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px; font-weight: 500; background-color: rgb(255, 255, 255);">Map</div><div draggable="false" title="Show satellite imagery" style="color: black; font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px; background-color: rgb(255, 255, 255);">Satellite</div><div style="margin: 1px 0px; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(235, 235, 235);"></div><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div><div style="margin: 1px 0px; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(235, 235, 235); display: none;"></div><div draggable="false" title="Zoom in to show 45 degree view" style="color: rgb(184, 184, 184); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; display: none; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(241, 241, 241); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">45°</label></div><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; display: none; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div>
                    </div>
                    <!-- /Google map -->
                    <a href="#" class="link"><i class="fa fa-map-marker"></i> ISTANBUL, TURKEY</a>
                </div>

                <div class="widget">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                   
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Category
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Event Type
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Date
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Price
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </aside>
            <!-- /Sidebar -->

            <hr class="page-divider transparent visible-xs">

            <!-- Content -->
            <section id="content" class="content col-sm-8 col-md-9">

                <div class="listing-meta">

                    <div class="filters">
                        <a href="#">Business <i class="fa fa-times"></i></a>
                        <a href="#">Networking <i class="fa fa-times"></i></a>
                        <a href="#">Free <i class="fa fa-times"></i></a>
                    </div>

                    <div class="options">
                        <a class="byrevelance" href="#">Revelance</a>
                        <a class="bydate active" href="#">DATE</a>
                        <ul class="list-grid-tabs" role="tablist">                                    
                            <li class="active" role="presentation"> <a class="view-list" href="#list-view" data-toggle="tab" role="tab"><i class="fa fa-th-list"></i></a></li>
                            <li role="presentation"><a class="view-th " href="#grid-view" data-toggle="tab" role="tab"><i class="fa fa-th"></i></a></li>
                        </ul>
                    </div>

                </div>

                <div class="tab-content">
                    <div id="list-view" class="tab-pane fade active in" role="tabpanel">
                        <div class="thumbnails events vertical">

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
                                            <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                            <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 - 22:00 on Manhattan / New York</p>
                                            <p class="caption-price">Tickets from $49,99</p>
                                            <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                            <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="page-divider half">

                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-4">
                                        <div class="media">
                                            <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
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
                                            <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                            <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 - 22:00 on Manhattan / New York</p>
                                            <p class="caption-price">Tickets from $49,99</p>
                                            <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                            <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr class="page-divider half">

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
                                            <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                            <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 - 22:00 on Manhattan / New York</p>
                                            <p class="caption-price">Tickets from $49,99</p>
                                            <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                            <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="page-divider half">

                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-4">
                                        <div class="media">
                                            <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
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
                                            <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                            <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 - 22:00 on Manhattan / New York</p>
                                            <p class="caption-price">Tickets from $49,99</p>
                                            <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                            <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="page-divider half">

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
                                            <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                            <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 - 22:00 on Manhattan / New York</p>
                                            <p class="caption-price">Tickets from $49,99</p>
                                            <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                            <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="page-divider half">

                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-4">
                                        <div class="media">
                                            <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
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
                                            <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                            <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 - 22:00 on Manhattan / New York</p>
                                            <p class="caption-price">Tickets from $49,99</p>
                                            <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                            <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="page-divider half">

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
                                            <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                            <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 - 22:00 on Manhattan / New York</p>
                                            <p class="caption-price">Tickets from $49,99</p>
                                            <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                            <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="page-divider half">

                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-4">
                                        <div class="media">
                                            <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
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
                                            <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                            <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 - 22:00 on Manhattan / New York</p>
                                            <p class="caption-price">Tickets from $49,99</p>
                                            <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                            <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

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
                    <div id="grid-view" class="tab-pane fade " role="tabpanel">
                        <div class="row thumbnails events">

                            <div class="col-md-4 col-sm-6 isotope-item festival">
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
                            </div>

                            <div class="col-md-4 col-sm-6 isotope-item conference">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
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
                            </div>

                            <div class="col-md-4 col-sm-6 isotope-item miscellaneous">
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
                            </div>

                            <div class="col-md-4 col-sm-6 isotope-item festival playground">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
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
                            </div>

                            <div class="col-md-4 col-sm-6 isotope-item festival conference">
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
                            </div>

                            <div class="col-md-4 col-sm-6 isotope-item conference playground">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
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
                            </div>

                            <div class="col-md-4 col-sm-6 isotope-item festival conference">
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
                            </div>

                            <div class="col-md-4 col-sm-6 isotope-item playground">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
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
                            </div>
                        </div>

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