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
                                                data-modal="modal-13"><i class="icofont icofont-plus m-r-5"></i> Add
                                            Product
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
                                                            <th>Amount</th>
                                                            <th>Stock</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($products as $item)
                                                            <tr>
                                                                <td>
                                                                    <img
                                                                        src="{{url($item->image)}}"
                                                                        class="img-responsive" alt="{{$item->name}}"
                                                                        style="width: 20%;">
                                                                </td>
                                                                <td>{{$item->name}}</td>
                                                                <td>{{$item->products_type}}</td>
                                                                <td class="pro-name">{{$item->technical_description}}</td>
                                                                <td class="pro-name">{{$item->description}}</td>
                                                                <td>{{$item->price}}</td>
                                                                <td>{{$item->sale_price}}</td>
                                                                <td>
                                                                    <label class="text-danger">Out Of Stock</label>
                                                                </td>
                                                                <td class="action-icon">
                                                                    <a href="#!" class="m-r-15 text-muted"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title=""
                                                                       data-original-title="Edit"><i
                                                                            class="icofont icofont-ui-edit"></i></a>
                                                                    <a href="#!" class="text-muted"
                                                                       data-toggle="tooltip"
                                                                       data-placement="top" title=""
                                                                       data-original-title="Delete"><i
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
                            <div class="md-content">
                                <h3 class="f-26">Add Product</h3>
                                <div>
                                    <div class="input-group">
                                        <input type="text" class="form-control pname" placeholder="Prodcut Name">
                                        <span class="input-group-addon btn btn-primary">Chooese File</span>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                        <input type="text" class="form-control pname" placeholder="Prodcut Name">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                        <input type="text" class="form-control pamount" placeholder="Amount">
                                    </div>
                                    <div class="input-group">
                                        <select id="hello-single" class="form-control stock">
                                            <option value="">---- Select Stock ----</option>
                                            <option value="married">In Stock</option>
                                            <option value="unmarried">Out of Stock</option>
                                            <option value="unmarried">Law Stock</option>
                                        </select>
                                    </div>
                                    <div class="text-center">
                                        <button type="button"
                                                class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">
                                            Save
                                        </button>
                                        <button type="button"
                                                class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-overlay"></div>
                        <!-- Add Contact Ends Model end-->
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
            <!-- Main-body end -->
            <div id="styleSelector">

            </div>
        </div>
    </div>
    </div>
@endsection
