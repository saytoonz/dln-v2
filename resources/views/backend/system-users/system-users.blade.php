@extends('backend.master')
@section('content')

    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>System Users
                    <small>{{ count($data) }} Users</small>
                </div>
            </div>
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

            <div class="row">
                <!-- Article Content-->
                <div class="col-xl-12">
                    <form method="POST" action="{{ url('multiple-delete') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="tbl" value="{{ encrypt('users') }}">
                        <input type="hidden" name="tblid" value="{{ encrypt('id') }}">
                        <div class="card">
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
                                                &nbsp;
                                                <a href="{{ url('register') }}" class="btn-secondary btn"> Add User</a>

                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="ml-auto">
                                        <div class="col-12 d-flex justify-content-end pt-4"
                                            class="li: { list-style: none; }">
                                            {{ $data->links('pagination::bootstrap-4') }}
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
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
                                            <th>Image</th>
                                            <th>Email</th>
                                            <th>Permissions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($data) > 0)
                                            @foreach ($data as $user)
                                                <tr>
                                                    <td>

                                                        <div class="checkbox c-checkbox">
                                                            <label>
                                                                <input type="checkbox" name="select-data[]"
                                                                    value="{{ $user->id }}">
                                                                <span class="fa fa-check"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td><a
                                                            href="{{ url('edit-user') }}/{{ $user->id }}">{{ $user->name }}</a>
                                                    </td>
                                                    <td><img src="{{url('users')}}/{{ $user->image }}" alt="" width="100px" style="border-radius: 20px;"></td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        @foreach ($user->permissions as $key=>$item)
                                                            {{$item->title}}
                                                            @if ($key < count($user->permissions) -1)
                                                                ,
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                </tr>

                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan='9' align="center">
                                                    No news found.
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>

                    {{-- <div class="row">
                        <div class="col-12 d-flex justify-content-end pt-4" class="li: { list-style: none; }">
                            {{ $happilexes->links('pagination::bootstrap-4') }}
                        </div>
                    </div> --}}

                </div>

            </div>
        </div>
    </section><!-- Page footer-->



@endsection
