@extends('admin.admin_layouts')

@section('admin_content')
    @php

    $category = DB::table('categories')->get();

    @endphp
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        crossorigin="anonymous">

    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">Starlight</a>
            <span class="breadcrumb-item active">post Section</span>
        </nav>
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Update post </h6>
                <form action="{{ url('update/post/withoutphoto/' . $post->id) }}" method="post">
                    @csrf

                    <div class="form-layout">
                        <div class="row mg-b-25">
                            

                       
                        <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">post Name: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="post_name" value="{{ $post->id }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">post Sequence: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="sequence" value="{{ $post->sequence }}">
                                </div>
                            </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
                                    <option label="Choose Category"></option>
                                    @foreach ($category as $row)
                                        <option value="{{ $row->id }}" <?php if ($row->id == $post->category_id) {
    echo 'selected';
} ?>>
                                            {{ $row->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- col-4 -->




                    </div>


                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Post Details: <span class="tx-danger">*</span></label><br>
                            <input class="form-control" type="text" name="text" id="size" data-role="tagsinput"
                                value="{{ $post->text }}">
                        </div>
                    </div>
 </div>



            </div><!-- row -->




        </div><!-- sl-pagebody -->

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Update post With Photo</h6>
                <form action="{{ url('update/post/photo/' . $post->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <lebel>Image One (Main Thumbnail)<span class="tx-danger">*</span></lebel><br>
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" name="image_one"
                                    onchange="readURL(this);" accept="image">
                                <span class="custom-file-control"></span>
                                <input type="hidden" name="old_one" value="{{ $post->image_one }}">
                                <img src="#" id="one">
                            </label>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <img src="{{ URL::to($post->image_one) }}" style="height: 80px; width: 80px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <lebel>Image Two <span class="tx-danger">*</span></lebel><br>
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" name="image_two"
                                    onchange="readURL1(this);" accept="image">
                                <input type="hidden" name="old_two" value="{{ $post->image_two }}">
                                <span class="custom-file-control"></span>
                                <img src="#" id="two">
                            </label>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <img src="{{ URL::to($post->image_two) }}" style="height: 80px; width: 80px;">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-sm btn-warning">Update Photo</button>
                </form>



            </div>
        </div>
    </div><!-- sl-mainpanel -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"
        crossorigin="anonymous"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "{{ url('/get/subcategory/') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            var d = $('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value) {

                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .subcategory_name + '</option>');

                            });

                        },

                    });
                } else {
                    alert('danger');
                }

            });
        });
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
@endsection
