@extends('frontend.master.app')
@section('content')
    @include('frontend.master.menu')

    <div id="js-scroll-content">
        <!-- js-animsition-overlay start -->
        <div class="js-animsition-overlay" data-animsition-overlay="true">
            <main class="main-content">
                <!-- main start -->
                <!-- page head start -->
                <section id="up" class="pos-rel hidden-box" data-scroll-section>
                    <div class="page-head-footer-overlay-fix" data-scroll data-scroll-repeat>
                        <!-- bg-parallax -->
                        <div class="bg-parallax" style="background-image:url({{ URL::to($project->main_image) }});"
                            data-scroll data-scroll-speed="-1.5"></div>

                        <!-- flex-min-height-100vh start -->
                        <div class="flex-min-height-100vh">
                            <div class="padding-top-bottom-120 container text-center after-preloader-anim">
                                <h2 class="headline-xxl headline-uppercase anim-chars-fadein" data-splitting>
                                    {{ $project->project_name }}
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
                <!-- section-bg-dark start -->
                <section id="down" class="section-bg-dark" data-scroll-section>
                    <!-- padding-top-bottom-120 start -->
                    <div class="padding-top-bottom-120">
                        <!-- marquee start -->
                        <div class="marquee headline-xl hidden-box" data-duration="10000" data-gap="20">

                            <span class="text-stroke-white">UX Design</span> / Identity /
                            Marketing / <span class="text-stroke-white">UX Design</span> /
                            Identity / Marketing /
                            <span class="text-stroke-white"></span> /
                        </div>
                        <!-- marquee end -->

                        <!-- container start -->
                        <div class="container padding-top-120">
                            <!-- flex-container start -->
                            <div class="flex-container padding-top-70 padding-bottom-90 pos-rel">
                                <!-- anim-line-top -->

                                <!-- column start -->
                                <div class="four-columns padding-top-20">
                                    <div class="column-r-margin-20 scrollanim-activate" data-scroll
                                        data-scroll-offset="20%">
                                        <h3 class="headline-xxxs anim-fade-to-left">
                                            Project info
                                        </h3>
                                    </div>
                                </div>
                                <!-- column end -->
                                <!-- column start -->
                                <div class="eight-columns padding-top-20">
                                    <div class="scrollanim-activate" data-scroll data-scroll-offset="20%">
                                        <p class="body-text-m text-color-dadada anim-fade-to-left tr-delay-01">
                                            {{ $project->project_info }}
                                        </p>
                                    </div>
                                </div>


                                <!-- anim-line-bottom -->

                            </div>
                            <!-- flex-container end -->
                        </div>
                        <!-- container end -->



                        <!-- padding-top-60 start -->
                        <div class="padding-top-60">
                            <!-- flex-container start -->
                            <div class="flex-container margin-left-right-20">
                                <!-- column start -->
                                <div class="six-columns padding-top-60">
                                    <acurology-PDnw5MhJyKI-unsplash href="assets/images/portfolio/project_05/IMG_0527bw.jpg"
                                        class="column-l-r-margin-20 d-block hidden-box js-pointer-zoom js-photo-popup">
                                        <div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
                                            <img class="anim-opacity-scale"
                                                src="{{ asset('public/frontend/assets/images/portfolio/project_05/IMG_0527bw.jpg') }}"
                                                alt="project image" />
                                        </div>
                                    </acurology-PDnw5MhJyKI-unsplash>
                                </div>
                                <!-- column end -->
                                <!-- column start -->
                                <div class="six-columns padding-top-60">
                                    <a href="assets/images/portfolio/project_05/IMG_7878bw.jpg"
                                        class="column-l-r-margin-20 d-block hidden-box js-pointer-zoom js-photo-popup">
                                        <div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
                                            <img class="anim-opacity-scale"
                                                src="{{ asset('public/frontend/assets/images/portfolio/project_05/IMG_7878bw.JPG') }}"
                                                alt="project image" />
                                        </div>
                                    </a>
                                </div>
                                <!-- column end -->
                                <!-- column start -->
                                <div class="twelve-columns padding-top-60">
                                    <a href="assets/images/portfolio/project_05/IMG_1833.jpg"
                                        class="column-l-r-margin-20 d-block hidden-box js-pointer-zoom js-photo-popup">
                                        <div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
                                            <img class="anim-opacity-scale"
                                                src="{{ asset('public/frontend/assets/images/portfolio/project_05/IMG_1833.jpg') }}"
                                                alt="project image" />
                                        </div>
                                    </a>
                                </div>
                                <!-- column end -->
                            </div>
                            <!-- flex-container end -->
                        </div>
                        <!-- padding-top-60 end -->
                    </div>
                    <!-- padding-top-bottom-120 end -->
                </section>
                <!-- section-bg-dark end -->
            </main>
            <!-- section-bg-light start -->
            <section class="section-bg-light" data-scroll-section>
                <!-- flex-min-height-100vh start -->
                <div class="flex-min-height-100vh">
                    <!-- flex-container start -->
                    <div class="container flex-container padding-top-60 padding-bottom-120">
                        <!-- column start -->
                        <div class="eight-columns column-100-999 padding-top-60">
                            <div class="column-r-margin-40-999 scrollanim-activate" data-scroll data-scroll-offset="30%">
                                <h2 class="headline-xxs text-color-black anim-split-lines">
                                    Brooklyn whatever chia deep
                                </h2>
                                <p class="body-text-m text-color-6d6d6d margin-top-20 anim-split-lines">
                                    3 wolf moon microdosing scenester, tilde roof party
                                    affogato typewriter celiac echo park craft beer bicycle
                                    rights man braid trust fund four dollar toast gentrify.
                                    IPhone humblebrag kale chips hell of. Brooklyn whatever
                                    chia deep v slow-carb lomo put a bird on. Retro jean
                                    shorts cronut lumbersexual mixtape hella you probably
                                    haven't heard of them austin williamsburg af mustache
                                    pinterest. Mixtape kinfolk cray, wolf palo santo brunch
                                    iPhone.
                                </p>
                            </div>
                        </div>
                        <!-- column end -->

                        <!-- column start -->
                        <div class="four-columns column-100-999 padding-top-60">
                            <!-- list start -->
                            <ul class="list list_counter text-color-black scrollanim-activate" data-scroll
                                data-scroll-offset="30%">
                                <li class="list__item black opacity-05 hidden-box">
                                    <p class="subhead-xs anim-text-slide">Mlkshk YOLO</p>
                                </li>
                                <li class="list__item black opacity-05 hidden-box">
                                    <p class="subhead-xs anim-text-slide tr-delay-01">
                                        Leggings vinyl
                                    </p>
                                </li>
                                <li class="list__item black opacity-05 hidden-box">
                                    <p class="subhead-xs anim-text-slide tr-delay-02">
                                        Crucifix stumptown
                                    </p>
                                </li>
                                <li class="list__item black opacity-05 hidden-box">
                                    <p class="subhead-xs anim-text-slide tr-delay-03">
                                        Pabst venmo gentrify
                                    </p>
                                </li>
                                <li class="list__item black opacity-05 hidden-box">
                                    <p class="subhead-xs anim-text-slide tr-delay-04">
                                        Deep v microdosing
                                    </p>
                                </li>
                                <li class="list__item black opacity-05 hidden-box">
                                    <p class="subhead-xs anim-text-slide tr-delay-05">
                                        Migas occupy master
                                    </p>
                                </li>
                                <li class="list__item black opacity-05 hidden-box">
                                    <p class="subhead-xs anim-text-slide tr-delay-06">
                                        Cleanse intelligentsia
                                    </p>
                                </li>
                            </ul>
                            <!-- list end -->
                        </div>
                        <!-- column end -->
                    </div>
                    <!-- flex-container end -->
                </div>
                <!-- flex-min-height-100vh end -->

                <!-- padding-bottom-120 start -->
                <div class="padding-bottom-120">
                    <!-- flex-container start -->
                    <div class="flex-container margin-left-right-20">
                        <!-- column start -->
                        <div class="twelve-columns">
                            <a href="assets/images/portfolio/project_05/6.jpg"
                                class="column-l-r-margin-20 d-block hidden-box js-pointer-zoom js-photo-popup">
                                <div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
                                    <img class="anim-opacity-scale"
                                        src="{{ asset('public/frontend/assets/images/portfolio/project_05/6.jpg') }}"
                                        alt="project image" />
                                </div>
                            </a>
                        </div>
                        <!-- column end -->
                        @foreach ($posts as $post)
                            <!-- column start -->
                            <div class="six-columns padding-top-60">
                                <a href="assets/images/portfolio/project_05/1.jpg"
                                    class="column-l-r-margin-20 d-block hidden-box js-pointer-zoom js-photo-popup">
                                    <div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
                                        <img class="anim-opacity-scale" src="{{ asset($post->image_one) }}"
                                            alt="project image" />
                                    </div>
                                </a>
                            </div>
                            <!-- column end -->
                            <!-- column start -->
                            <div class="six-columns padding-top-60">
                                <a href="assets/images/portfolio/project_05/2.jpg"
                                    class="column-l-r-margin-20 d-block hidden-box js-pointer-zoom js-photo-popup">
                                    <div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
                                        <img class="anim-opacity-scale" src="{{ asset($post->image_two) }}"
                                            alt="project image" />
                                    </div>
                                </a>
                            </div>
                            <!-- column end -->
                        @endforeach



                        <!-- column start -->
                        <div class="six-columns padding-top-60">
                            <a href="assets/images/portfolio/project_05/3.jpg"
                                class="column-l-r-margin-20 d-block hidden-box js-pointer-zoom js-photo-popup">
                                <div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
                                    <img class="anim-opacity-scale"
                                        src="{{ asset('public/frontend/assets/images/portfolio/project_05/1.jpg') }}"
                                        alt="project image" />
                                </div>
                            </a>
                        </div>
                        <!-- column end -->

                        <!-- column start -->
                        <div class="six-columns padding-top-60">
                            <a href="assets/images/portfolio/project_05/4.jpg"
                                class="column-l-r-margin-20 d-block hidden-box js-pointer-zoom js-photo-popup">
                                <div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
                                    <img class="anim-opacity-scale"
                                        src="{{ asset('public/frontend/assets/images/portfolio/project_05/1.jpg') }}"
                                        alt="project image" />
                                </div>
                            </a>
                        </div>
                        <!-- column end -->

                        <!-- column start -->
                        <div class="twelve-columns padding-top-60">
                            <a href="assets/images/portfolio/project_05/5.jpg"
                                class="column-l-r-margin-20 d-block hidden-box js-pointer-zoom js-photo-popup">
                                <div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
                                    <img class="anim-opacity-scale"
                                        src="{{ asset('public/frontend/assets/images/portfolio/project_05/1.jpg') }}"
                                        alt="project image" />
                                </div>
                            </a>
                        </div>
                        <!-- column end -->
                    </div>
                    <!-- flex-container end -->
                </div>
                <!-- padding-bottom-120 end -->
            </section>
            <!-- section-bg-light end -->

            <!-- section-bg-dark start -->
            <section class="section-bg-dark" data-scroll-section>
                <!-- flex-min-height-100vh start -->
                <div class="flex-min-height-100vh">
                    <!-- container start -->
                    <div class="container small padding-top-60 padding-bottom-120">
                        <div class="padding-top-60">
                            <div class="scrollanim-activate" data-scroll data-scroll-offset="30%">
                                <h2 class="headline-xxs anim-split-lines">
                                    Chillwave cronut messenger
                                </h2>
                                <p class="body-text-s text-color-dadada margin-top-20 anim-split-lines">
                                    IPhone humblebrag kale chips hell of. Brooklyn whatever
                                    chia deep v slow-carb lomo put a bird on. Mlkshk YOLO
                                    wolf, leggings vinyl crucifix stumptown tousled. Pabst
                                    venmo gentrify deep v microdosing migas occupy master
                                    cleanse intelligentsia sartorial chia activated charcoal.
                                    Iceland small batch live-edge raclette roof party
                                    dreamcatcher austin pickled. Chillwave cronut messenger
                                    bag truffaut. 3 wolf moon microdosing scenester, tilde
                                    roof party affogato typewriter celiac echo park craft beer
                                    bicycle rights man braid trust fund four dollar toast
                                    gentrify.
                                </p>
                            </div>
                        </div>
                        <div class="padding-top-60">
                            <div class="scrollanim-activate" data-scroll data-scroll-offset="30%">
                                <h2 class="headline-xxs anim-split-lines">
                                    Mixtape kinfolk cray
                                </h2>
                                <p class="body-text-s text-color-dadada margin-top-20 anim-split-lines">
                                    Mlkshk YOLO wolf, leggings vinyl crucifix stumptown
                                    tousled. Pabst venmo gentrify deep v microdosing migas
                                    occupy master cleanse intelligentsia sartorial chia
                                    activated charcoal. Iceland small batch live-edge raclette
                                    roof party dreamcatcher austin pickled. Chillwave cronut
                                    messenger bag truffaut.<br /><br />Mixtape kinfolk cray,
                                    wolf palo santo brunch iPhone. 3 wolf moon microdosing
                                    scenester, tilde roof party affogato typewriter celiac
                                    echo park craft beer bicycle rights man braid trust fund
                                    four dollar toast gentrify. IPhone humblebrag kale chips
                                    hell of. Brooklyn whatever chia deep v slow-carb lomo put
                                    a bird on.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- container end -->
                </div>
                <!-- flex-min-height-100vh end -->
            </section>
            <!-- section-bg-dark end -->

            <!-- section-bg-light start -->
            <section class="section-bg-light" data-scroll-section>
                <!-- flex-min-height-100vh start -->
                <div class="flex-min-height-100vh">
                    <!-- width-100perc start -->
                    <div class="width-100perc padding-top-60 padding-bottom-120">
                        <!-- flex-container start -->
                        <div class="flex-container margin-left-right-20">
                            <!-- column start -->
                            <div class="six-columns padding-top-60">
                                <a href="assets/images/portfolio/project_05/7.jpg"
                                    class="column-l-r-margin-20 d-block hidden-box js-pointer-zoom js-photo-popup">
                                    <div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
                                        <img class="anim-opacity-scale"
                                            src="{{ asset('public/frontend/assets/images/portfolio/project_05/1.jpg') }}"
                                            alt="project image" />
                                    </div>
                                </a>
                            </div>
                            <!-- column end -->

                            <!-- column start -->
                            <div class="six-columns padding-top-60">
                                <a href="assets/images/portfolio/project_05/10.jpg"
                                    class="column-l-r-margin-20 d-block hidden-box js-pointer-zoom js-photo-popup">
                                    <div class="scrollanim-activate" data-scroll data-scroll-speed="-1.3">
                                        <img class="anim-opacity-scale"
                                            src="{{ asset('public/frontend/assets/images/portfolio/project_05/1.jpg') }}"
                                            alt="project image" />
                                    </div>
                                </a>
                            </div>
                            <!-- column end -->
                        </div>
                        <!-- flex-container end -->

                        <!-- container start -->
                        <div class="container small padding-top-120">
                            <div class="scrollanim-activate" data-scroll data-scroll-offset="30%">
                                <h2 class="headline-xxs text-color-black anim-split-lines">
                                    Pabst venmo gentrify deep
                                </h2>
                                <p class="body-text-s text-color-6d6d6d margin-top-20 anim-split-lines">
                                    Iceland small batch live-edge raclette roof party
                                    dreamcatcher austin pickled. IPhone humblebrag kale chips
                                    hell of. Brooklyn whatever chia deep v slow-carb lomo put
                                    a bird on. Mlkshk YOLO wolf, leggings vinyl crucifix
                                    stumptown tousled. Pabst venmo gentrify deep v microdosing
                                    migas occupy master cleanse intelligentsia sartorial chia
                                    activated charcoal. Chillwave cronut messenger bag
                                    truffaut. 3 wolf moon microdosing scenester, tilde roof
                                    party affogato typewriter celiac echo park craft beer
                                    bicycle rights man braid trust fund four dollar toast
                                    gentrify.
                                </p>
                            </div>
                        </div>
                        <!-- container end -->
                    </div>
                    <!-- width-100perc end -->
                </div>
                <!-- flex-min-height-100vh end -->
            </section>
        </div>
    </div>
@endsection
