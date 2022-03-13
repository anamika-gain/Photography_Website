@extends('master.app')
@section('content')
    <!-- navigation overlay -->
    <div class="nav-overlay"></div>
    <!-- navigation start -->
    <!-- navigation start -->
    <nav class="nav-container js-dropdown-active-box">
        <!-- nav-box start -->
        <div class="container small nav-box">
            <!-- dropdown close btn start -->
            <div class="dropdown-close">
                <div class="dropdown-close__inner">
                    <span class="dropdown-close__arrow"></span>
                </div>
                <div class="js-dropdown-close js-pointer-large"></div>
                <div class="js-dropdown-close-2lvl js-pointer-large"></div>
            </div>
            <!-- dropdown close btn end -->

            <!-- menu-box start -->
            <ul class="menu-box nav-bg-overlay-box">
                <!-- nav-btn-box start -->
                <li class="nav-btn-box js-nav-bg-change js-nav-bg-active js-dropdown-open">
                    <a href="{{ URL::to('/home') }}" class="nav-btn dropdown-hidden-btn js-pointer-large">
                        <span class="nav-btn__inner" data-text="Home">Home</span>
                    </a>

                    <div class="nav-bg-box">
                        <div class="nav-bg"
                            style="background-image: url({{ URL::asset('public/backend/img/img3.jpg') }})"></div>
                    </div>
                </li>

                <!-- nav-btn-box start -->
                <li class="nav-btn-box js-nav-bg-change js-dropdown-open">
                    <a class="nav-btn dropdown-hidden-btn js-pointer-large">
                        <span class="nav-btn__inner" data-text="Categories">Categories</span>
                    </a>
                                

                    <!-- dropdown start -->
                    <ul class="menu-box dropdown js-dropdown">
                        <li class="nav-btn-box">
                            <a href="{{ URL::to('/category') }}"
                                class="nav-btn dropdown-2lvl-hidden-btn js-animsition-link js-pointer-large">
                                <span class="nav-btn__inner" data-text="Landscape">Landscape</span>
                            </a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="portfolio_carousel.html"
                                class="nav-btn dropdown-2lvl-hidden-btn js-animsition-link js-pointer-large">
                                <span class="nav-btn__inner" data-text="Wildlife">Wildlife</span>
                            </a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="portfolio_grid-3-col.html"
                                class="nav-btn dropdown-2lvl-hidden-btn js-animsition-link js-pointer-large">
                                <span class="nav-btn__inner" data-text="Fashion">Fashion
                                </span>
                            </a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="portfolio_flex-columns.html"
                                class="nav-btn dropdown-2lvl-hidden-btn js-animsition-link js-pointer-large">
                                <span class="nav-btn__inner" data-text="Portrait">Portrait</span>
                            </a>
                        </li>
                        <li class="nav-btn-box">
                            <a href="portfolio_creative-grid.html"
                                class="nav-btn dropdown-2lvl-hidden-btn js-animsition-link js-pointer-large">
                                <span class="nav-btn__inner" data-text="Architectural">Architectural</span>
                            </a>
                        </li>
                        <li class="nav-btn-box js-dropdown-open-2lvl">
                            <a class="nav-btn dropdown-2lvl-hidden-btn js-pointer-large">
                                <span class="nav-btn__inner" data-text="We">Wedding </span>
                            </a>

                            <!-- dropdown 2-level start -->
                            <ul class="menu-box dropdown dropdown_2lvl js-dropdown-2lvl">
                                <li class="nav-btn-box">
                                    <a href="project_05.html" class="nav-btn js-animsition-link js-pointer-large">
                                        <span class="nav-btn__inner" data-text="Project 1">Project 1</span>
                                    </a>
                                </li>
                                <li class="nav-btn-box">
                                    <a href="project_02.html" class="nav-btn js-animsition-link js-pointer-large">
                                        <span class="nav-btn__inner" data-text="Project 2">Project 2</span>
                                    </a>
                                </li>
                                <li class="nav-btn-box">
                                    <a href="project_03.html" class="nav-btn js-animsition-link js-pointer-large">
                                        <span class="nav-btn__inner" data-text="Project 3">Project 3</span>
                                    </a>
                                </li>
                                <li class="nav-btn-box">
                                    <a href="project_04.html" class="nav-btn js-animsition-link js-pointer-large">
                                        <span class="nav-btn__inner" data-text="Project 4">Project 4</span>
                                    </a>
                                </li>
                                <li class="nav-btn-box">
                                    <a href="project_05.html" class="nav-btn js-animsition-link js-pointer-large">
                                        <span class="nav-btn__inner" data-text="Project 5">Project 5</span>
                                    </a>
                                </li>
                                <li class="nav-btn-box">
                                    <a href="project_06.html" class="nav-btn js-animsition-link js-pointer-large">
                                        <span class="nav-btn__inner" data-text="Project 6">Project 6</span>
                                    </a>
                                </li>
                                <li class="nav-btn-box">
                                    <a href="project_07.html" class="nav-btn js-animsition-link js-pointer-large">
                                        <span class="nav-btn__inner" data-text="Project 7">Project 7</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- dropdown 2-level end -->
                        </li>
                    </ul>
                    <!-- dropdown end -->

                    <div class="nav-bg-box">
                        <div class="nav-bg"
                            style="background-image:{{ URL::asset('public/backend/img/img3.jpg') }}">
                        </div>
                    </div>
                </li>
                <!-- nav-btn-box end -->

                <!-- nav-btn-box start -->

                <!-- nav-btn-box end -->

                <!-- nav-btn-box start -->
                <li class="nav-btn-box js-nav-bg-change">
                    <a href="{{ URL::to('/contact') }}"
                        class="nav-btn dropdown-hidden-btn js-animsition-link js-pointer-large">
                        <span class="nav-btn__inner" data-text="Contact">Contact</span>
                    </a>
                    <div class="nav-bg-box">
                        <div class="nav-bg"
                            style="background-image:{{ URL::asset('public/backend/img/img3.jpg') }}"></div>
                    </div>
                </li>
                <!-- nav-btn-box end -->
            </ul>
            <!-- menu-box end -->
        </div>
        <!-- nav-box end -->
    </nav>
    <!-- navigation end -->
    <!-- navigation end -->
@endsection
