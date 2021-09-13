@extends('backend.master')
@section('content')
    <!-- Main section-->
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>Site Tabs<small>The Tabs that would show on top of the main website for navigations</small></div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <!-- START card-->
                    <div class="card card-default">
                        <div class="card-header">Edit Tab</div>
                        @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                {{ Session('message') }}
                            </div>

                        @endif
                        <div class="card-body">
                            <form method="post" action="{{ url('update-category') }}/{{ $singleData->id }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="tbl" value="{{ encrypt('categories') }}">
                                <input type="hidden" name="id" value="{{ $singleData->id }}">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" value="{{ $singleData->title }}" type="text"
                                        name="title" placeholder="Tab name" required id='tabName' onkeyup="generateSlug()">
                                </div>

                                <div class="form-group">
                                    <label>Slug</label>
                                    <input class="form-control" type="text" name="slug" value="{{ $singleData->slug }}"
                                        placeholder="Slug" id='tabSlug' readonly>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="custom-select custom-select-sm" name="status">
                                        <option value="{{ $singleData->status }}">{{ $singleData->status }}</option>
                                         @if ($singleData->status == 'Inactive')
                                            <option>Active</option>
                                        @else
                                            <option>Inactive</option>
                                        @endif
                                    </select>
                                </div>

                                <button class="btn btn-sm btn-secondary" type="submit">Update</button>
                            </form>
                        </div>
                    </div><!-- END card-->
                </div>
                <div class="col-xl-6">
                    <!-- START card-->

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
                        <div class="card card-default">
                            <div class="card-footer">
                                <div class="d-flex">
                                    <div>
                                        <input type="hidden" name="tbl" value="{{ encrypt('categories') }}">
                                        <input type="hidden" name="tblid" value="{{ encrypt('id') }}">
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
                                    <div class="ml-auto"></div>
                                </div>
                            </div>
                            <!-- START table-responsive-->
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th data-check-all>
                                                <div class="checkbox c-checkbox" data-toggle="tooltip"
                                                    data-title="Check All">
                                                    <label><input type="checkbox"><span
                                                            class="fa fa-check"></span></label>
                                                </div>
                                            </th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($data) > 0)


                                            @foreach ($data as $category)
                                                <tr>
                                                    <td>

                                                        <div class="checkbox c-checkbox">
                                                            <label>
                                                                <input type="checkbox" name="select-data[]"
                                                                    value="{{ $category->id }}">
                                                                <span class="fa fa-check"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td><a
                                                            href="{{ url('edit-category') }}/{{ $category->id }}">{{ $category->title }}</a>
                                                    </td>
                                                    <td>{{ $category->slug }}</td>
                                                    <td>{{ $category->status }}</td>
                                                </tr>
                                            @endforeach

                                        @else
                                            <tr>
                                                <td colspan="4" align="center">No data found. </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <!-- END table-responsive-->

                    </form>
                </div>


                <!-- END card-->
            </div>
        </div>
        <!-- END row-->
        </div>
    </section>

    <script>
        function generateSlug() {
            var tabName = $('#tabName').val();
            tabName = tabName.replace(/[^a-zA-Z0-9]/g, '').toLowerCase();
            $('#tabSlug').val(tabName);
        }
    </script>

@endsection
