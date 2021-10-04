@extends('frontend.master')
@section('title')
    <title>{{ '$data->title' }} | DLN</title>
@endsection
@section('content')

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
                        <div class="row">
                                @foreach ($data as $item)
                                    <div class="col-md-6">
                                            <img src="{{ url('justices') }}/{{ $item->image }}" width="100%"
                                                style="margin-bottom: 15px;" alt="{{ $item->title }}">
                                        <p align='justify'>
                                            {!! Str::substr($item->description, 0, 100) !!}
                                        </p>
                                        <a href="{{ url('article') }}/{{ $item->slug }}">Read More &raquo;</a>

                                    </div>
                                @endforeach
                        </div>
                    </div>
                    @include('frontend.side-bar')
                </div>
                <br>
            </div>
        </div>

    </main>
@endsection
