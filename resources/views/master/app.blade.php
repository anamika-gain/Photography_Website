<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Jinna Gik" />
    <meta name="description"
        content="TUMAR Template is a uniquely HTML5 template develop in HTML with a modern look." />
    <meta name="keywords" content="creative, modern, clean, html5, css3, portfolio, blog, agency, templates, minimal" />

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png" />

    <title>PHOTOGRAPHY</title>

    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet" />

    <!-- styles -->
    <link href="{{ asset('public/frontend/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/frontend/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="preloader cursor-anim-enable">
    <div class="preloader__out-overlay"></div>

    <!-- preloader-loading start -->
    <div class="preloader__loading in">
        <div class="preloader__loading-anim" data-splitting>Loading...</div>
    </div>
    <div class="preloader__loading out">
        <div class="preloader__loading-anim" data-splitting>Loading...</div>
    </div>
    <!-- preloader-loading end -->

    <!-- pointer start -->
    <div class="pointer js-pointer" id="js-pointer">
        <div class="pointer__inner drag">drag</div>
        <i class="pointer__inner fas fa-search"></i>
    </div>
    <!-- pointer end -->

    <!-- header start -->
    <header class="fixed-header">
        <!-- logo start -->
        <div class="header-logo color-mix-blend-normal">
            <a href="index.html" class="header-logo__box js-pointer-large js-animsition-link">
                <h1>PHOTOGRAPHY</h1>
            </a>
        </div>
        <!-- logo end -->

        <!-- menu-icon start -->
        <div class="menu-icon color-mix-blend-normal js-menu-open-close js-pointer-large">
            <div class="menu-icon__box">
                <span class="menu-icon__inner"></span>
                <span class="menu-icon__close"></span>
            </div>
        </div>
        <!-- menu-icon end -->
    </header>
    <!-- header end -->



    @yield('content')

    <!-- scroll-content end -->
    <!-- scripts -->

    <script src="{{ asset('public/frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/main.js') }}"></script>
</body>

</html>
