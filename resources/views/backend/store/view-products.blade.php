@extends('backend.master')
@section('content')

    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>View Store Products
                    <small>All Products ({{ $allProducts }}) / Active Products ({{ $activeProducts }})</small>
                </div>
            </div>
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

            <div class="row">
                <!-- Article Content-->
                <div class="col-xl-12">
                    <form method="POST" action="{{ url('multiple-delete') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="tbl" value="{{ encrypt('store_products') }}">
                        <input type="hidden" name="tblid" value="{{ encrypt('id') }}">
                        <div class="card">
                            <div class="card-footer">
                                <div class="d-flex">
                                    <div>
                                        <br>
                                        <div class="input-group">
                                            @if (in_array(46,explode(',',\Auth::user()->permissions)))
                                            <select class="custom-select" name="bulk-action">
                                                <option value="0" selected>Bulk action</option>
                                                <option value="1">Delete</option>
                                            </select>
                                            @endif
                                            <div class="input-group-append">
                                                @if (in_array(46,explode(',',\Auth::user()->permissions)))
                                                <button class="btn btn-secondary" type="submit">Apply</button>
                                                &nbsp;
                                                @endif
                                                @if (in_array(45,explode(',',\Auth::user()->permissions)))
                                                <a href="{{ asset('add-store-product') }}" class="btn-secondary btn"> Add
                                                    New Product</a>
                                                    @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="col-12 d-flex justify-content-end pt-4"
                                            class="li: { list-style: none; }">
                                            {{ $products->links('pagination::bootstrap-4') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (in_array(43,explode(',',\Auth::user()->permissions)))
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            @if (in_array(46,explode(',',\Auth::user()->permissions)))
                                            <th data-check-all>
                                                <div class="checkbox c-checkbox" data-toggle="tooltip"
                                                    data-title="Check All">
                                                    <label><input type="checkbox"><span
                                                            class="fa fa-check"></span></label>
                                                </div>
                                            </th>
                                            @endif
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($products) > 0)
                                            @foreach ($products as $item)
                                                <tr>
                                                    @if (in_array(46,explode(',',\Auth::user()->permissions)))
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
                                                    <td><a
                                                            href="{{ url('edit-product') }}/{{ $item->id }}">{{ $item->title }}</a>
                                                    </td>
                                                    <td><img src="{{ url('store_products') }}/{{ $item->image }}" alt=""
                                                            width="200px" style="border-radius: 5px;"></td>
                                                    <td> GH&#8373; {{ number_format($item->price, 2, '.', ''); }}</td>
                                                    <td>{{ $item->category }}</td>
                                                    <td> {{ $item->status }}</td>
                                                </tr>

                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan='9' align="center">
                                                    No news found.
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            @endif
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end pt-4" class="li: { list-style: none; }">
                            {{ $products->links('pagination::bootstrap-4') }}
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section><!-- Page footer-->



@endsection
