<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
   <meta name="viewport" content="width=device-width" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/admin_css/bootstrap.min.css') }}" rel="stylesheet">

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="{{ asset('css/admin_css/light-bootstrap-dashboard.css?v=1.4.1') }}" rel="stylesheet"/>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Wow -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

    <link href="{{ asset('css/admin_css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

</head>

<body>



      <div class="wrapper">
          <!-- -->
          <div class="sidebar" data-color="purple" data-image="/images/admin_images/full-screen-image-2.jpg">

              <div class="logo animated fadeInDown">
                  <a href="#" class="simple-text logo-mini">

                  </a>

            			<a href="/" class="simple-text logo-normal">
            			  Scholar4U
            			</a>
              </div>

          	<div class="sidebar-wrapper">
              <div class="user">
      				 <div class="info">
      				  	<div class="photo">
                        <img src="{{ auth()->user()->profile->profileImage() }}" class="imageSize" alt="profile image">
      	          </div>

      					<a data-toggle="collapse" href="#collapseExample" class="collapsed animated fadeInDown">
      						<span>
      							{{ auth()->user()->name }}
      	                        <b class="caret"></b>
      						</span>
                </a>

      					<div class="collapse" id="collapseExample">
      						<ul class="nav">
      							<li class="animated fadeInDown">
      								<a href="/user/{{ Auth::user()->id }}/edit">
      									<span class="sidebar-mini">MU</span>
      									<span class="sidebar-normal">My User</span>
      								</a>
      							</li>

                    <li class="animated fadeInDown">
                      <a href="/profile/{{ Auth::user()->id }}/edit">
                        <span class="sidebar-mini">MP</span>
                        <span class="sidebar-normal">My Profile</span>
                      </a>
                    </li>

      							<li class="animated fadeInDown">
      								<a href="#pablo">
      									<span class="sidebar-mini">S</span>
      									<span class="sidebar-normal">Settings</span>
      								</a>
      							</li>
      						</ul>
                </div>
      				</div>
            </div>

      			<ul class="nav">
      				<li class="{{ Request::is('adminFrontPage') ? 'active' : '' }} animated fadeInDown">
      					<a href="/adminFrontPage">
      						<i class="pe-7s-home"></i>
      						<p>Dashboard</p>
      					</a>
      				</li>

      				<li class="{{ Request::is('scholarshipTable') ? 'active' : '' }} animated fadeInDown">
      					<a href="/scholarshipTable">
                    <i class="pe-7s-display2"></i>
                    <p>Schorlaship Tables</p>
                </a>
      				</li>

              <li class="{{ Request::is('calendar') ? 'active' : '' }} animated fadeInDown">
                <a href="/calendar">
                    <i class="pe-7s-date"></i>
                    <p>Calendar</p>
                </a>
              </li>

              <li class="{{ Request::is('discussionBoard') ? 'active' : '' }} animated fadeInDown">
                <a href="/discussionBoard">
                    <i class="pe-7s-chat"></i>
                    <p>Discussion Board</p>
                </a>
              </li>

              <li class="{{ Request::is('messages') ? 'active' : '' }} animated fadeInDown">
                <a href="/messages">
                    <i class="pe-7s-mail"></i>
                    <p>Messages</p>
                </a>
              </li>

      			</ul>
          	</div>
          </div> <!-- /sidebar -->


        <div class="main-panel">
      		<nav class="navbar navbar-default">
      			<div class="container-fluid">
      				<div class="navbar-minimize">
      					<button id="minimizeSidebar" class="btn limeGreen btn-fill btn-round btn-icon">
      						<i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
      						<i class="fa fa-navicon visible-on-sidebar-mini"></i>
      					</button>
      				</div>
      				<div class="navbar-header">
      					<button type="button" class="navbar-toggle" data-toggle="collapse">
      						<span class="sr-only">Toggle navigation</span>
      						<span class="icon-bar"></span>
      						<span class="icon-bar"></span>
      						<span class="icon-bar"></span>
      					</button>
      					<a class="navbar-brand" href="#" style="font-size:1.5em;">
                  {{ Request::is('adminFrontPage') ? 'Dashboard' : '' }}
                  {{ Request::is('scholarshipTable') ? 'Scholarship Tables' : '' }}
                  {{ Request::is('calendar') ? 'Calendar' : '' }}
                  {{ Request::is('profile/' . auth()->user()->id . '/edit') ? 'My Profile' : ''}}
                  {{ Request::is('user/' . auth()->user()->id . '/edit') ? 'My User' : ''}}
                  {{ Request::is('discussionBoard') ? 'Discussion Board' : ''}}
                  {{ Request::is('discussionBoard/create') ? 'Add Post' : ''}}
                  {{-- {{ Request::is('discussionBoard') ? 'Post' : ''}} --}}
                  {{ Request::is('messages') ? 'Messages' : ''}}
                </a>
      				</div>
      				<div class="collapse navbar-collapse">

      					<ul class="nav navbar-nav navbar-right">

      						<li class="dropdown ">
      							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
      								<i class="fa fa-bell-o"></i>
      								<span class="notification">1</span>
      								<p class="hidden-md hidden-lg">
      									Notifications
      									<b class="caret"></b>
      								</p>
      							</a>
      							<ul class="dropdown-menu">
      								<li><a href="#">Notification 1</a></li>
      							</ul>
      						</li>

      						<li class="dropdown dropdown-with-icons">
      							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
      								<i class="fa fa-list"></i>
      								<p class="hidden-md hidden-lg">
      									More
      									<b class="caret"></b>
      								</p>
      							</a>
      							<ul class="dropdown-menu dropdown-with-icons">
      								<li>
      									<a href="/messages">
      										<i class="pe-7s-mail"></i> Messages
      									</a>
      								</li>
      								<li>
      									<a href="#">
      										<i class="pe-7s-tools"></i> Settings
      									</a>
      								</li>

      								<li class="divider"></li>

      								<li>
                        <a id="logoutButton" href="#" class="text-danger">
                          <i class="pe-7s-close-circle"></i>
                          Log out
                        </a>
      								</li>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
      							</ul>
      						</li>

      					</ul>
      				 </div>
      			  </div>
      	    </nav>



             @yield('content')



              <footer class="footer">
                  <div class="container-fluid">
                      <nav class="pull-left">
                      </nav>
                      <p class="copyright pull-right">
{{--                          &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web--}}
                      </p>
                  </div>
              </footer>
         </div>
       </div>


    <!--   Core JS Files  -->
    <script src="{{ asset('js/admin_js/jquery.min.js') }}" type="text/javascript"></script>
    <!--  Charts Plugin -->
    {{-- <script src="{{ asset('js/admin_js/chartist.min.js') }}"></script> --}}

  <script src="{{ asset('js/admin_js/bootstrap.min.js') }}" type="text/javascript"></script>

  <script src="{{ asset('js/admin_js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>

  <!--  Forms Validations Plugin -->
  <script src="{{ asset('js/admin_js/jquery.validate.min.js') }}"></script>

  <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
  <script src="{{ asset('js/admin_js/moment.min.js') }}"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="{{ asset('js/admin_js/bootstrap-datetimepicker.min.js') }}"></script>

    <!--  Select Picker Plugin -->
    <script src="{{ asset('js/admin_js/bootstrap-selectpicker.js') }}"></script>

  <!--  Checkbox, Radio, Switch and Tags Input Plugins -->
    <script src="{{ asset('js/admin_js/bootstrap-switch-tags.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('js/admin_js/bootstrap-notify.js') }}"></script>

    <!-- Sweet Alert 2 plugin -->
  <script src="{{ asset('js/admin_js/sweetalert2.js') }}"></script>

    <!-- Vector Map plugin -->
  <script src="{{ asset('js/admin_js/jquery-jvectormap.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->

  <!-- Wizard Plugin    -->
    <script src="{{ asset('js/admin_js/jquery.bootstrap.wizard.min.js') }}"></script>

    <!--  Bootstrap Table Plugin  -->
    <script src="{{ asset('js/admin_js/bootstrap-table.js') }}"></script>

    <!--  DataTable Plugin -->
    <script src="{{ asset('js/admin_js/jquery.datatables.js') }}"></script>

    <!--  Full Calendar Plugin    -->
    <script src="{{ asset('js/admin_js/fullcalendar.min.js') }}"></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
  <script src="{{ asset('js/admin_js/light-bootstrap-dashboard.js?v=1.4.1') }}"></script>

  <!-- Main js project -->
  <script src="{{ asset('js/admin_js/main.js') }}"></script>

    <script type="text/javascript">
        $("#postDelete").on('click', function(){

        });
    </script>

  </body>

  </html>
