<div class="col-lg-4">
    <div class="col-md-12">
        <h3><span style="padding:6px 12px;background: #105f8d;color: #fff;">Recent News</span> </h3>

        @foreach ($latestNews as $key => $item)
            @if ($key < 5)
                <div class="col-12">
                    <div class="media" style="padding-bottom: 6px;">
                        <img class="mr-3" src="{{ url('news') }}/{{ $item->image }}" alt="IMG"
                            style="max-width:120px !important">
                        <div class="media-body">
                            <a href="{{ url('article') }}/{{ $item->slug }}">
                                {!! Str::substr($item->short_desc, 0, 100) !!}
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <div class="section-tittle mb-40">
        <h3>Follow Us</h3>
    </div>

    <div class="single-follow mb-45">
        <div class="single-box">
            <div class="follow-us d-flex align-items-center">
                <div class="follow-social">
                    <a href="#"><img src="{{ url('img/news/xicon-fb.png.pagespeed.ic.mSPzk0pV5B.png') }}" alt=""></a>
                </div>
                <div class="follow-count">
                    <span>8,045</span>
                    <p>Fans</p>
                </div>
            </div>
            <div class="follow-us d-flex align-items-center">
                <div class="follow-social">
                    <a href="#"><img src="{{ url('img/news/xicon-tw.png.pagespeed.ic.MsswRZpbim.png') }}" alt=""></a>
                </div>
                <div class="follow-count">
                    <span>8,045</span>
                    <p>Fans</p>
                </div>
            </div>
            <div class="follow-us d-flex align-items-center">
                <div class="follow-social">
                    <a href="#"><img src="{{ url('img/news/xicon-ins.png.pagespeed.ic.Y5RaQfaVo-.png') }}" alt=""></a>
                </div>
                <div class="follow-count">
                    <span>8,045</span>
                    <p>Fans</p>
                </div>
            </div>
            <div class="follow-us d-flex align-items-center">
                <div class="follow-social">
                    <a href="#"><img src="{{ url('img/news/xicon-yo.png.pagespeed.ic.XNQAiExtR8.png') }}" alt=""></a>
                </div>
                <div class="follow-count">
                    <span>8,045</span>
                    <p>Fans</p>
                </div>
            </div>
        </div>
    </div>

    <div class="news-poster d-none d-lg-block">
        <img src="{{ url('img/news/xnews_card.jpg.pagespeed.ic.5EdXWkQK-8.png') }}" alt="">
    </div>
</div>
