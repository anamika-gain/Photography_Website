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
    <link rel="stylesheet" media="all" href="{{ asset('public/threejs/css/app.css') }}">
    <title>PHOTOGRAPHY</title>


</head>

<body>
    @extends('frontend.master.app')
    {{-- @section('content') --}}
        @include('frontend.master.menu')
        <!-- BEGIN content -->

        <div id="container">  </div>

            @php
                $category = DB::table('categories')
                    ->where('status', 1)
                    ->orderBy('id', 'asc')
                    ->limit(5)
                    ->get();

                 $id=DB::table('categories')
                 ->where('status',1)
                 ->orderBy('id','asc')
                 ->limit(5)
                 ->get();
              //   dd($id)
            @endphp

            <a href="{{ route('category.project',  ['id' => 1]) }}"id="mylink">
            <div class="measure">
                {{-- <div class="meta">Category</div> --}}
                {{-- <div id="m3">Category</div> --}}
                <div id="m1">category</div>
                {{-- <div id="m2">Photography</div> --}}

            </div>
            </a>

            {{-- <div class="flex-min-height-100vh">
                <div class="padding-top-bottom-120 container text-center after-preloader-anim">
                    <h2  class="headline-xxl headline-uppercase anim-chars-fadein" data-splitting>Curology</h2>
                    <div data-scroll data-scroll-speed="-0.4" data-scroll-position="top">
                        <div class="subhead-s subhead-uppercase anim-chars-blur" data-splitting>Photography</div>
                    </div>
                </div>
            </div> --}}
            <!-- scroll-content start -->
            <div id="js-scroll-content">
                <!-- js-animsition-overlay start -->
                <div class="js-animsition-overlay" data-animsition-overlay="false">
                    <!-- main start -->

                    <!-- main end -->
                </div>
                <!-- js-animsition-overlay end -->
            </div>





        <!-- scroll-content end -->
        <!-- END content -->
        <!-- BEGIN scripts -->
        <script type="module" src="{{ asset('public/js/three.min.js') }}"></script>
        <script type="module" src="{{ asset('public/threejs/js/app.js') }}"></script>
        <!-- END scripts -->
    </body>

    </html>
