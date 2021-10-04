@extends('frontend.master')
@section('content')
    <style>
        main a {
            color: #333;
        }
        main a:hover {
            color: #333;
            text-decoration: none;
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

                        <div class="about-right mb-90">
                            <div class="about-img">
                                <img src="assets/img/post/about_heor.jpg" alt="">
                            </div>
                            <div class="section-tittle mb-30 pt-30">
                               <h3 class="text-uppercase"><u>{{ $data->title }}</u></h3>
                            </div>
                            <div class="about-prea">
                                {!! $data->body !!}
                            </div>
                        </div>
                    </div>

                    @include('frontend.side-bar')
                </div>
            </div>
        </div>

    </main>
@endsection
