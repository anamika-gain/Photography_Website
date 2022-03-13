@extends('admin.admin_layouts')

<style>
    .custom-file-input {
        min-width: 80rem !important;
    }

    .sl-pagebody {
        overflow-x: hidden;
    }

</style>
@section('admin_content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        crossorigin="anonymous">

    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">photography</a>
            <span class="breadcrumb-item active">Post Section</span>
        </nav>
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">New Post Add Form <a href="#" class="btn btn-teal btn-sm pull-right">All
                        Product</a></h6>

                <form action="{{ route('store.post') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Category: <span
                                            class="tx-danger">*</span></label>
                                    <select class="form-control select2" data-placeholder="Choose Category"
                                        name="category_id">
                                        <option label="Choose Category"></option>
                                        @foreach ($category as $row)
                                            <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Project: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" data-placeholder="Choose Category"
                                        name="project_id">
                                        <option label="Choose Project"></option>
                                        @foreach ($project as $row)
                                            <option value="{{ $row->id }}">{{ $row->project_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                        </div>

                        <div class="postCards mt-3">

                        </div>

                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Post Type : <span
                                            class="tx-danger">*</span></label>
                                    <select class="form-control select2 postType" data-placeholder="Choose Category"
                                        name="post_type[]">
                                        <option value="landscape">Landscape</option>
                                        <option value="potrait">Potrait</option>
                                        <option value="text">Text</option>

                                    </select>
                                </div>
                            </div><!-- col-4 -->


                            <div class="col-lg-2">

                                <div class="form-group mg-b-10-force " style="margin-top:40px;">
                                    <button class="btn btn-Success btn-sm center addPostButton" type="button">
                                        ADD POST TYPE

                                    </button>
                                </div>

                            </div>

                        </div>
                        <!-- row -->


                        {{-- <div class="card card-body bg-gray-200 mb-3">
                            <input type="hidden" class="textSerialNo">

                            <div class="row mg-b-25">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Post Text<span
                                                class="tx-danger">*</span></label>
                                        <a href="#" class="badge badge-danger pull-right"><i class="fa fa-close"
                                                style="font-size:20px"></i></a>
                                        <input type="hidden" name="sequence[]">
                                        <textarea class="form-control summernote" name="post_text[]"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="card card-body bg-gray-200 ">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label"> Landscape Image Size (1920 *1280 ) <span
                                                class="tx-danger">*</span></label>
                                        <a href="#" class="badge badge-danger pull-right"><i class="fa fa-close"
                                                style="font-size:20px"></i></a>
                                        <label class="custom-file">
                                            <span class="custom-file-control custom-file-control-primary">Choose
                                                Image</span>
                                            <input type="file" id="file2" class="custom-file-input">

                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card card-body bg-gray-200 mt-3">
                            <div class="row mg-b-25">

                                <div class="col-lg-6 mg-t-40 mg-lg-t-0">
                                    <div class="form-group">
                                        <label class="form-control-label"> Potrait Image Size (1280 *1818 ) <span
                                                class="tx-danger">*</span></label>

                                        <label class="custom-file">
                                            <input type="file" id="file2" class="custom-file-input">
                                            <span class="custom-file-control custom-file-control-primary"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6 mg-t-40 mg-lg-t-0">
                                    <div class="form-group">
                                        <label class="form-control-label"> Potrait Image Size (1280 *1818 ) <span
                                                class="tx-danger">*</span></label>
                                        <a href="#" class="badge badge-danger pull-right"><i class="fa fa-close"
                                                style="font-size:20px"></i></a>

                                        <label class="custom-file">
                                            <input type="file" id="file2" class="custom-file-input" placeholder="image">
                                            <span class="custom-file-control custom-file-control-primary"></span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div> --}}

                    </div>

                    <br>

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5 " type="submit">Submit </button>
                    </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
            </form>

        </div><!-- card -->

    </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"
        crossorigin="anonymous"></script>


    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(280)
                        .height(280);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script type="text/javascript">
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#two')
                        .attr('src', e.target.result)
                        .width(280)
                        .height(280);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script type="text/javascript">
        $(function() {
            'use strict';

            // Inline editor
            var editor = new MediumEditor('.editable');

            // Summernote editor
            $('.summernote').summernote({
                height: 150,
                tooltip: false
            })



        });
        var serialNo = 0;


        $('.addPostButton').on('click', addItem);

        function addItem() {
            // console.log($('.postType').find('option:selected').val());
            var selected_val = $('.postType').find('option:selected').val();
            // alert('value: ' + selected_val2);

            var textDiv = `<div class="card card-body bg-gray-200 mb-3 mt-3">
                             <input type="hidden" class="serialNo" value="1" name="sequence[]">

                            
                            <div class="row mg-b-25">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Post Text<span
                                                class="tx-danger">*</span></label>
                                        <a href="#" class="badge badge-danger pull-right textDivClose"><i class="fa fa-close"
                                                style="font-size:20px"></i></a>
                                        
                                        <textarea class="form-control summernote" name="post_text[]"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>`;

            var potraitDiv = `
                        <div class="card card-body bg-gray-200 mt-3 mb-3">
                            <input type="hidden" class="serialNo" value="1" name="sequence[]">
                            <div class="row mg-b-25">

                                <div class="col-lg-6 mg-t-40 mg-lg-t-0">
                                    <div class="form-group">
                                        <label class="form-control-label"> Potrait Image Size (1280 *1818 ) <span
                                                class="tx-danger">*</span></label>

                                        <label class="custom-file">
                                            <input type="file" id="file2" class="custom-file-input" name=image_one[]>
                                            <span class="custom-file-control custom-file-control-primary"></span>
                                        </label>
                        
                                    </div>
                                </div>
                                <div class="col-lg-6 mg-t-40 mg-lg-t-0">
                                    <div class="form-group">
                                        <label class="form-control-label"> Potrait Image Size (1280 *1818 ) <span
                                                class="tx-danger">*</span></label>
                                        <a href="#" class="badge badge-danger pull-right potraitDivClose"><i class="fa fa-close"
                                                style="font-size:20px"></i></a>

                                        <label class="custom-file">
                                            <input type="file" id="file2" class="custom-file-input" name=image_two[]>
                                            <span class="custom-file-control custom-file-control-primary"></span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>`;
            var landScapeDiv = `<div class="card card-body bg-gray-200 mt-3 mb-3">
                <input type="hidden" class="serialNo" value="1" name="sequence[]">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label"> Landscape Image Size (1920 *1280 ) <span
                                                class="tx-danger">*</span></label>
                                        <a href="#" class="badge badge-danger pull-right landScapeDivClose"><i class="fa fa-close"
                                                style="font-size:20px"></i></a>
                                        <label class="custom-file">
                                            <span class="custom-file-control custom-file-control-primary">Choose
                                                Image</span>
                                            <input type="file" id="file2" class="custom-file-input" name=image_one[]>

                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div>`;


            if (selected_val == 'landscape') {
                $(".postCards").append(landScapeDiv);
                $(".serialNo").last().val(++serialNo);

            } else if (selected_val == 'potrait') {
                $(".postCards").append(potraitDiv);
                $(".serialNo").last().val(++serialNo);
            } else {
                $(".postCards").append(textDiv);
                // console.log( $(".textSerialNo").val());
                $(".serialNo").last().val(++serialNo);
                // Summernote editor
                $('.summernote:last-child').summernote({
                    height: 150,
                    tooltip: false
                })
            }

        }

        $(".textDivClose").on("click", function() {
            console.log('gg');
        });
    </script>
@endsection
