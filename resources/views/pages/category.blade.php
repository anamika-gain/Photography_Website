@extends('frontend.master.app')
@section('content')
    @include('frontend.master.menu')
    <style>
        <!-- favicon
        -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png" />
    </style>
    <!-- scroll-content start -->
    <div id="js-scroll-content">
        <!-- js-animsition-overlay start -->
        <div class="js-animsition-overlay" data-animsition-overlay="true">
            <!-- main start -->
            <main class="main-content">
                <!-- page head start -->
                <section id="up" class="pos-rel hidden-box" data-scroll-section>
                    <div class="page-head-footer-overlay-fix" data-scroll data-scroll-repeat>
                        <!-- bg-parallax -->
                        <div class="bg-parallax" style="background-image:url({{ URL::to($category->main_image) }});"
                            data-scroll data-scroll-speed="-1.5"></div>

                        <!-- flex-min-height-100vh start -->
                        <div class="flex-min-height-100vh">
                            <div class="padding-top-bottom-120 container text-center after-preloader-anim">
                                <h2 class="headline-xxl headline-uppercase anim-chars-fadein" data-splitting>
                                    {{ $category->category_name }}
                                </h2>
                                <div data-scroll data-scroll-speed="-0.4" data-scroll-position="top">
                                    <div class="subhead-s subhead-uppercase anim-chars-blur" data-splitting>
                                        PHOTOGRAPHY
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- flex-min-height-100vh end -->

                        <!-- to top btn start -->
                        <a href="#down" class="scroll-to-btn to-down js-pointer-large" data-scroll-to>
                            <div class="scroll-to-down-box">
                                <span class="scroll-to-btn__arrow"></span>
                            </div>
                        </a>
                        <!-- to top btn end -->
                    </div>
                </section>
                <!-- page head end -->

                <!-- portfolio start -->
                <section id="down" class="section-bg-light" data-scroll-section>
                    <!-- padding-top-120 start -->
                    <div class="padding-top-120 padding-bottom-150">
                        <!-- title start -->
                        <div class="pos-rel">
                            <h2
                                class="title-offset big-head container full z-index-2 text-stroke-black pointer-none padding-top-30">
                                <span class="d-block" data-scroll data-scroll-speed="2"
                                    data-scroll-direction="horizontal" data-splitting>Projects</span>
                            </h2>
                        </div>
                        <!-- title end -->

                        <!-- js-isotope-grid-box start -->
                        <div class="js-isotope-grid-box container">
                            <!-- empty grid -->
                            <div class="empty-grid-1px-50-50-none js-isotope-grid-item"></div>
                            <div class="empty-grid-200px-50-50-none js-isotope-grid-item"></div>
                            @foreach ($projects as $project)
                                <!-- grid-item start -->
                                <div class="padding-top-90 grid-item-50-50-100 js-isotope-grid-item">
                                    <a href="project_02.html"
                                        class="grid-margin-box d-block js-pointer-large js-animsition-link" data-scroll
                                        data-scroll-speed="0.6">
                                        <!-- project img start -->
                                        <div class="hidden-box">
                                            <div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
                                                <img class="anim-opacity-scale" src="{{ asset($project->main_image) }}"
                                                    alt="Project">
                                            </div>
                                        </div>
                                        <!-- project img end -->

                                        <!-- project content start -->
                                        <div class="padding-top-bottom-20 pos-rel scrollanim-activate line-scrollanim-activate"
                                            data-scroll data-scroll-offset="30%">
                                            <div class="anim-fade-to-left d-block">
                                                <h3 class="headline-xxxs text-color-black">{{ $project->project_name }}
                                                </h3>
                                                <div class="d-flex flex-wrap flex-justify-between margin-top-10">
                                                    <span
                                                        class="subhead-xxs text-color-black subhead-uppercase margin-top-10">{{ $project->tag_line }}</span>
                                                    <span
                                                        class="subhead-xxs text-color-black subhead-uppercase margin-top-10">{{ $project->project_time }}</span>
                                                </div>
                                            </div>
                                            <div class="anim-line-bottom black"></div>
                                        </div>
                                        <!-- project content end -->
                                    </a>
                                </div>
                                <!-- grid-item end -->
                            @endforeach
                          

                            <!-- grid-item start -->
                            <div class="padding-top-90 grid-item-50-50-100 js-isotope-grid-item">
                                <a href="project_07.html"
                                    class="grid-margin-box d-block js-pointer-large js-animsition-link" data-scroll
                                    data-scroll-speed="1.2">
                                    <!-- project img start -->
                                    <div class="hidden-box">
                                        <div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
                                            <img class="anim-opacity-scale"
                                                src="{{ asset('public/frontend/assets/images/portfolio/project_05/5.jpg') }}"
                                                alt="Project">
                                        </div>
                                    </div>
                                    <!-- project img end -->

                                    <!-- project content start -->
                                    <div class="padding-top-bottom-20 pos-rel scrollanim-activate line-scrollanim-activate"
                                        data-scroll data-scroll-offset="30%">
                                        <div class="anim-fade-to-left d-block">
                                            <h3 class="headline-xxxs text-color-black">Black Bike</h3>
                                            <div class="d-flex flex-wrap flex-justify-between margin-top-10">
                                                <span
                                                    class="subhead-xxs text-color-black subhead-uppercase margin-top-10">Photoshoot</span>
                                                <span
                                                    class="subhead-xxs text-color-black subhead-uppercase margin-top-10">2020</span>
                                            </div>
                                        </div>
                                        <div class="anim-line-bottom black"></div>
                                    </div>
                                    <!-- project content end -->
                                </a>
                            </div>
                            <!-- grid-item end -->
                        </div>
                        <!-- js-isotope-grid-box end -->
                    </div>
                    <!-- padding-top-120 end -->
                </section>
                <!-- portfolio end -->

           

                <!-- section-bg-light end -->
            </main>
            <!-- main end -->

            <!-- next project start -->
            <section class="section-bg-dark" data-scroll-section>
                <div class="flex-min-height-100vh pos-rel" data-scroll data-scroll-speed="-4"
                    data-scroll-position="bottom">
                    <div class="width-100perc padding-top-bottom-120 pos-rel">
                        <a href="project_06.html" class="container small d-block js-pointer-large js-animsition-link">
                            <img src="{{ asset('public/frontend/assets/images/portfolio/project_05/5.jpg') }}"
                                alt="project" />
                        </a>
                        <div class="pos-abs pos-center-center width-100perc hidden-box text-color-mix-blend pointer-none">
                            <h2 class="marquee headline-xxxl headline-uppercase hidden-box" data-duration="10000"
                                data-gap="20">
                                Sneakers Sneakers Sneakers Sneakers Sneakers Sneakers Sneakers
                                Sneakers
                            </h2>
                        </div>
                    </div>

                    <!-- next-project-footer start -->
                    <div class="next-project-footer container">
                        <p class="copyright margin-right-30">
                            &copy; Copyright 2020 TUMAR. Template by
                            <a href="#" class="copyright__author js-pointer-small">Jinna Gik</a>
                        </p>
                        <!-- to top btn start -->
                        <a href="#up" class="scroll-to-btn js-pointer-large" data-scroll data-scroll-repeat data-scroll-to>
                            <span class="scroll-to-btn__arrow"></span>
                        </a>
                        <!-- to top btn end -->
                    </div>
                    <!-- next-project-footer end -->
                </div>
            </section>
            <!-- next project end -->
        </div>
        <!-- js-animsition-overlay end -->
    </div>
    <!-- scroll-content end -->
@endsection
