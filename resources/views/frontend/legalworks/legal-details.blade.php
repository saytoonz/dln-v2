@extends('frontend.master')
@section('title')
    <title>{{ $data->seo_title }} | DLN</title>
    <meta name="description" content="{{ $data->seo_description }}">
    <meta name="keywords" content="{{ $data->seo_keywords }}" />

    <meta property="og:url" content="{{ url('legal') }}/{{ $data->id }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $data->seo_title }}" />
    <meta property="og:description" content="{{ $data->seo_description }}" />
    <meta property="og:keywords" content="{{ $data->seo_keywords }}" />
    <meta property="og:image" content="{{ url('legal_works') }}/{{ $data->image }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('legal_works') }}/{{ $data->image }}">

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

                        @if (Session::has('flash-like'))
                            <div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
                                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                {{ Session('flash-like') }}
                            </div>
                        @endif
                        <div class="flex-wr-s-s p-b-40" style="color: rgb(88, 87, 87) !important;">
                            <span class="f1-s-3 cl8 m-r-15">
                                by {{ $data->author }}
                                <span class="m-rl-3"> - </span>
                                <span>
                                    {{ date('d M, Y', strtotime($data->created_at)) }}
                                </span>
                            </span>
                            &nbsp;
                            <span class="f1-s-3 cl8 m-r-15">
                                <i class="fa fa-eye"></i> {{ $data->views + 1 }}
                                @if ($data->views != 0)
                                    views
                                @else
                                    view
                                @endif

                            </span>
                            &nbsp;
                            <span class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
                                <i class="fa fa-comment"></i> {{ count($comments) }}
                                @if (count($comments) < 1)
                                    comment
                                @else
                                    comments
                                @endif
                            </span>
                            &nbsp;
                            <span class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
                                <i class="fa fa-thumbs-up"></i> {{ $data->likes }}
                                @if ($data->likes < 1)
                                    like
                                @else
                                    likes
                                @endif

                            </span>
                            &nbsp;
                            <span class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
                                <i class="fa fa-thumbs-down"></i> {{ $data->dislikes }}
                                @if ($data->dislikes < 1)
                                    dislike
                                @else
                                    dislikes
                                @endif
                            </span>
                        </div>



                        <div class="about-right mb-90">
                            <div class="about-img">
                                <img src="{{ url('legal_works') }}/{{ $data->image }}" alt="{{ $data->title }}">
                            </div>
                            <div class="section-tittle mb-30 pt-30">
                                <h3>{{ $data->title }}</h3>
                            </div>


                            <div class="about-prea">
                                {!! $data->news_body !!}
                            </div>

                            <div>
                                <br>
                                <br>
                                <a href="{{ url('add-legal_works-like') }}/{{ $data->id }}">
                                    <button type="submit" class="button button-contactForm boxed-btn">
                                        <i class="fa fa-thumbs-up"></i>
                                        Like
                                    </button>
                                </a>
                                &nbsp;
                                <a href="{{ url('add-legal_works-dislike') }}/{{ $data->id }}">
                                    <button class="btn-danger button  boxed-btn">
                                        <i class="fa fa-thumbs-down"></i>
                                        Dislike
                                    </button>
                                </a>
                            </div>

                            <div class="social-share pt-30">
                                <div class="section-tittle">
                                    <h3 class="mr-20">Share:</h3>

                                    @include('frontend.inc.sharebtn')
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8">
                                @if (Session::has('message'))
                                    <div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
                                        <button class="close" type="button" data-dismiss="alert"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        {{ Session('message') }}
                                    </div>
                                @endif
                                <form class="form-contact contact_form mb-80" action="{{ url('add-comment') }}"
                                    method="post" id="contactForm" novalidate>
                                    @csrf
                                    <input type="hidden" name="news_id" value="{{ $data->id }}">
                                    <input type="hidden" name="tbl" value="{{ encrypt('legal_work_comments') }}">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control w-100 error" name="message" id="message"
                                                    cols="30" rows="9" onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Enter Message'"
                                                    placeholder="Enter Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control error" name="name" id="name" type="text"
                                                    onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Enter your name'"
                                                    placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control error" name="email" id="email" type="email"
                                                    onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <h4 class="f1-l-4 cl3 p-b-12">
                            Comments
                        </h4>
                        <ul class="list-group">
                            @if (count($comments) < 1)
                                <li>
                                    There are no comments.
                                </li>
                            @else
                                @foreach ($comments as $item)
                                    <li style="padding-top: 10px; padding-bottom: 10px; color: #333;">
                                        <br>
                                        <h6>{{ $item->name }}</h6>
                                        {!! $item->message !!}
                                        <br>
                                        <br>
                                        {{ $item->created_at }}
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                        <br>
                        <br>
                    </div>
                    @include('frontend.side-bar')
                </div>
            </div>
        </div>

    </main>
@endsection
