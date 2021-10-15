@extends('backend.master')
@section('content')

        <section class="section-container">
            <!-- Page content-->
            <div class="content-wrapper">
                <div class="content-heading">
                    <div>Dashboard<small data-localize="dashboard.WELCOME"></small></div>
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <!-- START List group-->
                        <div class="list-group mb-3">
                            <div class="list-group-item">
                                <div class="d-flex align-items-center py-3">
                                    <div class="w-50 px-3">
                                        <p class="m-0 lead">{{$totalNews}}</p>
                                        <p class="m-0 text-sm">Total News</p>
                                    </div>
                                    <div class="w-50 px-3">
                                        <p class="m-0 lead">{{$newsThisMonth}}</p>
                                        <p class="m-0 text-sm">This Month</p>
                                    </div>

                                    <div class="w-50 px-3 text-center">
                                        <div data-sparkline="" data-bar-color="#23b7e5" data-height="60"
                                            data-bar-width="10" data-bar-spacing="6" data-chart-range-min="0"
                                            data-values="@foreach ($newsThisYear as $key=>$item)
                                            {{count($item)}},
                                            @endforeach"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex align-items-center py-3">
                                    <div class="w-50 px-3">
                                        <p class="m-0 lead">{{$totalDiary}}</p>
                                        <p class="m-0 text-sm">Total Court Dairies</p>
                                    </div>
                                    <div class="w-50 px-3">
                                        <p class="m-0 lead">{{$courtDiaryThisMonth}}</p>
                                        <p class="m-0 text-sm">This Month</p>
                                    </div>
                                    <div class="w-50 px-3 text-center">
                                        <div data-sparkline="" data-type="line" data-height="60" data-width="80%"
                                            data-line-width="2" data-line-color="#7266ba" data-chart-range-min="0"
                                            data-spot-color="#888" data-min-spot-color="#7266ba"
                                            data-max-spot-color="#7266ba" data-fill-color=""
                                            data-highlight-line-color="#fff" data-spot-radius="3"
                                            data-values="@foreach ($courtDiaryThisYear as $key=>$item)
                                            {{count($item)}},
                                            @endforeach" data-resize="true"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="d-flex align-items-center py-3">
                                    <div class="w-50 px-3">
                                        <p class="m-0 lead">{{$totalResources}}</p>
                                        <p class="m-0 text-sm">Total Resources</p>
                                    </div>
                                    <div class="w-50 px-3">
                                        <p class="m-0 lead">{{$courtResourcesThisMonth}}</p>
                                        <p class="m-0 text-sm">This Month</p>
                                    </div>

                                    <div class="w-50 px-3 text-center">
                                        <div data-sparkline="" data-bar-color="#23b7e5" data-height="60"
                                            data-bar-width="10" data-bar-spacing="6" data-chart-range-min="0"
                                            data-values="@foreach ($courtResourcesThisYear as $key=>$item)
                                            {{count($item)}},
                                            @endforeach"></div>
                                    </div>
                                </div>
                            </div>



                            <div class="list-group-item">
                                <div class="d-flex align-items-center py-3">
                                    <div class="w-50 px-3">
                                        <p class="m-0 lead">{{$totalFirms}}</p>
                                        <p class="m-0 text-sm">Total Law Firms</p>
                                    </div>
                                    <div class="w-50 px-3">
                                        <p class="m-0 lead">{{$firmsThisMonth}}</p>
                                        <p class="m-0 text-sm">This Month</p>
                                    </div>
                                    <div class="w-50 px-3 text-center">
                                        <div data-sparkline="" data-type="line" data-height="60" data-width="80%"
                                            data-line-width="2" data-line-color="#7266ba" data-chart-range-min="0"
                                            data-spot-color="#888" data-min-spot-color="#7266ba"
                                            data-max-spot-color="#7266ba" data-fill-color=""
                                            data-highlight-line-color="#fff" data-spot-radius="3"
                                            data-values="@foreach ($firmsThisYear as $key=>$item)
                                            {{count($item)}},
                                            @endforeach" data-resize="true"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="d-flex align-items-center py-3">
                                    <div class="w-50 px-3">
                                        <p class="m-0 lead">{{$totalResources}}</p>
                                        <p class="m-0 text-sm">Total Resources</p>
                                    </div>
                                    <div class="w-50 px-3">
                                        <p class="m-0 lead">{{$courtResourcesThisMonth}}</p>
                                        <p class="m-0 text-sm">This Month</p>
                                    </div>

                                    <div class="w-50 px-3 text-center">
                                        <div data-sparkline="" data-bar-color="#23b7e5" data-height="60"
                                            data-bar-width="10" data-bar-spacing="6" data-chart-range-min="0"
                                            data-values="@foreach ($courtResourcesThisYear as $key=>$item)
                                            {{count($item)}},
                                            @endforeach"></div>
                                    </div>
                                </div>
                            </div>






                            <div class="list-group-item">
                                <div class="d-flex align-items-center py-3">
                                    <div class="w-50 px-3">
                                        <p class="m-0 lead">67</p>
                                        <p class="m-0 text-sm">New followers</p>
                                    </div>
                                    <div class="w-50 px-3 text-center">
                                        <div class="d-flex align-items-center flex-wrap justify-content-center"><a
                                                href="dashboard_v2.html#" data-toggle="tooltip" title="Katie"><img
                                                    class="circle thumb24 mx-1" src="img/user/02.jpg"
                                                    alt="Follower"></a><a href="dashboard_v2.html#"
                                                data-toggle="tooltip" title="Cody"><img class="circle thumb24 mx-1"
                                                    src="img/user/01.jpg" alt="Follower"></a><a
                                                href="dashboard_v2.html#" data-toggle="tooltip" title="Tamara"><img
                                                    class="circle thumb24 mx-1" src="img/user/03.jpg"
                                                    alt="Follower"></a><a href="dashboard_v2.html#"
                                                data-toggle="tooltip" title="Gene"><img class="circle thumb24 mx-1"
                                                    src="img/user/04.jpg" alt="Follower"></a><a
                                                href="dashboard_v2.html#" data-toggle="tooltip" title="Marsha"><img
                                                    class="circle thumb24 mx-1" src="img/user/04.jpg"
                                                    alt="Follower"></a><a href="dashboard_v2.html#"
                                                data-toggle="tooltip" title="Robin"><img class="circle thumb24 mx-1"
                                                    src="img/user/09.jpg" alt="Follower"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END List group-->
                    </div>
                    <div class="col-xl-8">
                        <!-- START bar chart-->
                        <div class="card" id="cardChart3">
                            <div class="card-header">
                                <!-- START button group-->
                                <div class="float-right btn-group"><button
                                        class="dropdown-toggle dropdown-toggle-nocaret btn btn-secondary btn-sm"
                                        type="button" data-toggle="dropdown">Monthly</button>
                                    <div class="dropdown-menu dropdown-menu-right-forced fadeInLeft animated"
                                        role="menu"><a class="dropdown-item" href="dashboard_v2.html#">Daily</a><a
                                            class="dropdown-item" href="dashboard_v2.html#">Monthly</a><a
                                            class="dropdown-item" href="dashboard_v2.html#">Yearly</a></div>
                                </div><!-- END button group-->
                                <div class="card-title">Projects Hours</div>
                            </div>
                            <div class="card-wrapper">
                                <div class="card-body">
                                    <div class="chart-bar-stackedv2 flot-chart"></div>
                                </div>
                            </div>
                        </div><!-- END bar chart-->
                    </div>
                </div>
                <div class="unwrap my-3">
                    <!-- START chart-->
                    <div class="card" id="cardChart9">
                        <div class="card-header">
                            <!-- START button group-->
                            <div class="float-right btn-group"><button
                                    class="dropdown-toggle dropdown-toggle-nocaret btn btn-secondary btn-sm"
                                    type="button" data-toggle="dropdown">All time</button>
                                <div class="dropdown-menu dropdown-menu-right-forced fadeInLeft animated" role="menu">
                                    <a class="dropdown-item" href="dashboard_v2.html#">Daily</a><a
                                        class="dropdown-item" href="dashboard_v2.html#">Monthly</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item"
                                        href="dashboard_v2.html#">All time</a>
                                </div>
                            </div><!-- END button group-->
                            <div class="card-title">Overall progress</div>
                        </div>
                        <div class="card-wrapper">
                            <div class="card-body">
                                <div class="chart-splinev2 flot-chart"></div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-6 text-center">
                                        <p>Projects</p>
                                        <div class="h1">25</div>
                                    </div>
                                    <div class="col-md-3 col-6 text-center">
                                        <p>Teammates</p>
                                        <div class="h1">85</div>
                                    </div>
                                    <div class="col-md-3 col-6 text-center">
                                        <p>Hours</p>
                                        <div class="h1">380</div>
                                    </div>
                                    <div class="col-md-3 col-6 text-center">
                                        <p>Budget</p>
                                        <div class="h1 text-truncate">$ 10,000.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- END chart-->
                </div><!-- START radial charts-->
                <div class="row mb-3">
                    <div class="col-lg-3 col-6 text-center">
                        <p>Current Project</p>
                        <div class="text-center py-4">
                            <div class="easypie-chart easypie-chart-md" data-easypiechart="" data-percent="60"
                                data-animate="{duration: 800, enabled: true}" data-bar-color="#23b7e5"
                                data-track-Color="#edf2f6" data-scale-Color="false" data-line-width="2"
                                data-line-cap="round" data-size="130"><span>60%</span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <p>Current Progress</p>
                        <div class="text-center py-4">
                            <div class="easypie-chart easypie-chart-md" data-easypiechart="" data-percent="30"
                                data-animate="{duration: 800, enabled: true}" data-bar-color="#f532e5"
                                data-track-Color="#edf2f6" data-scale-Color="false" data-line-width="2"
                                data-line-cap="round" data-size="130"><span>30%</span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <p>Space Usage</p>
                        <div class="text-center py-4">
                            <div class="easypie-chart easypie-chart-md" data-easypiechart="" data-percent="50"
                                data-animate="{duration: 800, enabled: true}" data-bar-color="#7266ba"
                                data-track-Color="#edf2f6" data-scale-Color="false" data-line-width="2"
                                data-line-cap="round" data-size="130"><span>50%</span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <p>Interactions</p>
                        <div class="text-center py-4">
                            <div class="easypie-chart easypie-chart-md" data-easypiechart="" data-percent="75"
                                data-animate="{duration: 800, enabled: true}" data-bar-color="#ff902b"
                                data-track-Color="#edf2f6" data-scale-Color="false" data-line-width="2"
                                data-line-cap="round" data-size="130"><span>75%</span></div>
                        </div>
                    </div>
                </div><!-- START radial charts-->
                <!-- START Multiple List group-->
                <div class="list-group mb-3"><a class="list-group-item" href="dashboard_v2.html#">
                        <table class="wd-wide">
                            <tbody>
                                <tr>
                                    <td class="wd-xs">
                                        <div class="px-2"><img class="img-fluid rounded thumb64"
                                                src="img/dummy.png" alt=""></div>
                                    </td>
                                    <td>
                                        <div class="px-2">
                                            <h4 class="mb-2">Project A</h4><small
                                                class="text-muted">Vestibulum ante ipsum primis in faucibus
                                                orci</small>
                                        </div>
                                    </td>
                                    <td class="wd-sm d-none d-lg-table-cell">
                                        <div class="px-2">
                                            <p class="m-0">Last change</p><small class="text-muted">4
                                                weeks ago</small>
                                        </div>
                                    </td>
                                    <td class="wd-xs d-none d-lg-table-cell">
                                        <div class="px-2">
                                            <p class="m-0 text-muted"><em class="icon-people mr-2 fa-lg"></em>26</p>
                                        </div>
                                    </td>
                                    <td class="wd-xs d-none d-lg-table-cell">
                                        <div class="px-2">
                                            <p class="m-0 text-muted"><em class="icon-doc mr-2 fa-lg"></em>3500</p>
                                        </div>
                                    </td>
                                    <td class="wd-sm">
                                        <div class="px-2">
                                            <div class="progress-bar progress-xs bg-success" style="width: 80%"><span
                                                    class="sr-only">80%</span></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </a></div>
                <div class="list-group mb-3"><a class="list-group-item" href="dashboard_v2.html#">
                        <table class="wd-wide">
                            <tbody>
                                <tr>
                                    <td class="wd-xs">
                                        <div class="px-2"><img class="img-fluid rounded thumb64"
                                                src="img/dummy.png" alt=""></div>
                                    </td>
                                    <td>
                                        <div class="px-2">
                                            <h4 class="mb-2">Project X</h4><small
                                                class="text-muted">Vestibulum ante ipsum primis in faucibus
                                                orci</small>
                                        </div>
                                    </td>
                                    <td class="wd-sm d-none d-lg-table-cell">
                                        <div class="px-2">
                                            <p class="m-0">Last change</p><small
                                                class="text-muted">Today at 06:23 am</small>
                                        </div>
                                    </td>
                                    <td class="wd-xs d-none d-lg-table-cell">
                                        <div class="px-2">
                                            <p class="m-0 text-muted"><em class="icon-people mr-2 fa-lg"></em>3</p>
                                        </div>
                                    </td>
                                    <td class="wd-xs d-none d-lg-table-cell">
                                        <div class="px-2">
                                            <p class="m-0 text-muted"><em class="icon-doc mr-2 fa-lg"></em>150</p>
                                        </div>
                                    </td>
                                    <td class="wd-sm">
                                        <div class="px-2">
                                            <div class="progress-bar progress-xs bg-purple" style="width: 50%"><span
                                                    class="sr-only">50%</span></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </a></div>
                <div class="list-group mb-3"><a class="list-group-item" href="dashboard_v2.html#">
                        <table class="wd-wide">
                            <tbody>
                                <tr>
                                    <td class="wd-xs">
                                        <div class="px-2"><img class="img-fluid rounded thumb64"
                                                src="img/dummy.png" alt=""></div>
                                    </td>
                                    <td>
                                        <div class="px-2">
                                            <h4 class="mb-2">Project Z</h4><small
                                                class="text-muted">Vestibulum ante ipsum primis in faucibus
                                                orci</small>
                                        </div>
                                    </td>
                                    <td class="wd-sm d-none d-lg-table-cell">
                                        <div class="px-2">
                                            <p class="m-0">Last change</p><small
                                                class="text-muted">Yesterday at 10:20 pm</small>
                                        </div>
                                    </td>
                                    <td class="wd-xs d-none d-lg-table-cell">
                                        <div class="px-2">
                                            <p class="m-0 text-muted"><em class="icon-people mr-2 fa-lg"></em>15</p>
                                        </div>
                                    </td>
                                    <td class="wd-xs d-none d-lg-table-cell">
                                        <div class="px-2">
                                            <p class="m-0 text-muted"><em class="icon-doc mr-2 fa-lg"></em>480</p>
                                        </div>
                                    </td>
                                    <td class="wd-sm">
                                        <div class="px-2">
                                            <div class="progress-bar progress-xs bg-green" style="width: 20%"><span
                                                    class="sr-only">20%</span></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </a><!-- END dashboard main content-->
                </div><!-- END Multiple List group-->
            </div>
        </section>
@endsection
