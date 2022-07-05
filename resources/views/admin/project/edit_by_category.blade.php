@extends('admin.admin_layouts')
@section('extra-css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
@endsection
@section('admin_content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        crossorigin="anonymous">
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Project Update</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">PROJECT UPDATE

                </h6>
                <br>
                <div class="table-wrapper">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ url('update/project/' . $project->id) }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-layout">
                            <div class="row mg-b-25">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">project Name <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="project_name"
                                            value="{{ $project->project_name }}">
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
                                                <option value="{{ $row->id }}" <?php if ($row->id == $project->category_id) {
    echo 'selected';
} ?>>
                                                    {{ $row->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Image: <span
                                                class="tx-danger">*</span></label>
                                        <div class="form-controls">
                                            <input class="input-file uniform_on" name="main_image" type="file"
                                                placeholder="image">
                                            <img src="{{ URL::to($project->main_image) }}"
                                                style="height: 70px; width: 90px;">
                                            <input type="hidden" name="main_image" value="{{ $project->main_image }}">
                                        </div>
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Tag Line: <span
                                                class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $project->tag_line }}" name="tag_line">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Rolling Text: <span
                                                class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $project->rolling_text }}"
                                            name="rolling_text">
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
                                                value="{{ $project->project_time }}" name="project_time">



                                        </div>
                                    </div><!-- wd-200 -->
                                </div><!-- col-4 -->
                                <div class="col-lg-8">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Project Location: <span
                                                class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $project->project_location }}"
                                            name="project_location">
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
                                    <label class="form-control-label">Project Info:<span
                                            class="tx-danger">*</span></label>
                                    <textarea class="form-control" id="summernote" name="project_info">   {!! $project->project_info !!}</textarea>
                                </div>

                            </div><!-- row -->

                            <div class="col-lg-4">

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info pd-x-20">Update</button>
                                </div>
                            </div><!-- form-layout -->

                    </form>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->

    @endsection
    @section('extra-js')
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script> --}}
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
    @endsection
