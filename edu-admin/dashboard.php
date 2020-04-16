<!DOCTYPE html>
<html lang="en" class="app">


<head>
    <meta charset="utf-8" />
    <title>Scale | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
    <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">
    <section class="vbox">
        <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
            <div class="navbar-header aside-md dk">
                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a>
                <a href="index.html" class="navbar-brand"> <img src="images/logo.png" class="m-r-sm" alt="scale"> <span class="hidden-nav-xs">Scale</span> </a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a>
            </div>
            <ul class="nav navbar-nav hidden-xs">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="i i-grid"></i> </a>
                    <section class="dropdown-menu aside-lg bg-white on animated fadeInLeft">
                        <div class="row m-l-none m-r-none m-t m-b text-center">
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-mail i-2x text-primary-lt"></i> </span> <small class="text-muted">Mailbox</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-calendar i-2x text-danger-lt"></i> </span> <small class="text-muted">Calendar</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-map i-2x text-success-lt"></i> </span> <small class="text-muted">Map</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-paperplane i-2x text-info-lt"></i> </span> <small class="text-muted">Trainning</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-images i-2x text-muted"></i> </span> <small class="text-muted">Photos</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-clock i-2x text-warning-lter"></i> </span> <small class="text-muted">Timeline</small> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </li>
            </ul>
            <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-btn"> <button type="submit" class="btn btn-sm bg-white b-white btn-icon"><i class="fa fa-search"></i></button> </span>
                        <input type="text" class="form-control input-sm no-border" placeholder="Search apps, projects..."> </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
                <li class="hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="i i-chat3"></i> <span class="badge badge-sm up bg-danger count">2</span> </a>
                    <section class="dropdown-menu aside-xl animated flipInY">
                        <section class="panel bg-white">
                            <div class="panel-heading b-light bg-light"> <strong>You have <span class="count">2</span> notifications</strong> </div>
                            <div class="list-group list-group-alt">
                                <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <img src="images/a0.png" alt="..." class="img-circle"> </span> <span class="media-body block m-b-none"> Use awesome animate.css<br> <small class="text-muted">10 minutes ago</small> </span> </a>
                                <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br> <small class="text-muted">1 hour ago</small> </span> </a>
                            </div>
                            <div class="panel-footer text-sm"> <a href="#" class="pull-right"><i class="fa fa-cog"></i></a> <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a> </div>
                        </section>
                    </section>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/a0.png" alt="..."> </span> John.Smith <b class="caret"></b> </a>
                    <ul class="dropdown-menu animated fadeInRight">
                        <li> <span class="arrow top"></span> <a href="#">Settings</a> </li>
                        <li> <a href="profile.html">Profile</a> </li>
                        <li>
                            <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a>
                        </li>
                        <li> <a href="docs.html">Help</a> </li>
                        <li class="divider"></li>
                        <li> <a href="modal.lockme.html" data-toggle="ajaxModal">Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </header>
        <section>
            <section class="hbox stretch">
                <!-- .aside -->
                <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
                    <section class="vbox">
                        <section class="w-f scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                                <div class="clearfix wrapper dk nav-user hidden-xs">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb avatar pull-left m-r"> <img src="images/a0.png" class="dker" alt="..."> <i class="on md b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-t-xs"> <strong class="font-bold text-lt">John.Smith</strong> <b class="caret"></b> </span> <span class="text-muted text-xs block">Art Director</span> </span>
                                        </a>
                                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                            <li> <span class="arrow top hidden-nav-xs"></span> <a href="#">Settings</a> </li>
                                            <li> <a href="profile.html">Profile</a> </li>
                                            <li>
                                                <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a>
                                            </li>
                                            <li> <a href="docs.html">Help</a> </li>
                                            <li class="divider"></li>
                                            <li> <a href="modal.lockme.html" data-toggle="ajaxModal">Logout</a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- nav -->
                                <nav class="nav-primary hidden-xs">
                                    <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                                    <ul class="nav nav-main" data-ride="collapse">
                                        <li class="active">
                                            <a href="index.html" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Overview</span> </a>
                                        </li>
                                        <li>
                                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <b class="badge bg-danger pull-right">4</b> <i class="i i-stack icon"> </i> <span class="font-bold">Layouts</span> </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="layout-color.html" class="auto"> <i class="i i-dot"></i> <span>Color option</span> </a>
                                                </li>
                                                <li>
                                                    <a href="layout-hbox.html" class="auto"> <i class="i i-dot"></i> <span>Hbox layout</span> </a>
                                                </li>
                                                <li>
                                                    <a href="layout-boxed.html" class="auto"> <i class="i i-dot"></i> <span>Boxed layout</span> </a>
                                                </li>
                                                <li>
                                                    <a href="layout-fluid.html" class="auto"> <i class="i i-dot"></i> <span>Fluid layout</span> </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-lab icon"> </i> <span class="font-bold">UI kit</span> </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="buttons.html" class="auto"> <i class="i i-dot"></i> <span>Buttons</span> </a>
                                                </li>
                                                <li>
                                                    <a href="icons.html" class="auto"> <b class="badge bg-info pull-right">3</b> <i class="i i-dot"></i> <span>Icons</span> </a>
                                                </li>
                                                <li>
                                                    <a href="grid.html" class="auto"> <i class="i i-dot"></i> <span>Grid</span> </a>
                                                </li>
                                                <li>
                                                    <a href="widgets.html" class="auto"> <b class="badge bg-dark pull-right">8</b> <i class="i i-dot"></i> <span>Widgets</span> </a>
                                                </li>
                                                <li>
                                                    <a href="components.html" class="auto"> <i class="i i-dot"></i> <span>Components</span> </a>
                                                </li>
                                                <li>
                                                    <a href="list.html" class="auto"> <i class="i i-dot"></i> <span>List group</span> </a>
                                                </li>
                                                <li>
                                                    <a href="#table" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-dot"></i> <span>Table</span> </a>
                                                    <ul class="nav dker">
                                                        <li>
                                                            <a href="table-static.html"> <i class="i i-dot"></i> <span>Table static</span> </a>
                                                        </li>
                                                        <li>
                                                            <a href="table-datatable.html"> <b class="label bg-dark pull-right">1.10</b> <i class="i i-dot"></i> <span>Datatable</span> </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#form" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-dot"></i> <span>Form</span> </a>
                                                    <ul class="nav dker">
                                                        <li>
                                                            <a href="form-elements.html"> <i class="i i-dot"></i> <span>Form elements</span> </a>
                                                        </li>
                                                        <li>
                                                            <a href="form-validation.html"> <i class="i i-dot"></i> <span>Form validation</span> </a>
                                                        </li>
                                                        <li>
                                                            <a href="form-wizard.html"> <i class="i i-dot"></i> <span>Form wizard</span> </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="chart.html" class="auto"> <i class="i i-dot"></i> <span>Chart</span> </a>
                                                </li>
                                                <li>
                                                    <a href="portlet.html" class="auto"> <i class="i i-dot"></i> <span>Portlet</span> </a>
                                                </li>
                                                <li>
                                                    <a href="timeline.html" class="auto"> <i class="i i-dot"></i> <span>Timeline</span> </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-docs icon"> </i> <span class="font-bold">Pages</span> </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="profile.html" class="auto"> <i class="i i-dot"></i> <span>Profile</span> </a>
                                                </li>
                                                <li>
                                                    <a href="profile-2.html" class="auto"> <i class="i i-dot"></i> <span>Profile 2</span> </a>
                                                </li>
                                                <li>
                                                    <a href="search.html" class="auto"> <i class="i i-dot"></i> <span>Search</span> </a>
                                                </li>
                                                <li>
                                                    <a href="invoice.html" class="auto"> <i class="i i-dot"></i> <span>Invoice</span> </a>
                                                </li>
                                                <li>
                                                    <a href="intro.html" class="auto"> <i class="i i-dot"></i> <span>Intro</span> </a>
                                                </li>
                                                <li>
                                                    <a href="master.html" class="auto"> <i class="i i-dot"></i> <span>Master</span> </a>
                                                </li>
                                                <li>
                                                    <a href="gmap.html" class="auto"> <i class="i i-dot"></i> <span>Google Map</span> </a>
                                                </li>
                                                <li>
                                                    <a href="jvectormap.html" class="auto"> <i class="i i-dot"></i> <span>Vector Map</span> </a>
                                                </li>
                                                <li>
                                                    <a href="signin.html" class="auto"> <i class="i i-dot"></i> <span>Signin</span> </a>
                                                </li>
                                                <li>
                                                    <a href="signup.html" class="auto"> <i class="i i-dot"></i> <span>Signup</span> </a>
                                                </li>
                                                <li>
                                                    <a href="404.html" class="auto"> <i class="i i-dot"></i> <span>404</span> </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-grid2 icon"> </i> <span class="font-bold">Apps</span> </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="mail.html" class="auto"> <b class="badge bg-success lt pull-right">2</b> <i class="i i-dot"></i> <span>Mailbox</span> </a>
                                                </li>
                                                <li>
                                                    <a href="fullcalendar.html" class="auto"> <i class="i i-dot"></i> <span>Calendar</span> </a>
                                                </li>
                                                <li>
                                                    <a href="project.html" class="auto"> <i class="i i-dot"></i> <span>Project</span> </a>
                                                </li>
                                                <li>
                                                    <a href="media.html" class="auto"> <i class="i i-dot"></i> <span>Media</span> </a>
                                                </li>
                                                <li>
                                                    <a href="chat.html" class="auto"> <i class="i i-dot"></i> <span>Chat</span> </a>
                                                </li>
                                                <li>
                                                    <a href="contacts.html" class="auto"> <i class="i i-dot"></i> <span>Contacts</span> </a>
                                                </li>
                                                <li>
                                                    <a href="note.html" class="auto"> <i class="i i-dot"></i> <span>Note</span> </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="line dk hidden-nav-xs"></div>
                                    <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Lables</div>
                                    <ul class="nav">
                                        <li>
                                            <a href="mail.html#work"> <i class="i i-circle-sm text-info-dk"></i> <span>Work space</span> </a>
                                        </li>
                                        <li>
                                            <a href="mail.html#social"> <i class="i i-circle-sm text-success-dk"></i> <span>Connection</span> </a>
                                        </li>
                                        <li>
                                            <a href="mail.html#projects"> <i class="i i-circle-sm text-danger-dk"></i> <span>Projects</span> </a>
                                        </li>
                                    </ul>
                                    <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Circles</div>
                                    <ul class="nav">
                                        <li>
                                            <a href="#"> <i class="i i-circle-sm-o text-success-lt"></i> <span>College</span> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="i i-circle-sm-o text-warning"></i> <span>Social</span> </a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- / nav -->
                            </div>
                        </section>
                        <footer class="footer hidden-xs no-padder text-center-nav-xs">
                            <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a>
                            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a>
                        </footer>
                    </section>
                </aside>
                <!-- /.aside -->
                <section id="content">
                    <section class="hbox stretch">
                        <section>
                            <section class="vbox">
                                <section class="scrollable padder">
                                    <section class="row m-b-md">
                                        <div class="col-sm-6">
                                            <h3 class="m-b-xs text-black">Dashboard</h3> <small>Welcome back, John Smith, <i class="fa fa-map-marker fa-lg text-primary"></i> New York City</small> </div>
                                        <div class="col-sm-6 text-right text-left-xs m-t-md">
                                            <div class="btn-group"> <a class="btn btn-rounded btn-default b-2x dropdown-toggle" data-toggle="dropdown">Widgets <span class="caret"></span></a>
                                                <ul class="dropdown-menu text-left pull-right">
                                                    <li><a href="#">Notification</a></li>
                                                    <li><a href="#">Messages</a></li>
                                                    <li><a href="#">Analysis</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">More settings</a></li>
                                                </ul>
                                            </div> <a href="#" class="btn btn-icon b-2x btn-default btn-rounded hover"><i class="i i-bars3 hover-rotate"></i></a> <a href="#nav, #sidebar" class="btn btn-icon b-2x btn-info btn-rounded" data-toggle="class:nav-xs, show"><i class="fa fa-bars"></i></a> </div>
                                    </section>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="panel b-a">
                                                <div class="row m-n">
                                                    <div class="col-md-6 b-b b-r">
                                                        <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i> <i class="i i-plus2 i-1x text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-danger">2,000</span> <small class="text-muted text-u-c">New Visits</small> </span>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 b-b">
                                                        <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i> <i class="i i-users2 i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-success">75%</span> <small class="text-muted text-u-c">Bounce rate</small> </span>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 b-b b-r">
                                                        <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i> <i class="i i-location i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-info">25 <span class="text-sm">m</span></span> <small class="text-muted text-u-c">location</small> </span>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 b-b">
                                                        <a href="#" class="block padder-v hover"> <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i> <i class="i i-alarm i-sm text-white"></i> </span> <span class="clear"> <span class="h3 block m-t-xs text-primary">9:30</span> <small class="text-muted text-u-c">Meeting</small> </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="panel b-a">
                                                <div class="panel-heading no-border bg-primary lt text-center">
                                                    <a href="#"> <i class="fa fa-facebook fa fa-3x m-t m-b text-white"></i> </a>
                                                </div>
                                                <div class="padder-v text-center clearfix">
                                                    <div class="col-xs-6 b-r">
                                                        <div class="h3 font-bold">42k</div> <small class="text-muted">Friends</small> </div>
                                                    <div class="col-xs-6">
                                                        <div class="h3 font-bold">90</div> <small class="text-muted">Feeds</small> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="panel b-a">
                                                <div class="panel-heading no-border bg-info lter text-center">
                                                    <a href="#"> <i class="fa fa-twitter fa fa-3x m-t m-b text-white"></i> </a>
                                                </div>
                                                <div class="padder-v text-center clearfix">
                                                    <div class="col-xs-6 b-r">
                                                        <div class="h3 font-bold">27k</div> <small class="text-muted">Tweets</small> </div>
                                                    <div class="col-xs-6">
                                                        <div class="h3 font-bold">15k</div> <small class="text-muted">Followers</small> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 hide">
                                            <section class="panel b-a">
                                                <header class="panel-heading b-b b-light">
                                                    <ul class="nav nav-pills pull-right">
                                                        <li>
                                                            <a href="ajax.pie.html" class="text-muted" data-bjax data-target="#b-c"> <i class="i i-cycle"></i> </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="panel-toggle text-muted"> <i class="i i-plus text-active"></i> <i class="i i-minus text"></i> </a>
                                                        </li>
                                                    </ul> Connection </header>
                                                <div class="panel-body text-center bg-light lter" id="b-c">
                                                    <div class="easypiechart inline m-b m-t" data-percent="60" data-line-width="4" data-bar-Color="#23aa8c" data-track-Color="#c5d1da" data-color="#2a3844" data-scale-Color="false" data-size="120" data-line-cap='butt' data-animate="2000">
                                                        <div> <span class="h2 m-l-sm step"></span>%
                                                            <div class="text text-xs">completed</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="row bg-light dk m-b">
                                        <div class="col-md-6 dker">
                                            <section>
                                                <header class="font-bold padder-v">
                                                    <div class="pull-right">
                                                        <div class="btn-group">
                                                            <button data-toggle="dropdown" class="btn btn-sm btn-rounded btn-default dropdown-toggle"> <span class="dropdown-label">Week</span> <span class="caret"></span> </button>
                                                            <ul class="dropdown-menu dropdown-select">
                                                                <li>
                                                                    <a href="#">
                                                                        <input type="radio" name="b">Month</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <input type="radio" name="b">Week</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <input type="radio" name="b">Day</a>
                                                                </li>
                                                            </ul>
                                                        </div> <a href="#" class="btn btn-default btn-icon btn-rounded btn-sm">Go</a> </div> Statistics </header>
                                                <div class="panel-body">
                                                    <div id="flot-sp1ine" style="height:210px"></div>
                                                </div>
                                                <div class="row text-center no-gutter">
                                                    <div class="col-xs-3"> <span class="h4 font-bold m-t block">5,860</span> <small class="text-muted m-b block">Orders</small> </div>
                                                    <div class="col-xs-3"> <span class="h4 font-bold m-t block">10,450</span> <small class="text-muted m-b block">Sellings</small> </div>
                                                    <div class="col-xs-3"> <span class="h4 font-bold m-t block">21,230</span> <small class="text-muted m-b block">Items</small> </div>
                                                    <div class="col-xs-3"> <span class="h4 font-bold m-t block">7,230</span> <small class="text-muted m-b block">Customers</small> </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="col-md-6">
                                            <section>
                                                <header class="font-bold padder-v">
                                                    <div class="btn-group pull-right">
                                                        <button data-toggle="dropdown" class="btn btn-sm btn-rounded btn-default dropdown-toggle"> <span class="dropdown-label">Last 24 Hours</span> <span class="caret"></span> </button>
                                                        <ul class="dropdown-menu dropdown-select">
                                                            <li>
                                                                <a href="#">
                                                                    <input type="radio" name="a">Today</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <input type="radio" name="a">Yesterday</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <input type="radio" name="a">Last 24 Hours</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <input type="radio" name="a">Last 7 Days</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <input type="radio" name="a">Last 30 days</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <input type="radio" name="a">Last Month</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <input type="radio" name="a">All Time</a>
                                                            </li>
                                                        </ul>
                                                    </div> Analysis </header>
                                                <div class="panel-body flot-legend">
                                                    <div id="flot-pie-donut" style="height:240px"></div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <section class="panel b-a">
                                                <div class="panel-heading b-b"> <span class="badge pull-right">12</span> <span class="label bg-success">New</span> <a href="#" class="font-bold">HTML Courses</a> </div>
                                                <div class="panel-body"> <a href="#" class="block h4 font-bold m-b text-black">Get started with Bootstrap</a>
                                                    <div class="r b bg-warning-ltest wrapper m-b"> There are a few easy ways to quickly get started with Bootstrap... </div>
                                                    <div class="m-b">
                                                        <a href="#" class="avatar thumb-sm"> <img src="images/a0.png" alt="..."> <i class="on b-white"></i> </a>
                                                        <a href="#" class="avatar thumb-sm"> <img src="images/a1.png" alt="..."> <i class="busy b-white"></i> </a>
                                                        <a href="#" class="avatar thumb-sm"> <img src="images/a2.png" alt="..."> <i class="away b-white"></i> </a>
                                                        <a href="#" class="avatar thumb-sm"> <img src="images/a3.png" alt="..."> <i class="off b-white"></i> </a> <a href="#" class="btn btn-info btn-rounded font-bold"> +152 </a> </div>
                                                    <p class="text-sm">Start at 2:00 PM, 12/5/2016</p> <a href="#" class="btn btn-default btn-sm btn-rounded m-b-xs"><i class="fa fa-plus"></i> Take me in</a> </div>
                                                <div class="clearfix panel-footer"> <small class="text-muted pull-right">5m ago</small>
                                                    <a href="#" class="thumb-sm pull-left m-r"> <img src="images/a0.png" alt="..." class="img-circle"> </a>
                                                    <div class="clear"> <a href="#"><strong>Jonathan Omish</strong></a> <small class="block text-muted">San Francisco, USA</small> </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="col-md-4">
                                            <section class="panel b-a">
                                                <div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">Messages</a> </div>
                                                <ul class="list-group list-group-lg no-bg auto">
                                                    <a href="#" class="list-group-item clearfix"> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a4.png" alt="..."> <i class="on b-white bottom"></i> </span> <span class="clear"> <span>Chris Fox</span> <small class="text-muted clear text-ellipsis">What's up, buddy</small> </span>
                                                    </a>
                                                    <a href="#" class="list-group-item clearfix"> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a5.png" alt="..."> <i class="on b-white bottom"></i> </span> <span class="clear"> <span>Amanda Conlan</span> <small class="text-muted clear text-ellipsis">Come online and we need talk about the plans that we have discussed</small> </span>
                                                    </a>
                                                    <a href="#" class="list-group-item clearfix"> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a6.png" alt="..."> <i class="busy b-white bottom"></i> </span> <span class="clear"> <span>Dan Doorack</span> <small class="text-muted clear text-ellipsis">Hey, Some good news</small> </span>
                                                    </a>
                                                    <a href="#" class="list-group-item clearfix"> <span class="pull-left thumb-sm avatar m-r"> <img src="images/a7.png" alt="..."> <i class="away b-white bottom"></i> </span> <span class="clear"> <span>Lauren Taylor</span> <small class="text-muted clear text-ellipsis">Nice to talk with you.</small> </span>
                                                    </a>
                                                </ul>
                                                <div class="clearfix panel-footer">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control input-sm btn-rounded" placeholder="Search"> <span class="input-group-btn"> <button type="submit" class="btn btn-default btn-sm btn-rounded"><i class="fa fa-search"></i></button> </span> </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="col-md-4">
                                            <section class="panel b-light">
                                                <header class="panel-heading"><strong>Calendar</strong></header>
                                                <div id="calendar" class="bg-light dker m-l-n-xxs m-r-n-xxs"></div>
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item text-ellipsis"> <span class="badge bg-warning">7:30</span> Meet a friend </a>
                                                    <a href="#" class="list-group-item text-ellipsis"> <span class="badge bg-success">9:30</span> Have a kick off meeting with .inc company </a>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </section>
                            </section>
                        </section>
                        <!-- side content -->
                        <aside class="aside-md bg-black hide" id="sidebar">
                            <section class="vbox animated fadeInRight">
                                <section class="scrollable">
                                    <div class="wrapper"><strong>Live feed</strong></div>
                                    <ul class="list-group no-bg no-borders auto">
                                        <li class="list-group-item"> <span class="fa-stack pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-success"></i> <i class="fa fa-reply fa-stack-1x text-white"></i> </span> <span class="clear"> <a href="#">Goody@gmail.com</a> sent your email <small class="icon-muted">13 minutes ago</small> </span> </li>
                                        <li class="list-group-item"> <span class="fa-stack pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-danger"></i> <i class="fa fa-file-o fa-stack-1x text-white"></i> </span> <span class="clear"> <a href="#">Mide@live.com</a> invite you to join a meeting <small class="icon-muted">20 minutes ago</small> </span> </li>
                                        <li class="list-group-item"> <span class="fa-stack pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-info"></i> <i class="fa fa-map-marker fa-stack-1x text-white"></i> </span> <span class="clear"> <a href="#">Geoge@yahoo.com</a> is online <small class="icon-muted">1 hour ago</small> </span> </li>
                                        <li class="list-group-item"> <span class="fa-stack pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-primary"></i> <i class="fa fa-info fa-stack-1x text-white"></i> </span> <span class="clear"> <a href="#"><strong>Admin</strong></a> post a info <small class="icon-muted">1 day ago</small> </span> </li>
                                    </ul>
                                    <div class="wrapper"><strong>Friends</strong></div>
                                    <ul class="list-group no-bg no-borders auto">
                                        <li class="list-group-item">
                                            <div class="media"> <span class="pull-left thumb-sm avatar"> <img src="images/a3.png" alt="..." class="img-circle"> <i class="on b-black bottom"></i> </span>
                                                <div class="media-body">
                                                    <div><a href="#">Chris Fox</a></div> <small class="text-muted">about 2 minutes ago</small> </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media"> <span class="pull-left thumb-sm avatar"> <img src="images/a2.png" alt="..."> <i class="on b-black bottom"></i> </span>
                                                <div class="media-body">
                                                    <div><a href="#">Amanda Conlan</a></div> <small class="text-muted">about 2 hours ago</small> </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media"> <span class="pull-left thumb-sm avatar"> <img src="images/a1.png" alt="..."> <i class="busy b-black bottom"></i> </span>
                                                <div class="media-body">
                                                    <div><a href="#">Dan Doorack</a></div> <small class="text-muted">3 days ago</small> </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media"> <span class="pull-left thumb-sm avatar"> <img src="images/a0.png" alt="..."> <i class="away b-black bottom"></i> </span>
                                                <div class="media-body">
                                                    <div><a href="#">Lauren Taylor</a></div> <small class="text-muted">about 2 minutes ago</small> </div>
                                            </div>
                                        </li>
                                    </ul>
                                </section>
                            </section>
                        </aside>
                        <!-- / side content -->
                    </section>
                    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
                </section>
            </section>
        </section>
    </section>
    <!-- Bootstrap -->
    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
    <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/charts/flot/jquery.flot.min.js"></script>
    <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/charts/flot/jquery.flot.spline.js"></script>
    <script src="js/charts/flot/jquery.flot.pie.min.js"></script>
    <script src="js/charts/flot/jquery.flot.resize.js"></script>
    <script src="js/charts/flot/jquery.flot.grow.js"></script>
    <script src="js/charts/flot/demo.js"></script>
    <script src="js/calendar/bootstrap_calendar.js"></script>
    <script src="js/calendar/demo.js"></script>
    <script src="js/sortable/jquery.sortable.js"></script>
    <script src="js/app.plugin.js"></script>
</body>


</html>