@extends('backend.master')
@section('content')


    <section class="section-container">

        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>Court Diary<small>Keeping track of events</small></div>
                {{-- <button class="ml-auto btn btn-danger">
                    Clear All Items
                </button> --}}
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
                        <form method="post" action="{{ url('add-dairy') }}" class="mb-4">
                            @csrf
                            <input type="hidden" name="tbl" value="{{ encrypt('court_dairy') }}">

                            <div class="form-group">
                                <input class="form-control" type="date" name="dairy_date" placeholder="Dairy Date"
                                    required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="title" placeholder="Dairy title.." required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description" placeholder="Type a dairy description.."
                                    rows="8" required></textarea>
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">
                                Add Diary
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9 todo-item-list">
                    <div id="accordion" role="tablist" aria-multiselectable="false">

                        @if (count($courtDairies) > 0)
                            @foreach ($courtDairies as $dairy)
                                <div class="card mb-0 todo-item" id="court_dairy{{ $dairy->id }}">
                                    <div class="card-header">
                                        <p class="text-bold mb-0">
                                            <span class="clickable collapsed" data-toggle="collapse"
                                                data-parent="#accordion" data-target="#collapseTwo-{{ $dairy->id }}">

                                                <span class="close"
                                                    onclick="deleteAlert({{ $dairy->id }}, 'court_dairy')">&times;</span>

                                                <span
                                                    class="todo-title">{{ date('d M, Y', strtotime($dairy->dairy_date)) }}
                                                    - {{ $dairy->title }}</span>
                                                <span class="todo-edit fas fa-pencil-alt"></span>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="collapse" id="collapseTwo-{{ $dairy->id }}">
                                        <div class="card-body">
                                            <p><span class="text-muted">{{ $dairy->description }}</span></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="card mb-0 todo-item">

                                <p align="center"><br>There is no diary created<br></p>

                            </div>

                        @endif




                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end pt-4" class="li: { list-style: none; }">
                            {{ $courtDairies->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Page footer-->


@endsection
