@extends('backend.master')
@section('content')
    <!-- Main section-->
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>Settings<small> Create site basic settings</small></div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- START card-->
                    <div class="card card-default">
                        <div class="card-header">Settings</div>
                        @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                {{ Session('message') }}
                            </div>

                        @endif
                        <div class="card-body justify-content-center">
                            @if (!$data)

                                <form method="post" action="{{ url('add-settings') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="tbl" value="{{ encrypt('settings') }}">
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <p><img id="output"></p>
                                        <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none"></p>
                                        <p><label for="file" style="cursor: pointer" class="btn btn-primary" >Upload Image</label></p>
                                    </div>

                                    <div class="form-group">
                                        <label>Footer Logo</label>
                                        <p><img id="output_footer"></p>
                                        <p><input type="file" accept="image/*" name="footer_image" id="file-footer" onchange="loadFileFooter(event)" style="display: none"></p>
                                        <p><label for="file-footer" style="cursor: pointer" class="btn btn-primary" >Upload Image</label></p>
                                    </div>

                                    <div class="form-group">
                                        <label>About Us</label>
                                        <textarea class="form-control" name="about" cols="30" rows="10"></textarea>
                                    </div>
                                    <div id="socialFieldGroup">
                                        <div class="form-group">
                                            <label>Social</label>
                                            <input class="form-control" type="url" name="social[]"
                                                placeholder="Social media url">
                                            <p class="text-muted">eg. https://www.facebook.com/xrideghana </p>
                                        </div>
                                    </div>

                                    <div class="text-right form-group">
                                        <span class="btn btn-primary" id="addSocialField"><i
                                                class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="alert alert-danger alert-dismissible fade show noshow" id="socialAlert"
                                        role="alert">
                                        <button class="close" type="button" data-dismiss="alert"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <strong>Sorry !</strong> You've reached the social fields limit.
                                    </div>


                                    <button class="btn btn-sm btn-primary" type="submit">Add Settings</button>
                                </form>

                                <script>
                                    var socialCounter = 1;
                                    $('#addSocialField').click(function() {
                                        socialCounter++;
                                        if (socialCounter > 4) {
                                            $('#socialAlert').removeClass('noshow');
                                            return;
                                        }
                                        var newDiv = $(document.createElement('div')).attr("class", 'form-group');
                                        newDiv.html(
                                            '<input class="form-control" type="url" name="social[]"  placeholder="Social media url"></div>');
                                        newDiv.appendTo("#socialFieldGroup")
                                    });

                                    function generateSlug() {
                                        var tabName = $('#tabName').val();
                                        tabName = tabName.replace(" ", "-").toLowerCase();
                                        $('#tabSlug').val(tabName);
                                    }
                                </script>

                            @else

                                <form method="post" action="{{ url('update-settings') }}/{{ $data->id }}"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="tbl" value="{{ encrypt('settings') }}">
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                    <div class="form-group">
                                        <label>Logo</label>
                                        @if (!empty($data->image))
                                        <p><img src="{{ url('/settings') }}/{{ $data->image }}" alt="" id="output" width="100%"></p>
                                        <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none"></p>
                                        <p><label for="file" style="cursor: pointer" class="btn btn-primary" >Replace Image</label></p>

                                        @else
                                        <p><img id="output" width="100%"></p>
                                        <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none"></p>
                                        <p><label for="file" style="cursor: pointer" class="btn btn-primary" >Upload Image</label></p>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Footer Logo</label>
                                        @if (!empty($data->image))
                                        <p><img src="{{ url('/settings') }}/{{ $data->footer_image }}" alt="" id="output_footer" width="100%"></p>
                                        <p><input type="file" accept="image/*" name="footer_image" id="footer_image" onchange="loadFileFooter(event)" style="display: none"></p>
                                        <p><label for="footer_image" style="cursor: pointer" class="btn btn-primary" >Replace Image</label></p>
                                        @else
                                        <p><img id="output_footer" width="100%"></p>
                                        <p><input type="file" accept="image/*" name="footer_image" id="footer_image" onchange="loadFileFooter(event)" style="display: none"></p>
                                        <p><label for="footer_image" style="cursor: pointer" class="btn btn-primary" >Upload Image</label></p>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>About Us</label>
                                        <textarea class="form-control" name="about" cols="30"
                                            rows="10">{{ $data->about }}</textarea>
                                    </div>
                                    <div id="socialFieldGroup">
                                        <div class="form-group">
                                            <label>Social</label>
                                            @foreach ($data->social as $social)
                                                <div class="form-group">
                                                    <input class="form-control" value="{{ $social }}" type="url"
                                                        name="social[]" placeholder="Social media url">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="text-right form-group">
                                        <span class="btn btn-primary" id="addSocialField"><i
                                                class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="alert alert-danger alert-dismissible fade show noshow" id="socialAlert"
                                        role="alert">
                                        <button class="close" type="button" data-dismiss="alert"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <strong>Sorry !</strong> You've reached the social fields limit.
                                    </div>


                                    <button class="btn btn-sm btn-secondary" type="submit">Add Settings</button>
                                </form>

                                <script>
                                var socialCounter = {{ count($data->social) }};
                                    $('#addSocialField').click(function() {
                                        socialCounter++;
                                        if (socialCounter > 4) {
                                            $('#socialAlert').removeClass('noshow');
                                            return;
                                        }
                                        var newDiv = $(document.createElement('div')).attr("class", 'form-group');
                                        newDiv.html(
                                            '<input class="form-control" type="url" name="social[]"  placeholder="Social media url"></div>');
                                        newDiv.appendTo("#socialFieldGroup")
                                    });

                                    function generateSlug() {
                                        var tabName = $('#tabName').val();
                                        tabName = tabName.replace(" ", "-").toLowerCase();
                                        $('#tabSlug').val(tabName);
                                    }
                                </script>

                            @endif
                        </div>
                    </div><!-- END card-->
                </div>



            </div>
            <!-- END row-->
        </div>
    </section>
    <style>
        .noshow {
            display: none;
        }
    </style>
    <script>
        var loadFile  = function (event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        }


        var loadFileFooter  = function (event) {
            var image = document.getElementById('output_footer');
            image.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection
