<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ url('img/favicon.jpg') }}">

    <title>DLN | ADMIN</title>
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
    <link rel="stylesheet" href="{{ url('vendor/select2/dist/css/select2.css') }}">

    <!-- TAGS INPUT-->
    <link rel="stylesheet" href="{{ url('vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
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
                        <div class="brand-logo"><img class="img-fluid" src="{{ url('img/favicon.jpg') }}"
                                alt="DLN" style="width: 50px"></div>
                        <div class="brand-logo-collapsed"><img class="img-fluid"
                                src="{{ url('img/favicon.jpg') }}" alt="DLN"></div>
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
                    <li class="nav-item d-none d-md-block"><a class="nav-link" href="{{ url('logout') }}"
                            title="Logout"><em class="icon-logout"></em></a></li><!-- END lock screen-->
                </ul><!-- END Left navbar-->
                <!-- START Right Navbar-->
                <ul class="navbar-nav flex-row">
                    <!-- START Offsidebar button-->
                    <li class="nav-item"><a class="nav-link" href="#" data-toggle-state="offsidebar-open"
                            data-no-persist="true"><em class="icon-notebook"></em></a></li><!-- END Offsidebar menu-->
                </ul><!-- END Right Navbar-->
            </nav><!-- END Top Navbar-->
        </header>
        <!-- sidebar-->
        <aside class="aside-container">
            <!-- START Sidebar (left)-->
            <div class="aside-inner">
                <nav class="sidebar" data-sidebar-anyclick-close="">
                    <!-- START sidebar nav-->
                    <ul class="sidebar-nav">
                        <!-- START user info-->
                        <li class="has-user-block">
                            <div class="collapse hide" id="user-block">
                                <div class="item user-block">
                                    <!-- User picture-->
                                    <div class="user-block-picture">
                                        <div class="user-block-status">
                                            <img class="img-thumbnail rounded-circle"
                                                src="{{ url('img/user/02.jpg') }}" alt="Avatar" width="60"
                                                height="60">
                                        </div>
                                    </div><!-- Name and Job-->
                                    <div class="user-block-info"><span
                                            class="user-block-name">{{ Auth::user()->name }}</span><span
                                            class="user-block-role">{{ Auth::user()->email }}</span></div>
                                </div>
                            </div>
                        </li><!-- END user info-->
                        <!-- Iterates over all sidebar items-->
                        <li class="nav-heading"><span data-localize="sidebar.heading.HEADER">Main Navigation</span>
                        </li>
                        @if (in_array(51,explode(',',\Auth::user()->permissions)))
                        <li class="">
                            <a href=" {{ url('dln-admin') }}" title="Dashboard">
                                <em class="icon-speedometer"></em>
                                <span data-localize="sidebar.nav.DASHBOARD">Dashboard</span>
                            </a>
                        </li>
                        @endif

                        <li class="nav-heading">
                            <span data-localize="sidebar.heading.HEADER">POST</span>
                        </li>
                        @if (in_array(2,explode(',',\Auth::user()->permissions)))
                        <li class="">
                            <a href=" #news" title="News" data-toggle="collapse">
                                <em class="icon-note"></em>
                                <span data-localize="sidebar.nav.NEWS">News</span>
                            </a>
                            <ul class="sidebar-nav sidebar-subnav collapse" id="news">
                                <li class="sidebar-subnav-header"></li>
                                @if (in_array(1,explode(',',\Auth::user()->permissions)))
                                <li class=" ">
                                    <a href="{{ url('add-news') }}" title="Add News">
                                        <span>Add News</span>
                                    </a>
                                </li>
                                @endif
                                @if (in_array(2,explode(',',\Auth::user()->permissions)))
                                <li class=" ">
                                    <a href="{{ url('view-news') }}" title="View News">
                                        <span>View News</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        @endif




                        @if (in_array(12,explode(',',\Auth::user()->permissions)) ||
                        in_array(13,explode(',',\Auth::user()->permissions)))
                        <li class="">
                            <a href=" #Media" title="Media" data-toggle="collapse">
                                <em class="icon-picture"></em>
                                <span data-localize="sidebar.nav.MEDIA">Media</span>
                            </a>
                            <ul class="sidebar-nav sidebar-subnav collapse" id="Media">
                                <li class="sidebar-subnav-header"></li>
                                @if (in_array(12,explode(',',\Auth::user()->permissions)))
                                <li class=" ">
                                    <a href="{{ url('youtube-videos') }}" title="Legal Work">
                                        <span>YouTube Videos</span>
                                    </a>
                                </li>
                                @endif
                                @if (in_array(13,explode(',',\Auth::user()->permissions)))
                                <li class=" ">
                                    <a href="{{ url('audio-podcasts') }}" title="Law Firms">
                                        <span>Audio/Pod Casts</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        @endif




                        @if (in_array(14,explode(',',\Auth::user()->permissions)) ||
                        in_array(15,explode(',',\Auth::user()->permissions)) ||
                        in_array(19,explode(',',\Auth::user()->permissions)) ||
                        in_array(20,explode(',',\Auth::user()->permissions)))
                        <li class="">
                            <a href=" #supCourt" title="Supreme" data-toggle="collapse">
                                <em class="icon-vector"></em>
                                <span data-localize="sidebar.nav.SUPREMECOURT">Supreme Court</span>
                            </a>
                            <ul class="sidebar-nav sidebar-subnav collapse" id="supCourt">
                                <li class="sidebar-subnav-header"></li>
                                @if (in_array(14,explode(',',\Auth::user()->permissions)))
                                <li class=" ">
                                    <a href="{{ url('court-dairy') }}" title="Court Diary">
                                        <span>Court Diary</span>
                                    </a>
                                </li>
                                @endif
                                @if (in_array(15,explode(',',\Auth::user()->permissions)))
                                <li class=" ">
                                    <a href="{{ url('court-justices') }}" title="Justices">
                                        <span>Justices</span>
                                    </a>
                                </li>
                                @endif
                                @if (in_array(19,explode(',',\Auth::user()->permissions)))
                                <li class=" ">
                                    <a href="{{ url('court-history') }}" title="History">
                                        <span>History</span>
                                    </a>
                                </li>
                                @endif
                                @if (in_array(20,explode(',',\Auth::user()->permissions)))
                                <li class=" ">
                                    <a href="{{ url('court-resources') }}" title="Resources">
                                        <span>Resources</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        @endif

                        @if (in_array(25,explode(',',\Auth::user()->permissions)) ||
                        in_array(28,explode(',',\Auth::user()->permissions)))
                        <li class="">
                            <a href=" #Chambers" title="Chambers" data-toggle="collapse">
                                <em class="icon-grid"></em>
                                <span data-localize="sidebar.nav.CHAMBERS">Chambers</span>
                            </a>
                            <ul class="sidebar-nav sidebar-subnav collapse" id="Chambers">
                                <li class="sidebar-subnav-header"></li>
                                @if (in_array(25,explode(',',\Auth::user()->permissions)))
                                <li class=" ">
                                    <a href="{{ url('view-legal_work') }}" title="Legal Work">
                                        <span>Legal Work</span>
                                    </a>
                                </li>
                                @endif
                                @if (in_array(28,explode(',',\Auth::user()->permissions)))
                                <li class=" ">
                                    <a href="{{ url('law-firms') }}" title="Law Firms">
                                        <span>Law Firms</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        @endif

                        @if (in_array(33,explode(',',\Auth::user()->permissions)))
                        <li class="">
                            <a href=" #Opinions" title="Opinions/Features" data-toggle="collapse">
                                <em class="icon-speech"></em>
                                <span data-localize="sidebar.nav.OPINIONS">Opinions/Features</span>
                            </a>
                            <ul class="sidebar-nav sidebar-subnav collapse" id="Opinions">
                                <li class="sidebar-subnav-header"></li>

                                @if (in_array(32,explode(',',\Auth::user()->permissions)))
                                <li>
                                    <a href="{{ url('opinions-cats') }}" title="Opinion Categories">
                                        <span>Opinion Categories</span>
                                    </a>
                                </li>
                                @endif

                                @if (in_array(34,explode(',',\Auth::user()->permissions)))
                                <li class=" ">
                                    <a href="{{ url('add-opinions-features') }}" title="Add Opinion/Feature">
                                        <span>Add Opinion/Feature</span>
                                    </a>
                                </li>
                                @endif

                                @if (in_array(33,explode(',',\Auth::user()->permissions)))
                                <li class=" ">
                                    <a href="{{ url('view-opinions-features') }}" title="View Opinion/Feature">
                                        <span>View Opinion/Feature</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        @endif


                        @if (in_array(37,explode(',',\Auth::user()->permissions)))
                        <li class="">
                            <a href=" #Happilex" title="Happilex" data-toggle="collapse">
                                <em class="icon-social-github"></em>
                                <span data-localize="sidebar.nav.HAPPILEX">Happilex</span>
                            </a>
                            <ul class="sidebar-nav sidebar-subnav collapse" id="Happilex">
                                <li class="sidebar-subnav-header"></li>
                                @if (in_array(39,explode(',',\Auth::user()->permissions)))
                                <li class=" ">
                                    <a href="{{ url('add-happilex') }}" title="Add Happilex">
                                        <span>Add Happilex</span>
                                    </a>
                                </li>
                                @endif
                                @if (in_array(37,explode(',',\Auth::user()->permissions)))
                                <li class=" ">
                                    <a href="{{ url('view-happilex') }}" title="View Happilex">
                                        <span>View Happilex</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        @endif

                        @if (in_array(43,explode(',',\Auth::user()->permissions)) || in_array(44,explode(',',\Auth::user()->permissions)))
                        <li class=" ">
                            <a href="#store" title="Store" data-toggle="collapse">
                                <em class="icon-present"></em>
                                <span data-localize="sidebar.nav.STORE">Store</span>
                            </a>
                            <ul class="sidebar-nav sidebar-subnav collapse" id="store">
                                <li class="sidebar-subnav-header">Store</li>
                            @if (in_array(45,explode(',',\Auth::user()->permissions)))
                                <li class=" ">
                                    <a href="{{ url('add-store-product') }}" title="Add Product">
                                        <span>Add Product</span>
                                    </a>
                                </li>
                                @endif
                                @if (in_array(43,explode(',',\Auth::user()->permissions)))
                                <li class=" ">
                                    <a href="{{ url('view-store-products') }}" title="View Store Products">
                                        <span>View Products</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        @endif


                        @if (in_array(48,explode(',',\Auth::user()->permissions)))
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
                                    <a href="{{ url('site-pages') }}" title="Pages">
                                        <span>Pages</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="{{ url('site-setting') }}" title="Settings">
                                        <span>Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif


                        @if (in_array(49,explode(',',\Auth::user()->permissions)))
                        <li class=" ">
                            <a href="#advertisement" title="Advertisement" data-toggle="collapse">
                                <em class="icon-tag"></em>
                                <span data-localize="sidebar.nav.ADVERTISEMENT">Advertisement</span>
                            </a>
                            <ul class="sidebar-nav sidebar-subnav collapse" id="advertisement">
                                <li class="sidebar-subnav-header">Advertisement</li>
                                <li class=" ">
                                    <a href="{{ url('add-adv') }}" title="Add Advertisement">
                                        <span>Add Advert</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="{{ url('all-advs') }}" title="View Advertisement">
                                        <span>All adverts</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif


                        @if (in_array(52,explode(',',\Auth::user()->permissions)))
                        <li class="nav-heading">
                            <span data-localize="sidebar.heading.HEADER">News Letters</span>
                        </li>
                        <li class=" ">
                            <a href="#NewsLetters" title="NewsLetters" data-toggle="collapse">
                                <em class="icon-people"></em>
                                <span data-localize="sidebar.nav.NEWSLETTERS">News Letters</span>
                            </a>

                            <ul class="sidebar-nav sidebar-subnav collapse" id="NewsLetters">
                                <li class="sidebar-subnav-header">News Letters</li>
                                <li class=" ">
                                    <a href="{{ url('news-letters-subscribers') }}" title="Pages">
                                        <span>Subscribers</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        @if (in_array(50,explode(',',\Auth::user()->permissions)))
                        <li class="nav-heading">
                            <span data-localize="sidebar.heading.HEADER">User Management</span>
                        </li>
                        <li class=" ">
                            <a href="#Users" title="Users" data-toggle="collapse">
                                <em class="icon-people"></em>
                                <span data-localize="sidebar.nav.SITESETTINGS">Users</span>
                            </a>

                            <ul class="sidebar-nav sidebar-subnav collapse" id="Users">
                                <li class="sidebar-subnav-header">System User</li>
                                <li class=" ">
                                    <a href="{{ url('register') }}" title="Site Tabs">
                                        <span>Add User</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="{{ url('view-users') }}" title="Pages">
                                        <span>View User</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif


                    </ul><!-- END sidebar nav-->
                </nav>
            </div>
            <!-- END Sidebar (left)-->
        </aside>
        <!-- offsidebar-->
        <aside class="offsidebar d-none">
            <!-- START Off Sidebar (right)-->
            <nav>
                <div role="tabpanel">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" q role="tabpanel">
                            <div class="p-2">

                                <div class="p-2">
                                    <h4 class="text-muted text-thin">Layout</h4>
                                    <div class="clearfix">
                                        <p class="float-left">Fixed</p>
                                        <div class="float-right"><label class="switch"><input
                                                    id="chk-fixed" type="checkbox"
                                                    data-toggle-state="layout-fixed"><span></span></label>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <p class="float-left">Boxed</p>
                                        <div class="float-right"><label class="switch"><input
                                                    id="chk-boxed" type="checkbox"
                                                    data-toggle-state="layout-boxed"><span></span></label>
                                        </div>
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
                                        <div class="float-right"><label class="switch"><input
                                                    id="chk-float" type="checkbox"
                                                    data-toggle-state="aside-float"><span></span></label>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <p class="float-left">Hover</p>
                                        <div class="float-right"><label class="switch"><input
                                                    id="chk-hover" type="checkbox"
                                                    data-toggle-state="aside-hover"><span></span></label>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <p class="float-left">Show Scrollbar</p>
                                        <div class="float-right"><label class="switch"><input
                                                    id="chk-scroll" type="checkbox" data-toggle-state="show-scrollbar"
                                                    data-target=".sidebar"><span></span></label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </nav><!-- END Off Sidebar (right)-->
        </aside><!-- Main section-->

        @yield('content')

        <!-- Page footer-->
        <footer class="footer-container"><span>&copy; {{ date('Y') }} - DennisLaw News</span></footer>
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
    <!-- TAGS INPUT-->
    <script src="{{ url('vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.js') }}"></script>

    <script src="{{ url('vendor/sweetalert/dist/sweetalert.min.js') }}"></script>
    <!-- SELECT2-->
    <script src="{{ url('vendor/select2/dist/js/select2.full.js') }}"></script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- =============== APP SCRIPTS ===============-->
    <script src="{{ url('js/app.js') }}"></script>

    <script>
        function updateAlert(id, table, field, value) {
            swal({
                    title: "Are you sure?",
                    text: "Do you really want to do this?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    closeModal: false,
                })
                .then(willDelete => {
                    if (!willDelete) throw null;
                    return fetch(`{{ url('update-api') }}/` + table + `/` + id + `/` + field + `/` + value);
                })
                .then(results => {
                    return results.json();
                })
                .then((json) => {
                    if (json == id) {
                        swal("Poof! Action succesful!", {
                            icon: "success",
                        });
                    } else {
                        swal("Sorry, an error occured!", {
                            icon: "error",
                        });
                    }

                });
        }



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



        // $(function() {
        //     $('input[name="daterange"]').daterangepicker({
        //         opens: 'left'
        //     }, function(start, end, label) {
        //         console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
        //             .format('YYYY-MM-DD'));
        //     });
        // });
        $('.chosen-select').chosen();
        // $('.wysiwyg').wysiwyg();
    </script>
</body>

</html>
