@extends('backend.master')
@section('content')

    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">Edit/Update Advert</div>

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


            <form method="post" action="{{ url('update-advert') }}/{{ $data->id }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="tbl" value="{{ encrypt('advertisements') }}">
                <input type="hidden" name="id" value="{{ $data->id }}">

                <div class="row justify-content-center">
                    <!-- Article Content-->
                    <div class="col-xl-9">
                        <div class="card card-default">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="mb-3 form-control form-control-lg" type="text"
                                        placeholder="Enter title here..." name="title" value="{{ $data->title }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Advert url</label>
                                    <input class="mb-3 form-control form-control-lg" type="url" name="url" placeholder="url"
                                        value="{{ $data->url }}" required>
                                </div>

                                <div class="form-group">
                                    <div class="card-body" style="min-height: 200px !important; background: #f1f1f1;">
                                        <div class="form-group">
                                            <label>Advert Image</label>
                                            <p><img id="output" style="width:  100% !important;"
                                                    src="{{ url('advertisement') }}/{{ $data->image }}"></p>
                                            <p><input type="file" accept="image/*" name="image" id="file"
                                                    onchange="loadFile(event)" style="display: none"></p>
                                            <p><label for="file" style="cursor: pointer" class="btn btn-secondary">Upload
                                                    Image</label></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Location</label>
                                    <select name="location" class="custom-select custom-select-sm">

                                        <option selected>{{ $data->location }}</option>
                                        @if ($data->location == 'leaderboard')
                                            <option>sidebar-top</option>
                                            <option>sidebar-bottom</option>
                                        @elseif($data->location == 'sidebar-top')
                                            <option>leaderboard</option>
                                            <option>sidebar-bottom</option>
                                        @else
                                            <option>leaderboard</option>
                                            <option>sidebar-top</option>
                                        @endif
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="custom-select custom-select-sm">
                                        <option selected>{{ $data->status }}</option>
                                        @if ($data->status == 'display')
                                            <option>hide</option>
                                        @else
                                            <option>display</option>
                                        @endif
                                    </select>

                                    <div class="clearfix">
                                        <br>
                                        <div class="float-right">
                                            <button class="btn btn-primary" type="submit">
                                                <em class="fas fa-check fa-fw"></em>Update Advert
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>

@endsection
