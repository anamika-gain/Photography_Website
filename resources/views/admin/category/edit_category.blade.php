@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Category Update</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Category Update

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
                    <form method="post" action="{{ url('update/category/' . $category->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                {{-- <input type="hidden" name="id" value="{{$category_id }}"> --}}
                                <label for="exampleInputEmail1">Category Image</label>

                                <input class="form-control" class="input-file uniform_on" name="main_image" type="file"
                                    placeholder="Tag Line" value="{{ $category->main_image }}">

                                <input type="hidden" name="old_one" value="{{ $category->main_image }}">

                            </div>
                        </div>
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                {{-- <input type="hidden" name="id" value="{{$category_id }}"> --}}
                                <label for="exampleInputEmail1">Category Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $category->category_name }}"
                                    name="category_name">
                            </div>
                        </div>
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                {{-- <input type="hidden" name="id" value="{{$category_id }}"> --}}
                                <label for="exampleInputEmail1">Tag Line</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $category->tag_line }}" name="tag_line">
                            </div>
                        </div>
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                {{-- <input type="hidden" name="id" value="{{$category_id }}"> --}}
                                <label for="exampleInputEmail1">Show In Slider</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $category->show_in_slider }}" name="show_in_slider">
                            </div>
                        </div><!-- modal-body -->
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                {{-- <input type="hidden" name="id" value="{{$category_id }}"> --}}
                                <label for="exampleInputEmail1">Status</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $category->status }}" name="status">
                            </div>
                        </div><!-- modal-body -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20">Update</button>
                        </div>
                    </form>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->



    @endsection