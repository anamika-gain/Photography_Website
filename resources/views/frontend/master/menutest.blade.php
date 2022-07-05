
    @section('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/index.320bd6f3.css') }}">
@endsection
<!-- navigation overlay -->
<script>
    ! function() {
        document.documentElement.className = "js";
        var e, t;
        (t = document.createElement("style")).innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t),
            e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t
            .parentNode.removeChild(t), e || alert(
                "Please view this demo in a modern browser that supports CSS Variables.")
    }();
</script>
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
                    <span class="nav-btn__inner" data-text="Categories" style="font-family: 'Nomark'">Categories</span>
                </a>
                @php
                    $category = DB::table('categories')
                        ->where('status', 1)
                        ->orderBy('id', 'desc')
                        ->limit(5)
                        ->get();
                @endphp
                <!-- dropdown start -->
                <ul class="menu-box dropdown js-dropdown">

                    @foreach ($category as $row)
                        <li class="nav-btn-box">
                            <a href="#gallery-1"
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

<div class="galleries">
    <div class="gallery" id="gallery-1"> <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img
            class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img class="gallery__img"
            src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image">
        <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img class="gallery__img"
            src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image">
        <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image">
    </div>
    <div class="gallery" id="gallery-2"> <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img
            class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img class="gallery__img"
            src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image">
        <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img class="gallery__img"
            src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image">
        <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image">
    </div>
    <div class="gallery" id="gallery-3"> <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img
            class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img class="gallery__img"
            src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image">
        <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img class="gallery__img"
            src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image">
        <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}"alt="Some image">
    </div>
    <div class="gallery" id="gallery-4"> <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img
            class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img class="gallery__img"
            src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image">
        <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img class="gallery__img"
            src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image"> <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}" alt="Some image">
        <img class="gallery__img" src="{{ asset('public/images/1.80b98c5b.jpg') }}"alt="Some image">
    </div> <button class="galleries__button unbutton">Explore</button>

</div>
@section('extra-js')
    <link src="{{ asset('public/frontend/index.cad48f07.js') }}">
@endsection
