<nav class="navbar navbar-default navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#"></a> -->
    <a class="navbar-logo" href="http://laravel.com/docs/4.2/eloquent#many-to-many" class="pull-left">
      <img src="/dev/original.jpg"  alt="image" width="50" height="50">
    </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <form class="nav navbar-nav navbar-form" role="search" action="" method="get">
          <div class="form-group">
            <input type="text" name="q" class="form-control" placeholder="!search articles">
          </div>
        </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">
              {{-- <i class="fa fa-home"></i> --}}
              <span class="nav-text">
                  IT'S SO FLUFFY
              </span>
          </a>
      </li>
        <li>
             <a href="/events">
                 {{-- <i class="fa fa-rss"></i> --}}
                 <span class="nav-text">
                     Events
                 </span>
             </a>

         </li>
         <li class="has-subnav">
             <a href="http://cheats.jesse-obrien.ca/">
                 {{-- <i class="fa fa-book"></i> --}}
                 <span class="nav-text">
                     Laravel Cheat Sheet
                 </span>
             </a>
         </li>
      </ul>
      <!-- START AUTHENTICATED NAV VIEW -->
      @if ( Auth::check() )
   <ul class="nav navbar-nav">
       <li class="dropdown">
         <a href="" class="dropdown-toggle" data-toggle="dropdown"> {{ Auth::user()->email }}
         <span class="caret"></span> </a>
         <ul class="dropdown-menu" role="menu">
           <li><a href="/events/manage" >Manage My Events</a></li>
           <li><a href="/events/create">
               Make New Event
           </a></li>
           <li class="divider"></li>
           <li><a href="/{{ Auth::user()->email }}">Edit Profile</a></li>
           <li><a href="/logout">Logout</a></li>
         </ul>
       </li>
   </ul>
       <!-- END AUTHENTICATED NAV VIEW -->
@else
       <!-- START GUEST NAV VIEW -->
   <ul class="nav navbar-nav">
       <li class="has-subnav">
           <a href="/register">
               <i class="fa fa-child"></i>
               <span class="nav-text">
                   Register
               </span>
           </a>

       </li>
       <li class="has-subnav">
           <a href="/login">
               <i class="fa fa-sign-in"></i>
               <span class="nav-text">
                    Login
               </span>
           </a>

       </li>
  </ul>
     <!-- END GUEST NAV VIEW -->
@endif

    </div>
  </div>
</nav>
