<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>BBCL</title>


  <link href="{{ asset('assets')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('assets')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('assets')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="{{ asset('assets')}}/build/css/custom.min.css" rel="stylesheet">




  <!-- JqxGrid CSS-->
  <link href="{{ asset('JqxGrid')}}/css/style.css" rel="stylesheet">
  <link href="{{ asset('JqxGrid')}}/css/form.css" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('JqxGrid')}}/jqwidgets/styles/jqx.base.css" type="text/css" />
  <link rel="stylesheet" href="{{ asset('JqxGrid')}}/jqwidgets/styles/jqx.summer.css" type="text/css" />
  <link rel="stylesheet" href="{{ asset('JqxGrid')}}/jqwidgets/styles/jqx.fresh.css" type="text/css" />
  <link rel="stylesheet" href="{{ asset('JqxGrid')}}/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
  <link rel="stylesheet" href="{{ asset('JqxGrid')}}/jqwidgets/styles/jqx.light.css" type="text/css" />
  <link rel="stylesheet" href="{{ asset('JqxGrid')}}/jqwidgets/styles/jqx.ui-sunny.css" type="text/css" />
  <link rel="stylesheet" href="{{ asset('JqxGrid')}}/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
  <link rel="stylesheet" href="{{ asset('JqxGrid')}}/jqwidgets/styles/jqx.darkblue.css" type="text/css" />
  <link rel="stylesheet" href="{{ asset('JqxGrid')}}/css/multiple-select.css" type="text/css" />
  <link type="text/css" href="{{ asset('JqxGrid')}}/css/ui-lightness/jquery-ui-1.8.10.custom.css" rel="stylesheet" />

  <!-- JqxGrid CSS-->
  <!-- JqxGrid JS-->

  <script type="text/javascript" src="{{ asset('JqxGrid')}}/scripts/jquery-3.6.0.min.js"></script>

  <script type="text/javascript" src="{{ asset('JqxGrid')}}/scripts/simple-chart.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/js/rpie.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/js/jquery.multiple.select.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxcore.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxchart.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxexpander.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxvalidator.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxbuttons.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxcheckbox.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/globalization/globalize.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxcalendar.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxdatetimeinput.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxmaskedinput.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxlistbox.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxcombobox.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxscrollbar.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxwindow.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxmenu.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxdropdownlist.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxswitchbutton.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxradiobutton.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxinput.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxgrid.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxgrid.pager.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxgrid.selection.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxgrid.edit.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxgrid.filter.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxgrid.sort.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxdata.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxdata.export.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxgrid.export.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/scripts/gettheme.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxpanel.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxtooltip.js"></script>
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/jqwidgets/jqxtabs.js"></script>


  <script src="{{ asset('JqxGrid')}}/js/custom.js" type="text/javascript"></script>
  <link rel="stylesheet" href="{{ asset('JqxGrid')}}/msg_popup_hsn/common.css" type="text/css">
  <script language="JavaScript" type="text/javascript" src="{{ asset('JqxGrid')}}/msg_popup_hsn/Util-jar.js"></script>

  <!-- below two link for calender -->
  <script type="text/javascript" src="{{ asset('JqxGrid')}}/js/jquery-ui-1.13.0.custom/jquery-ui.min.js"></script>




  <!-- JqxGrid JS-->

  <style>
    .jqx-input-label {
      visibility: hidden;
    }

    .ui-datepicker {
      z-index: 999999 !important;
    }

    .ui-datepicker-close {
      display: none;
    }

    .ui-datepicker-current {
      background: #185891 !important;
      color: #fff !important;
    }

    .ui-datepicker-current:hover {
      border-color: #185891 !important;
    }
  </style>

  <script>
    $.datepicker._gotoTodayOriginal = $.datepicker._gotoToday;
    $.datepicker._gotoToday = function(id) {
      $.datepicker._gotoTodayOriginal.apply(this, [id]);
      $.datepicker._selectDate.apply(this, [id]);


    };
  </script>

  <script>
    function datePicker(id) {
      $(document).ready(function() {
        $("*").dblclick(function(e) {
          e.preventDefault();

        });
        $('#' + id).datepicker({
          beforeShow: function(i) {
            if ($(i).attr('readonly')) {
              return false;
            }
          },
          inline: true,
          changeMonth: true,
          changeYear: true,
          dateFormat: 'dd/mm/yy',
          showButtonPanel: true
        });
      });

    }

    function popup(url) {
      var winl = (screen.width - 900) / 2;
      var wint = 40;
      newwindow = window.open(url, 'name', 'height=600, width=900,top=' + wint + ', toolbar=no,status=no,scrollbars=yes,resizable=yes,menubar=no,location=no,direction=no,left=' + winl);
      if (window.focus) {
        newwindow.focus()
      }
      return false;
    }
  </script>

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col menu_fixed">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><span>Master </span></a>
          </div>

          <div class="clearfix"></div>
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">

              <ul class="nav side-menu">

                <li><a href="{{ route('home')}}"><i class="fa fa-home"></i> Home </span></a></li>

                <li><a><i class="fa fa-users"></i>User Management <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('users.index') }}">User </a></li>
                    <li><a href="index.html">User Group</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="{{ asset('assets')}}/images/img.jpg" alt="">

                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:;"> Profile</a>
                  <a class="dropdown-item" href="javascript:;">
                    <span class="badge bg-red pull-right">50%</span>
                    <span>Settings</span>
                  </a>
                  <span class="dropdown-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                      @csrf
                      <input class="btn" type="submit" value="Log Out">
                    </form>
                  </span>
                </div>
              </li>

              <li role="presentation" class="nav-item dropdown open">
                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="text-center">
                      <a class="dropdown-item">
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

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          @yield('content')

        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>




  <!-- jQuery -->
  <!-- <script src="{{ asset('assets')}}/vendors/jquery/dist/jquery.min.js"></script> -->
  <!-- Bootstrap -->
  <!-- <script src="{{ asset('assets')}}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
  <!-- FastClick -->
  <!-- <script src="{{ asset('assets')}}/vendors/fastclick/lib/fastclick.js"></script> -->
  <!-- NProgress -->
  <!-- <script src="{{ asset('assets')}}/vendors/nprogress/nprogress.js"></script> -->
  <!-- bootstrap-progressbar -->
  <!-- <script src="{{ asset('assets')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> -->
  <!-- iCheck -->
  <!-- <script src="{{ asset('assets')}}/vendors/iCheck/icheck.min.js"></script> -->
  <!-- bootstrap-daterangepicker -->
  <!-- <script src="{{ asset('assets')}}/vendors/moment/min/moment.min.js"></script> -->
  <!-- <script src="{{ asset('assets')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script> -->
  <!-- bootstrap-wysiwyg -->
  <!-- <script src="{{ asset('assets')}}/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script> -->
  <!-- <script src="{{ asset('assets')}}/vendors/jquery.hotkeys/jquery.hotkeys.js"></script> -->
  <!-- <script src="{{ asset('assets')}}/vendors/google-code-prettify/src/prettify.js"></script> -->
  <!-- jQuery Tags Input -->
  <!-- <script src="{{ asset('assets')}}/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script> -->
  <!-- Switchery -->
  <!-- <script src="{{ asset('assets')}}/vendors/switchery/dist/switchery.min.js"></script> -->


  <!-- <script src="{{ asset('assets')}}/build/js/custom.min.js"></script> -->

</body>

</html>