@extends('backend.master')
@section('content')

    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">Add Advert</div>

            @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    {{ Session('message') }}
                </div>
            @endif

            <form method="post" action="{{url('add-advert' )}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="tbl" value="{{ encrypt('advertisements') }}">
                <div class="row justify-content-center">
                    <!-- Article Content-->
                    <div class="col-xl-9">
                        <div class="card card-default">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="mb-3 form-control form-control-lg" type="text"
                                        placeholder="Enter title here..." name="title" required>
                                </div>

                                <div class="form-group">
                                    <label>Advert url</label>
                                    <input class="mb-3 form-control form-control-lg" type="url" name="url"
                                        placeholder="url" required>
                                </div>

                                <div class="form-group">
                                    <div class="card-body" style="min-height: 200px !important; background: #f1f1f1;">
                                        <div class="form-group">
                                            <label>Advert Image</label>
                                            <p><img id="output" style="width:  100% !important;" ></p>
                                            <p><input type="file" accept="image/*" name="image" id="file" required onchange="loadFile(event)"
                                                    style="display: none"></p>
                                            <p><label for="file" style="cursor: pointer" class="btn btn-secondary">Upload
                                                    Image</label></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Location</label>
                                  <select name="location" class="custom-select custom-select-sm">
                                      <option>leaderboard</option>
                                      <option>sidebar-top</option>
                                      <option>sidebar-bottom</option>
                                  </select>
                                </div>


                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="custom-select custom-select-sm">
                                        <option>display</option>
                                        <option>hide</option>
                                    </select>

                                    <div class="clearfix">
                                          <br>
                                        <div class="float-right">
                                            <button class="btn btn-primary" type="submit">
                                                <em class="fas fa-trash-alt fa-fw"></em>Add Advert
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
