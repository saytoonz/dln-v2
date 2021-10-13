@extends('frontend.master')
@section('title')
    <title>Resources | DLN</title>
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

        .myaccordion .btn {
            width: 100%;
            font-weight: normal;
            color: rgba(0, 0, 0, .8);
            background: #105f8d !important;
            padding: 0;
            letter-spacing: 0;
        }

        .btn::before {
            background: transparent;
        }

        li,
        ul {
            margin: 0;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            list-style-type: circle;
        }

        li {
            list-style: circle;
            list-style-position: outside;
            list-style-image: none;
            list-style-type: circle;
        }

        .accordhead {
            background: #006eab;
        }

        .accordhead :hover {
            text-decoration: none #fff !important;
        }

        .accordhead p {
            color: #fff !important;
            font-weight: 500;
            font-size: 18px;
        }

        .accbtn :hover {
            text-decoration: none #fff !important;
        }

        .accordhead span {
            margin-left: 5px;
        }

        .accordbody li,
        .accordbody a {
            color: #006eab !important;
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



                            <div id="accordion" class="myaccordion w-100" aria-multiselectable="false">
                                @foreach ($data as $key => $item)

                                    <div class="card">
                                        <div class="card-header p-0 accordhead" id="heading-{{ $item[0]->id }}">
                                            <h2 class="mb-0 accbtn">
                                                <button href="#collapse{{ $item[0]->id }}"
                                                    class="d-flex py-4 px-4 align-items-center
                                                    justify-content-between btn btn-primary"
                                                    data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                                    aria-controls="collapse{{ $item[0]->id }}">
                                                    <p class="mb-0">
                                                        {{ $key }}<span>({{ count($item) }})</span></p>
                                                    <i class="fa" aria-hidden="true"></i>
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="collapse" id="collapse{{ $item[0]->id }}" role="tabpanel"
                                            aria-labelledby="heading-{{ $item[0]->id }}0">
                                            <div class="card-body py-5 px-4 accordbody">
                                                <ul style="padding-left: 20px;">
                                                    @foreach ($item as $key => $it)
                                                        <li style="padding: 5px;">
                                                            <a href="{{ url('resources') }}/{{ $it->image }}" target="_blank">
                                                                {!! $it->title !!}
                                                            </a>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>

                        </div>


                    </div>
                    @include('frontend.side-bar')
                </div>
                <br>
            </div>
        </div>

    </main>
@endsection
