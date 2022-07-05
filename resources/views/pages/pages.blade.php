<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="creative, modern, clean, html5, css3, portfolio, blog, agency, templates, minimal" />

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png" />
    @section('extra-css')
    <link rel="stylesheet" media="all" href="{{ asset('public/threejs/css/app.css') }}">
    @endsection
    <title>PHOTOGRAPHY</title>

</head>

<body>
    @extends('frontend.master.app')

    @include('frontend.master.menu')
    <!-- BEGIN content -->
    {{-- <div class="out"> --}}
    <div id="container"> </div>
    @php
        $category = DB::table('categories')
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();

    @endphp
    @foreach ($category as $cat)
    @endforeach
    {{-- <div class="measure">
                <div class="m1">{{$cat->category_name}}</div>
                <div class="m2">photography</div>
                <div class="m3">photography</div>
                <div class="m4">photography</div>
                <div class="m5">photography</div>
                <div class="dot">{{$cat->category_name}}</div>
            </div> --}}

    <div class="slider-inner" style=" margin: 100px;
            padding: 100%;
            top: 50%;
            left: 100%;
            position: relative;
            align-items: center;

            margin: 0 auto;
            z-index: 5;">
        <div id="slider-content" style="padding: 0 10px;">
            <div class="meta" style="    display: inline-block;
            font-family: 'Arial', sans-serif;
            font-size: 30px;
            letter-spacing: 5px;
            color: #88888a;
            text-transform: uppercase;
            position: relative;">Category</div>
            <h2 id="slide-title" style="  text-align: center;
            text-transform: uppercase;
            font-weight: 400;
            font-size: 60px;
            letter-spacing: -1px;
            color: white;
            line-height: 30px;
            margin: 20px 0 60px;">Location</h2>

            {{-- <div class="meta">Status</div> --}}
            <div id="slide-status" style="text-align: center">PHOTOGRAPHY</div>

        </div>
    </div>

    <!-- scroll-content start -->
    <div id="js-scroll-content">
        <!-- js-animsition-overlay start -->
        <div class="js-animsition-overlay" data-animsition-overlay="false">
            <!-- main start -->

            <!-- main end -->
        </div>
        <!-- js-animsition-overlay end -->
    </div>

    </div>




    <!-- scroll-content end -->
    <!-- END content -->
    @section('extra-js')
    <!-- BEGIN scripts -->
    <script type="module" src="{{ asset('public/js/three.min.js') }}"></script>
    <script type="module" src="{{ asset('public/threejs/js/app.js') }}"></script>
    @endsection
    <!-- END scripts -->

