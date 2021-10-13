@extends('frontend.master')
@section('title')
    <title>Legal Works | DLN</title>
@endsection
@section('content')
<link rel="stylesheet" href="{{ url('css/listnav.css') }}">
<style>
    main a {
        color: #105f8d !important;
    }

    main a:hover {
        color: #105f8d !important;
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
                        <ul id="columnistList" style="padding: 10px">

                        @foreach ($data as $key=>$item)
                            <li style="padding: 5px;">
                                <a href="{{ url('legal-work') }}/{{str_replace(' ', '+', $key)}}">{{$key}} ({{count($item)}})</a>
                            </li>
                        @endforeach
                    </ul>
                    </div>
                        @include('frontend.side-bar')

                </div>
            </div>
        </div>

    </main>

@endsection
