@extends('admin.admin_layouts')
@section('extra-css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection
@section('admin_content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        crossorigin="anonymous">

    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">photography</a>
            <span class="breadcrumb-item active">Project Section</span>
        </nav>
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">New Add Form <a href="{{ route('projects') }}"
                        class="btn btn-success btn-sm pull-right">All
                        Project</a></h6>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('store.project') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card pd-20 pd-sm-40">

                        <div class="form-layout">
                            <div class="row mg-b-25">
                                <div class="col-lg-8">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">project Name <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="project_name"
                                            placeholder="project Name">
                                    </div>
                                </div><!-- col-4 -->



                                <div id="category">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Category: <span
                                                class="tx-danger">*</span></label>
                                        @foreach ($category as $row)
                                            <input class="form-control" name="category_id" value="{{ $row->id }}">
                                        @endforeach
                                    </div>
                                </div><!-- col-4 -->

                                <!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Image: <span
                                                class="tx-danger">*</span></label>
                                        <div class="form-controls">
                                            <input class="input-file uniform_on" name="main_image" type="file"
                                                placeholder="image">
                                        </div>
                                    </div>
                                </div><!-- col-4 -->

                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Rolling Text: <span
                                                class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="rolling text" name="rolling_text">
                                    </div>
                                </div><!-- col-8 -->

                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Tag line: <span
                                                class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Tag Line" name="tag_line">
                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Project Time: <span
                                                class="tx-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                            <input id="datepickerNoOfMonths" type="text" class="form-control"
                                                placeholder="MM/DD/YYYY" name="project_time">
                                        </div>
                                    </div><!-- wd-200 -->
                                </div><!-- col-4 -->
                                <div class="col-lg-8">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Project Location: <span
                                                class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Tag Line" name="project_location">
                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Project Status: <span
                                                class="tx-danger">*</span></label>
                                        <div class="input-group">
                                            <select class="form-control" name="status">
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div><!-- wd-200 -->
                                </div><!-- col-4 -->
                                <div class="col-lg-12">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Project Info: <span
                                                class="card-body-title"></span></label>

                                        <textarea class="form-control summernote" placeholder="Project Info" name="project_info"></textarea>

                                    </div>
                                </div>
                            </div><!-- row -->

                            <div class="col-lg-4">


                                <div class="form-layout-footer">
                                    <button class="btn btn-info mg-r-5">Submit Form</button>

                                </div><!-- form-layout-footer -->
                            </div><!-- form-layout -->
                </form>

            </div><!-- card -->
            <br>



        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
@endsection
@section('extra-js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
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
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#three')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
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
    </script>
    <script type="text/javascript">
        $(function() {

            'use strict';

            $('.select2').select2({
                minimumResultsForSearch: Infinity
            });

            // Select2 by showing the search
            $('.select2-show-search').select2({
                minimumResultsForSearch: ''
            });

            // Select2 with tagging support
            $('.select2-tag').select2({
                tags: true,
                tokenSeparators: [',', ' ']
            });

            // Datepicker

            $('#datepickerNoOfMonths').datepicker({
                dateFormat: 'yy-mm-dd'

            });

        });
    </script>
    <script type="text/javascript">
        document.getElementById("category").hidden = true;
    </script>
@endsection
