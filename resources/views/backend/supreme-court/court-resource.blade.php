@extends('backend.master')
@section('content')


    <section class="section-container">

        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>Resources</div>
            </div>
            <div class="row todo">
                <div class="col-lg-3">
                    @if (Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
                            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            {{ Session('message') }}
                        </div>
                    @endif
                    <div class="pr-3">
                        <form method="post" action="{{ url('add-resource') }}" enctype="multipart/form-data"
                            class="mb-4">
                            @csrf
                            <input type="hidden" name="tbl" value="{{ encrypt('resources') }}">

                            <div class="form-group">
                                <label>Display name</label>
                                <p>
                                    <input class="form-control" type="text" name="title" placeholder="Display name"
                                        required onkeyup="generateSlug2()" id="title">
                                </p>
                            </div>

                            <div class="form-group">
                                <label>Slug</label>
                                <p>
                                    <input class="form-control" type="text" name="slug" placeholder="Slug"
                                        id="resource-slug" required readonly>
                                </p>
                            </div>

                            <div class="form-group">
                                <label>Resouce File</label>
                                <p>
                                    <input name="image" required class="form-control filestyle" type="file"
                                        data-classbutton="btn btn-secondary" data-classinput="form-control inline"
                                        data-icon="&lt;span class='fa fa-upload mr-2'&gt;&lt;/span&gt;">
                                </p>
                            </div>

                            <div class="form-group">
                                <label>Select category</label>
                                <select class="form-control" id="select2-1" name="category_id" required>
                                    @foreach ($cats as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="custom-select custom-select-sm">
                                    <option>display</option>
                                    {{-- <option>hide</option> --}}
                                </select>
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">
                                Add Resource
                            </button>
                        </form>
                    </div>
                    <br>
                    <br>
                    <br>

                    <div class="pr-3">

                        @if (Session::has('message-2'))
                            <div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
                                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                {{ Session('message-2') }}
                            </div>
                        @endif
                        <h3>Create resource category</h3>
                        <form method="post" action="{{ url('add-resource-cats') }}" enctype="multipart/form-data"
                            class="mb-4">
                            @csrf
                            <input type="hidden" name="tbl" value="{{ encrypt('resource_cats') }}">
                            <div class="form-group">
                                <label>Title</label>
                                <p>
                                    <input class="form-control" type="text" name="title" placeholder="Display name"
                                        required onkeyup="generateSlug()" id="heading">
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <p>
                                    <input class="form-control" type="text" name="slug" placeholder="Slug" id="slug"
                                        required readonly>
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="custom-select custom-select-sm">
                                    <option>display</option>
                                    {{-- <option>hide</option> --}}
                                </select>
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">
                                Add Category
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9 todo-item-list">

                    @if (Session::has('flash-error-message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        {{ Session('flash-error-message') }}
                    </div>
                @endif

                @if (Session::has('flash-success-message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        {{ Session('flash-success-message') }}
                    </div>
                @endif

                    <form method="POST" action="{{ url('multiple-delete') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="tbl" value="{{ encrypt('resources') }}">
                        <input type="hidden" name="tblid" value="{{ encrypt('id') }}">

                        <div class="card-footer">
                            <div class="d-flex">
                                <div>
                                    <br>
                                    <div class="input-group">
                                        <select class="custom-select" name="bulk-action">
                                            <option value="0" selected>Bulk action</option>
                                            <option value="1">Delete</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="submit">Apply</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <div class="col-12 d-flex justify-content-end pt-4" class="li: { list-style: none; }">
                                        {{ $resources->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive" style="background: #fff;">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th data-check-all>
                                            <div class="checkbox c-checkbox" data-toggle="tooltip" data-title="Check All">
                                                <label><input type="checkbox"><span class="fa fa-check"></span></label>
                                            </div>
                                        </th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>File</th>
                                        <th>Slug</th>
                                        <th>Date added</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($resources) > 0)
                                        @foreach ($resources as $resource)
                                            <tr>
                                                <td>

                                                    <div class="checkbox c-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="select-data[]"
                                                                value="{{ $resource->id }}">
                                                            <span class="fa fa-check"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>{{ $resource->title }}</td>
                                                <td>{{ $resource->category_name }}</td>
                                                <td><a href="{{url('resources')}}/{{ $resource->image }}" target="_blank">{{ $resource->image }}</a></td>
                                                <td>{{ $resource->slug }}</td>
                                                <td>{{ $resource->created_at }}</td>
                                            </tr>

                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan='9' align="center">
                                                No data found.
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </form>


                    <div class="row">
                        <div class="col-12 d-flex justify-content-end pt-4" class="li: { list-style: none; }">
                            {{ $resources->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Page footer-->

    <script>
        function generateSlug() {
            var tabName = $('#heading').val();
            tabName = tabName.replace(/[^a-zA-Z0-9]/g, '-').toLowerCase();
            $('#slug').val(tabName);
        }


        function generateSlug2() {
            var tabName = $('#title').val();
            tabName = tabName.replace(/[^a-zA-Z0-9]/g, '-').toLowerCase();
            $('#resource-slug').val(tabName);
        }
    </script>
@endsection
