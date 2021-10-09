@extends('backend.master')
@section('content')

    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">Add Page</div>

            @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    {{ Session('message') }}
                </div>
            @endif

            <form method="post" action="{{url('post-page')}}">
                {{ csrf_field() }}
                <input type="hidden" name="tbl" value="{{ encrypt('pages') }}">
                <div class="row justify-content-center">
                    <!-- Article Content-->
                    <div class="col-xl-8">
                        <div class="card card-default">
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Page Title</label>
                                    <input type="text" class="form-control" id="heading" onkeyup="generateSlug()" name="title" placeholder="Enter page title">
                                </div>
                                <div class="form-group">
                                    <label>Page Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter page slug">
                                </div>

                                <div class="form-group">
                                    <label>Page Body</label>
                                    <textarea class="form-control" name="body" id="editor"></textarea>
                                </div>


                                <div class="form-group">
                                    <div class="clearfix">
                                        <div class="float-right">
                                            <button class="btn btn-primary" type="submit" value="publish">
                                                <em class="fa fa-check fa-fw"></em>Save
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">

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
                                @foreach ($pages as $page)
                                    <tr id="pages{{ $page->id }}">
                                        <td><a href="{{url('')}}/{{$page->id}}">{{ $page->title }}</a></td>
                                        <td>{{ $page->slug }}</td>
                                        <td class="text-right">
                                            <button class="btn btn-sm btn-danger" type="button"
                                                onclick="deleteAlert({{ $page->id }}, 'pages')">
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
            </form>
        </div>
    </section><!-- Page footer-->



    <script src="{{ url('ckeditor5/ckeditor.js') }}"></script>
    <script src="{{ url('ckfinder/ckfinder.js') }}"></script>
    <script>


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
