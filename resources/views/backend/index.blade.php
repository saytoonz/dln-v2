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
                                    <p class="m-0 lead">{{ $totalNews }}</p>
                                    <p class="m-0 text-sm">Total News</p>
                                </div>
                                <div class="w-50 px-3">
                                    <p class="m-0 lead">{{ $newsThisMonth }}</p>
                                    <p class="m-0 text-sm">This Month</p>
                                </div>

                                <div class="w-50 px-3 text-center">
                                    <div data-sparkline="" data-bar-color="#23b7e5" data-height="60" data-bar-width="10"
                                        data-bar-spacing="6" data-chart-range-min="0" data-values="
                                                                           @foreach ($newsThisYear as $key=> $item)
                                        {{ count($item) }},
                                        @endforeach"></div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="d-flex align-items-center py-3">
                                <div class="w-50 px-3">
                                    <p class="m-0 lead">{{ $totalDiary }}</p>
                                    <p class="m-0 text-sm">Total Court Dairies</p>
                                </div>
                                <div class="w-50 px-3">
                                    <p class="m-0 lead">{{ $courtDiaryThisMonth }}</p>
                                    <p class="m-0 text-sm">This Month</p>
                                </div>
                                <div class="w-50 px-3 text-center">
                                    <div data-sparkline="" data-type="line" data-height="60" data-width="80%"
                                        data-line-width="2" data-line-color="#7266ba" data-chart-range-min="0"
                                        data-spot-color="#888" data-min-spot-color="#7266ba" data-max-spot-color="#7266ba"
                                        data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3"
                                        data-values="        @foreach ($courtDiaryThisYear as
                                        $key=> $item)
                                        {{ count($item) }},
                                        @endforeach" data-resize="true"></div>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item">
                            <div class="d-flex align-items-center py-3">
                                <div class="w-50 px-3">
                                    <p class="m-0 lead">{{ $totalResources }}</p>
                                    <p class="m-0 text-sm">Total Resources</p>
                                </div>
                                <div class="w-50 px-3">
                                    <p class="m-0 lead">{{ $courtResourcesThisMonth }}</p>
                                    <p class="m-0 text-sm">This Month</p>
                                </div>

                                <div class="w-50 px-3 text-center">
                                    <div data-sparkline="" data-bar-color="#23b7e5" data-height="60" data-bar-width="10"
                                        data-bar-spacing="6" data-chart-range-min="0" data-values="
                                                                           @foreach ($courtResourcesThisYear as $key=> $item)
                                        {{ count($item) }},
                                        @endforeach"></div>
                                </div>
                            </div>
                        </div>



                        <div class="list-group-item">
                            <div class="d-flex align-items-center py-3">
                                <div class="w-50 px-3">
                                    <p class="m-0 lead">{{ $totalFirms }}</p>
                                    <p class="m-0 text-sm">Total Law Firms</p>
                                </div>
                                <div class="w-50 px-3">
                                    <p class="m-0 lead">{{ $firmsThisMonth }}</p>
                                    <p class="m-0 text-sm">This Month</p>
                                </div>
                                <div class="w-50 px-3 text-center">
                                    <div data-sparkline="" data-type="line" data-height="60" data-width="80%"
                                        data-line-width="2" data-line-color="#7266ba" data-chart-range-min="0"
                                        data-spot-color="#888" data-min-spot-color="#7266ba" data-max-spot-color="#7266ba"
                                        data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3"
                                        data-values="        @foreach ($firmsThisYear as
                                        $key=> $item)
                                        {{ count($item) }},
                                        @endforeach" data-resize="true"></div>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item">
                            <div class="d-flex align-items-center py-3">
                                <div class="w-50 px-3">
                                    <p class="m-0 lead">{{ $totalLegalWorks }}</p>
                                    <p class="m-0 text-sm">Total Legal Works</p>
                                </div>
                                <div class="w-50 px-3">
                                    <p class="m-0 lead">{{ $legalWorksThisMonth }}</p>
                                    <p class="m-0 text-sm">This Month</p>
                                </div>

                                <div class="w-50 px-3 text-center">
                                    <div data-sparkline="" data-bar-color="#23b7e5" data-height="60" data-bar-width="10"
                                        data-bar-spacing="6" data-chart-range-min="0" data-values="
                                                                           @foreach ($legalWorksThisYear as $key=> $item)
                                        {{ count($item) }},
                                        @endforeach"></div>
                                </div>
                            </div>
                        </div>




                        <div class="list-group-item">
                            <div class="d-flex align-items-center py-3">
                                <div class="w-50 px-3">
                                    <p class="m-0 lead">{{ $totalHappilex }}</p>
                                    <p class="m-0 text-sm">Total Happilex</p>
                                </div>
                                <div class="w-50 px-3">
                                    <p class="m-0 lead">{{ $happilexThisMonth }}</p>
                                    <p class="m-0 text-sm">This Month</p>
                                </div>
                                <div class="w-50 px-3 text-center">
                                    <div data-sparkline="" data-type="line" data-height="60" data-width="80%"
                                        data-line-width="2" data-line-color="#7266ba" data-chart-range-min="0"
                                        data-spot-color="#888" data-min-spot-color="#7266ba" data-max-spot-color="#7266ba"
                                        data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3"
                                        data-values="        @foreach ($happilexThisYear as
                                        $key=> $item)
                                        {{ count($item) }},
                                        @endforeach" data-resize="true"></div>
                                </div>
                            </div>
                        </div>

                    </div><!-- END List group-->
                </div>
                <div class="col-xl-8">
                    <!-- START bar chart-->
                    <div class="card" id="cardChart3">
                        <div class="card-header">
                            <div class="card-title">Views This Year</div>
                        </div>
                        <div class="card-wrapper">
                            <div class="card-body">
                                {{-- <div class="chart-bar-stacked flot-chart"></div> --}}

                                <canvas id="myViewsChart"></canvas>
                            </div>


                            <div class="row">
                                <div class="col-xl-6">
                                    <!-- START messages and activity-->
                                    <div class="card card-default">
                                        <div class="card-header">
                                            <div class="card-title">Visitors by Browser</div>
                                        </div><!-- START list group-->
                                        <div class="list-group">

                                            @foreach ($browsers as $key => $item)

                                                <div class="list-group-item">
                                                    <div class="media">
                                                        <div class="align-self-start mr-2">
                                                            <span class="fa-stack">
                                                                <em class="fa fa-circle fa-stack-2x text-purple">
                                                                </em>

                                                                <em
                                                                    class="fas fa fa-{{ strtolower($item->browser) }} fa-stack-1x text-white">
                                                                </em>
                                                            </span>
                                                        </div>
                                                        <div class="media-body text-truncate">
                                                            <p class="mb-1"><a class="text-purple m-0"
                                                                    href="dashboard_v3.html#">{{ $item->browser }}</a>
                                                            </p>
                                                            <p class="m-0"><small><a
                                                                        href="dashboard_v3.html#">Number
                                                                        {{ $key + 1 }} in the list</a></small></p>
                                                        </div>
                                                        <div class="ml-auto"><small
                                                                class="text-muted ml-2">{{ $item->counts }}</small></div>
                                                    </div>
                                                </div>
                                            @endforeach


                                        </div>

                                    </div><!-- END messages and activity-->
                                </div>
                                <div class="col-6">
                                    <div class="col-12">
                                        <p class="mb-3 py-2">Visitors by Device</p>
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div><!-- END dashboard sidebar-->
                            </div>
                        </div>
                    </div><!-- END bar chart-->
                </div>
            </div>
        </div>

        <div class="row p-5">
            <div class="col-xl-3">
                <!-- START card-->
                <div class="card border-0">
                    <div class="row row-flush">
                        <div
                            class="col-4 bg-info text-center d-flex align-items-center justify-content-center rounded-left">
                            <em class="fa fa-users fa-2x"></em>
                        </div>
                        <div class="col-8">
                            <div class="card-body text-center">
                                <h4 class="mt-0">{{ $analytics->visits }}</h4>
                                <p class="mb-0 text-muted">VISITORS</p>
                            </div>
                        </div>
                    </div>
                </div><!-- END card-->
            </div>
            <div class="col-xl-3">
                <!-- START card-->
                <div class="card border-0">
                    <div class="row row-flush">
                        <div
                            class="col-4 bg-danger text-center d-flex align-items-center justify-content-center rounded-left">
                            <em class="fa fa-eye fa-2x"></em>
                        </div>
                        <div class="col-8">
                            <div class="card-body text-center">
                                <h4 class="mt-0">{{ $analytics->views }}</h4>
                                <p class="mb-0 text-muted">ARTICLE VIEWS</p>
                            </div>
                        </div>
                    </div>
                </div><!-- END card-->
            </div>
            <div class="col-xl-3">
                <!-- START card-->
                <div class="card border-0">
                    <div class="row row-flush">
                        <div
                            class="col-4 bg-inverse text-center d-flex align-items-center justify-content-center rounded-left">
                            <em class="fas fa-thumbs-up fa-2x"></em>
                        </div>
                        <div class="col-8">
                            <div class="card-body text-center">
                                <h4 class="mt-0">{{ $analytics->likes }}</h4>
                                <p class="mb-0 text-muted">LIKES</p>
                            </div>
                        </div>
                    </div>
                </div><!-- END card-->
            </div>
            <div class="col-xl-3">
                <!-- START card-->
                <div class="card border-0">
                    <div class="row row-flush">
                        <div
                            class="col-4 bg-green text-center d-flex align-items-center justify-content-center rounded-left">
                            <em class="fa fa-thumbs-down fa-2x"></em>
                        </div>
                        <div class="col-8">
                            <div class="card-body text-center">
                                <h4 class="mt-0">{{ $analytics->dislikes }}</h4>
                                <p class="mb-0 text-muted">DISLIKES</p>
                            </div>
                        </div>
                    </div>
                </div><!-- END card-->
            </div>
        </div>
        </div>
    </section>

    <script src="{{ url('vendor/chart.js/dist/Chart.js') }}"></script>
    <script>
        var context = document.getElementById('myViewsChart').getContext('2d');
        const DATA_COUNT = 12;

        const dataSet = {
            labels: ['Jan', 'Feb', 'Mar', 'April', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
                {
                    label: 'Total News views',
                    data: [
                        @foreach ($newsViews as $key => $data)
                            {{ $data }},
                        @endforeach
                    ],
                    backgroundColor: 'rgb(255, 99, 132)',
                },
                {
                    label: 'Total Happilex views',
                    data: [
                        @foreach ($hapViews as $key => $data)
                            {{ $data }},
                        @endforeach
                    ],
                    backgroundColor: 'rgb(54, 162, 235)',
                },
                {
                    label: 'Total Opinion views',
                    data: [
                        @foreach ($opinionsViews as $key => $data)
                            {{ $data }},
                        @endforeach
                    ],
                    backgroundColor: 'rgb(75, 192, 192)',
                },
                {
                    label: 'Total Legal Work views',
                    data: [
                        @foreach ($legalWorksViews as $key => $data)
                            {{ $data }},
                        @endforeach
                    ],
                    backgroundColor: 'rgb(255, 159, 64)',
                },

            ]
        };
        const configuration = {
            type: 'bar',
            data: dataSet,
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Chart.js Bar Chart - Stacked'
                    },
                },
                responsive: true,
                scales: {
                    x: {
                        stacked: true,
                    },
                    y: {
                        stacked: true
                    }
                }
            }
        };
        new Chart(context, configuration);
    </script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        const data = {
            labels: [
                @foreach ($deviceType as $type)
                    '{{ $type->device_type }}',
                @endforeach
            ],
            datasets: [{
                label: 'Devices of visitors',
                data: [
                    @foreach ($deviceType as $type)
                        '{{ $type->counts }}',
                    @endforeach
                ],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(128, 0, 0)',
                    'rgb(84, 84, 84)'
                ],
                hoverOffset: 4
            }]
        };
        const config = {
            type: 'doughnut',
            data: data,
        };
        var myChart = new Chart(ctx, config);
    </script>




@endsection
