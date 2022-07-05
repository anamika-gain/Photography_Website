@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{ route('home') }}">Photography</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>

        <div class="sl-pagebody">

            <div class="row row-sm">
                <div class="col-sm-6 col-xl-3">
                    <div class="card pd-20 bg-info">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-14 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Categories</h6>
                            @php
                                $category = DB::table('categories')->count();
                            @endphp
                            <a href="" class="tx-white-8 hover-white">{{ $category }}</a>
                        </div><!-- card-header -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card pd-20 bg-purple">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-14 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Posts</h6>
                            @php
                                $project = DB::table('projects')->count();
                            @endphp
                            <a href="" class="tx-white-8 hover-white">{{ $project }}</a>
                        </div><!-- card-header -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card pd-20 bg-sl-primary">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            @php
                                $maxCat = DB::table('categories')->max('views');
                                $category = DB::table('categories')
                                    ->where('views', '=', $maxCat)
                                    ->first();
                                // dd($project);
                            @endphp
                            <h6 class="tx-14 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Most Viewed Categories
                                :{{ $category->category_name }}</h6>
                            <a href="" class="tx-white-8 hover-white">{{ $maxCat }}</a>
                        </div><!-- card-header -->
                    </div><!-- card -->
                </div><!-- col-3 -->

                <div class="col-sm-6 col-xl-3">
                    <div class="card pd-20 bg-purple">
                        @php
                            $maxValue = DB::table('projects')->max('views');
                            $project = DB::table('projects')
                                ->where('views', '=', $maxValue)
                                ->first();
                            // dd($project);
                        @endphp
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-14 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Most Viewed Project
                                :{{ $project->project_name }}</h6>

                            <a href="" class="tx-white-8 hover-white">{{ $maxValue }}</a>
                        </div><!-- card-header -->
                    </div><!-- card -->
                </div><!-- col-3 -->
            </div><!-- row -->
            <br>
            @php
                $category = DB::table('categories')->get();
            @endphp
            <div class="row row-sm">
                @foreach ($category as $cat)
                <br>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card pd-20 bg-primary">
                            <div class="d-flex justify-content-between align-items-center mg-b-10">
                                <h6 class="tx-14 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Views of
                                    {{ $cat->category_name }}</h6>
                                <a href="" class="tx-white-8 hover-white">{{ $cat->views }}</a>
                            </div><!-- card-header -->
                        </div><!-- card -->
                    </div><!-- col-3 -->
                @endforeach
                <br>
            </div><!-- col-3 -->


        </div><!-- sl-pagebody -->

        <script src="public/asset/backend/js/dashboard.js"></script>
    @endsection
