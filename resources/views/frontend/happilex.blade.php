@extends('frontend.master')
@section('content')
    <link rel="stylesheet" href="{{ url('css/store.css') }}">

    <main>
        <div class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <section class="our-client section-padding best-selling">
                            <div class="container">
                                <div class="row justify-content-between">
                                    <div class="col-xl-5 col-lg-5 col-md-12">
                                        <div class="section-tittle mb-40">
                                            <h2>{{ $title }}</h2>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-12">
                                        <div class="nav-button mb-40">
                                            <nav>
                                                <div class="nav nav-tabs bg-white" id="nav-tab" role="tablist">


                                                    <a class="nav-link @if (!$useIsSelected)  bg-light text-secondary @else  bg-primary text-white @endif"" href="
                                                        {{ url('store') }}/all">All</a>



                                                    @foreach ($storeCats as $cat)
                                                        <a class="nav-link  @if ($cat->isSelected)  bg-light text-secondary @else  bg-primary text-white @endif"
                                                            href="{{ url('store') }}/{{ $cat->slug }}">{{ $cat->title }}
                                                            <span
                                                                class="badge badge-primary">{{ $cat->totalItems }}</span></a>
                                                    @endforeach


                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="tab-content" id="nav-tabContent">

                                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel"
                                        aria-labelledby="nav-one-tab">


                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-end pt-4"
                                                class="li: { list-style: none; }">
                                                {{ $products->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>

                                        <div class="row">
                                            @foreach ($products as $item)

                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                                    <div class="properties pb-30">
                                                        <div class="properties-card">
                                                            <div class="properties-img">
                                                                <img src="{{ url('store_products') }}/{{ $item->image }}"
                                                                    alt="" />
                                                            </div>
                                                            <div class="properties-caption properties-caption2">
                                                                <h3>{{ $item->title }}</h3>
                                                                <p>{{ $item->bio }}</p>
                                                                <div
                                                                    class="properties-footer d-flex justify-content-between align-items-center ">
                                                                    <div class="review">
                                                                        <p>{{ $item->categ }}</p>
                                                                        <div class="price">
                                                                            <span>GH&#8373; {{ $item->price }}</span>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            @endforeach
                                        </div>


                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-end pt-4"
                                                class="li: { list-style: none; }">
                                                {{ $products->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>


                                    </div>

                                </div>

                            </div>


                        </section>

                    </div>

                </div>
            </div>
        </div>

    </main>
@endsection
