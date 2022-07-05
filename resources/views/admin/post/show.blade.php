@extends('admin.admin_layouts')

@section('admin_content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        crossorigin="anonymous">

    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">Photography</a>
            <span class="breadcrumb-item active">post Section</span>
        </nav>
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">

                <p class="mg-b-20 mg-sm-b-30">post Details</p>
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group" style="border:1px solid grey;padding:10px; ">
                                <label class="form-control-label">post ID: <span class="tx-danger">*</span></label>
                                <strong>{{ $post->id }}</strong>
                            </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group " style=" border:1px solid grey;padding:10px; ">
                                    <label class="form-control-label">Category: <span
                                            class="tx-danger">*</span></label>
                                    <strong>{{ $categoryName->category_name }}</strong>
                                </div>
                            <!-- col-4 -->
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="col-lg-12">
                                <div class="form-group " style=" border:1px solid grey;padding:10px; ">
                                    <label class="form-control-label">Project: <span
                                            class="tx-danger">*</span></label>
                                    <strong>{{ $projectName->project_name }}</strong>
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group" style="border:1px solid grey;padding:10px; ">
                                <label class="form-control-label">post Details<span class="tx-danger">*</span></label>
                                <p>{!! $post->text !!}</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label>Image One <span class="tx-danger">*</span></label>
                            <label class="custom-file">

                                <img src="{{  asset('public/media/post/'.$post->image_one) }}" style="height: 80px; width: 80px;">
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <label>Image Two <span class="tx-danger">*</span></label>
                            <label class="custom-file">
                                <img src="{{ asset('public/media/post/'.$post->image_two) }}" style="height: 80px; width: 80px;">
                            </label>
                        </div>
                    </div><!-- row -->
                    <br>
                    <hr>
                    <div class="row">

                        <div class="col-lg-4">
                            <label>
                                @if ($post->status == 1)
                                    <span class="badge badge-success">Active</span> |
                                @else
                                    <span class="badge badge-danger">Inactive</span> |
                                @endif
                                <span>Status</span>
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
