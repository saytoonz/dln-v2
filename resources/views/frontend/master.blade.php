<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('title')
    <title>Dennislaw News </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />



    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/favicon.ico') }}">

    <link rel="stylesheet"
        href="{{ url('css/A.bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.mi') }}" />
    <link rel="stylesheet"
        href="{{ url('css/A.style.css%2bresponsive.css%2cMcc.eF4rHpdAaB.css.pagespeed.cf.Cme7bce2dn.css') }}" />

    <link rel="stylesheet"
        href="{{ url('css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min') }}" />
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <style>
        #search_output{
            position: absolute;
            width: 100%;
            height: auto;
            max-height: 50vh;
            overflow: hidden;
            overflow-y: scroll;
            padding: 10px;
            box-sizing: border-box;
            background: #fff;
            top: 100%;
            left: 0;
            z-index: 20;
            border: 3px solid #105f8d;
            display: none;
        }
        .search-result{
            list-style: none;
        }
        .search-result li a{
            /* padding: 0 0 0 5px; */
            display: block;
            color: #333;
        }
        .search-result li:last-child a{
            padding-bottom: 0px;
        }
    </style>
</head>

<body>



    <header>

        <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><img src="{{ url('img/icon/xheader_icon1.png.pagespeed.ic.-4tN99ZtbH.png') }}"
                                                alt="">34ºc, Sunny </li>
                                        <li><img src="{{ url('img/icon/xheader_icon1.png.pagespeed.ic.-4tN99ZtbH.png') }}"
                                                alt="">{{ date('l M   d, Y') }}</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                    @foreach ($setting->social as $key=>$social)
                                    <li><a href="{{$social}}"><i class="fab fa-{{$icons[$key]}}"></i></a></li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-mid d-none d-md-block">
                    <div class="container">
                        <div class="row d-flex align-items-center">

                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="/">
                                        @if ($setting->image)
                                            <img src="{{ url('settings') }}/{{ $setting->image }}" width="200"
                                                alt="DLN">
                                        @endif

                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="{{ url('img/hero/xheader_card.jpg.pagespeed.ic.50jhqtxwaN.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">

                                <div class="sticky-logo">
                                    <a href="/">
                                        @if ($setting->image)
                                            <img src="{{ url('settings') }}/{{ $setting->image }}" width="120"
                                                alt="DLN" style="margin-top: 20 px;">
                                        @endif
                                    </a>
                                </div>

                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            @foreach ($categories as $category)
                                                <li>
                                                    <a href="#" class="text-sentencecase">{{ $category->title }}</a>
                                                    @if (count($category->subCats)>0)
                                                    <ul class="submenu">
                                                        @foreach ($category->subCats as $item)
                                                            <li><a href="{{url('')}}/{{$item->slug}}">{{$item->title}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                    @endif
                                                </li>
                                            @endforeach

                                            {{-- <li><a href="#">General News</a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">Latest</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Supreme Court</a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">International</a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">Element</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                    <li><a href="details.html">Categori Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="category">Chambers</a></li>
                                            <li><a href="about.html">Opinions/Features</a></li>
                                            <li><a href="latest_news.html">Tech</a></li>
                                            <li><a href="contact.html">Hapilex</a></li> --}}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        {{-- <form action="#"> --}}
                                            <input type="text" placeholder="Search" id="search_content" onkeyup="searchContent()">

                                        {{-- </form> --}}
                                    </div>
                                </div>
                                    <div id="search_output" class="col-12"></div>
                            </div>

                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- Header --}}


    @yield('content')


    {{-- Footer --}}
    <footer>
        <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">

                                <div class="footer-logo">
                                    <a href="/">
                                        @if ($setting->footer_image)
                                            <img src="{{ url('settings') }}/{{ $setting->footer_image }}"
                                                width="200" alt="DLN" style="margin-top: 10px;">
                                        @endif
                                    </a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>
                                            @if ($setting->about)
                                                {{ $setting->about }}
                                            @endif
                                        </p>
                                    </div>
                                </div>

                                <div class="footer-social">
                                    @foreach ($setting->social as $key => $social)
                                     <a href="{{$social}}  "><i class="fab fa-{{$icons[$key]}}"></i></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <p>Heaven fruitful doesn't over les idays appear creeping</p>

                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email"
                                                placeholder="Email Address" class="placeholder hide-on-focus"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img
                                                        src="{{ url('img/logo/xform-iocn.png.pagespeed.ic.0DvTTXDOa2.png') }}"
                                                        alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p>
                                    Copyright &copy;
                                    {{ date('Y') }}
                                    All rights reserved | Dennislaw News
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>
                                    <li><a href="#">Store</a></li>
                                    @foreach ($pages as $page)
                                        <li>
                                            <a href="{{ url('page') }}/{{ $page->slug }}">
                                                {{ $page->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>


    <script src="{{ url('js/vendor/modernizr-3.5.0.min.js') }}"></script>

    <script src="{{ url('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js%2bbootstrap.min.js%2bjquery.slicknav.min.js.pagespeed.jc.epBjwZ89Tg.js') }}">
    </script>
    <script>
        eval(mod_pagespeed_MYwjFiBhoh);
    </script>

    <script>
        eval(mod_pagespeed_8dMeJ$fKf0);
    </script>

    <script src="{{ url('js/owl.carousel.min.js%2bslick.min.js.pagespeed.jc.C9lwCMouga.js') }}"></script>
    <script>
        eval(mod_pagespeed_WVz9W0_PJE);
    </script>

    <script src="{{ url('js/gijgo.min.js') }}"></script>

    <script
        src="{{ url('js/wow.min.js%2banimated.headline.js%2bjquery.magnific-popup.js%2bjquery.ticker.js%2bsite.js%2bjquery.scrollUp.min.js%2bjquery.nice-select.min.js%2bjquery') }}">
    </script>
    <script>
        eval(mod_pagespeed_Nax9iaH80E);
    </script>
    <script>
        eval(mod_pagespeed_DpT5oROG0V);
    </script>

    <script>
        eval(mod_pagespeed_r$QfEExast);
    </script>
    <script>
        eval(mod_pagespeed_IUuHpUiSV1);
    </script>

    <script>
        eval(mod_pagespeed_I8FZK1Iy_n);
    </script>
    <script>
        eval(mod_pagespeed_$aJx4wnzwS);
    </script>
    <script>
        eval(mod_pagespeed_gAQaQdO285);
    </script>

    <script>
        eval(mod_pagespeed_wg1t4mIVJJ);
    </script>
    <script
        src="{{ url('js/jquery.form.js%2bjquery.validate.min.js%2bmail-script.js%2bjquery.ajaxchimp.min.js%2bplugins.js%2bmain.js.pagespeed.jc.YiS43bJnCg.js') }}">
    </script>
    <script>
        eval(mod_pagespeed_4WKIvRsmuU);
    </script>
    <script>
        eval(mod_pagespeed_1DarRkbL2Z);
    </script>
    <script>
        eval(mod_pagespeed_ii9L4qqqqd);
    </script>

    <script>
        eval(mod_pagespeed_pZZk9$_GbN);
    </script>
    <script>
        eval(mod_pagespeed_EZFCf6D9t2);
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"6895a5433eb103ee","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.1","si":10}'>
    </script>

    <script>
       function searchContent() {
            var text = $('#search_content').val();
            if(text.length < 1){
                 $('#search_output').hide();
                return false;
            }else{
                $.ajax({
                    type: 'get',
                    url: '{{url('search-content')}}',
                    data: {text:text},
                    success: function (res) {
                        $('#search_output').show();
                        $('#search_output').html(res);
                    }
                });
            }
        }
        searchContent()
    </script>
</body>

</html>
