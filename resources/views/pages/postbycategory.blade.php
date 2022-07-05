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
                                <h2 class="headline-xxl headline-uppercase anim-chars-fadein" data-splitting
                                    style="font-family: 'Nomark'">
                                    {{ $category->category_name }}
                                </h2>
                                <div data-scroll data-scroll-speed="-0.4" data-scroll-position="top">
                                    <div class="subhead-s subhead-uppercase anim-chars-blur" data-splitting
                                        style="font-family: 'Garet_Book'">
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
                @foreach ($projects as $project)
                    @php
                        $posts = DB::table('posts')
                            ->where('project_id', '=', $project->id)
                            ->where('posts.status', 1)
                            ->orderBy('sequence', 'asc')
                            ->get();
                    @endphp
                    <!-- portfolio start -->
                    {{-- <section id="down" class="section-bg-light" data-scroll-section>
                        <!-- padding-top-120 start -->
                        <div class="padding-top-120 padding-bottom-150">
                            <!-- title start -->
                            <div class="pos-rel">
                                <h2
                                    class="title-offset big-head container full z-index-2 text-stroke-black pointer-none padding-top-30">
                                    <span class="d-block" data-scroll data-scroll-speed="2"
                                        data-scroll-direction="horizontal" data-splitting
                                        style="font-family: 'Nomark';font-weight: 580;">Projects</span>
                                </h2>
                            </div>
                            <!-- title end -->

                            <!-- js-isotope-grid-box start -->
                            <div class="js-isotope-grid-box container">
                                <!-- empty grid -->
                                <div class="empty-grid-1px-50-50-none js-isotope-grid-item"></div>
                                <div class="empty-grid-200px-50-50-none js-isotope-grid-item"></div>


                                <!-- grid-item start -->
                                <div class="padding-top-90 grid-item-50-50-100 js-isotope-grid-item">
                                    <a href="{{ url("/project/{$project->id}") }}"
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
                                                <h3 class="headline-xxxs text-color-black"
                                                    style="font-family: 'Garet-Book'">{{ $project->project_name }}
                                                </h3>
                                                <div class="d-flex flex-wrap flex-justify-between margin-top-10">
                                                    <span
                                                        class="subhead-xxs text-color-black subhead-uppercase margin-top-10">{{ $project->tag_line }}</span>
                                                    <span @php
                                                        $tmpValue = date_format(date_create($project->project_time), 'dS,F,Y');
                                                    @endphp
                                                        class="subhead-xxs text-color-black subhead-uppercase margin-top-10">{{ $tmpValue }}</span>
                                                </div>
                                            </div>
                                            <div class="anim-line-bottom black"></div>
                                        </div>
                                        <!-- project content end -->
                                    </a>
                                </div>
                                <!-- grid-item end -->




                                <!-- grid-item end -->

                                <!-- padding-top-120 end -->
                    </section> --}}
                    <!-- portfolio end -->

                    <section id="down" class="section-bg-light" data-scroll-section>
                        <!-- padding-top-bottom-120 start -->
                        <div class="padding-top-bottom-0">
                            <!-- marquee start -->
                            {{-- <div class="marquee headline-xl text-color-black hidden-box" data-duration="10000" data-gap="20"
                                style="font-family: 'Garet-Book'">

                                <span class="text-stroke-black"
                                    style="font-family: 'Garet-Book'">{{ $project->rolling_text }}</span> /
                                {{ $project->rolling_text }} / <span class="text-stroke-black"
                                    style="font-family: 'Garet-Book'">{{ $project->rolling_text }}</span>
                                {{ $project->rolling_text }}
                                <span class="text-stroke-black" style="font-family: 'Garet-Book'"></span>
                            </div> --}}
                            <!-- marquee end -->
                            <!-- container start -->
                            {{-- <div class="container big padding-top-10">
                                <!-- flex-container start -->
                                <div class="flex-container container small padding-top-10">
                                    <!-- column start -->
                                    <div class="four-columns column-100-999 padding-top-10">
                                        <div class="column-r-margin-20-999">
                                            <h3 class="headline-xxs text-color-black anim-split-lines" data-scroll
                                                data-scroll-offset="20%">
                                                Project info</h3>
                                        </div>
                                    </div>
                                    <!-- column end -->
                                    <!-- column start -->
                                    <div class="eight-columns column-100-999 padding-top-20 padding-bottom-20">
                                        <p class="body-text-m text-color-6d6d6d anim-split-lines" data-scroll
                                            data-scroll-offset="20%">
                                            {{ $project->project_info }}</p>
                                    </div>
                                    <!-- column end -->
                                </div>
                                <!-- flex-container end -->
                            </div> --}}
                            <!-- container end -->
                @endforeach

                @foreach ($posts as $post)
                    @php
                        $view_post = DB::table('posts')
                            ->where('id', '=', $post->id)
                            ->increment('views');
                    @endphp
                    <!-- padding-top-60 start -->
                    <div class="padding-top-0">
                        <!-- flex-container start -->
                        <div class="flex-container margin-left-right-0">
                            @if ($post->post_type == 'potrait')
                                <!-- column start -->
                                <div class="six-columns padding-top-0">
                                    <acurology-PDnw5MhJyKI-unsplash href="assets/images/portfolio/project_05/IMG_0527bw.jpg"
                                        class="column-l-r-margin-20 d-block hidden-box js-pointer-zoom js-photo-popup">
                                        <div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
                                            <img class="anim-opacity-scale"
                                                src="{{ asset('public/media/post/' . $post->image_one) }}"
                                                alt="project image" />
                                        </div>
                                    </acurology-PDnw5MhJyKI-unsplash>
                                </div>
                                <!-- column end -->
                                <!-- column start -->
                                <div class="six-columns padding-top-0">
                                    <a href="assets/images/portfolio/project_05/IMG_7878bw.jpg"
                                        class="column-l-r-margin-20 d-block hidden-box js-pointer-zoom js-photo-popup">
                                        <div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
                                            <img class="anim-opacity-scale"
                                                src="{{ asset('public/media/post/' . $post->image_two) }}"
                                                alt="project image" />
                                        </div>
                                    </a>
                                </div>
                                <!-- column end -->
                            @elseif ($post->post_type == 'landscape')
                                <!-- column start -->
                                <div class="twelve-columns padding-top-0">
                                    <a href="assets/images/portfolio/project_05/IMG_1833.jpg"
                                        class="column-l-r-margin-20 d-block hidden-box js-pointer-zoom js-photo-popup">
                                        <div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
                                            <img class="anim-opacity-scale"
                                                src="{{ asset('public/media/post/' . $post->image_one) }}"
                                                alt="project image" />
                                        </div>
                                    </a>
                                </div>
                                <!-- column end -->

                        </div>
                        <!-- flex-container end -->
                    </div>
                    <!-- padding-top-60 end -->
                @elseif ($post->post_type == 'text')
                    <!-- container start -->
                    <div class="container big padding-top-60 padding-bottom-40">
                        <div class="padding-top-60">
                            <div class="scrollanim-activate" data-scroll data-scroll-offset="30%">
                                <h2 class="headline-xxs text-color-black anim-split-lines"
                                    style="font-family: 'Garet-Book'">
                                    {{ $post->post_name }}
                                </h2>
                                <p class="body-text-s text-color-black margin-top-20 anim-split-lines">
                                    {!! $post->text !!}
                                </p>
                            </div>
                        </div>
                @endif
                <!-- container end -->
        </div>
        @endforeach
        </section>

        <!-- section-bg-light end -->
        </main>
        <!-- main end -->

        <!-- next project start -->
        <section class="section-bg-dark" data-scroll-section>
            <div class="flex-min-height-100vh pos-rel" data-scroll data-scroll-speed="-4" data-scroll-position="bottom">
                <div class="width-100perc padding-top-bottom-120 pos-rel">
                    <a href="{{ url("/category/{$next_category->id}") }}"
                        class="container small d-block js-pointer-large js-animsition-link">
                        <img src="{{ asset($next_category->main_image) }}" alt="project" />
                    </a>
                    <div class="pos-abs pos-center-center width-100perc hidden-box text-color-mix-blend pointer-none">
                        <h2 class="marquee headline-xxxl headline-uppercase hidden-box" data-duration="10000" data-gap="20"
                            style="font-family: 'Nomark'">
                            {{ $next_category->tag_line }}
                            {{ $next_category->tag_line }} {{ $next_category->tag_line }}
                            {{ $next_category->tag_line }}
                        </h2>
                    </div>
                </div>

                <!-- next-project-footer start -->
                <div class="next-project-footer container">
                    <p class="copyright margin-right-30">
                        &copy; Copyright 2021 by
                        <a href="#" class="copyright__author js-pointer-small">DRAWHOUSE.</a>
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
