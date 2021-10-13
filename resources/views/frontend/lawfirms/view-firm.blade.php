@extends('frontend.master')
@section('title')
<title>{{ $data->seo_title }} | DLN</title>
<meta name="description" content="{{ $data->seo_description }}">
<meta name="keywords" content="{{ $data->seo_keywords }}" />

<meta property="og:url" content="{{ url('view-firms') }}/{{ $data->slug }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $data->seo_title }}" />
<meta property="og:description" content="{{ $data->seo_description }}" />
<meta property="og:keywords" content="{{ $data->seo_keywords }}" />
<meta property="og:image" content="{{ url('law_firms') }}/{{ $data->image }}" />
<link rel="shortcut icon" type="image/x-icon" href="{{ url('law_firms') }}/{{ $data->image }}">

@endsection
@section('content')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0"
        nonce="HpWz1pQB"></script>
    <script>
        < script > window.twttr = (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0],
                t = window.twttr || {};
            if (d.getElementById(id)) return t;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);

            t._e = [];
            t.ready = function(f) {
                t._e.push(f);
            };

            return t;
        }(document, "script", "twitter-wjs"));
    </script>
    </script>
    <style>
        main a {
            color: #000000 !important;
        }

        main a:hover {
            color: #000000 !important;
        }

        .about-prea img {
            max-width: 100%;
        }

    </style>

    <main>

        <div class="about-area">
            <div class="container">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>

                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    @foreach ($trending as $key => $item)
                                        <div class="trending-animated">
                                            <li class="news-item">
                                                <a href="{{ url('article') }}/{{ $item->slug }}">
                                                    {{ $item->title }}
                                                </a>
                                            </li>
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="about-right mb-90">
                            <div class="about-img">
                                <img src="{{ url('law_firms') }}/{{ $data->image }}" alt="{{ $data->law_firm }}">
                            </div>
                            <div class="section-tittle mb-30 pt-30">
                                <h3>{{ $data->law_firm }}</h3>
                            </div>

                            <div class="about-prea">
                                {!! $data->about !!}
                                <p>Lawyer:  <strong>{{ $data->lawyer }} </strong></p>
                                <p>Position:  <strong>{{ $data->position }} </strong></p>
                                <p>Year of Call: <strong> {{ $data->year_of_call }} </strong></p>
                            </div>

                            <div class="social-share pt-30">
                                <div class="section-tittle">
                                    <h3 class="mr-20">Share:</h3>

                                    @include('frontend.inc.sharebtn')
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('frontend.side-bar')
                </div>
            </div>
        </div>

    </main>
@endsection
