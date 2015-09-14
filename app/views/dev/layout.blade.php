<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IT'S SO FLUFFY</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto);
    html, body {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        width: 100%;
        /*display: table;*/
        font-weight: 400;
        font-family: 'Roboto';
        background-color: azure;
    }

    #body {
      margin: 0;
      padding-top: 300px;
      background-color: azure;
    }
    #header {
      position: fixed;
      top: 0;
      padding-top: 50px;
      height: 350px;
      width: 100%;
      background-color: #E71D36;
      /*background: url("/img/pasta.png") no-repeat;*/
      color: #fff;
      text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
      /* Safari 4-5, Chrome 1-9 */
        /* Can't specify a percentage size? Laaaaaame. */
      background: -webkit-gradient(radial, center center, 0, center center, 460, from(#1a82f7), to(#022B4C));

        /* Safari 5.1+, Chrome 10+ */
      background: -webkit-radial-gradient(circle, #1a82f7, #022B4C);

        /* Firefox 3.6+ */
      background: -moz-radial-gradient(circle, #1a82f7, #022B4C);

        /* IE 10 */
      background: -ms-radial-gradient(circle, #1a82f7, #022B4C);
    }
    #header h1 {
      font-size: 4vw;
      font-weight: 600;
    }
    #header .lead {
      font-size: 2.5vw;
      font-weight: 100;
    }
    .navbar,
    #main {
      position: relative;
    }
    .navbar.navbar-default {
      z-index: 150;
      margin-bottom: -50px;
      box-shadow: 0 2px 3px rgba(0, 0, 0, 0.4);
    }
    #main {
      background-color: azure;
      padding-top: 100px;
      padding-bottom: 100px;
    }
    </style>


    @yield('style')

</head>
<body>

<div class="text-center" id="header">
  <h1>Laravel 4.2</h1>
  <p class="lead">Event Manager App</p>
</div>

<div id="body">

@include('dev.nav')

<div id="main" class="container-fluid">
      @yield('content')
</div>

</div>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


@yield('scripts')
</body>
</html>
