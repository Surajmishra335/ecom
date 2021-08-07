<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin E-commerce</title>

  <!-- Bootstrap -->
  <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css ') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css ') }}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{ asset('admin/vendors/nprogress/nprogress.css ') }}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{ asset('admin/vendors/iCheck/skins/flat/green.css ') }}" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="{{ asset('admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css ') }}"
    rel="stylesheet">
  <!-- JQVMap -->
  <link href="{{ asset('admin/vendors/jqvmap/dist/jqvmap.min.css ') }}" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="{{ asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.css ') }}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{ asset('admin/build/css/custom.min.css ') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
    integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.css"
    integrity="sha512-40vN6DdyQoxRJCw0klEUwZfTTlcwkOLKpP8K8125hy9iF4fi8gPpWZp60qKC6MYAFaond8yQds7cTMVU8eMbgA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  @livewireStyles
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('admin.dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>Admin
                Panel</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="{{asset('admin/images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{{Auth::user()->name}}</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li>
                  <a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i> Dashboard</span></a>
                </li>
                <li><a><i class="fa fa-edit"></i> Categories <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{route('admin.categories')}}">All Categories</a></li>
                    <li><a href="{{route('admin.addcategory')}}">Add New Category</a></li>
                    <li><a href="{{route('admin.homecategories')}}">Manage Home Category</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Home Sider <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{route('admin.homeslider')}}">All Slider</a></li>
                    <li><a href="{{route('admin.addhomeslider')}}">Add New Slider</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Products <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{route('admin.products')}}">All Products</a></li>
                    <li><a href="{{route('admin.addproduct')}}">Add New Product</a></li>
                  </ul>
                </li>
                <li>
                  <a href="{{route('admin.sale')}}"><i class="fa fa-edit"></i> Sale</a>
                </li>
                <li><a><i class="fa fa-edit"></i> Coupons <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{route('admin.coupons')}}">All Coupons</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Orders <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{route('admin.orders')}}">All Orders</a></li>
                    <li><a href="{{route('admin.addcoupon')}}">Add New Coupons</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="form.html">General Form</a></li>
                    <li><a href="form_advanced.html">Advanced Components</a></li>
                    <li><a href="form_validation.html">Form Validation</a></li>
                    <li><a href="form_wizards.html">Form Wizard</a></li>
                    <li><a href="form_upload.html">Form Upload</a></li>
                    <li><a href="form_buttons.html">Form Buttons</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="general_elements.html">General Elements</a></li>
                    <li><a href="media_gallery.html">Media Gallery</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="glyphicons.html">Glyphicons</a></li>
                    <li><a href="widgets.html">Widgets</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="inbox.html">Inbox</a></li>
                    <li><a href="calendar.html">Calendar</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="tables.html">Tables</a></li>
                    <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="chartjs.html">Chart JS</a></li>
                    <li><a href="chartjs2.html">Chart JS2</a></li>
                    <li><a href="morisjs.html">Moris JS</a></li>
                    <li><a href="echarts.html">ECharts</a></li>
                    <li><a href="other_charts.html">Other Charts</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                    <li><a href="fixed_footer.html">Fixed Footer</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="e_commerce.html">E-commerce</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="project_detail.html">Project Detail</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="profile.html">Profile</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="page_403.html">403 Error</a></li>
                    <li><a href="page_404.html">404 Error</a></li>
                    <li><a href="page_500.html">500 Error</a></li>
                    <li><a href="plain_page.html">Plain Page</a></li>
                    <li><a href="login.html">Login Page</a></li>
                    <li><a href="pricing_tables.html">Pricing Tables</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="#level1_1">Level One</a>
                    <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li class="sub_menu"><a href="level2.html">Level Two</a>
                        </li>
                        <li><a href="#level2_1">Level Two</a>
                        </li>
                        <li><a href="#level2_2">Level Two</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#level1_2">Level One</a>
                    </li>
                  </ul>
                </li>
                <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span
                      class="label label-success pull-right">Coming Soon</span></a></li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{asset('admin/images/img.jpg')}}" alt="">{{Auth::user()->name}}
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;"> Profile</a></li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Help</a></li>
                  <li><a href="{{ route('logout')}}"
                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                        class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  <form id="logout-form" method="POST" action="{{route('logout')}}">
                    @csrf
                  </form>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <li>
                    <a>
                      <span class="image"><img src="{{asset('admin/images/img.jpg')}}" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="{{asset('admin/images/img.jpg')}}" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="{{asset('admin/images/img.jpg')}}" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="{{asset('admin/images/img.jpg')}}" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      {{$slot}}

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          E-commerce Admin Tamplate
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="{{asset('admin/vendors/jquery/dist/jquery.min.js ') }}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js ') }}"></script>
  <!-- FastClick -->
  <script src="{{asset('admin/vendors/fastclick/lib/fastclick.js ') }}"></script>
  <!-- NProgress -->
  <script src="{{asset('admin/vendors/nprogress/nprogress.js ') }}"></script>
  <!-- Chart.js -->
  <script src="{{asset('admin/vendors/Chart.js/dist/Chart.min.js ') }}"></script>
  <!-- gauge.js -->
  <script src="{{asset('admin/vendors/gauge.js/dist/gauge.min.js ') }}"></script>
  <!-- bootstrap-progressbar -->
  <script src="{{asset('admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js ') }}"></script>
  <!-- iCheck -->
  <script src="{{asset('admin/vendors/iCheck/icheck.min.js ') }}"></script>
  <!-- Skycons -->
  <script src="{{asset('admin/vendors/skycons/skycons.js ') }}"></script>
  <!-- Flot -->
  <script src="{{asset('admin/vendors/Flot/jquery.flot.js ') }}"></script>
  <script src="{{asset('admin/vendors/Flot/jquery.flot.pie.js ') }}"></script>
  <script src="{{asset('admin/vendors/Flot/jquery.flot.time.js ') }}"></script>
  <script src="{{asset('admin/vendors/Flot/jquery.flot.stack.js ') }}"></script>
  <script src="{{asset('admin/vendors/Flot/jquery.flot.resize.js ') }}"></script>
  <!-- Flot plugins -->
  <script src="{{asset('admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js ') }}"></script>
  <script src="{{asset('admin/vendors/flot-spline/js/jquery.flot.spline.min.js ') }}"></script>
  <script src="{{asset('admin/vendors/flot.curvedlines/curvedLines.js ') }}"></script>
  <!-- DateJS -->
  <script src="{{asset('admin/vendors/DateJS/build/date.js ') }}"></script>
  <!-- JQVMap -->
  <script src="{{asset('admin/vendors/jqvmap/dist/jquery.vmap.js ') }}"></script>
  <script src="{{asset('admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js ') }}"></script>
  <script src="{{asset('admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js ') }}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{asset('admin/vendors/moment/min/moment.min.js ') }}"></script>
  <script src="{{asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.js ') }}"></script>

  <!-- Custom Theme Scripts -->
  <script src="{{asset('admin/build/js/custom.min.js ') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
    integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"
    integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js"
    integrity="sha512-jWNpWAWx86B/GZV4Qsce63q5jxx/rpWnw812vh0RE+SBIo/mmepwOSQkY2eVQnMuE28pzUEO7ux0a5sJX91g8A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.tiny.cloud/1/w03gbl37vmo3a665k1z483rou3lbu8zvyrv38nn3cnpbiihl/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
  @livewireScripts
  @stack('scripts')

</body>

</html>