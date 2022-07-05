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
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">New Post Add Form <a href="{{ route('all.post') }}"
                        class="btn btn-teal btn-sm pull-right">All
                        Posts</a></h6>
                <form action="{{ route('store.post') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-6" id="category">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Category: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control " data-placeholder="Choose Category" name="category_id"
                                        onchange="getProjects(this.value)" value="{{ $project->category_id }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6" id="project">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Project: <span class="tx-danger">*</span></label>
                                    <input class="form-control" data-placeholder="Choose Project" name="project_id"
                                        value="{{ $project->id }}">
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
                                    <select class="form-control select2 postType" data-placeholder="Choose Category">
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

            var textDiv = `<div id="text_remove" class="card card-body bg-gray-200 mb-3 mt-3">
                             <input type="hidden" class="serialNo" value="1" name="sequence[]">
                             <input type="hidden" class="form-group" value="text" name="post_type[]">

                            <div class="row mg-b-25">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Post Name<span
                                                class="tx-danger">*</span></label>
                                        <a href="#" class="badge badge-danger pull-right textDivClose" onclick="text_click()"><i class="fa fa-close"
                                                style="font-size:20px"></i></a>

                                        <textarea class="form-control" name="post_name[]"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Post Text<span
                                                class="tx-danger">*</span></label>
                                        <textarea class="form-control summernote" name="text[]"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>`;


                        var potraitDiv = `
                        <div id="potrait_remove" class="card card-body bg-gray-200 mt-3 mb-3">
                            <input type="hidden" class="form-group" value="potrait" name="post_type[]">
                            <input type="hidden" class="serialNo" value="1" name="sequence[]">
                            <div class="row mg-b-25">

                                <div class="col-lg-6 mg-t-40 mg-lg-t-0">
                                    <div class="form-group">
                                        <label class="form-control-label"> Potrait Image Size (1280 *1818 ) <span
                                                class="tx-danger">*</span></label>

                                      <label class="form-control-label">
                                        <input type="file" id="file" class="input-file uniform_on" name=image_one_p[]
                                        onchange="readURL(this);" required="" accept="image">

                                        <img src="#" id="one">
                                       </label>

                                    </div>
                                </div>
                                <div class="col-lg-6 mg-t-40 mg-lg-t-0">
                                    <div class="form-group">
                                        <label class="form-control-label"> Potrait Image Size (1280 *1818 ) <span
                                                class="tx-danger">*</span></label>
                                        <a href="#" class="badge badge-danger pull-right potraitDivClose" onclick="potrait_click()"><i class="fa fa-close"
                                                style="font-size:20px"></i></a>


                                        <label class="custom-file">
                                        <input type="file" id="file"  class="input-file uniform_on" name=image_two_p[]
                                        onchange="readURL1(this);" required="" accept="image">
                                        <img src="#" id="two">
                                       </label>


                                    </div>
                                </div>

                            </div>
                        </div>`;
            var landScapeDiv = `<div id="landscape_remove" class="card card-body bg-gray-200 mt-3 mb-3">
                <input type="hidden" class="serialNo" value="1" name="sequence[]">
                <input type="hidden" class="form-group" value="landscape" name="post_type[]">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label"> Landscape Image Size (1920 *1280 ) <span
                                                class="tx-danger">*</span></label>
                                        <a href="#" class="badge badge-danger pull-right landScapeDivClose" onclick="landscape_click()"><i class="fa fa-close"
                                                style="font-size:20px"></i></a>

                                       <label class="custom-file">
                                        <input type="file" id="file" class="input-file uniform_on" name=image_one_l[]
                                        onchange="readURL(this);" required="" accept="image">

                                       </label>
                                    </div>
                                </div>
                                       <div class="col-lg-6">
                                    <div class="form-group">
                                        <img src="#" id="one">
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

        function text_click() {
            document.getElementById("text_remove")
                .outerHTML = "";
        }

        function potrait_click() {
            document.getElementById("potrait_remove")
                .outerHTML = "";
        }

        function landscape_click() {
            document.getElementById("landscape_remove")
                .outerHTML = "";
        }

        function getProjects(id) {
            var appUrl = "{{ URL::to('/') }}";
            $.get(appUrl + "/admin/get/projects/" + id, function(projects) {
                var pp = `<option label="Choose Project">Choose Project</option>`;
                for (var i in projects) {
                    pp = pp + `<option value="` + projects[i]['id'] + `">` + projects[i]['project_name'] +
                        `</option>`;
                }
                $('#projectsHolder').html(pp);
            });
        }
    </script>

    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
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
                        .width(80)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
        <script type="text/javascript">
            document.getElementById("category").hidden = true;
            document.getElementById("project").hidden = true;
        </script>
@endsection
