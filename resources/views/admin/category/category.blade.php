@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Category Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Category List
                    <a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal"
                        data-target="#modaldemo3">Add New</a>
                </h6>
                <br>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th class="wd-5p">ID</th>
                                <th class="wd-10p">Category Name</th>
                                <th class="wd-15p">Category Image</th>
                                <th class="wd-15p">Tag Line</th>
                                <th class="wd-15p">Status</th>
                                <th class="wd-15p">Show In slider</th>
                                <th class="wd-20p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->category_name }}</td>

                                    <td><img src="{{ URL::to($row->main_image) }}" style="height: 80px; width: 80px;">
                                    </td>
                                    <td>{{ $row->tag_line }}</td>
                                    <td class="wd-15p">
                                        @if ($row->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                        </td>
                                    <td class="wd-15p">
                                        @if ($row->show_in_slider == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                        </th>
                                    <td>
                                        <a href="{{ URL::to('edit/category/' . $row->id) }}"
                                            class="btn btn-sm btn-info">edit</a>
                                        <a href="{{ URL::to('delete/category/' . $row->id) }}"
                                            class="btn btn-sm btn-danger" id="delete">delete</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->


        <!--modal-->
        <!-- LARGE MODAL -->
        <div id="modaldemo3" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20 col-md-12">
                        <h5 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Category Add</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('store.category') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body modal-xl">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Category Name" name="category_name">
                            </div>
                        </div>
                        <!-- modal-body -->
                        <div class="modal-body modal-xl">


                            <div class="form-group">
                                <label for="exampleInputEmail1">Image </label>

                                <input type="file" id="file" class=" form-control" name="main_image" placeholder="image">
                            </div>
                        </div>
                        <div class="modal-body modal-xl">
                            <div class="form-group ">
                                <label for="exampleInputEmail1">Tag Line</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Tag Line" name="tag_line">
                            </div>
                        </div>

                        <div class="modal-body modal-xl">
                            <div class="form-group ">
                                <label for="exampleInputEmail1">Status</label>
                                <select class="form-control" name="status">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-body modal-xl">
                            <div class="form-group ">
                                <label for="exampleInputEmail1">Show in slider</label>
                                <select class="form-control" name="show_in_slider">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>



                        <!-- modal-body -->
                        <div class="modal-footer  modal-xl">
                            <button type="submit" class="btn btn-info pd-x-300">Submit</button>

                        </div>
                    </form>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->
    @endsection
