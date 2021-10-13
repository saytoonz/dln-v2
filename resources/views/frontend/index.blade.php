@extends('frontend.master')
@section('title')
    <title>Home | DLN</title>
@endsection
@section('content')
    <style>
        main a {
            color: #000000 !important;
        }

        main a:hover {
            color: #000000 !important;
        }

    </style>
    <main>

        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Trending now</strong>
                                <div class="trending-animated">
                                    <ul id="js-news" class="js-hidden">
                                        @foreach ($trending as $key => $item)
                                            <li class="news-item">
                                                <a href="{{ url('article') }}/{{ $item->slug }}">
                                                    {{ $item->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            @if ($featured)
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="{{ url('news') }}/{{ $featured->image }}"
                                            alt="{{ $featured->title }}">
                                        <div class="trend-top-cap">
                                            <span>Featured</span>
                                            <h2><a href="{{ url('article') }}/{{ $featured->slug }}"
                                                    style="color: #fff !important;">
                                                    {{ $featured->title }}</a></h2>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if (count($latestNews) > 0)
                                <div class="trending-bottom">
                                    <div class="row">
                                        @for ($i = 0; $i < (count($latestNews) > 3 ? 3 : count($latestNews)); $i++)
                                            <div class="col-lg-4">
                                                <div class="single-bottom mb-35">
                                                    <div class="trend-bottom-img mb-30">
                                                        <img src="{{ url('news') }}/{{ $latestNews[$i]->image }}"
                                                            alt="{!! Str::substr($latestNews[$i]->title, 0, 300) !!}">
                                                    </div>
                                                    <div class="trend-bottom-cap">
                                                        <span
                                                            class="color2">{{ date('d M, Y', strtotime($latestNews[$i]->created_at)) }}</span>
                                                        <h4>
                                                            <h4><a
                                                                    href="{{ url('article') }}/{{ $latestNews[$i]->slug }}">{!! Str::substr($latestNews[$i]->title, 0, 300) !!}</a>
                                                            </h4>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>

                            @endif
                        </div>
                        @if (count($latestNews) > 3)
                            <div class="col-lg-4">
                                @for ($i = 3; $i < (count($latestNews) > 8 ? 8 : count($latestNews)); $i++)

                                    <div class="trand-right-single d-flex">
                                        <div class="trand-right-img" style="width: 40%;">
                                            <img style="width: 100%;"
                                                src="{{ url('news') }}/{{ $latestNews[$i]->image }}"
                                                alt="{!! Str::substr($latestNews[$i]->title, 0, 300) !!}">
                                        </div>
                                        <div class="trand-right-cap">
                                            <span
                                                class="color3">{{ date('d M, Y', strtotime($latestNews[$i]->created_at)) }}</span>
                                            <h4><a
                                                    href="{{ url('article') }}/{{ $latestNews[$i]->slug }}">{!! Str::substr($latestNews[$i]->title, 0, 300) !!}</a>
                                            </h4>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>


        <!-- SECOND SECTION -->

        <section class="bg0 p-t-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8">
                        @if (count($latestNews) > 0)
                            <div class="p-b-20">
                                <div class="p-b-20">
                                    <div class="row p-t-35">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm">
                                                    <h3><a href="{{ url('general-news') }}/courts">Court News</a></h3>
                                                </div>
                                            </div>
                                        </div>


                                        @for ($i = 0; $i < (count($court) > 6 ? 6 : count($court)); $i++)

                                            <div class="col-6">
                                                <div class="section-top-border">
                                                    <div class="media">
                                                        <img class="mr-3"
                                                            src="{{ url('news') }}/{{ $court[$i]->image }}" alt="IMG"
                                                            style="max-width:120px !important">
                                                        <div class="media-body">
                                                            <a href="{{ url('article') }}/{{ $court[$i]->slug }}">
                                                                {!! Str::substr($court[$i]->short_desc, 0, 100) !!}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor

                                    </div>
                                </div>

                            </div>
                        @endif



                    </div>
                    <div class="col-lg-4">
                        <div class="col-md-12">
                            @if (count($recHappilex) > 0)
                                <a href="{{ url('happilex/all') }}">
                                    <h5>
                                        <span
                                            style="padding:4px 12px;background: #105f8d;color: #fff;  border-radius: 3px;">
                                            Recent Happilex
                                        </span>
                                    </h5>
                                </a>

                                <div class="justify-content-center col-12">
                                    @foreach ($recHappilex as $item)
                                        <div class="card" style="width: 18rem;">
                                            <img class="card-img-top"
                                                src="{{ url('happilexes') }}/{{ $item->image }}" alt="Card image cap">
                                            <div class="card-body">
                                                <p class="card-text">{{ $item->title }}</p>
                                            </div>
                                        </div>

                                    @endforeach
                                    <br>
                                </div>
                            @endif

                            @if ($sidebarTopAds)
                                <div class="news-poster d-none d-lg-block">
                                    <a href="{{$sidebarTopAds->url}}" target="_blank">
                                    <img src="{{ url('advertisement') }}/{{$sidebarTopAds->image}}" alt="{{$sidebarTopAds->title}}" title="{{ $sidebarTopAds->title }}"
                                        style="width:100%"></a>
                                </div>
                            @endif
                            <br>
                            <section class="newsletter">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="content">
                                                @if (Session::has('message'))
                                                    <div class="alert alert-success alert-dismissible fade show"
                                                        role="alert">
                                                        <button class="close" type="button" data-dismiss="alert"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span></button>
                                                        {{ Session('message') }}
                                                    </div>
                                                @endif
                                                <h6>SUBSCRIBE TO OUR NEWSLETTER</h6>
                                                <form method="post" action="{{ url('join-news-letter') }}">
                                                    @csrf
                                                    <input type="hidden" name="tbl"
                                                        value="{{ encrypt('news_letters') }}">
                                                    <div class="input-group">
                                                        <input type="email" name="email" class="form-control"
                                                            placeholder="Enter your email">
                                                        <span class="input-group-btn">
                                                            <button class="button" type="submit">
                                                                <i class="fa fa-paper-plane"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>


                    </div>


                    {{-- @include('frontend.side-bar') --}}

                </div>
            </div>
        </section>





        @if (count($videos) > 0)
            <div class="youtube-area video-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="video-items-active">

                                @foreach ($videos as $key => $video)
                                    <div class="video-items text-center">
                                        <iframe src="{{ $video->url }}" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="video-info">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="video-caption">
                                    <div class="top-caption">
                                        <span class="color1">Politics</span>
                                    </div>
                                    <div class="bottom-caption">
                                        <h2>Welcome To The Best Model Winner Contest At Look of the year</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum
                                            dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit
                                            sed do eiusmod ipsum dolor sit lorem ipsum dolor sit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testmonial-nav text-center">

                                    @foreach ($videos as $key => $video)
                                        <div class="single-video">
                                            <iframe src="{{ $video->url }}" frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                            <div class="video-intro">
                                                <h4>{{ $video->title }}</h4>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-3 col-md-3">
                                <div class="section-tittle mb-30">
                                    <h3 id="catId">International</h3>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="properties__button">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-africa-tab" data-toggle="tab"
                                                href="#nav-africa" role="tab" aria-controls="nav-africa"
                                                aria-selected="true">Afica</a>
                                            <a class="nav-item nav-link" id="nav-europe-tab" data-toggle="tab"
                                                href="#nav-europe" role="tab" aria-controls="nav-europe"
                                                aria-selected="false">Europe</a>
                                            <a class="nav-item nav-link" id="nav-us-tab" data-toggle="tab" href="#nav-us"
                                                role="tab" aria-controls="nav-us" aria-selected="false">US</a>
                                            <a class="nav-item nav-link" id="nav-middle-east" data-toggle="tab"
                                                href="#nav-nav-middle-east" role="tab" aria-controls="nav-middle-east"
                                                aria-selected="false">Middle East</a>
                                            <a class="nav-item nav-link" id="nav-uk-tab" data-toggle="tab" href="#nav-uk"
                                                role="tab" aria-controls="nav-uk" aria-selected="false">Others</a>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-africa" role="tabpanel"
                                        aria-labelledby="nav-africa-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">

                                                @foreach ($africa as $item)
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="{{ url('news') }}/{{ $item->image }}"
                                                                    alt="IMG" />
                                                            </div>
                                                            <div class="what-cap">
                                                                <span
                                                                    class="color1">{{ date('d M, Y', strtotime($item->updated_at)) }}</span>
                                                                <h4>
                                                                    <a href="{{ url('article') }}/{{ $item->slug }}">
                                                                        {!! Str::substr($item->title, 0, 100) !!}
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-europe" role="tabpanel"
                                        aria-labelledby="nav-europe-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">

                                                @foreach ($europe as $item)
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="{{ url('news') }}/{{ $item->image }}"
                                                                    alt="IMG" />
                                                            </div>
                                                            <div class="what-cap">
                                                                <span
                                                                    class="color1">{{ date('d M, Y', strtotime($item->updated_at)) }}</span>
                                                                <h4>
                                                                    <a
                                                                        href="{{ url('article') }}/{{ $item->slug }}">{!! Str::substr($item->title, 0, 100) !!}</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach


                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-us" role="tabpanel" aria-labelledby="nav-us-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">

                                                @foreach ($us as $item)
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="{{ url('news') }}/{{ $item->image }}"
                                                                    alt="IMG" />
                                                            </div>
                                                            <div class="what-cap">
                                                                <span
                                                                    class="color1">{{ date('d M, Y', strtotime($item->updated_at)) }}</span>
                                                                <h4>
                                                                    <a
                                                                        href="{{ url('article') }}/{{ $item->slug }}">{!! Str::substr($item->title, 0, 100) !!}</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach


                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-nav-middle-east" role="tabpanel"
                                        aria-labelledby="nav-middle-east">
                                        <div class="whats-news-caption">
                                            <div class="row">

                                                @foreach ($middleEast as $item)
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="{{ url('news') }}/{{ $item->image }}"
                                                                    alt="IMG" />
                                                            </div>
                                                            <div class="what-cap">
                                                                <span
                                                                    class="color1">{{ date('d M, Y', strtotime($item->updated_at)) }}</span>
                                                                <h4>
                                                                    <a
                                                                        href="{{ url('article') }}/{{ $item->slug }}">{!! Str::substr($item->title, 0, 100) !!}</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-uk" role="tabpanel" aria-labelledby="nav-uk-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">

                                                @foreach ($others as $item)
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="{{ url('news') }}/{{ $item->image }}"
                                                                    alt="IMG" />
                                                            </div>
                                                            <div class="what-cap">
                                                                <span
                                                                    class="color1">{{ date('d M, Y', strtotime($item->updated_at)) }}</span>
                                                                <h4>
                                                                    <a
                                                                        href="{{ url('article') }}/{{ $item->slug }}">{!! Str::substr($item->title, 0, 100) !!}</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @if (count($happilex) > 0)
                            <div class="weekly2-news-area weekly2-pading gray-bg">
                                <div class="container">
                                    <div class="weekly2-wrapper">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-tittle mb-30">
                                                    <a href="{{ url('happilex/all') }}">
                                                        <h3 id="catId">Happilex</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 d-flex">
                                                @foreach ($happilex as $item)
                                                    <div class="card" style="width: 18rem;">
                                                        <img class="card-img-top"
                                                            src="{{ url('happilexes') }}/{{ $item->image }}"
                                                            alt="Card image cap">
                                                        <div class="card-body">
                                                            <a href="{{ url('view-happilex') }}/{{ $item->slug }}">
                                                                <p class="card-text">
                                                                    {{ Str::substr($item->title, 0, 100) }}</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (count($justices) > 0)
                            <div class="recent-articles">
                                <div class="container">
                                    <div class="recent-wrapper">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-tittle mb-30">
                                                    <a href="{{ url('supreme-justices') }}">
                                                        <h3 id="catId">Justices</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 d-flex">
                                                @foreach ($justices as $item)
                                                    <div class="card" style="width: 18rem;">
                                                        <img class="card-img-top"
                                                            src="{{ url('justices') }}/{{ $item->image }}"
                                                            alt="{{ $item->name }}">
                                                        <div class="card-body">
                                                            <p class="card-text">
                                                                {{ Str::substr($item->description, 0, 100) }}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    @include('frontend.side-bar')
                </div>
            </div>
        </section>
    </main>

    {{-- @stop --}}
@endsection
