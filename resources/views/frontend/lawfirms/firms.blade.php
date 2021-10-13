@extends('frontend.master')
@section('title')
    <title>Law Firms | DLN</title>
@endsection
@section('content')
    <link rel="stylesheet" href="{{ url('css/store.css') }}">
    <style>
        .best-selling .properties .properties-card .properties-caption .properties-footer .price span {
            font-weight: 400;
            color: #006ead;
            font-size: 15px;
        }

    </style>
    <main>
        <div class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <section class="our-client section-padding best-selling">
                            <div class="container">
                                <div class="row justify-content-between">
                                    <div class="col-xl-5 col-lg-5 col-md-12">
                                        <div class="section-tittle mb-40">
                                            <h2>Law Firms</h2>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-12">
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="tab-content" id="nav-tabContent">

                                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel"
                                        aria-labelledby="nav-one-tab">


                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-end pt-4"
                                                class="li: { list-style: none; }">
                                                {{ $data->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>

                                        <div class="row">
                                            @foreach ($data as $item)

                                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                                    <a href="{{ url('view-firms') }}/{{ $item->slug }}">
                                                        <div class="properties pb-30">
                                                            <div class="properties-card">
                                                                <div class="properties-img">
                                                                    <img src="{{ url('law_firms') }}/{{ $item->image }}"
                                                                        alt="" />
                                                                </div>
                                                                <div class="properties-caption properties-caption2">
                                                                    <h3>{{ $item->law_firm }}</h3>
                                                                    <p>
                                                                        <span class="badge badge-primary"
                                                                            style="color: white !important;">
                                                                            {{ $item->lawyer }}
                                                                        </span>
                                                                    </p>
                                                                    <div
                                                                        class="properties-footer d-flex justify-content-between align-items-center ">
                                                                        <div class="review">
                                                                            <p> Position: {{ $item->position }} </p>
                                                                            <br>
                                                                            <p> Year of Call: {{ $item->year_of_call }}
                                                                            </p>
                                                                            <br>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            @endforeach
                                        </div>


                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-end pt-4"
                                                class="li: { list-style: none; }">
                                                {{ $data->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>


                                    </div>

                                </div>

                            </div>


                        </section>

                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
