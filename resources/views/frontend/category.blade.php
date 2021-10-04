@extends('frontend.master')
@section('title')
    <title>{{ $subCategory->title }} News | DLN</title>
@endsection
@section('content')
    <style>
        main a {
            color: #105f8d !important;
        }

        main a:hover {
            color: #105f8d !important;
        }

    </style>
    <main>
        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-3 col-md-3">
                                <div class="section-tittle mb-30">
                                    <h3 class="text-uppercase">{{ $subCategory->title }} News</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                @if (count($news) > 0)
                                    <a href="{{ url('article') }}/{{ $news[0]->slug }}">
                                        <img src="{{ url('news') }}/{{ $news[0]->image }}" width="100%"
                                            style="margin-bottom: 15px;" alt="{{ $news[0]->title }}">
                                    </a>
                                    <p align='justify'>
                                        {!! Str::substr($news[0]->short_desc, 0, 300) !!}
                                    </p>
                                    <a href="{{ url('article') }}/{{ $news[0]->slug }}">Read More &raquo;</a>
                                @endif

                            </div>
                        </div>

                        <div class="row">
                            @if (count($news) > 1)
                                @foreach ($news as $item)
                                    <div class="col-md-6">
                                        <a href="{{ url('article') }}/{{ $item->slug }}">
                                            <img src="{{ url('news') }}/{{ $item->image }}" width="100%"
                                                style="margin-bottom: 15px;" alt="{{ $item->title }}">
                                        </a>
                                        <p align='justify'>
                                            {!! Str::substr($item->short_desc, 0, 100) !!}
                                        </p>
                                        <a href="{{ url('article') }}/{{ $item->slug }}">Read More &raquo;</a>

                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    @include('frontend.side-bar')
                </div>
            </div>
        </section>


        <div class="pagination-area pb-45 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="single-wrap d-flex justify-content-center">
                            <div class="col-12 d-flex justify-content-end pt-4" class="li: { list-style: none; }">
                                {{ $news->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
