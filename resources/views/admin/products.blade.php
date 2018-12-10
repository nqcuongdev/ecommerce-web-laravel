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
                                        <a href="{{route('admin.addproducts')}}"><button type="button" class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger">
                                            <i class="icofont icofont-plus m-r-5"></i> Add Product
                                        </button></a>
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
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

