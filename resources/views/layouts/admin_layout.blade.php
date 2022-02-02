<!DOCTYPE html>

<html lang="en" @if(app()->getLocale()=='ar') dir="rtl" lang="ar" @endif >
<head>
    <meta charset="utf-8"/>
    <title>{{(explode("/" , request()->url())[3])}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Preview page of Metronic Admin Theme #4 for " name="description"/>
    <meta content="" name="author"/>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-sweetalert/sweetalert.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/global/css/components.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/layouts/layout4/css/layout.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/layouts/layout4/css/themes/default.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('metronic/assets/layouts/layout4/css/custom.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/layouts/layout4/css/customize-style.css')}}" rel="stylesheet" type="text/css"/>


    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}"
          rel="stylesheet" type="text/css"/>


    <link href="{{ asset('metronic/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('metronic/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet"
          type="text/css"/>

    <link href="{{ asset('metronic/assets/global/css/components.min.css" rel="stylesheet')}}" id="style_components"
          type="text/css"/>
    <link href="{{ asset('metronic/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('metronic/assets/pages/css/login-4.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
          type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}"
          rel="stylesheet" type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}"
          rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css')}}"/>
    <link href="{{asset('metronic/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet')}}" type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-sweetalert/sweetalert.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{asset('metronic/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components"
          type="text/css"/>
    <link href="{{asset('metronic/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{asset('metronic/assets/layouts/layout4/css/layout.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/layouts/layout4/css/themes/default.min.css')}}" rel="stylesheet"
          type="text/css" id="style_color"/>
    <link href="{{asset('metronic/assets/layouts/layout4/css/custom.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/layouts/layout4/css/customize-style.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}"
          rel="stylesheet" type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}"
          rel="stylesheet" type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-sweetalert/sweetalert.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}"
          rel="stylesheet" type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}"
          rel="stylesheet" type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')}}"
          rel="stylesheet" type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}"
          rel="stylesheet" type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.css')}}"
          rel="stylesheet" type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}"
          rel="stylesheet" type="text/css">
    <link
        href="{{asset('metronic/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}"
        rel="stylesheet" type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/clockface/css/clockface.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}"
          rel="stylesheet" type="text/css">
    <link href="{{asset('metronic/assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.css')}}"
          rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{asset('metronic/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components"
          type="text/css">
    <link href="{{asset('metronic/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css">
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{asset('metronic/assets/layouts/layout4/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('metronic/assets/layouts/layout4/css/themes/default.min.css')}}" rel="stylesheet"
          type="text/css" id="style_color">
    <link href="{{asset('metronic/assets/layouts/layout4/css/custom.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('metronic/assets/layouts/layout4/css/customize-style.css')}}" rel="stylesheet" type="text/css">
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico">
    <style>.cke {
            visibility: hidden;
        }</style>
    <style type="text/css">.jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }</style>
    <script type="text/javascript"
            src="file:///D:/hexa_projects/Cpanel-curve-customize/theme/assets/global/plugins/ckeditor/config.js?t=E8PB"></script>
    <link rel="stylesheet" type="text/css"
          href="file:///D:/hexa_projects/Cpanel-curve-customize/theme/assets/global/plugins/ckeditor/skins/moono/editor.css?t=E8PB">
    <script type="text/javascript"
            src="file:///D:/hexa_projects/Cpanel-curve-customize/theme/assets/global/plugins/ckeditor/lang/en.js?t=E8PB"></script>
    <script type="text/javascript"
            src="file:///D:/hexa_projects/Cpanel-curve-customize/theme/assets/global/plugins/ckeditor/styles.js?t=E8PB">

    </script>
    <link rel="shortcut icon" href="favicon.ico"/>
</head>


<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">

<div class="logo">
    <a href="index.html">
        <img src="../assets/pages/img/logo-big.png" alt=""/> </a>
</div>
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{url('index/'.app()->getLocale())}}">
                <img style="height: 60px; width: 60px;margin-top: 10px;" src="{{asset('landing_page/images/logo.svg')}}"
                     alt="logo"/> </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN HEADER SEARCH BOX -->
            <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
            <form class="search-form" action="page_general_search_2.html" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="Search..." name="query">
                    <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                </div>
            </form>
            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide"></li>
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                    <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                    <li class="dropdown dropdown-extended dropdown-notification dropdown-dark"
                        id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <i class="icon-bell"></i>
                            <span class="badge badge-success"> 7 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3>
                                    <span class="bold">12 pending</span> notifications</h3>
                                <a href="page_user_profile_1.html">view all</a>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 250px;"
                                    data-handle-color="#637283">
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">just now</span>
                                            <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span> New user registered. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">3 mins</span>
                                            <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Server #12 overloaded. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">10 mins</span>
                                            <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Server #2 not responding. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">14 hrs</span>
                                            <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> Application error. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">2 days</span>
                                            <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Database overloaded 68%. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">3 days</span>
                                            <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> A user IP blocked. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">4 days</span>
                                            <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">5 days</span>
                                            <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> System Error. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">9 days</span>
                                            <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Storage server failed. </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END NOTIFICATION DROPDOWN -->
                    <li class="separator hide"></li>
                    <!-- BEGIN INBOX DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <i class="icon-envelope-open"></i>
                            <span class="badge badge-danger"> 4 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3>You have
                                    <span class="bold">7 New</span> Messages</h3>
                                <a href="app_inbox.html">view all</a>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 275px;"
                                    data-handle-color="#637283">
                                    <li>
                                        <a href="#">
                                                    <span class="photo">
                                                        <img src="../assets/layouts/layout3/img/avatar2.jpg"
                                                             class="img-circle" alt=""> </span>
                                            <span class="subject">
                                                        <span class="from"> Lisa Wong </span>
                                                        <span class="time">Just Now </span>
                                                    </span>
                                            <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                    <span class="photo">
                                                        <img src="../assets/layouts/layout3/img/avatar3.jpg"
                                                             class="img-circle" alt=""> </span>
                                            <span class="subject">
                                                        <span class="from"> Richard Doe </span>
                                                        <span class="time">16 mins </span>
                                                    </span>
                                            <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                    <span class="photo">
                                                        <img src="../assets/layouts/layout3/img/avatar1.jpg"
                                                             class="img-circle" alt=""> </span>
                                            <span class="subject">
                                                        <span class="from"> Bob Nilson </span>
                                                        <span class="time">2 hrs </span>
                                                    </span>
                                            <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                    <span class="photo">
                                                        <img src="../assets/layouts/layout3/img/avatar2.jpg"
                                                             class="img-circle" alt=""> </span>
                                            <span class="subject">
                                                        <span class="from"> Lisa Wong </span>
                                                        <span class="time">40 mins </span>
                                                    </span>
                                            <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                    <span class="photo">
                                                        <img src="../assets/layouts/layout3/img/avatar3.jpg"
                                                             class="img-circle" alt=""> </span>
                                            <span class="subject">
                                                        <span class="from"> Richard Doe </span>
                                                        <span class="time">46 mins </span>
                                                    </span>
                                            <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END INBOX DROPDOWN -->
                    <li class="separator hide"></li>
                    <!-- BEGIN TODO DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <i class="icon-calendar"></i>
                            <span class="badge badge-primary"> 3 </span>
                        </a>
                        <ul class="dropdown-menu extended tasks">
                            <li class="external">
                                <h3>You have
                                    <span class="bold">12 pending</span> tasks</h3>
                                <a href="?p=page_todo_2">view all</a>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 275px;"
                                    data-handle-color="#637283">
                                    <li>
                                        <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">New release v1.2 </span>
                                                        <span class="percent">30%</span>
                                                    </span>
                                            <span class="progress">
                                                        <span style="width: 40%;"
                                                              class="progress-bar progress-bar-success"
                                                              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Application deployment</span>
                                                        <span class="percent">65%</span>
                                                    </span>
                                            <span class="progress">
                                                        <span style="width: 65%;"
                                                              class="progress-bar progress-bar-danger"
                                                              aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">65% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Mobile app release</span>
                                                        <span class="percent">98%</span>
                                                    </span>
                                            <span class="progress">
                                                        <span style="width: 98%;"
                                                              class="progress-bar progress-bar-success"
                                                              aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">98% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Database migration</span>
                                                        <span class="percent">10%</span>
                                                    </span>
                                            <span class="progress">
                                                        <span style="width: 10%;"
                                                              class="progress-bar progress-bar-warning"
                                                              aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">10% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Web server upgrade</span>
                                                        <span class="percent">58%</span>
                                                    </span>
                                            <span class="progress">
                                                        <span style="width: 58%;" class="progress-bar progress-bar-info"
                                                              aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">58% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Mobile development</span>
                                                        <span class="percent">85%</span>
                                                    </span>
                                            <span class="progress">
                                                        <span style="width: 85%;"
                                                              class="progress-bar progress-bar-success"
                                                              aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">85% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">New UI release</span>
                                                        <span class="percent">38%</span>
                                                    </span>
                                            <span class="progress progress-striped">
                                                        <span style="width: 38%;"
                                                              class="progress-bar progress-bar-important"
                                                              aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">38% Complete</span>
                                                        </span>
                                                    </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END TODO DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <span
                                class="username username-hide-on-mobile">      @if( Auth::guard('admin')->user() != null) {{ Auth::guard('admin')->user()->name }} @endif </span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                            <img alt="" class="img-circle" src="../assets/layouts/layout4/img/avatar9.jpg"/> </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="page_user_profile_1.html">
                                    <i class="icon-user"></i> My Profile </a>
                            </li>
                            <li>
                                <a href="app_calendar.html">
                                    <i class="icon-calendar"></i> My Calendar </a>
                            </li>
                            <li>
                                <a href="app_inbox.html">
                                    <i class="icon-envelope-open"></i> My Inbox
                                    <span class="badge badge-danger"> 3 </span>
                                </a>
                            </li>
                            <li>
                                <a href="app_todo_2.html">
                                    <i class="icon-rocket"></i> My Tasks
                                    <span class="badge badge-success"> 7 </span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            {{--                            @if(app()->getLocale() == 'en')--}}
                            {{--                                <li><a href="{{url('home/ar')}}">AR</a></li>--}}
                            {{--                            @elseif(app()->getLocale() == 'ar')--}}
                            {{--                                <li><a href="{{url('home/en')}}">EN</a></li>--}}
                            {{--                            @endif--}}
                            <br>
                            <li>

{{--                                <a class="icon-action-redo" href="{{ url('admin/logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('cp.logout') }}--}}
{{--                                </a>--}}

                                <form id="logout-form" action="{{ url('admin/logout') }}" method="post"
                                      class="d-none">
                                      <button type="submit"> log out</button>
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<br>
<br>
<br>
<div class="page-sidebar navbar-collapse collapse">


    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item {{(explode("/", request()->url())[4] == "home") ? "active start" : ''}}">
                <a href="{{url('admin/dashboard/home/'.app()->getLocale())}}" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">{{__('cp.home')}}</span>
                </a>
            </li>

        @if(\App\Http\Helpers::can('features'))
            <li class="nav-item {{(explode("/", request()->url())[3] == "feature") ? "active start" : ''}}">
                <a href="{{url('feature/index/'.app()->getLocale())}}" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">{{__('cp.features')}}</span>
                </a>
            </li>
        @endif

        @if(\App\Http\Helpers::can('comments'))

            <li class="nav-item {{(explode("/", request()->url())[3] == "comment") ? "active start" : ''}}">
                <a href="{{url('comment/index/'.app()->getLocale())}}" class="nav-link">
                    <i class="icon-settings"></i>
                    <span class="title">{{(__('cp.comments'))}}</span>
                </a>
            </li>
        @endif

        @if(\App\Http\Helpers::can('messages'))

            <li class="nav-item {{(explode("/", request()->url())[3] == "message") ? "active start" : ''}} ">
                <a href="{{url('message/index/'.app()->getLocale())}}" class="nav-link nav-toggle">
                    <i class="icon-graph"></i>
                    <span class="title">{{__('cp.messages')}}</span>
                </a>
            </li>
        @endif


            <li class="nav-item {{(explode("/", request()->url())[3] == "admin")&&(explode("/", request()->url())[4] == "index") ? "active start" : ''}} ">
                <a href="{{url('admin/index/'.app()->getLocale())}}" class="nav-link nav-toggle">
                    <i class="icon-graph"></i>
                    <span class="title">{{__('cp.admin')}}</span>
                </a>
            </li>

        @if(\App\Http\Helpers::can('categories'))

            <li class="nav-item {{(explode("/", request()->url())[4] == "categories") ? "active start" : ''}} ">
                <a href="{{url('admin/categories')}}" class="nav-page-next">
                    <i class="icon-graph"></i>
                    <span class="title">{{__('cp.categories')}}</span>
                </a>
            </li>
        @endif

        @if(\App\Http\Helpers::can('sub_categories'))

            <li class="nav-item {{(explode("/", request()->url())[4] == "sub-categories") ? "active start" : ''}} ">
                <a href="{{url('admin/sub-categories')}}" class="nav-page-next">
                    <i class="icon-graph"></i>
                    <span class="title">{{__('cp.sub_categories')}}</span>
                </a>
            </li>
        @endif

        @if(\App\Http\Helpers::can('products'))

            <li class="nav-item {{(explode("/", request()->url())[4] == "products") ? "active start" : ''}} ">
                <a href="{{url('admin/products')}}" class="nav-page-next">
                    <i class="icon-graph"></i>
                    <span class="title">{{__('cp.products')}}</span>
                </a>
            </li>
        @endif






        {{--       <li class="nav-item  active">--}}
        {{--           <a href="javascript:;" class="nav-link nav-toggle">--}}
        {{--               <i class="icon-graph"></i>--}}
        {{--               <span class="title">{{{__('cp.admins')}}}</span>--}}
        {{--               <span class="arrow"></span>--}}
        {{--           </a>--}}

        {{--           <ul class="sub-menu" style="display: none;">--}}
        {{--               <li class="nav-item  ">--}}
        {{--                   <a href="" class="nav-link ">--}}
        {{--                       <span class="title">{{{__('cp.super_admins')}}}</span>--}}
        {{--                   </a>--}}
        {{--               </li>--}}
        {{--               <li class="nav-item active open">--}}
        {{--                   <a href="" class="nav-link ">--}}
        {{--                       <span class="title">{{{__('cp.sub_admins')}}}</span>--}}
        {{--                   </a>--}}
        {{--               </li>--}}
        {{--           </ul>--}}
        {{--       </li>--}}
    </ul>
    <!-- END SIDEBAR MENU -->
</div>

<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">

        <div>
            @yield('page_container')
        </div>
    </div>
</div>

<div id="activation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">{{__('cp.activation')}}</h4>
            </div>
            <div class="modal-body">
                <p>{{__('cp.confirmActiveAll')}} </p>
            </div>
            <div class="modal-footer">
                <button class="btn default" data-dismiss="modal" aria-hidden="true">{{__('cp.cancel')}}</button>
                <a href="#" class="confirmAll" data-action="active">
                    <button class="btn btn-success">{{__('cp.Yes')}}</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="cancel_activation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">{{__('cp.cancel_activation')}}</h4>
            </div>
            <div class="modal-body">
                <p>{{__('cp.confirmNotActiveAll')}} </p>
            </div>
            <div class="modal-footer">
                <button class="btn default" data-dismiss="modal" aria-hidden="true">{{__('cp.cancel')}}</button>
                <a href="#" class="confirmAll" data-action="not_active"><button class="btn btn-success">{{__('cp.Yes')}}</button></a>
            </div>
        </div>
    </div>
</div>




<script>



    var IDArray = [];
    $("input:checkbox[name=chkBox]:checked").each(function () {
        IDArray.push($(this).val());
    });
    if (IDArray.length == 0) {
        $('.event').attr('disabled', 'disabled');
    }
    $('.chkBox').on('change', function () {
        var IDArray = [];
        $("input:checkbox[name=chkBox]:checked").each(function () {
            IDArray.push($(this).val());
        });
        if (IDArray.length == 0) {
            $('.event').attr('disabled', 'disabled');
        } else {
            $('.event').removeAttr('disabled');
        }
    });
    $('.confirmAll').on('click', function (e) {
        e.preventDefault();
        var action = $(this).data('action');
        document.write(Request::segment(3));
        var url = "{{ 'admin/changeStatus/'.Request::segment(2)}}";
        var csrf_token = '{{csrf_token()}}';
        var IDsArray = [];
        $("input:checkbox[name=chkBox]:checked").each(function () {
            IDsArray.push($(this).val());
        });

        if (IDsArray.length > 0) {
            $.ajax({
                type: 'POST',
                headers: {'X-CSRF-TOKEN': csrf_token},
                url: url,
                data: {action: action, IDsArray: IDsArray, _token: csrf_token},
                success: function (response) {
                    if (response === 'active') {
                        //alert('fsvf');
                        $.each(IDsArray, function (index, value) {
                            $('#label-' + value).removeClass('label-danger');
                            $('#label-' + value).addClass('label-info');
                            $r = '{{app()->getLocale()}}';
                            if($r == 'ar'){
                                $('#label-' + value).text('فعال ');
                            }else{
                                $('#label-' + value).text('active');
                            }
                        });
                        $('#activation').modal('hide');
                    } else if (response === 'not_active') {
                        //alert('fg');
                        $.each(IDsArray, function (index, value) {
                            $('#label-' + value).removeClass('label-info');
                            $('#label-' + value).addClass('label-danger');
                            $r = '{{app()->getLocale()}}';
                            if($r == 'ar'){
                                $('#label-' + value).text('غير فعال');
                            }else{
                                $('#label-' + value).text('Not Active');

                            }
                        });
                        $('#cancel_activation').modal('hide');
                    } else if (response === 'delete') {
                        $.each(IDsArray, function (index, value) {
                            $('#tr-' + value).hide(2000);
                        });
                        $('#deleteAll').modal('hide');
                    }

                    IDArray = [];
                    $("input:checkbox[name=chkBox]:checked").each(function () {
                        $(this).prop('checked', false);
                    });
                    $('.event').attr('disabled', 'disabled');

                },
                fail: function (e) {
                    alert(e);
                }
            });
        } else {
            alert('{{__('cp.not_selected')}}');
        }
    });




    function readURLMultiple(input, target) {
       //alert(target.length);
        if (input.files) {
            var filesAmount = input.files.length;
            for (var i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function (event) {
                    target.append('<div class="imageBox text-center" style="width:150px;height:190px;margin:5px"><img src="' + event.target.result + '" style="width:150px;height:150px"><button class="btn btn-danger deleteImage" type="button">{{__("cp.delete")}}</button><input class="attachedValues" type="hidden" name="filename[]" value="' + event.target.result + '"></div>');
                };
                reader.readAsDataURL(input.files[i]);
            }
        }
    }

</script>
<script src="{{asset('metronic/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}"
        type="text/javascript"></script>
<script
    src="{{asset('metronic/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript')}}"></script>
<script src="{{asset('metronic/assets/global/plugins/backstretch/jquery.backstretch.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/pages/scripts/login-4.min.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $('#clickmewow').click(function () {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script src="{{asset('metronic/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/counterup/jquery.waypoints.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/counterup/jquery.counterup.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/amcharts/amcharts.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/amcharts/serial.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/amcharts/pie.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/amcharts/radar.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/amcharts/themes/light.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/amcharts/themes/patterns.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/amcharts/themes/chalk.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/ammap/ammap.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/amstockcharts/amstock.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/fullcalendar/fullcalendar.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/horizontal-timeline/horizontal-timeline.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/flot/jquery.flot.resize.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/flot/jquery.flot.categories.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/select2/js/select2.full.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/clockface/js/clockface.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-markdown/lib/markdown.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/fuelux/js/spinner.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/select2/js/select2.full.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/typeahead/handlebars.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/typeahead/typeahead.bundle.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/pages/scripts/table-datatables-managed.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/pages/scripts/ui-sweetalert.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/pages/scripts/form-validation.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/pages/scripts/components-bootstrap-touchspin.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/pages/scripts/components-date-time-pickers.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/pages/scripts/components-select2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/pages/scripts/components-bootstrap-select.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/pages/scripts/components-bootstrap-tagsinput.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/layouts/layout4/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/layouts/layout4/scripts/demo.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('metronic/assets/global/plugins/excanvas.min.js')}}"></script>
<script src="{{asset('metronic/assets/global/plugins/ie8.fix.min.js')}}"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/counterup/jquery.waypoints.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/counterup/jquery.counterup.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/amcharts/amcharts.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/amcharts/serial.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/amcharts/pie.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/amcharts/radar.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/amcharts/themes/light.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/amcharts/themes/patterns.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/amcharts/themes/chalk.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/ammap/ammap.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/amcharts/amstockcharts/amstock.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/fullcalendar/fullcalendar.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/horizontal-timeline/horizontal-timeline.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/flot/jquery.flot.resize.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/flot/jquery.flot.categories.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/select2/js/select2.full.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/plugins/bootstrap-markdown/lib/markdown.js')}}"
        type="text/javascript"></script>
<script src="./{{asset('metronic/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/pages/scripts/table-datatables-managed.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('metronic/assets/pages/scripts/ui-sweetalert.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/pages/scripts/form-validation.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/layouts/layout4/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/layouts/layout4/scripts/demo.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>


<@yield('scripts')

{{--<a style="    position: fixed;--}}
{{--    bottom: 20px;--}}
{{--    left: 10px;--}}
{{--    background: #ff0000;--}}
{{--    text-decoration: none;--}}
{{--    color: white;--}}
{{--    padding: 10px;--}}
{{--    width: 135px;--}}
{{--    border-radius: 5px;--}}
{{--    text-align: center;" href="{{url('index/'.app()->getLocale())}}">Landing Page</a>--}}

</body>

</html>
