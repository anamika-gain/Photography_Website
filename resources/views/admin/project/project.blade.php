@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>project Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">project List

                    <a href="{{ route('add.project') }} " class="btn btn-sm btn-warning" style="float: right;">Add
                        Project</a>
                </h6>
                <br>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap table-responsive">
                        <thead>
                            <tr>
                                <th class="wd-5p">ID</th>
                                <th class="wd-10p">project Name</th>
                                <th class="wd-15p">Project category</th>
                                <th class="wd-15p">project Image</th>
                                <th class="wd-15p">Tag Line</th>
                                <th class="wd-15p">Rolling Text</th>
                                <th class="wd-15p">Project Location</th>
                                <th class="wd-15p">Project Time</th>
                                <th class="wd-15p">Status</th>
                                <th class="wd-20p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project as $row)
                                <tr>
                                    <td>{{ $row['id'] }}</td>
                                    <td><a href="{{ URL::to('admin/project/' . $row['id']) }}" role="button"
                                            style="">{{ $row['project_name'] }}</a></td>

                                    @php
                                        $categoryName = DB::table('projects')
                                            ->join('categories', 'projects.category_id', 'categories.id')
                                            ->select('categories.category_name')
                                            ->first();
                                    @endphp
                                    <td>{{ $categoryName->category_name }}</td>
                                    <td><img src="{{ URL::to($row['main_image']) }}" style="height: 80px; width: 80px;">
                                    </td>
                                    <td>{{ $row['tag_line'] }}</td>
                                    <td>{{ $row['rolling_text'] }}</td>
                                    <td>{{ $row['project_location'] }}</td>
                                    <td>{{ $row['project_time'] }}</td>
                                    <th class="wd-15p">
                                        @if ($row['status'] == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </th>
                                    <td>
                                        <a href="{{ URL::to('edit/project/' . $row['id']) }}"
                                            class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                        <a href="{{ URL::to('delete/project/' . $row['id']) }}"
                                            class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                                        <a href="{{ URL::to('view/project/' . $row['id']) }}"
                                            class="btn btn-sm btn-warning" title="view"><i class="fa fa-eye"></i></a>

                                        @if ($row['status'] == 1)
                                            <a href="{{ URL::to('inactive/project/'.$row['id']) }}"
                                                class="btn btn-sm btn-danger" title="Inactive"><i
                                                    class="fa fa-thumbs-down"></i></a>
                                        @else
                                            <a href="{{ URL::to('active/project/'.$row['id']) }}"
                                                class="btn btn-sm btn-success" title="Active"><i
                                                    class="fa fa-thumbs-up"></i></a>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div>


    <!-- LARGE MODAL -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="{{ route('store.project') }}">
                    @csrf
                    <div class="modal-body pd-20">
                        <div class="form-group">
                            <label for="exampleInputEmail1">project Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="project" name="project_name">
                        </div>
                    </div><!-- modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div><!-- modal-dialog -->
    </div><!-- modal -->
@endsection


@section('extra-js')
    <script src="{{ asset('public/backend/lib/spectrum/spectrum.js') }}"></script>
@endsection
