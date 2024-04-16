<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('admin/img/logo1.ico') }}" />

    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/components.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/custom.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/vendors/c3/css/c3.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/vendors/toastr/css/toastr.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/vendors/switchery/css/switchery.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/pages/new_dashboard.css ') }}" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change" />
</head>

<body class="body">
    <div class="preloader"
        style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
        <div class="preloader_img"
            style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
            <img src="{{ asset('admin/img/loader.gif') }}" style=" width: 40px;" alt="loading...">
        </div>
    </div>
    <div id="wrap">
        <div id="top">

            <nav class="navbar navbar-static-top">
                <div class="container-fluid m-0">
                    <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                        <h4><img src="{{ asset('admin/img/logo22.jpg') }}" style="width: 130px; height:60px"
                                class="admin_img" alt=""></h4>
                    </a>
                    <div class="menu mr-sm-auto">
                        <span class="toggle-left" id="menu-toggle">
                            <i class="fa fa-bars"></i>
                        </span>
                    </div>

                    <div class="topnav dropdown-menu-right">
                        <div class="btn-group">
                            <div class="user-settings no-bg">
                                <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                    <img src="{{ asset('admin/img/logo22.jpg') }}"
                                        class="admin_img2 img-thumbnail rounded-circle avatar-img" alt="avatar">
                                    <strong>Admin</strong>
                                    <span class="fa fa-sort-down white_bg"></span>
                                </button>
                                <div class="dropdown-menu admire_admin">
                                    <a class="dropdown-item" href="{{ route('admin2.logout') }}"><i class="fa fa-sign-out"></i>
                                        Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="wrapper">
            <div id="left">
                <div class="menu_scroll">
                    <div class="left_media">
                        <div class="media user-media">
                            <div class="user-media-toggleHover">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="user-wrapper">
                                <a class="user-link" href="#">
                                    <img class="media-object img-thumbnail user-img rounded-circle admin_img3"
                                        alt="User Picture" src="{{ asset('admin/img/logo22.jpg') }}">
                                    <p class="user-info menu_hide">Welcome Truephysio</p>
                                </a>
                            </div>
                        </div>
                        <hr />
                    </div>
                    <ul id="menu">
                        <li class="active">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fa fa-home"></i>
                                <span class="link-title menu_hide">&nbsp;Home</span>
                            </a>
                        </li>
                        <li class="dropdown_menu">
                            <a href="{{ route('admin.about') }}">
                                <i class="fa fa-home"></i>
                                <span class="link-title menu_hide">&nbsp;Add About us</span>
                            </a>
                        </li>
                        <li class="dropdown_menu">
                            <a href="{{ route('admin.clinic_care') }}">
                                <i class="fa fa-home"></i>
                                <span class="link-title menu_hide">&nbsp;Clinic Care</span>
                            </a>
                        </li>
                        </li>
                        <li class="dropdown_menu">
                            <a href="{{ route('admin.team') }}">
                                <i class="fa fa-home"></i>
                                <span class="link-title menu_hide">&nbsp;Team</span>
                            </a>
                        </li>
                        <li class="dropdown_menu">
                            <a href="{{ route('admin.gallery') }}">
                                <i class="fa fa-anchor"></i>
                                <span class="link-title menu_hide">&nbsp;Gallery Images</span>
                            </a>
                        </li>
                        <li class="dropdown_menu">
                            <a href="{{ route('admin.add_service') }}">
                                <i class="fa fa-file"></i>
                                <span class="link-title menu_hide">&nbsp; Add Service</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                        </li>
                        <li class="dropdown_menu">
                            <a href="{{ route('admin.all_service') }}">
                                <i class="fa fa-file"></i>
                                <span class="link-title menu_hide">&nbsp; All Services</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                        </li>

                        <li class="dropdown_menu">
                            <a href="{{ route('admin.carrier_option') }}" <i class="fa fa-user"></i>
                                <span class="link-title menu_hide">&nbsp; Carrier Option</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                        </li>
                        <li class="dropdown_menu">
                            <a href="{{ route('admin.appointment') }}">
                                <i class="fa fa-calendar"></i>
                                <span class="link-title menu_hide">&nbsp; Appointment</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                        </li>
                        <li class="dropdown_menu">
                            <a href="{{ route('admin.faq') }}">
                                <i class="fa fa-calendar"></i>
                                <span class="link-title menu_hide">&nbsp; FAQ</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                        </li>
                        <li class="dropdown_menu">
                            <a href="{{ route('admin.review') }}">
                                <i class="fa fa-calendar"></i>
                                <span class="link-title menu_hide">&nbsp; Review</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                        </li>
                        <li class="dropdown_menu">
                            <a href="{{ route('admin2.logout') }}">
                                <i class="fa fa-user"></i>
                                <span class="link-title menu_hide">&nbsp; Log out</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="content" class="bg-container">
                <header class="head">
                    <div class="main-bar">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <h4 class="m-t-5">
                                    <i class="fa fa-home"></i>
                                    Dashboard
                                </h4>
                            </div>
                        </div>
                    </div>
                </header>
