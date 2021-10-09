@extends('backend.master')
@section('content')

    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">Edit Firm Info</div>

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


        <form method="post" action="{{ url('update-firm') }}/{{ $data->id }}" enctype="multipart/form-data">
            {{ csrf_field() }}
                <input type="hidden" name="tbl" value="{{ encrypt('law_firms') }}">
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="row">
                    <!-- Article Content-->
                    <div class="col-xl-9">
                        <div class="card card-default">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Law Firm</label>
                                    <input class="mb-3 form-control form-control-lg" type="text" id="heading" value="{{ $data->law_firm }}"
                                        placeholder="Law firm" name="law_firm" required onkeyup="generateSlug()">
                                </div>

                                <div class="form-group">
                                    <label>Slug</label>
                                    <input class="mb-3 form-control form-control-lg" type="text" name="slug" id="slug" value="{{ $data->slug }}"
                                        placeholder="slug">
                                </div>
                                <div class="form-group">
                                    <label>Lawyer</label>
                                    <input class="mb-3 form-control form-control-lg" type="text" name="lawyer" placeholder="Lawyer" value="{{ $data->lawyer }}">
                                </div>
                                <div class="form-group">
                                    <label>Position in firm</label>
                                    <input class="mb-3 form-control form-control-lg" type="text" name="position" placeholder="Position in firm" value="{{ $data->position }}">
                                </div>
                                <div class="form-group">
                                    <label>Year of Call</label>
                                    <input class="mb-3 form-control form-control-lg" type="number" name="year_of_call" placeholder="Year of Call" value="{{ $data->year_of_call }}">
                                </div>


                                <div class="form-group">
                                    <label>About Firm</label>
                                    <textarea class="form-control" name="about" id="editor">{{ $data->about }}</textarea>
                                </div>


                                <div class="form-group">
                                    <div class="clearfix">
                                        <div class="float-right">
                                            <button class="btn btn-primary" type="submit" value=">Add Law Firm" title=">Add Law Firm">
                                                <em class="fa fa-check fa-fw"></em>Update Firm
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
                                    <label>Firm Image</label>
                                    <p><img id="output" style="width:  100% !important;" src="{{url('law_firms')}}/{{$data->image}}"></p>
                                    <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                                            style="display: none"></p>
                                    <p><label for="file" style="cursor: pointer" class="btn btn-primary">Upload
                                            Image</label></p>
                                </div>
                            </div>
                            <br>
                            <div class="card-body">
                                <p class="lead mt-3">SEO Metadata</p>
                                <div class="form-group">
                                    <p>Title</p>
                                    <input class="form-control" type="text" name="seo_title" required value="{{ $data->seo_title }}"
                                        placeholder="Brief description..">
                                </div>
                                <div class="form-group">
                                    <p>Description</p>
                                    <textarea class="form-control" rows="5" placeholder="Max 255 characters..."
                                        name="seo_description" required>{{ $data->seo_description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <p>Keywords</p>
                                <input class="form-control" type="text" name="seo_keywords" data-role="tagsinput" placeholder="Max 1000 characters..." value="{{ $data->seo_keywords }}">
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
                // console.log(Array.from(editor.ui.componentFactory.names()));
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>

@endsection
