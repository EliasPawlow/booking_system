  <!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">

         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
{!! MaterializeCSS::include_full() !!}
      

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    
        <nav class="white ">
            <div class="nav-wrapper white">
             <!-- **Button**<a href="#" data-activates="slide-out" class="brand-logo "><i class="material-icons">menu</i></a> -->

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="black-text" href="sass.html"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                <li><a class="black-text" href="badges.html"><i class="fa fa-bell-o" aria-hidden="true"></i></a></li>
                <div class="chip transparent dropdown-button " data-activates='profile-dropdown'>
                    <img  src="http://www.american.edu/uploads/profiles/large/chris_palmer_profile_11.jpg" alt="Contact Person">
                    Chris 
                </div>  

                                <!-- Dropdown Structure -->
                <ul id='profile-dropdown' class='dropdown-content'>
                    <li><a href="#!">Settings</a></li>
                    <li><a href="#!">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">Logout</a></li>
                </ul>
                      
            </ul>
            </div>
        </nav>

        <ul id="slide-out" class="side-nav  light-blue accent-3 fixed">
        <div class="side-nav-top">
            <li class="white-text"><a href="/" class="white-text big-title"><i class="fa fa-archive" aria-hidden="true"></i> booking</a></li> 
        </div>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header white-text">Customers <i class="material-icons">arrow_drop_down</i><i class="fa fa-users" aria-hidden="true"></i></a> 
                        <div class="collapsible-body light-blue ">
                            <ul>
                                <li><a href="/customers/create" class="white-text">New Customer</a></li>
                                <li><a href="/customers" class="white-text">View Customers</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header white-text">Bookings<i class="material-icons">arrow_drop_down</i><i class="fa fa-calendar" aria-hidden="true"></i></a>
                        <div class="collapsible-body light-blue">
                            <ul>
                                <li><a href="/bookings/create" class="white-text">New Booking</a></li>
                                <li><a href="/bookings" class="white-text">View Bookings</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header white-text">Facilities<i class="material-icons">arrow_drop_down</i><i class="fa fa-building" aria-hidden="true"></i></a>
                        <div class="collapsible-body light-blue">
                            <ul>
                                <li><a href="/facilities/create" class="white-text">New Facility</a></li>
                                <li><a href="/facilities" class="white-text">View Facility</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
        </li>
    </ul>

        </ul>
<script type="text/javascript">
  $(".brand-logo").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
</script>

<script type="text/javascript" src="/js/moment.min.js"></script>

        <div class="main">
            @yield('content')
        </div>

    </body>
  </html>
