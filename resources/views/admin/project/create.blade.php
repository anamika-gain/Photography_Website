@extends('admin.admin_layouts')

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
                <h6 class="card-body-title">New Add Form <a href="#" class="btn btn-success btn-sm pull-right">All
                        Product</a></h6>
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
                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">project Name <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="project_name"
                                            placeholder="project Name">
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
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
                                            aria-describedby="emailHelp" placeholder="Tag Line" name="rolling_text">
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

                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Project Info" name="project_info">

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
            $('#summernote').summernote({
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
@endsection
