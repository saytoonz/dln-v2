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
        <section class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="content">
                            @if (Session::has('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button class="close" type="button" data-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    {{ Session('message') }}
                                </div>
                            @endif
                            <h6>SUBSCRIBE TO OUR NEWSLETTER</h6>
                            <form method="post" action="{{ url('join-news-letter') }}">
                                @csrf
                                <input type="hidden" name="tbl" value="{{ encrypt('news_letters') }}">
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

        <br>
        <br>
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
                    <a href="{{ $social }}" target="_blank"><i class="fab fa-{{ $icons[$key] }}"></i></a>
                    <a href="{{ $social }}" target="_blank">
                        <div class="follow-count uppercase">
                            <span>{{ $icons[$key] }}</span>
                            {{-- <p>Fans</p> --}}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    @if ($sidebarBottomAds)
        <div class="news-poster d-none d-lg-block">
            <a href="{{ $sidebarBottomAds->url }}" target="_blank">
                <img src="{{ url('advertisement') }}/{{ $sidebarBottomAds->image }}"
                    alt="{{ $sidebarBottomAds->title }}" title="{{ $sidebarBottomAds->title }}"
                    style="width:100%"></a>
        </div>
    @endif
</div>
