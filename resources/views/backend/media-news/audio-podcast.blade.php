@extends('backend.master')
@section('content')


    <section class="section-container">

        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>Audio/Podcast</div>
            </div>
            <div class="row justify-content-center">
                @if (in_array(7,explode(',',\Auth::user()->permissions)))
                <div class="col-lg-3">
                    @if (Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
                            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            {{ Session('message') }}
                        </div>
                    @endif
                    <div class="pr-3">
                        <form method="post" action="{{ url('add-justice') }}"  enctype="multipart/form-data"  class="mb-4">
                            @csrf
                            <input type="hidden" name="tbl" value="{{ encrypt('audios') }}">


                            <div class="form-group">
                                <input class="form-control" type="text" name="title" onkeyup="generateSlug()" id="heading" placeholder="Title of item.."
                                    required>
                            </div>

                            <div class="form-group">
                                <label>Audio File</label>
                                <p>
                                    <input name="image" required class="form-control filestyle" type="file" accept="audio/*"
                                        data-classbutton="btn btn-secondary" data-classinput="form-control inline"
                                        data-icon="&lt;span class='fa fa-upload mr-2'&gt;&lt;/span&gt;">
                                </p>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="short_desc" placeholder="Short info of justice.."
                                    rows="8" required></textarea>
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">
                                Upload Audio
                            </button>
                        </form>
                    </div>
                </div>
                @endif
                @if (in_array(13,explode(',',\Auth::user()->permissions)))
                <div class="col-lg-9 todo-item-list">

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
                        <input type="hidden" name="tbl" value="{{ encrypt('audios') }}">
                        <input type="hidden" name="tblid" value="{{ encrypt('id') }}">

                        <div class="card-footer">
                            <div class="d-flex">

                                @if (in_array(8,explode(',',\Auth::user()->permissions)))
                                <div>
                                    <br>
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
                                @endif

                                <div class="ml-auto">
                                    <div class="col-12 d-flex justify-content-end pt-4" class="li: { list-style: none; }">
                                        {{ $data->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive" style="background: #fff;">
                            <table class="table table-hover">
                                <thead>

                                    <tr>
                                    @if (in_array(8,explode(',',\Auth::user()->permissions)))
                                        <th data-check-all>
                                            <div class="checkbox c-checkbox" data-toggle="tooltip" data-title="Check All">
                                                <label><input type="checkbox"><span class="fa fa-check"></span></label>
                                            </div>
                                        </th>
                                        @endif
                                        <th>Title</th>
                                        <th>Audio</th>
                                        <th>Short Desc</th>
                                        <th>Date added</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($data) > 0)
                                        @foreach ($data as $item)
                                            <tr>

                                        @if (in_array(8,explode(',',\Auth::user()->permissions)))
                                                <td>
                                                    <div class="checkbox c-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="select-data[]"
                                                                value="{{ $item->id }}">
                                                            <span class="fa fa-check"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                @endif
                                                <td>{{ $item->title }}</td>
                                                <td>
                                                    <audio controls>
                                                    <source src="{{url('audios')}}/{{$item->image}}" type="audio/ogg" />
                                                    <source src="{{url('audios')}}/{{$item->image}}" type="audio/mpeg" />
                                                </audio>
                                                </td>
                                                <td>{{$item->short_desc}}</td>
                                                <td>{{ $item->created_at }}</td>
                                            </tr>

                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan='9' align="center">
                                                No item found.
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </form>


                    <div class="row">
                        <div class="col-12 d-flex justify-content-end pt-4" class="li: { list-style: none; }">
                            {{ $data->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section><!-- Page footer-->

    <script>


function generateSlug() {
            var tabName = $('#heading').val();
            tabName = tabName.replace(/[^a-zA-Z0-9]/g, '-').toLowerCase();
            $('#slug').val(tabName);
        }
    </script>

@endsection
