@extends('backend.master')
@section('content')

    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">Add Happilex</div>


            <form method="post" action="{{ url('post-happilex') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="tbl" value="{{ encrypt('happilexes') }}">
                <div class="row">
                    <!-- Article Content-->
                    <div class="col-xl-8">
                        @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                {{ Session('message') }}
                            </div>
                        @endif
                        <div class="card card-default">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input class="mb-3 form-control form-control-lg" type="text" id="heading"
                                        placeholder="Happilex title..." name="title" onkeyup="generateSlug()" required>
                                </div>

                                <div class="form-group">
                                    <label>Slug</label>
                                    <input class="mb-3 form-control form-control-lg" type="text" name="slug" id="slug"
                                        placeholder="slug" required>
                                </div>


                                <div class="card-body" style="min-height: 200px !important; background: #f1f1f1;">
                                    <div class="form-group">
                                        <label>Happilex Image</label>
                                        <p><img id="output" style="width:  100% !important;"></p>
                                        <p><input type="file" accept="image/*" name="image" id="file"
                                                onchange="loadFile(event)" style="display: none" required></p>
                                        <p><label for="file" style="cursor: pointer" class="btn btn-primary">Upload
                                                Image</label></p>
                                    </div>
                                </div>
                                <br>


                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select name="cat_id" class="custom-select custom-select-sm" required>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Source(Optional)</label>
                                    <input type="text" name="source" placeholder="Source(Optional)" class="mb-3 form-control form-control-lg">

                                    <div class="clearfix">
                                        <div class="float-right">
                                            <button class="btn btn-primary" type="submit">
                                                <em class="fa fa-check fa-fw"></em>Publish
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>

            <!-- sidebar-->

            <div class="col-xl-4">
                @if (Session::has('message-2'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        {{ Session('message-2') }}
                    </div>
                @endif
                <form method="POST" action="{{ url('add-happilex-category') }}">
                    @csrf
                    <input type="hidden" name="tbl" value="{{ encrypt('happilex_cats') }}">

                    <div class="card card-default">
                        <div class="card-body">
                            <p class="lead mt-3">Add Category</p>
                            <div class="form-group">
                                <p>Title</p>
                                <input class="form-control" type="text" name="title" required
                                    placeholder="Brief description.." id="heading-2" onkeyup="generateSlug2()">
                            </div>
                            <div class="form-group">
                                <p>Slug</p>
                                <input class="form-control" type="text" name="slug" required
                                    placeholder="Brief description.." id="slug-2">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <button class="btn btn-secondary" type="submit" style="float:  right;">Save</button>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </form>
                <br>
                <div class="card card-default">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th><strong>Title</strong></th>
                                    <th><strong>Slug</strong></th>
                                    <th class="text-right" style="width:130px"><strong>Actions</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr id="happilex_cats{{ $category->id }}">
                                        <td>{{ $category->title }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td class="text-right">
                                            <button class="btn btn-sm btn-danger" type="button"
                                                onclick="deleteAlert({{ $category->id }}, 'happilex_cats')">
                                                <em class="fas fa-trash-alt"></em>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section><!-- Page footer-->



    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        }


        function generateSlug() {
            var tabName = $('#heading').val();
            tabName = tabName.replace(/[^a-zA-Z0-9]/g, '-').toLowerCase();
            $('#slug').val(tabName);
        }



        function generateSlug2() {
            var tabName = $('#heading-2').val();
            tabName = tabName.replace(/[^a-zA-Z0-9]/g, '-').toLowerCase();
            $('#slug-2').val(tabName);
        }
    </script>

@endsection
