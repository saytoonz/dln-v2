<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <link rel="icon" type="image/x-icon" href="{{ url('favicon.ico') }}">
    <title>Angle - Bootstrap Admin Template</title><!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="{{ url('vendor/@fortawesome/fontawesome-free/css/brands.css') }}">
    <link rel="stylesheet" href="{{ url('vendor/@fortawesome/fontawesome-free/css/regular.css') }}">
    <link rel="stylesheet" href="{{ url('vendor/@fortawesome/fontawesome-free/css/solid.css') }}">
    <link rel="stylesheet" href="{{ url('vendor/@fortawesome/fontawesome-free/css/fontawesome.css') }}">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="{{ url('vendor/simple-line-icons/css/simple-line-icons.css') }}"><!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="{{ url('vendor/animate.css/animate.css') }}"><!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="{{ url('vendor/whirl/dist/whirl.css') }}">
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- WEATHER ICONS-->
    <link rel="stylesheet" href="{{ url('vendor/weather-icons/css/weather-icons.css') }}">
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="{{ url('css/app.css') }}" id="maincss">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-basic.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-glass.css" />

    <!-- SELECT2-->
    <link rel="stylesheet" href="{{url('vendor/select2/dist/css/select2.css')}}">

    <!-- CHOSEN-->
    <link rel="stylesheet" href="{{ url('vendor/chosen-js/chosen.css') }}">
    <script src="{{ url('vendor/jquery/dist/jquery.js') }}"></script>

    <link type="text/css" href="{{ url('ckeditor5/sample/css/sample.css') }}" rel="stylesheet" media="screen" />



</head>

