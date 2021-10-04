@extends('frontend.master')
@section('title')
    <title>{{ '$data->title' }} | DLN</title>
@endsection
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-basic.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-glass.css" />



<style>
    .notedive {
        background: #f3f6f9;
        text-align: center;
        border: 0.5px solid rgb(95, 94, 94);
        padding-top: 30px;
        border-radius: 20px;
    }

    .title {
        background: #006eab;
        color: #f3f6f9;
        text-align: center;
        padding: 10px;
        font-size: 14px;
        line-height: 20px;
        margin-bottom: 20px;
    }

    @media(max-width:900px) {
        .caldive {
            margin: 20px;
        }

        .notedive {
            margin: 20px;
        }
    }

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


                            <div class="col-lg-6 caldiv">
                                <div id="color-calendar"></div>
                            </div>

                            <div class="col-lg-6 notedive">
                                <div class="col-xl-12 demo">
                                    <div class="white_card">
                                        <div class="white_card_header">
                                            <div class="box_header m-0">
                                                <div class="main-title">
                                                    <h3 class="m-0" style="text-align: center; color:#006eab;">
                                                        Today In Court</h3>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="white_card_body events-display">

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    @include('frontend.side-bar')
                </div>
                <br>
            </div>
        </div>

    </main>





    <script src="https://cdn.jsdelivr.net/npm/color-calendar/dist/bundle.min.js"></script>
    <script>
        var allevents = [
            @foreach ($data as $d )
            {
                start: '{{date('Y/m/d', strtotime($d->dairy_date))}}',
                end:  '{{date('Y/m/d', strtotime($d->dairy_date))}}',
                name: '{{ $d->title }}',
                desc: '{!! $d->description !!}',
            },
            @endforeach
                ];


        let mycalender = new Calendar({
            id: '#color-calendar',
            calendarSize: 'large',
            theme: 'glass',
            primaryColor: '#fd7e14',
            calendarSize: 'large',
            headerBackgroundColor: '#006eab',
            dateChanged: (currentDate, events) => {
                const events_display = document.querySelector('.events-display');
                let events_html = '';
                events.forEach(event => {
                    events_html += `
                                <p class="title">${event.name}</p>
                                <div class="Activity_timeline">
                                    <ul>
                                        <li>
                                            <div class="activity_bell"></div>
                                            <div class="timeLine_inner d-flex align-items-center">
                                                <div class="activity_wrap">
                                                    <p style="text-align: start;">${event.desc}</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>`
                });
                if (events_html) {
                    events_display.innerHTML = events_html;
                } else {
                    events_display.innerHTML = '<div class="no-events-text">No events on this day!</div>';
                }
            }
        });
        mycalender.addEventsData(allevents);
    </script>
@endsection
