@extends('frontend.master.app')
@section('content')
    @include('frontend.master.menu')

    <!-- scroll-content start -->
    <div id="js-scroll-content">
        <!-- js-animsition-overlay start -->
        <div class="js-animsition-overlay" data-animsition-overlay="true">
            <!-- main start -->
            <main class="main-content">
                <!-- page head start -->
                <section id="up" class="pos-rel hidden-box" data-scroll-section>
                    <div class="page-head-footer-overlay-fix" data-scroll data-scroll-repeat>
                        <!-- video-bg-box start -->
                        <div class="video-bg-box" data-scroll data-scroll-speed="-1.5">
                            <video src="{{ asset('public/frontend/assets/images/1934485202061354293.mp4') }}"
                                class="video-bg" muted loop autoplay playsinline
                                poster="{{ asset('public/frontend/assets/images/portfolio/project_05/5.jpg') }}"></video>
                        </div>
                        <!-- video-bg-box end -->

                        <!-- bg-overlay -->
                        <div class="bg-overlay-light"></div>

                        <!-- flex-min-height-100vh start -->
                        <div class="flex-min-height-100vh">
                            <div class="padding-top-bottom-150 container small">
                                <h2 class="headline-xxl headline-uppercase after-preloader-anim">
                                    <span class="d-block">
                                        <span class="anim-chars-fadein" data-splitting
                                            style="font-family: 'Nomark'">Let's</span>
                                    </span>
                                    <span class="d-block" data-scroll data-scroll-speed="-0.4"
                                        data-scroll-position="top">
                                        <span class="anim-chars-fadein" data-splitting style="font-family: 'Nomark'">Work
                                            Together</span>
                                    </span>
                                    <span class="d-block" data-scroll data-scroll-speed="-0.8"
                                        data-scroll-position="top">
                                        <span class="anim-chars-fadein" data-splitting></span>
                                    </span>
                                </h2>
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

                <!-- contact us start -->
                <section id="down" class="section-bg-light" data-scroll-section>
                    <!-- flex-min-height-100vh start -->
                    <div class="flex-min-height-100vh">
                        <!-- flex-container start -->
                        <div class="container flex-container flex-align-center padding-top-60 padding-bottom-150">
                            <!-- column start -->
                            <div class="six-columns column-100-999 padding-top-90">
                                <div class="column-r-margin-20-999 hidden-box">
                                    <div data-scroll data-scroll-speed="-1.3">
                                        <div class="anim-img-reveal" data-scroll data-scroll-offset="20%"
                                            style="
                                                                                                                                  background-image:url({{ asset('public/frontend/assets/images/contact/contact.jpg') }});
                                                                                                                                ">
                                            <img src="{{ asset('public/frontend/assets/images/contact/contact.jpg') }}"
                                                alt="Contact photo" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- column end -->

                            <!-- column start -->
                            <div class="six-columns column-100-999 padding-top-90 z-index-2">
                                <!-- column-l-margin-20-999 start -->
                                <div class="column-l-margin-20-999" data-scroll data-scroll-speed="1">
                                    <!-- title start -->
                                    <h2 class="padding-bottom-90 d-inline-block">
                                        <a href="#"
                                            class="text-left-offset headline-xl headline-uppercase hover-stroke-fill-black js-pointer-large"
                                            data-text="contact us">contact us</a>
                                    </h2>
                                    <!-- title end -->

                                    <!-- pos-rel start -->
                                    <div class="pos-rel">
                                        <!-- anim-line-top -->
                                        <div class="anim-line-top" data-scroll data-scroll-offset="20%"
                                            style="color: black"></div>

                                        <!-- flex-container start -->
                                        <div class="flex-container">
                                            <!-- column start -->
                                            <div class="six-columns padding-top-30">
                                                <div class="column-r-margin-20">
                                                    <h4 class="headline-xxxxs" style="color: black; font-size:30px; ">
                                                        GENERAL CONTACT</h4>
                                                    <div class="margin-top-20">


                                                        <a href="#"
                                                            class="line-btn text-color-b0b0b0 text-hover-to-black js-pointer-small"
                                                            style="color: black; font-size:30px;">email@tumar_agency.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- column end -->


                                            <!-- column end -->
                                        </div>
                                        <!-- flex-container end -->
                                    </div>
                                    <!-- pos-rel end -->
                                </div>
                                <!-- column-l-margin-20-999 end -->
                            </div>
                            <!-- column end -->
                        </div>
                        <!-- flex-container end -->
                    </div>
                    <!-- flex-min-height-100vh end -->
                </section>
                <!-- contact us end -->

                <!-- form section start -->
                <section class="pos-rel hidden-box" data-scroll-section>
                    <!-- bg-parallax -->
                    <div class="bg-parallax"
                        style="background-image: url('{{ asset('public/frontend/assets/images/backgrounds/watcharlie-gGtRPDcW5kE-unsplash.jpg') }}')"
                        data-scroll data-scroll-speed="-1.5"></div>

                    <!-- bg-overlay -->
                    <div class="bg-overlay-white bg-overlay-white_deep"></div>

                    <!-- flex-min-height-100vh start -->
                    <div class="flex-min-height-30vh">
                        <!-- container start -->
                        <div class="container small padding-top-bottom-100">
                            <!-- pos-rel start -->
                            <div class="pos-rel">
                                <!-- form-box start -->
                                <div class="form-box scrollanim-activate line-scrollanim-activate form-anim-activate"
                                    data-scroll data-scroll-offset="30%">
                                    <!-- title start -->
                                    <div class="text-center">
                                        <h3 class="headline-xxxxs anim-fade-to-top">
                                            Lets Get In Touch!
                                        </h3>
                                    </div>
                                    <!-- title end -->

                                    <!-- form start -->
                                    <form method="post" name="formobrsv" id="send_form">
                                        <!-- flex-container start -->
                                        <div class="flex-container padding-top-60">
                                            <!-- column start -->
                                            <div class="four-columns padding-top-30">
                                                <div class="column-l-r-margin-10 pos-rel">
                                                    <input type="text" name="first_name" id="first_name" required
                                                        class="form-input js-pointer-small" />
                                                    <label for="first_name" class="form-label"
                                                        data-text="First name">First name</label>
                                                    <div class="anim-line-bottom"></div>
                                                </div>
                                            </div>
                                            <!-- column end -->

                                            <!-- column start -->
                                            <div class="four-columns padding-top-30">
                                                <div class="column-l-r-margin-10 pos-rel">
                                                    <input type="text" name="last_name" id="last_name" required
                                                        class="form-input js-pointer-small" />
                                                    <label for="last_name" class="form-label tr-delay-01"
                                                        data-text="Last name">Last name</label>
                                                    <div class="anim-line-bottom tr-delay-01"></div>
                                                </div>
                                            </div>
                                            <!-- column end -->

                                            <!-- column start -->
                                            <div class="four-columns padding-top-30">
                                                <div class="column-l-r-margin-10 pos-rel">
                                                    <input type="email" name="email" id="email" required
                                                        class="form-input js-pointer-small" />
                                                    <label for="email" class="form-label tr-delay-02 email-label"
                                                        data-text="Email address">Email address</label>
                                                    <div class="anim-line-bottom tr-delay-02"></div>
                                                </div>
                                            </div>
                                            <!-- column end -->

                                            <!-- column start -->
                                            <div class="twelve-columns padding-top-30">
                                                <div class="column-l-r-margin-10 pos-rel">
                                                    <textarea name="message" id="message" required class="form-input js-pointer-small"></textarea>
                                                    <label for="message" class="form-label tr-delay-03"
                                                        data-text="Message content">Message content</label>
                                                    <div class="anim-line-bottom tr-delay-03"></div>
                                                </div>
                                            </div>
                                            <!-- column end -->
                                        </div>
                                        <!-- flex-container end -->

                                        <!-- button start -->
                                        <div class="padding-top-90 text-center">
                                            <button id="send"
                                                class="border-btn js-pointer-large anim-fade-to-top tr-delay-06">
                                                <span class="border-btn__inner">submit</span>
                                                <span class="btn-wait">Wait</span>
                                                <span class="border-btn__lines-1"></span>
                                                <span class="border-btn__lines-2"></span>
                                            </button>
                                        </div>
                                        <!-- button end -->
                                    </form>
                                    <!-- form end -->
                                </div>
                                <!-- form-box end -->

                                <!-- alert start -->
                                <div class="js-popup-fade" id="m_sent">
                                    <div class="js-popup text-center">
                                        <div class="popup-icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="popup-alert headline-xs">
                                            Thank you!<br />
                                            Your submission<br />
                                            has been received!
                                        </div>
                                        <div class="flip-btn js-popup-close js-pointer-large" data-splitting>
                                            Close
                                        </div>
                                    </div>
                                </div>
                                <!-- alert end -->

                                <!-- alert start -->
                                <div class="js-popup-fade" id="m_err">
                                    <div class="js-popup text-center">
                                        <div class="popup-icon">
                                            <i class="fas fa-times"></i>
                                        </div>
                                        <div class="popup-alert headline-xs">Error</div>
                                        <div class="flip-btn js-popup-close js-pointer-large" data-splitting>
                                            Close
                                        </div>
                                    </div>
                                </div>
                                <!-- alert end -->
                            </div>
                            <!-- pos-rel end -->
                        </div>
                        <!-- container end -->
                    </div>
                    <!-- flex-min-height-100vh end -->
                </section>
                <!-- form section end -->
            </main>
            <!-- main end -->2
        </div>
        <!-- js-animsition-overlay end -->
    </div>
    <!-- scroll-content end -->
@endsection
