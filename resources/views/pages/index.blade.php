@extends('frontend.master.app')
@section('content')
    @include('frontend.master.menu')


    @php
    $category = DB::table('categories')
        ->where('status', 1)
        ->orderBy('id', 'desc')
        ->limit(5)
        ->get();

    @endphp
    <!-- scroll-content start -->
    <div id="content">
        <!-- js-animsition-overlay start -->
        <div class="js-animsition-overlay" data-animsition-overlay="true">
            <!-- main start -->
            <main class="main-content">
                <!-- portfolio start -->
                <section class="section-bg-dark js-fullscreen-slider" data-scroll-section>
                    <!-- swiper-wrapper start -->
                    <div class="swiper-wrapper">




                        <!-- swiper-slide start -->
                        @foreach ($category as $row)
                            <div class="swiper-slide">
                                <!-- background start -->
                                <div class="js-parallax-slide-bg">
                                    <div class="bg-img-cover height-100perc"
                                        style="background-image: url({{ URL::to($row->main_image) }});"> </div>
                                </div>
                                <!-- background end -->
                                <!-- title start -->
                                <div class="d-flex flex-center-center height-100perc pos-rel">
                                    <div class="container small text-center">
                                        <div class="subhead-s subhead-uppercase anim-chars-blur" data-splitting>
                                            Photoshoot
                                        </div>
                                        <h2 class="headline-xxl headline-uppercase">
                                            <a href="{{ url("category/{$row->id}") }}"
                                                class="anim-chars-fadein js-pointer-large js-animsition-link" data-splitting
                                                style=" font-family:'Nomark'">{{ $row->category_name }}</a>
                                        </h2>
                                    </div>
                                </div>
                                <!-- title end -->
                                <!-- btn start -->
                                <div class="fullscreen-slider-btn">
                                    <div class="anim-fade-to-left">
                                        <a href="{{ url("category/{$row->id}") }}"
                                            class="line-btn js-pointer-small js-animsition-link">See
                                            the case</a>
                                    </div>
                                </div>
                                <!-- btn end -->
                            </div>
                        @endforeach

                    </div>
                    <!-- swiper-wrapper end -->

                    <!-- swiper-button-prev start -->
                    <div class="swiper-button-prev-box after-preloader-anim">
                        <div class="anim-fade-to-left tr-delay-03">
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <!-- swiper-button-prev end -->
                    <!-- swiper-button-next start -->
                    <div class="swiper-button-next-box after-preloader-anim">
                        <div class="anim-fade-to-right tr-delay-03">
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                    <!-- swiper-button-next end -->

                    <!-- swiper-pagination start -->
                    <div class="pagination-box vertical-pagination after-preloader-anim">
                        <div class="anim-fade-to-top d-block tr-delay-06">
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <!-- swiper-pagination end -->
                </section>
                <!-- portfolio end -->
            </main>
            <!-- main end -->
        </div>
        <!-- js-animsition-overlay end -->
    </div>
    <!-- scroll-content end -->
@endsection
