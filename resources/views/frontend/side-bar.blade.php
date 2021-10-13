<div class="col-lg-4">
    <div class="col-md-12">
        @if (count($recHappilex) > 0)
            <a href="{{ url('happilex/all') }}">
                <h5>
                    <span style="padding:4px 12px;background: #105f8d;color: #fff;  border-radius: 3px;">
                        Recent Happilex
                    </span>
                </h5>
            </a>

            <div class="justify-content-center col-12">
                @foreach ($recHappilex as $item)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('happilexes') }}/{{ $item->image }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">{{ $item->title }}</p>
                        </div>
                    </div>

                @endforeach
                <br>
            </div>
        @endif
        @if (count($latestNews) > 0)
            <h5>
                <span style="padding:4px 12px; margin: 5px; background: #105f8d;color: #fff; border-radius: 3px;">
                    Recent News
                </span>
            </h5>

            @foreach ($latestNews as $key => $item)
                @if ($key < 5)
                    <div class="col-12">
                        <div class="media" style="padding-bottom: 6px;">
                            <a href="{{ url('article') }}/{{ $item->slug }}">
                                <img class="mr-3" src="{{ url('news') }}/{{ $item->image }}" alt="IMG"
                                    style="max-width:120px !important">
                            </a>
                            <div class="media-body">
                                <a href="{{ url('article') }}/{{ $item->slug }}">
                                    {!! Str::substr($item->short_desc, 0, 100) !!}...
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif

    </div>

    <div class="section-tittle mb-40">
        <br>
        <h4>Follow Us</h4>
    </div>

    <div class="single-follow mb-45">
        <div class="single-box">
            @foreach ($setting->social as $key => $social)
            <div class="follow-us d-flex align-items-center">
                <a href="{{ $social }}"><i
                    class="fab fa-{{ $icons[$key] }}"></i></a>
                <div class="follow-count uppercase">
                    <span>{{$icons[$key]}}</span>
                    {{-- <p>Fans</p> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="news-poster d-none d-lg-block">
        <img src="{{ url('img/news/xnews_card.jpg.pagespeed.ic.5EdXWkQK-8.png') }}" alt="">
    </div>
</div>
