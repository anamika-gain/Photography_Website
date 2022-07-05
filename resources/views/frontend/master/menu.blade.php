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
            <ul class="menu-box nav-bg-overlay-box ">
                <!-- nav-btn-box start -->
                <li class="nav-btn-box js-nav-bg-change js-nav-bg-active js-dropdown-open">
                    <a href="{{ URL::to('/') }}" class="nav-btn dropdown-hidden-btn js-pointer-large">
                        <span class="nav-btn__inner" data-text="Home" style="font-family: 'Nomark'">Home</span>
                    </a>

                    <div class="nav-bg-box">
                        <div class="nav-bg"
                            style="background-image: url('{{ asset('public/frontend/assets/images/menu/Capture.PNG') }}')">
                        </div>
                    </div>
                </li>

                <!-- nav-btn-box start -->
                <li class="nav-btn-box js-nav-bg-change js-dropdown-open">
                    <a class="nav-btn dropdown-hidden-btn js-pointer-large">
                        <span class="nav-btn__inner" data-text="Categories"
                            style="font-family: 'Nomark'">Categories</span>
                    </a>
                    @php
                        $category = DB::table('categories')
                            ->where('status', 1)
                            ->orderBy('id', 'asc')
                            ->limit(5)
                            ->get();
                    @endphp
                    <!-- dropdown start -->
                    <ul class="menu-box dropdown js-dropdown">
                        @foreach ($category as $row)
                            <li class="nav-btn-box">
                                <a href="{{ url('category/' . $row->id) }}"
                                    class="nav-btn dropdown-2lvl-hidden-btn js-animsition-link js-pointer-large">
                                    <span class="nav-btn__inner" data-text="{{ $row->category_name }}"
                                        style="font-family: 'Nomark'">{{ $row->category_name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <!-- dropdown end -->

                    <div class="nav-bg-box">
                        <div class="nav-bg"
                            style="background-image:url('{{ asset('public/frontend/assets/images/menu/Categories.jpg') }}')">

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
                        <span class="nav-btn__inner" data-text="Contact" style="font-family: 'Nomark'">Contact</span>
                    </a>
                    <div class="nav-bg-box">
                        <div class="nav-bg"
                            style="background-image:url('{{ asset('public/frontend/assets/images/menu/Contact.PNG') }}')">
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
