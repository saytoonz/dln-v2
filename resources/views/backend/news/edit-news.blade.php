@extends('backend.master')
@section('content')

    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">Edit News</div>


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

            <form method="post" action="{{url('update-news')}}/{{$data->id}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="tbl" value="{{ encrypt('news') }}">
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="row">
                    <!-- Article Content-->
                    <div class="col-xl-9">
                        <div class="card card-default">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input class="mb-3 form-control form-control-lg" type="text" id="heading"
                                        placeholder="News title..." name="title" onkeyup="generateSlug()" value="{{ $data->title}}">
                                </div>

                                <div class="form-group">
                                    <label>Slug</label>
                                    <input class="mb-3 form-control form-control-lg" type="text" name="slug" id="slug"
                                        placeholder="slug" value="{{ $data->slug}}">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="news_body" id="editor">
                                        {{ $data->news_body}}
                                    </textarea>
                                </div>


                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea name="short_desc" class="mb-3 form-control" cols="5" required>{{!! $data->short_desc !!}}</textarea>
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <button class="btn btn-secondary" type="submit" name="status" value="draft">
                                                <em class="fa fa-edit fa-fw"></em>Draft
                                            </button>
                                            <button class="btn btn-primary" type="submit" name="status" value="publish">
                                                <em class="fa fa-check fa-fw"></em>Publish
                                            </button>
                                        </div>
                                        <div class="float-right">
                                            <button class="btn btn-danger" type="button">
                                                <em class="fas fa-trash-alt fa-fw"></em>Reset
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="lead">List of Comments</p>
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th><strong>Comment ID</strong></th>
                                            <th><strong>Date</strong></th>
                                            <th><strong>Username</strong></th>
                                            <th><strong>Comment excerpt</strong></th>
                                            <th class="text-center"><strong>Current status</strong></th>
                                            <th class="text-right" style="width:130px"><strong>Actions</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>123</td>
                                            <td>10/05/2015</td>
                                            <td><a href="">Jack Jordan</a></td>
                                            <td>Sed quis eros libero, a euismod nisl....</td>
                                            <td class="text-center"><span class="badge badge-success">Approved</span>
                                            </td>
                                            <td class="text-right"><button class="btn btn-sm btn-secondary"
                                                    type="button"><em class="fas fa-pencil-alt"></em></button><button
                                                    class="btn btn-sm btn-danger" type="button"><em
                                                        class="fas fa-trash-alt"></em></button><button
                                                    class="btn btn-sm btn-success" type="button"><em
                                                        class="fa fa-check"></em></button></td>
                                        </tr>
                                        <tr>
                                            <td>456</td>
                                            <td>10/07/2015</td>
                                            <td><a href="">Hailey Mckinney</a></td>
                                            <td>Nulla facilisi.</td>
                                            <td class="text-center"><span class="badge badge-success">Approved</span>
                                            </td>
                                            <td class="text-right"><button class="btn btn-sm btn-secondary"
                                                    type="button"><em class="fas fa-pencil-alt"></em></button><button
                                                    class="btn btn-sm btn-danger" type="button"><em
                                                        class="fas fa-trash-alt"></em></button><button
                                                    class="btn btn-sm btn-success" type="button"><em
                                                        class="fa fa-check"></em></button></td>
                                        </tr>
                                        <tr>
                                            <td>789</td>
                                            <td>11/05/2015</td>
                                            <td><a href="">Peyton Reyes</a></td>
                                            <td>Quisque enim nisi, semper non pulvinar et, aliquam id lorem...</td>
                                            <td class="text-center"><span class="badge badge-warning">Pending</span></td>
                                            <td class="text-right"><button class="btn btn-sm btn-secondary"
                                                    type="button"><em class="fas fa-pencil-alt"></em></button><button
                                                    class="btn btn-sm btn-danger" type="button"><em
                                                        class="fas fa-trash-alt"></em></button><button
                                                    class="btn btn-sm btn-success" type="button"><em
                                                        class="fa fa-check"></em></button></td>
                                        </tr>
                                        <tr>
                                            <td>999</td>
                                            <td>10/06/2015</td>
                                            <td><a href="">Darryl Harper</a></td>
                                            <td>Nulla facilisi.</td>
                                            <td class="text-center"><span class="badge badge-danger">Rejected</span></td>
                                            <td class="text-right"><button class="btn btn-sm btn-secondary"
                                                    type="button"><em class="fas fa-pencil-alt"></em></button><button
                                                    class="btn btn-sm btn-danger" type="button" disabled=""><em
                                                        class="fas fa-trash-alt"></em></button><button
                                                    class="btn btn-sm btn-success" type="button"><em
                                                        class="fa fa-check"></em></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- Article sidebar-->
                    <div class="col-xl-3">
                        <div class="card card-default">

                            <div class="card-body" style="min-height: 200px !important; background: #f1f1f1;">
                                @if ($data->image != "")

                                <div class="form-group">
                                    <label>Featured Image</label>
                                    <p><img id="output" style="width:  100% !important;" src="{{ url('news')}}/{{ $data->image}}"></p>
                                    <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                                            style="display: none"></p>
                                    <p><label for="file" style="cursor: pointer" class="btn btn-primary">Replace
                                            Image</label></p>
                                </div>
                                @else

                                <div class="form-group">
                                    <label>Featured Image</label>
                                    <p><img id="output" style="width:  100% !important;"></p>
                                    <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                                            style="display: none"></p>
                                    <p><label for="file" style="cursor: pointer" class="btn btn-primary">Upload
                                            Image</label></p>
                                </div>
                                @endif
                            </div>
                            <br>
                            <div class="card-body">
                                <p class="lead">News Data</p>
                                <h4 class="my-2">Categories</h4>
                                @foreach ($categories as $category)
                                    <p>
                                        <label for="{{ $category->id }}">
                                        <input type="checkbox" name="categories_id[]" value="{{ $category->id }}" @if (in_array($category->id, $newsCat)) checked @endif> {{ $category->title }}
                                        </label>
                                    </p>
                                @endforeach
                                <h4 class="my-2">Sub-Categories</h4>
                                    @foreach ($subcategories as $subCat)
                                        <p>
                                            <label for="{{ $subCat->id }}">
                                            <input type="checkbox" name="categories_id[]" value="{{ $subCat->id }}" @if (in_array($subCat->id, $newsSubCat)) checked @endif> {{ $subCat->title }}
                                            </label>
                                    </p>
                                    @endforeach

                                <p class="my-2">Tags</p>
                                <select class="chosen-select form-control" title="tags" multiple>
                                    <option>JAVASCRIPT</option>
                                    <option>WEB</option>
                                    <option>BOOTSTRAP</option>
                                    <option>SERVER</option>
                                    <option>HTML5</option>
                                    <option>CSS</option>
                                </select>
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
                                </select>
                                <p class="lead mt-3">SEO Metadata</p>
                                <div class="form-group">
                                    <p>Title</p>
                                    <input class="form-control" type="text" name="seo_title" required
                                        placeholder="Brief description.." value="{{ $data->seo_title }}">
                                </div>
                                <div class="form-group">
                                    <p>Description</p>
                                    <textarea class="form-control" rows="5" placeholder="Max 255 characters..."
                                        name="seo_description" required> {{ $data->seo_description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <p>Keywords</p>
                                    <textarea class="form-control" rows="5" name="seo_keywords" required
                                        placeholder="Separate with comma (,). Max 1000 characters...">{{ $data->seo_keywords}}</textarea>
                                </div>
                            </div>
                            {{-- <div class="card-body">
                                <h4>Publish</h4>
                                <div class="form-group">
                                    <button class="btn btn-secondary" name="draft">Save Draft</button>
                                </div>
                                <p>Status: Draft <a href="#">Edit</a></p>
                                <p>Visibility: Public <a href="#">Edit</a></p>
                                <p>Publish: Immediately <a href="#">Edit</a></p>

                                <div class="row">
                                    <div class="col-sm-12 ">
                                        <button class="btn btn-primary" style="float:  right;"
                                            name="publish">Publish</button>
                                    </div>
                                </div>
                            </div> --}}
                            <br>
                        </div>
                    </div>
                </div>
            </form>
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
