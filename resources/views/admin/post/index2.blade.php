@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>post Table</h5>
            </div><!-- sl-page-title -->
{{-- @php
    dd($category)
@endphp --}}
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">post List <a href="{{ URL::to('admin/post/addbyproject/' . $project->id) }}"
                        class="btn btn-teal btn-sm pull-right">Add
                        Post</a> </h6>
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
                <br>
                <div class="table-wrapper">
                    <table id="post_table" class="table table-responsive">
                        <thead>
                            <tr>
                                <th class="wd-5p">post ID</th>
                                <th class="wd-10p">category Name</th>
                                <th class="wd-10p">Project Name</th>
                                <th class="wd-15p">Image one</th>
                                <th class="wd-15p">Image Two</th>
                                <th class="wd-15p">Post Type</th>
                                <th class="wd-8p">Sequence</th>
                                <th class="wd-10p">Status</th>
                                <th class="wd-20p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($post as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    @php
                                        $categoryName = App\Models\Category::where('id', '=', $row->category_id)->first();
                                    @endphp
                                    <td>{{ $categoryName->category_name }}</td>
                                    @php
                                        //  dd($row->project_id);
                                        $projectName = App\Models\project::where('id', '=', $row->project_id)->first();

                                    @endphp
                                    <td>{{ $projectName->project_name }}</td>
                                    <td><img src="{{ asset('public/media/post/' . $row->image_one) }}" height="50px;"
                                            width="50px;"></td>
                                    <td><img src="{{ asset('public/media/post/' . $row->image_two) }}" height="50px;"
                                            width="50px;"></td>
                                    <td>{{ $row->post_type }}</td>
                                    <td>{{ $row->sequence }}</td>
                                    <td>
                                        @if ($row->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ URL::to('admin/edit/post/' . $row->id) }}"
                                            class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                        <a href="{{ URL::to('delete/post/' . $row->id) }}" class="btn btn-sm btn-danger"
                                            id="delete"><i class="fa fa-trash"></i></a>
                                        <a href="{{ URL::to('view/post/' . $row->id) }}" class="btn btn-sm btn-warning"
                                            title="view"><i class="fa fa-eye"></i></a>

                                        @if ($row->status == 1)
                                            <a href="{{ URL::to('inactive/post/' . $row->id) }}"
                                                class="btn btn-sm btn-danger" title="Inactive"><i
                                                    class="fa fa-thumbs-down"></i></a>
                                        @else
                                            <a href="{{ URL::to('active/post/' . $row->id) }}"
                                                class="btn btn-sm btn-success" title="Active"><i
                                                    class="fa fa-thumbs-up"></i></a>
                                        @endif

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $post->links() }}
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div>

@endsection
@section('extra-js')
    <script>
        $(function() {
            'use strict';
            $('#post_table').DataTable({
                responsive: true,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

        });
    </script>
@endsection
