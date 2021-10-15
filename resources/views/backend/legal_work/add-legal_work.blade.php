@extends('backend.master')
@section('content')

    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">Add Legal Work</div>

            @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    {{ Session('message') }}
                </div>
            @endif

            <form method="post" action="{{url('post-legal_work')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="tbl" value="{{ encrypt('legal_works') }}">
                <div class="row">
                    <!-- Article Content-->
                    <div class="col-xl-9">
                        <div class="card card-default">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input class="mb-3 form-control form-control-lg" type="text" id="heading"
                                        placeholder="News title..." name="title" onkeyup="generateSlug()">
                                </div>

                                <div class="form-group">
                                    <label>Slug</label>
                                    <input class="mb-3 form-control form-control-lg" type="text" name="slug" id="slug"
                                        placeholder="slug">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="news_body" id="editor"></textarea>
                                </div>


                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea name="short_desc" class="mb-3 form-control" cols="5" required></textarea>
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <button class="btn btn-secondary" type="submit" name="status" value="draft">
                                                <em class="fa fa-edit fa-fw"></em>Draft
                                            </button>
                                        </div>
                                        <div class="float-right">
                                            <button class="btn btn-primary" type="submit" name="status" value="publish">
                                                <em class="fa fa-check fa-fw"></em>Publish
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Article sidebar-->
                    <div class="col-xl-3">
                        <div class="card card-default">

                            <div class="card-body" style="min-height: 200px !important; background: #f1f1f1;">
                                <div class="form-group">
                                    <label>Featured Image</label>
                                    <p><img id="output" style="width:  100% !important;"></p>
                                    <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                                            style="display: none"></p>
                                    <p><label for="file" style="cursor: pointer" class="btn btn-primary">Upload
                                            Image</label></p>
                                </div>
                            </div>
                            <br>
                            <div class="card-body">
                                <p class="lead">News Data</p>

                                <p class="my-2">Author</p>
                                <input class="form-control" type="text" name="author">


                                {{-- <p class="my-2">Categories</p>
                                <select class="chosen-select form-control" required name="categories_id[]" multiple>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select> --}}
                                <p class="my-2">Categories</p>
                                <select class="chosen-select form-control" required name="subcategories_id[]" multiple>
                                    @foreach ($subcategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>

                                <p class="my-2">Tags</p>
                                <input class="form-control" type="text" name="tags" data-role="tagsinput">
{{--
                                <p class="my-2">Reviewers</p>
                                <select class="chosen-select form-control" name="reviewers[]" multiple>
                                    <option>adam@email.com</option>
                                    <option>amalie@email.com</option>
                                    <option>wladimir@email.com</option>
                                    <option>samantha@email.com</option>
                                    <option>estefanía@email.com</option>
                                    <option>natasha@email.com</option>
                                    <option>nicole@email.com</option>
                                    <option>adrian@email.com</option>
                                </select> --}}
                                <p class="lead mt-3">SEO Metadata</p>
                                <div class="form-group">
                                    <p>Title</p>
                                    <input class="form-control" type="text" name="seo_title" required
                                        placeholder="Brief description..">
                                </div>
                                <div class="form-group">
                                    <p>Description</p>
                                    <textarea class="form-control" rows="5" placeholder="Max 255 characters..."
                                        name="seo_description" required></textarea>
                                </div>
                                <div class="form-group">
                                    <p>Keywords</p>
                                    <input class="form-control" type="text" name="seo_keywords" data-role="tagsinput" placeholder="Add keywords...">

                                </div>
                            </div>

                            <br>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section><!-- Page footer-->



    <script src="{{ url('ckeditor5/ckeditor.js') }}"></script>
    <script src="{{ url('ckfinder/ckfinder.js') }}"></script>
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
                // console.log(Array.from(editor.ui.componentFactory.names()));
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>

@endsection