<body>
    <div class="wrapper">
        <!-- top navbar-->
        <header class="topnavbar-wrapper">
            <!-- START Top Navbar-->
            <nav class="navbar topnavbar">
                <!-- START navbar header-->
                <div class="navbar-header"><a class="navbar-brand" href="#" style="color: white;">
                        <div class="brand-logo"><img class="img-fluid" src="{{ url('imsg/logo.png') }}"
                                alt="DLN"></div>
                        <div class="brand-logo-collapsed"><img class="img-fluid"
                                src="{{ url('imsg/logo-single.png') }}" alt="DLN"></div>
                    </a></div><!-- END navbar header-->
                <!-- START Left navbar-->
                <ul class="navbar-nav mr-auto flex-row">
                    <li class="nav-item">
                        <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops--><a
                            class="nav-link d-none d-md-block d-lg-block d-xl-block" href="#" data-trigger-resize=""
                            data-toggle-state="aside-collapsed"><em class="fas fa-bars"></em></a>
                        <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.--><a
                            class="nav-link sidebar-toggle d-md-none" href="#" data-toggle-state="aside-toggled"
                            data-no-persist="true"><em class="fas fa-bars"></em></a>
                    </li><!-- START User avatar toggle-->
                    <li class="nav-item d-none d-md-block">
                        <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops--><a
                            class="nav-link" id="user-block-toggle" href="#user-block" data-toggle="collapse"><em
                                class="icon-user"></em></a>
                    </li><!-- END User avatar toggle-->
                    <!-- START lock screen-->
                    <li class="nav-item d-none d-md-block"><a class="nav-link" href="lock.html"
                            title="Lock screen"><em class="icon-lock"></em></a></li><!-- END lock screen-->
                </ul><!-- END Left navbar-->
                <!-- START Right Navbar-->
                <ul class="navbar-nav flex-row">
                    <!-- Search icon-->
                    <li class="nav-item"><a class="nav-link" href="#" data-search-open=""><em
                                class="icon-magnifier"></em></a></li>
                    <!-- Fullscreen (only desktops)-->
                    <li class="nav-item d-none d-md-block"><a class="nav-link" href="#"
                            data-toggle-fullscreen=""><em class="fas fa-expand"></em></a></li><!-- START Alert menu-->
                    <li class="nav-item dropdown dropdown-list"><a
                            class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-toggle="dropdown"><em
                                class="icon-bell"></em><span class="badge badge-danger">11</span></a>
                        <!-- START Dropdown menu-->
                        <div class="dropdown-menu dropdown-menu-right animated flipInX">
                            <div class="dropdown-item">
                                <!-- START list group-->
                                <div class="list-group">
                                    <!-- list item-->
                                    <div class="list-group-item list-group-item-action">
                                        <div class="media">
                                            <div class="align-self-start mr-2"><em
                                                    class="fab fa-twitter fa-2x text-info"></em></div>
                                            <div class="media-body">
                                                <p class="m-0">New followers</p>
                                                <p class="m-0 text-muted text-sm">1 new follower</p>
                                            </div>
                                        </div>
                                    </div><!-- list item-->
                                    <div class="list-group-item list-group-item-action">
                                        <div class="media">
                                            <div class="align-self-start mr-2"><em
                                                    class="fas fa-envelope fa-2x text-warning"></em></div>
                                            <div class="media-body">
                                                <p class="m-0">New e-mails</p>
                                                <p class="m-0 text-muted text-sm">You have 10 new emails</p>
                                            </div>
                                        </div>
                                    </div><!-- list item-->
                                    <div class="list-group-item list-group-item-action">
                                        <div class="media">
                                            <div class="align-self-start mr-2"><em
                                                    class="fas fa-tasks fa-2x text-success"></em></div>
                                            <div class="media-body">
                                                <p class="m-0">Pending Tasks</p>
                                                <p class="m-0 text-muted text-sm">11 pending task</p>
                                            </div>
                                        </div>
                                    </div><!-- last list item-->
                                    <div class="list-group-item list-group-item-action"><span
                                            class="d-flex align-items-center"><span class="text-sm">More
                                                notifications</span><span
                                                class="badge badge-danger ml-auto">14</span></span></div>
                                </div><!-- END list group-->
                            </div>
                        </div><!-- END Dropdown menu-->
                    </li><!-- END Alert menu-->
                    <!-- START Offsidebar button-->
                    <li class="nav-item"><a class="nav-link" href="#" data-toggle-state="offsidebar-open"
                            data-no-persist="true"><em class="icon-notebook"></em></a></li><!-- END Offsidebar menu-->
                </ul><!-- END Right Navbar-->
                <!-- START Search form-->
                <form class="navbar-form" role="search" action="search.html">
                    <div class="form-group"><input class="form-control" type="text"
                            placeholder="Type and hit enter ...">
                        <div class="fas fa-times navbar-form-close" data-search-dismiss=""></div>
                    </div><button class="d-none" type="submit">Submit</button>
                </form><!-- END Search form-->
            </nav><!-- END Top Navbar-->
        </header><!-- sidebar-->
        <aside class="aside-container">
            <!-- START Sidebar (left)-->
            <div class="aside-inner">
                <nav class="sidebar" data-sidebar-anyclick-close="">
                    <!-- START sidebar nav-->
                    <ul class="sidebar-nav">
                        <!-- START user info-->
                        <li class="has-user-block">
                            <div class="collapse show" id="user-block">
                                <div class="item user-block">
                                    <!-- User picture-->
                                    <div class="user-block-picture">
                                        <div class="user-block-status"><img class="img-thumbnail rounded-circle"
                                                src="{{ url('img/user/02.jpg') }}" alt="Avatar" width="60"
                                                height="60">
                                            <div class="circle bg-success circle-lg"></div>
                                        </div>
                                    </div><!-- Name and Job-->
                                    <div class="user-block-info"><span class="user-block-name">Hello, Mike</span><span
                                            class="user-block-role">Designer</span></div>
                                </div>
                            </div>
                        </li><!-- END user info-->
                        <!-- Iterates over all sidebar items-->
                        <li class="nav-heading"><span data-localize="sidebar.heading.HEADER">Main Navigation</span>
                        </li>
                        <li class="">
                            <a href=" {{ url('admin') }}" title="Dashboard">
                            <em class="icon-speedometer"></em>
                            <span data-localize="sidebar.nav.DASHBOARD">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-heading">
                            <span data-localize="sidebar.heading.HEADER">POST</span>
                        </li>
                        <li class="">
                            <a href=" #news" title="News" data-toggle="collapse">
                            <em class="icon-settings"></em>
                            <span data-localize="sidebar.nav.NEWS">News</span>
                            </a>
                            <ul class="sidebar-nav sidebar-subnav collapse" id="news">
                                <li class="sidebar-subnav-header"></li>
                                <li class=" ">
                                    <a href="{{ url('add-news') }}" title="Add News">
                                        <span>Add News</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="{{ url('view-news') }}" title="View News">
                                        <span>View News</span>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        <li class="">
                            <a href=" #supCourt" title="Supreme"
                            data-toggle="collapse">
                            <em class="icon-settings"></em>
                            <span data-localize="sidebar.nav.SUPREMECOURT">Supreme Court</span>
                            </a>
                            <ul class="sidebar-nav sidebar-subnav collapse" id="supCourt">
                                <li class="sidebar-subnav-header"></li>
                                <li class=" ">
                                    <a href="{{ url('court-dairy') }}" title="Court Dairy">
                                        <span>Court Dairy</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="{{ url('court-justices') }}" title="Justices">
                                        <span>Justices</span>
                                    </a>
                                </li>

                                <li class=" ">
                                    <a href="{{ url('court-history') }}" title="History">
                                        <span>History</span>
                                    </a>
                                </li>

                                <li class=" ">
                                    <a href="{{ url('court-resources') }}" title="Resources">
                                        <span>Resources</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href=" #Chambers" title="Chambers"
                            data-toggle="collapse">
                            <em class="icon-settings"></em>
                            <span data-localize="sidebar.nav.CHAMBERS">Chambers</span>
                            </a>
                            <ul class="sidebar-nav sidebar-subnav collapse" id="Chambers">
                                <li class="sidebar-subnav-header"></li>
                                <li class=" ">
                                    <a href="#" title="Legal Work">
                                        <span>Legal Work</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="#" title="Law Firms">
                                        <span>Law Firms</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="">
                            <a href=" #Opinions" title="Opinions/Features"
                            data-toggle="collapse">
                            <em class="icon-settings"></em>
                            <span data-localize="sidebar.nav.OPINIONS">Opinions/Features</span>
                            </a>
                            <ul class="sidebar-nav sidebar-subnav collapse" id="Opinions">
                                <li class="sidebar-subnav-header"></li>
                                <li class=" ">
                                    <a href="#" title="Add Opinion/Feature">
                                        <span>Add Opinion/Feature</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="#" title="View Opinion/Feature">
                                        <span>View Opinion/Feature</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="">
                            <a href=" #Happilex" title="Happilex"
                            data-toggle="collapse">
                            <em class="icon-settings"></em>
                            <span data-localize="sidebar.nav.HAPPILEX">Happilex</span>
                            </a>
                            <ul class="sidebar-nav sidebar-subnav collapse" id="Happilex">
                                <li class="sidebar-subnav-header"></li>
                                <li class=" ">
                                    <a href="#" title="Add Happilex">
                                        <span>Add Happilex</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="#" title="View Happilex">
                                        <span>View Happilex</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-heading">
                            <span data-localize="sidebar.heading.HEADER">Site Settings</span>
                        </li>
                        <li class=" ">
                            <a href="#siteSettings" title="Site Settings" data-toggle="collapse">
                                <em class="icon-settings"></em>
                                <span data-localize="sidebar.nav.SITESETTINGS">Site Settings</span>
                            </a>
                            <ul class="sidebar-nav sidebar-subnav collapse" id="siteSettings">
                                <li class="sidebar-subnav-header">Site Settings</li>
                                <li class=" ">
                                    <a href="{{ url('site-tabs') }}" title="Site Tabs">
                                        <span>Site Tabs</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="{{ url('site-setting') }}" title="Settings">
                                        <span>Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class=" ">
                            <a href="#siteSettings" title="Advertisement" data-toggle="collapse">
                                <em class="icon-settings"></em>
                                <span data-localize="sidebar.nav.ADVERTISEMENT">Advertisement</span>
                            </a>
                            <ul class="sidebar-nav sidebar-subnav collapse" id="siteSettings">
                                <li class="sidebar-subnav-header">Advertisement</li>
                                <li class=" ">
                                    <a href="{{ url('all-advs') }}" title="View Advertisement">
                                        <span>All adverts</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="{{ url('add-adv') }}" title="Add Advertisement">
                                        <span>Add Advert</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul><!-- END sidebar nav-->
                </nav>
            </div><!-- END Sidebar (left)-->
        </aside><!-- offsidebar-->
        <aside class="offsidebar d-none">
            <!-- START Off Sidebar (right)-->
            <nav>
                <div role="tabpanel">
                    <!-- Nav tabs-->
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#app-settings"
                                aria-controls="app-settings" role="tab" data-toggle="tab"><em
                                    class="icon-equalizer fa-lg"></em></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#app-chat"
                                aria-controls="app-chat" role="tab" data-toggle="tab"><em
                                    class="icon-user fa-lg"></em></a></li>
                    </ul><!-- Tab panes-->
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="app-settings" role="tabpanel">
                            <h3 class="text-center text-thin mt-4">Settings</h3>
                            <div class="p-2">
                                <h4 class="text-muted text-thin">Themes</h4>
                                <div class="row row-flush mb-2">
                                    <div class="col mb-2">
                                        <div class="setting-color"><label data-load-css="css/theme-a.css"><input
                                                    type="radio" name="setting-theme" checked="checked"><span
                                                    class="icon-check"></span><span class="split"><span
                                                        class="color bg-info"></span><span
                                                        class="color bg-info-light"></span></span><span
                                                    class="color bg-white"></span></label></div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="setting-color"><label data-load-css="css/theme-b.css"><input
                                                    type="radio" name="setting-theme"><span
                                                    class="icon-check"></span><span class="split"><span
                                                        class="color bg-green"></span><span
                                                        class="color bg-green-light"></span></span><span
                                                    class="color bg-white"></span></label></div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="setting-color"><label data-load-css="css/theme-c.css"><input
                                                    type="radio" name="setting-theme"><span
                                                    class="icon-check"></span><span class="split"><span
                                                        class="color bg-purple"></span><span
                                                        class="color bg-purple-light"></span></span><span
                                                    class="color bg-white"></span></label></div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="setting-color"><label data-load-css="css/theme-d.css"><input
                                                    type="radio" name="setting-theme"><span
                                                    class="icon-check"></span><span class="split"><span
                                                        class="color bg-danger"></span><span
                                                        class="color bg-danger-light"></span></span><span
                                                    class="color bg-white"></span></label></div>
                                    </div>
                                </div>
                                <div class="row row-flush mb-2">
                                    <div class="col mb-2">
                                        <div class="setting-color"><label data-load-css="css/theme-e.css"><input
                                                    type="radio" name="setting-theme"><span
                                                    class="icon-check"></span><span class="split"><span
                                                        class="color bg-info-dark"></span><span
                                                        class="color bg-info"></span></span><span
                                                    class="color bg-gray-dark"></span></label></div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="setting-color"><label data-load-css="css/theme-f.css"><input
                                                    type="radio" name="setting-theme"><span
                                                    class="icon-check"></span><span class="split"><span
                                                        class="color bg-green-dark"></span><span
                                                        class="color bg-green"></span></span><span
                                                    class="color bg-gray-dark"></span></label></div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="setting-color"><label data-load-css="css/theme-g.css"><input
                                                    type="radio" name="setting-theme"><span
                                                    class="icon-check"></span><span class="split"><span
                                                        class="color bg-purple-dark"></span><span
                                                        class="color bg-purple"></span></span><span
                                                    class="color bg-gray-dark"></span></label></div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="setting-color"><label data-load-css="css/theme-h.css"><input
                                                    type="radio" name="setting-theme"><span
                                                    class="icon-check"></span><span class="split"><span
                                                        class="color bg-danger-dark"></span><span
                                                        class="color bg-danger"></span></span><span
                                                    class="color bg-gray-dark"></span></label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2">
                                <h4 class="text-muted text-thin">Layout</h4>
                                <div class="clearfix">
                                    <p class="float-left">Fixed</p>
                                    <div class="float-right"><label class="switch"><input id="chk-fixed"
                                                type="checkbox" data-toggle-state="layout-fixed"><span></span></label>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <p class="float-left">Boxed</p>
                                    <div class="float-right"><label class="switch"><input id="chk-boxed"
                                                type="checkbox" data-toggle-state="layout-boxed"><span></span></label>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <p class="float-left">RTL</p>
                                    <div class="float-right"><label class="switch"><input id="chk-rtl"
                                                type="checkbox"><span></span></label></div>
                                </div>
                            </div>
                            <div class="p-2">
                                <h4 class="text-muted text-thin">Aside</h4>
                                <div class="clearfix">
                                    <p class="float-left">Collapsed</p>
                                    <div class="float-right"><label class="switch"><input
                                                id="chk-collapsed" type="checkbox"
                                                data-toggle-state="aside-collapsed"><span></span></label></div>
                                </div>
                                <div class="clearfix">
                                    <p class="float-left">Collapsed Text</p>
                                    <div class="float-right"><label class="switch"><input
                                                id="chk-collapsed-text" type="checkbox"
                                                data-toggle-state="aside-collapsed-text"><span></span></label></div>
                                </div>
                                <div class="clearfix">
                                    <p class="float-left">Float</p>
                                    <div class="float-right"><label class="switch"><input id="chk-float"
                                                type="checkbox" data-toggle-state="aside-float"><span></span></label>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <p class="float-left">Hover</p>
                                    <div class="float-right"><label class="switch"><input id="chk-hover"
                                                type="checkbox" data-toggle-state="aside-hover"><span></span></label>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <p class="float-left">Show Scrollbar</p>
                                    <div class="float-right"><label class="switch"><input id="chk-scroll"
                                                type="checkbox" data-toggle-state="show-scrollbar"
                                                data-target=".sidebar"><span></span></label></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="app-chat" role="tabpanel">
                            <h3 class="text-center text-thin mt-4">Connections</h3>
                            <div class="list-group">
                                <!-- START list title-->
                                <div class="list-group-item border-0"><small class="text-muted">ONLINE</small>
                                </div><!-- END list title-->
                                <div class="list-group-item list-group-item-action border-0">
                                    <div class="media"><img
                                            class="align-self-center mr-3 rounded-circle thumb48"
                                            src="{{ url('img/user/05.jpg') }}" alt="Image">
                                        <div class="media-body text-truncate"><a href="#"><strong>Juan
                                                    Sims</strong></a><br><small
                                                class="text-muted">Designeer</small></div>
                                        <div class="ml-auto"><span class="circle bg-success circle-lg"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action border-0">
                                    <div class="media"><img
                                            class="align-self-center mr-3 rounded-circle thumb48"
                                            src="{{ url('img/user/06.jpg') }}" alt="Image">
                                        <div class="media-body text-truncate"><a href="#"><strong>Maureen
                                                    Jenkins</strong></a><br><small
                                                class="text-muted">Designeer</small></div>
                                        <div class="ml-auto"><span class="circle bg-success circle-lg"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action border-0">
                                    <div class="media"><img
                                            class="align-self-center mr-3 rounded-circle thumb48"
                                            src="{{ url('img/user/07.jpg') }}" alt="Image">
                                        <div class="media-body text-truncate"><a href="#"><strong>Billie
                                                    Dunn</strong></a><br><small
                                                class="text-muted">Designeer</small></div>
                                        <div class="ml-auto"><span class="circle bg-danger circle-lg"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action border-0">
                                    <div class="media"><img
                                            class="align-self-center mr-3 rounded-circle thumb48"
                                            src="{{ url('img/user/08.jpg') }}" alt="Image">
                                        <div class="media-body text-truncate"><a href="#"><strong>Tomothy
                                                    Roberts</strong></a><br><small
                                                class="text-muted">Designeer</small></div>
                                        <div class="ml-auto"><span class="circle bg-warning circle-lg"></span>
                                        </div>
                                    </div>
                                </div><!-- START list title-->
                                <div class="list-group-item border-0"><small class="text-muted">OFFLINE</small>
                                </div><!-- END list title-->
                                <div class="list-group-item list-group-item-action border-0">
                                    <div class="media"><img
                                            class="align-self-center mr-3 rounded-circle thumb48"
                                            src="{{ url('img/user/09.jpg') }}" alt="Image">
                                        <div class="media-body text-truncate"><a href="#"><strong>Lawrence
                                                    Robinson</strong></a><br><small
                                                class="text-muted">Designeer</small></div>
                                        <div class="ml-auto"><span class="circle bg-warning circle-lg"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action border-0">
                                    <div class="media"><img
                                            class="align-self-center mr-3 rounded-circle thumb48"
                                            src="{{ url('img/user/10.jpg') }}" alt="Image">
                                        <div class="media-body text-truncate"><a href="#"><strong>Tyrone
                                                    Owens</strong></a><br><small
                                                class="text-muted">Designeer</small></div>
                                        <div class="ml-auto"><span class="circle bg-warning circle-lg"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 py-4 text-center">
                                <!-- Optional link to list more users--><a class="btn btn-purple btn-sm" href="#"
                                    title="See more contacts"><strong>Load more..</strong></a>
                            </div><!-- Extra items-->
                            <div class="px-3 py-2">
                                <p><small class="text-muted">Tasks completion</small></p>
                                <div class="progress progress-xs m-0">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span
                                            class="sr-only">80% Complete</span></div>
                                </div>
                            </div>
                            <div class="px-3 py-2">
                                <p><small class="text-muted">Upload quota</small></p>
                                <div class="progress progress-xs m-0">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span
                                            class="sr-only">40% Complete</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav><!-- END Off Sidebar (right)-->
        </aside><!-- Main section-->

        @yield('content')

    <!-- Page footer-->
        <footer class="footer-container"><span>&copy; 2021 - DennisLaw News</span></footer>
    </div><!-- =============== VENDOR SCRIPTS ===============-->
    <!-- MODERNIZR-->
    <script src="{{ url('vendor/modernizr/modernizr.custom.js') }}"></script>
    <!-- STORAGE API-->
    <script src="{{ url('vendor/js-storage/js.storage.js') }}"></script>
    <!-- SCREENFULL-->
    <script src="{{ url('vendor/screenfull/dist/screenfull.js') }}"></script>
    <!-- i18next-->
    <script src="{{ url('vendor/i18next/i18next.js') }}"></script>
    <script src="{{ url('vendor/i18next-xhr-backend/i18nextXHRBackend.js') }}"></script>
    <script src="{{ url('vendor/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ url('vendor/bootstrap/dist/js/bootstrap.js') }}"></script>
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->
    <!-- SPARKLINE-->
    <script src="{{ url('vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->
    <!-- CHOSEN-->
    <script src="{{ url('vendor/chosen-js/chosen.jquery.js') }}"></script>
    <!-- FLOT CHART-->
    <script src="{{ url('vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ url('vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.js') }}"></script>
    <script src="{{ url('vendor/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ url('vendor/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ url('vendor/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ url('vendor/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ url('vendor/jquery.flot.spline/jquery.flot.spline.js') }}"></script>
    <!-- EASY PIE CHART-->
    <script src="{{ url('vendor/easy-pie-chart/dist/jquery.easypiechart.js') }}"></script>
    <!-- MOMENT JS-->
    <script src="{{ url('vendor/moment/min/moment-with-locales.js') }}"></script>

    <script src="{{ url('vendor/sweetalert/dist/sweetalert.min.js') }}"></script>
    <!-- SELECT2-->
    <script src="{{url('vendor/select2/dist/js/select2.full.js')}}"></script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- =============== APP SCRIPTS ===============-->
    <script src="{{ url('js/app.js') }}"></script>

    <script>
        function deleteAlert(id, table) {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    closeModal: false,
                })
                .then(willDelete => {
                    if (!willDelete) throw null;
                    return fetch(`{{ url('delete-api') }}/` + table + `/` + id);
                })
                .then(results => {
                    return results.json();
                })
                .then((json) => {
                    if (json == id) {
                        $('#' + table + id).hide(100);
                        swal("Poof! Deleted succesfully!", {
                            icon: "success",
                        });
                    } else {
                        swal("An error occured!", {
                            icon: "error",
                        });
                    }

                });
        }



        $(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left'
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                    .format('YYYY-MM-DD'));
            });
        });
        $('.chosen-select').chosen();
        // $('.wysiwyg').wysiwyg();
    </script>
</body>

</html>
