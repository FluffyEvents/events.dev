@extends('dev.layout')

@section('style')
<meta id="token" name="token" value="{{ csrf_token() }}">
<title>Manage Your Events</title>
@stop

@section('content')
<div id="dashboard">
          <h2> Events Dashboard <h2>

          <div class="row">
          <div class="col-md-12">
            @{{ events }}
           <table class="table table-responsive table-hover" id="dashTable">
            <thead>
               <td>Title</td>
               <td>Description</td>
               <td>Start Time</td>
               <td>End Time</td>
           </thead>
              <tr v-repeat="events">
                  <td><b>@{{ title }}</b></td>
                  <td>@{{ description }}</td>
                  <td>@{{ parseDate(start_time.date) }}</td>
                  <td>@{{ @{{ parseDate(end_time.date) }} }}</td>
                  <td><button class="btn btn-danger btn-md" v-on="click: onClickDelete(articles, $index)">Delete</button></td>
              </tr>
          </table>




          </div>
          </div>


      </div>

@stop
@section('scripts')
    <script src="/assets/js/moment.js"></script>
    <script src="/assets/js/vue.min.js"></script>
    <script src="/assets/js/vue-resource.js"></script>
    <script src="/assets/js/dashboard.js"></script>
@stop
