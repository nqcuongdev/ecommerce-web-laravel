@extends('master-admin')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Product List</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Product list card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <button type="button"
                                                class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"
                                                data-modal="modal-13">
                                            <i class="icofont icofont-plus m-r-5"></i> Add Product
                                        </button>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <div class="table-content">
                                                <div class="project-table">
                                                    <table id="e-product-list"
                                                           class="table table-striped dt-responsive nowrap">
                                                        <thead>
                                                        <tr>
                                                            <th>Image</th>
                                                            <th>Product Name</th>
                                                            <th>Type</th>
                                                            <th>Technical Description</th>
                                                            <th>Description</th>
                                                            <th>Price</th>
                                                            <th>Sale Price</th>
                                                            <th>Stock</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($products as $item)
                                                            <tr>
                                                                <td>
                                                                    <img src="{{url($item->image)}}"
                                                                         alt="{{$item->name}}"
                                                                         style="width:20%;height:20%;">
                                                                </td>
                                                                <td>{{$item->name}}</td>
                                                                <td>{{$item->products_type}}</td>
                                                                <td class="pro-name">{{str_limit($item->technical_description,10)}}</td>
                                                                <td class="pro-name">{{str_limit($item->description,10)}}</td>
                                                                <td>{{$item->price}}</td>
                                                                <td>{{$item->sale_price}}</td>
                                                                <td>
                                                                    <label class="text-danger">Out Of Stock</label>
                                                                </td>
                                                                <td class="action-icon">
                                                                    <a href="#!" class="m-r-15 text-muted"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="" data-original-title="Edit"><i
                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                    <a href="#!" class="text-muted"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="" data-original-title="Delete"><i
                                                                            class="icofont icofont-delete-alt"></i></a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product list card end -->
                            </div>
                        </div>
                        <!-- Add Contact Start Model start-->
                        <div class="md-modal md-effect-1 addcontact" id="modal-13">
                            <form action="{{route('admin.postproducts')}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="md-content">
                                    <h3 class="f-26">Add Product</h3>
                                    <div>
                                        <div class="input-group">
                                                <span class="input-group-addon"><i
                                                        class="icofont icofont-ui-add"></i></span>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="icofont icofont-file-image"></i></span>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                        <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icofont icofont-ui-add"></i></span>
                                            <select id="hello-single" class="form-control" name="products_type">
                                                <option value="">---- Select Type ----</option>
                                                <option value="1">In Stock</option>
                                                <option value="2">Out of Stock</option>
                                                <option value="3">Law Stock</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <textarea class="form-control" name="description"></textarea>
                                        </div>
                                        <div class="input-group">
                                                            <span class="input-group-addon"><i
                                                                    class="icofont icofont-ui-add"></i></span>
                                            <textarea row="10" cols="10" class="form-control"
                                                      name="technical_description"></textarea>
                                        </div>
                                        <div class="input-group">
                                                                <span class="input-group-addon"><i
                                                                        class="icofont icofont-cur-dollar"></i></span>
                                            <input type="text" class="form-control" name="price">
                                        </div>
                                        <div class="input-group">
                                                                    <span class="input-group-addon"><i
                                                                            class="icofont icofont-cur-dollar"></i></span>
                                            <input type="text" class="form-control" name="sale_price">
                                        </div>
                                        <div class="input-group">
                                                                        <span class="input-group-addon"><i
                                                                                class="icofont icofont-ui-add"></i></span>
                                            <select id="hello-single" class="form-control" name="available">
                                                <option value="">---- Select Type ----</option>
                                                <option value="0">Out of Stock</option>
                                                <option value="1">In Stock</option>
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                    class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">
                                                Add
                                            </button>
                                            <button type="button"
                                                    class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="md-overlay"></div>
                        <!-- Add Contact Ends Model end-->
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('ckeditor')
    <script src="/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
            filebrowserBrowseUrl: '{{ url('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ url('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ url('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });
    </script>
    <script type="text/javascript"
            src="{{url('ckfinder/ckfinder-laravel-package/public/ckfinder/ckfinder.js')}}"></script>
@endsection
