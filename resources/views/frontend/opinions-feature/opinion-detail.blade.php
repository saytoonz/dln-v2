@extends('frontend.master')
@section('title')
    <title>{{ $data->title }} | DLN</title>
@endsection
@section('content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0" nonce="HpWz1pQB"></script>
<script>
    <script>window.twttr = (function(d, s, id) {
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
}(document, "script", "twitter-wjs"));</script>
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
                                <img src="{{ url('opinions') }}/{{ $data->image }}" alt="{{ $data->title }}">
                            </div>
                            <div class="section-tittle mb-30 pt-30">
                                <h3>{{ $data->title }}</h3>
                            </div>


                            <div class="about-prea">
                                {!! $data->body !!}
                            </div>

                            <div>
                                <br>
                                <br>
                                <a href="{{url('add-opinion-like')}}/{{ $data->id }}">
                                    <button type="submit" class="button button-contactForm boxed-btn">
                                        <i class="fa fa-thumbs-up"></i>
                                        Like
                                    </button>
                                </a>
                                &nbsp;
                                <a href="{{url('add-opinion-dislike')}}/{{$data->id}}">
                                <button class="btn-danger button  boxed-btn">
                                    <i class="fa fa-thumbs-down"></i>
                                    Dislike
                                </button>
                                </a>
                            </div>

                            <div class="social-share pt-30">
                                <div class="section-tittle">
                                    <h3 class="mr-20">Share:</h3>

                                    <ul>
                                        <li>
                                            <div class="fb-share-button" data-href="{{url('article')}}/{{$data->slug}}" data-layout="button" data-size="large">
                                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('article')}}/{{$data->slug}}" class="fb-xfbml-parse-ignore">
                                                    <img
                                                    src="{{ url('img/news/xicon-fb.png.pagespeed.ic.mSPzk0pV5B.png') }}"
                                                    alt="">
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="twitter-share-button" href="https://twitter.com/intent/tweet" data-size="large">
                                                <img src="{{ url('img/news/xicon-tw.png.pagespeed.ic.MsswRZpbim.png') }}" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://chillyfacts.com/create-linkedin-share-button-on-website-webpages&title=Create LinkedIn Share button on Website Webpages&summary=chillyfacts.com&source=Chillyfacts" onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
                                                <img src="http://chillyfacts.com/wp-content/uploads/2017/06/LinkedIN.gif" alt="" width="54" height="20" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Whatsapp
                                                <img src="{{ url('img/news/xicon-yo.png.pagespeed.ic.XNQAiExtR8.png') }}" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Email
                                                <img src="{{ url('img/news/xicon-yo.png.pagespeed.ic.XNQAiExtR8.png') }}" alt="">
                                            </a>
                                        </li>
                                    </ul>
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
