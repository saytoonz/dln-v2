@extends('backend.master')
@section('content')

    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">Edit Happilex</div>

            <div class="row justify-content-center">
                <!-- Article Content-->
                <div class="col-xl-9">

                @if (Session::has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        {{ Session('message') }}
                    </div>
                @endif

                    <form method="post" action="{{ url('update-happilex') }}/{{ $data->id }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="tbl" value="{{ encrypt('happilexes') }}">
                        <input type="hidden" name="id" value="{{ $data->id }}">

                        <div class="card card-default">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input class="mb-3 form-control form-control-lg" type="text" id="heading"
                                        value="{{ $data->title }}" placeholder="Happilex title..." name="title"
                                        onkeyup="generateSlug()" required>
                                </div>

                                <div class="form-group">
                                    <label>Slug</label>
                                    <input class="mb-3 form-control form-control-lg" type="text" name="slug" id="slug"
                                        value="{{ $data->slug }}" placeholder="slug" required>
                                </div>


                                <div class="card-body" style="min-height: 200px !important; background: #f1f1f1;">
                                    <div class="form-group">
                                        <label>Happilex Image</label>
                                        <p><img id="output" src="{{ url('happilexes') }}/{{ $data->image }}"
                                                style="width:  100% !important;"></p>
                                        <p><input type="file" accept="image/*" name="image" id="file"
                                                onchange="loadFile(event)" style="display: none"></p>
                                        <p><label for="file" style="cursor: pointer" class="btn btn-primary">Upload
                                                Image</label></p>
                                    </div>
                                </div>
                                <br>


                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select name="cat_id" class="custom-select custom-select-sm" required>
                                        <option selected value="{{ $data->category->id }}">
                                            {{ $data->category->title }}
                                        </option>
                                        @foreach ($categories as $item)
                                            @if ($data->category->id != $item->id)
                                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Source(Optional)</label>
                                    <input type="text" name="source" value="{{ $data->source }}"
                                        placeholder="Source(Optional)" class="mb-3 form-control form-control-lg">

                                    <div class="clearfix">
                                        <div class="float-right">
                                            <button class="btn btn-primary" type="submit">
                                                <em class="fa fa-check fa-fw"></em>Update
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <p class="lead">List of Comments</p>
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th><strong>Comment ID</strong></th>
                                        <th><strong>Date</strong></th>
                                        <th><strong>Name</strong></th>
                                        <th><strong>Email</strong></th>
                                        <th><strong>Comment</strong></th>
                                        <th class="text-center"><strong>Current status</strong></th>
                                        <th class="text-right" style="width:130px"><strong>Actions</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comments as $comment)
                                        <tr>
                                            <td>{{ $comment->id }}</td>
                                            <td>{{ $comment->created_at }}</td>
                                            <td>{{ $comment->name }}</td>
                                            <td>{{ $comment->email }}</td>
                                            <td>{{ $comment->message }}</td>
                                            <td class="text-center">
                                                @if ($comment->status == 'approved')
                                                    <span class="badge badge-success">Approved</span>
                                                @else
                                                    @if ($comment->status == 'pending')
                                                        <span class="badge badge-warning">Pending</span>
                                                    @else
                                                        <span class="badge badge-danger">Rejected</span>
                                                    @endif
                                                @endif
                                            </td>
                                            <td class="text-right">
                                                <button class="btn btn-sm btn-danger" type="button"
                                                    onclick="updateAlert('{{ $comment->id }}', 'happilex_comments', 'status', 'rejected')">
                                                    <em class="fas fa-trash-alt"></em>
                                                </button>
                                                <button class="btn btn-sm btn-success" type="button"
                                                    onclick="updateAlert('{{ $comment->id }}', 'happilex_comments', 'status', 'approved')">
                                                    <em class="fa fa-check"></em>
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



    <script src="{{ url('ckeditor5/ckeditor.js') }}"></script>
    <script src="{{ url('ckfinder/ckfinder.js') }}"></script>
    {{-- <script src="https://ckeditor.com/apps/ckfinder/3.5.0/ckfinder.js"></script> --}}
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

        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: {
                    items: [
                        'heading', '|',
                        'fontfamily', 'fontsize', '|',
                        'alignment', '|',
                        'fontColor', 'fontBackgroundColor', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
                        'link', '|',
                        'outdent', 'indent', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'code', 'codeBlock', '|',
                        'insertTable', '|',
                        'ckfinder', 'mediaEmbed', 'blockQuote', '|',
                        'undo', 'redo'
                    ],
                    shouldNotGroupWhenFull: true
                },
                ckfinder: {
                    options: {
                        resourceType: 'Images'
                    },
                    openerMethod: 'modal',
                    uploadUrl: "{{ url('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json') }}",
                }
            })
            .then(editor => {
                window.editor = editor;
                console.log(Array.from(editor.ui.componentFactory.names()));
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>

@endsection
