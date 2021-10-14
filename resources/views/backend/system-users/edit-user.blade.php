@extends('backend.master')
@section('content')


    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>Edit User</div>
            </div>


            <div class="row justify-content-center">
                <div class="col-xl-6">
                    @if (Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            {{ Session('message') }}
                        </div>
                    @endif
                    <form method="post" action="{{ url('update-user') }}/{{ $data->id }}"
                        enctype="multipart/form-data" class="mb-4">
                        @csrf
                        <input type="hidden" name="tbl" value="{{ encrypt('users') }}">
                        <input type="hidden" name="id" value="{{ $data->id }}">

                        <div class="form-group">
                            <p class="my-2">User Permissions</p>
                            <select class="chosen-select form-control" required name="permissions[]" multiple style="height: auto">
                                @foreach ($pems as $permission)
                                     @if (in_array($permission->id, explode(',', $data->permissions)))
                                       <option selected value="{{ $permission->id }}">{{ $permission->title }}
                                        </option>

                                    @else
                                        <option value="{{ $permission->id }}">{{ $permission->title }}</option>

                                    @endif
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <div class="card-body" style="min-height: 200px !important; background: #f1f1f1;">
                                <div class="form-group">
                                    <label>User Image</label>
                                    <p><img id="output" src="{{ url('users') }}/{{ $data->image }}"
                                            style="width:  100% !important;"></p>
                                    <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                                            style="display: none"></p>
                                    <p><label for="file" style="cursor: pointer" class="btn btn-primary">Choose
                                            Image</label></p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <p class="my-2">Full Name</p>

                            <input class="form-control" type="text" name="name" value="{{ $data->name }}"
                                placeholder="Full Name" required>
                        </div>

                        <button class="btn btn-primary btn-block" type="submit">
                            Update User Info
                        </button>
                    </form>


                </div>
            </div>
        </div>
    </section>

    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>

@endsection
