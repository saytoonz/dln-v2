@extends('backend.master')
@section('content')


    <section class="section-container">

        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>Justices</div>
            </div>
            <div class="row todo">
                <div class="col-lg-3">
                    @if (Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
                            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            {{ Session('message') }}
                        </div>
                    @endif
                    <div class="pr-3">
                        <form method="post" action="{{ url('add-justice') }}" enctype="multipart/form-data"
                            class="mb-4">
                            @csrf
                            <input type="hidden" name="tbl" value="{{ encrypt('justices') }}">

                            <div class="card-body" style="min-height: 200px !important;">
                                <div class="form-group">
                                    <label>Justice Image</label>
                                    <p><img id="output" style="width:  100% !important;"></p>
                                    <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                                            style="display: none"></p>
                                    <p><label for="file" style="cursor: pointer" class="btn btn-primary">Choos
                                            Image</label></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Name of justice.."
                                    required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description" placeholder="Short info of justice.."
                                    rows="8" required></textarea>
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">
                                Add Justice
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9 todo-item-list">
                    <div id="accordion" role="tablist" aria-multiselectable="false">

                        @if (count($justices) > 0)
                            @foreach ($justices as $justice)
                                <div class="card mb-0 todo-item" id="justices{{ $justice->id }}">
                                    <div class="card-header">
                                        <p class="text-bold mb-0">
                                            <span class="clickable collapsed" data-toggle="collapse"
                                                data-parent="#accordion" data-target="#collapseTwo-{{ $justice->id }}">

                                                <span class="close"
                                                    onclick="deleteAlert({{ $justice->id }}, 'justices')">&times;</span>

                                                <span class="todo-title">{{ $justice->name }}</span>
                                                <span class="todo-edit fas fa-pencil-alt"></span>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="collapse" id="collapseTwo-{{ $justice->id }}">
                                        <div class="card-body">
                                            <div class="col-md-6">
                                                <div class="card mb-4">
                                                    <img class="card-img-top img-fluid"
                                                        src="{{ url('justices') }}/{{ $justice->image }}"
                                                        alt="Justice image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">{{ $justice->name }}</h4>
                                                        <p class="card-text">{{ $justice->description }}</p>
                                                        <p class="card-text"><span class="text-sm text-muted">Added on
                                                                {{ date('d M, Y, h:m', strtotime($justice->created_at)) }}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="card mb-0 todo-item">

                                <p align="center"><br>No justice added <br></p>

                            </div>

                        @endif




                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end pt-4" class="li: { list-style: none; }">
                            {{ $justices->links('pagination::bootstrap-4') }}
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
    </script>

@endsection
