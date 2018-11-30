@extends('master-admin')
@section('content')
<div class="pcoded-content">
        <div class="pcoded-inner-content">
<div class="card">
        <div class="card-header">
            <h5>Products</h5>
            <div class="float-right">
                <button type="button" class="btn btn-success waves-effect waves-light add" data-toggle="modal" data-target="#addModal">Add Products</button>
            </div>
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add new products</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('admin.postproducts')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="modal-body">
                                <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Select Type</label>
                                        <div class="col-sm-10">
                                            <select name="pr_type" class="form-control">
                                                <option value="1">Type 2</option>
                                                <option value="2">Type 3</option>
                                                <option value="3">Type 4</option>
                                                <option value="4">Type 5</option>
                                                <option value="5">Type 6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Technical description</label>
                                        <div class="col-sm-10">
                                                <textarea rows="5" cols="5" class="form-control" name="technical_des"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                                    <textarea rows="5" cols="5" class="form-control" name="description"></textarea>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Price</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Sale Price</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="sale_price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Upload Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="image_pr">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Available</label>
                                        <div class="col-sm-10">
                                            <select name="available" class="form-control">
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light ">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-block">
            <div class="dt-responsive table-responsive">
                <table class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Technical Description</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Sale</th>
                            <th>Image</th>
                            <th>Available</th>
                            <th class="tabledit-toolbar-column"></th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td class="tabledit-view-mode">
                                <span class="tabledit-span">Mark</span>
                            </td>
                            <td class="tabledit-view-mode">
                                <span class="tabledit-span">Otto </span>
                            </td>
                            <td class="tabledit-view-mode">
                                    <span class="tabledit-span">Otto </span>
                            </td>
                            <td class="tabledit-view-mode">
                                <span class="tabledit-span">Otto </span>
                            </td>
                            <td class="tabledit-view-mode">
                                <span class="tabledit-span">Otto </span>
                            </td>
                            <td class="tabledit-view-mode">
                                <span class="tabledit-span">Otto </span>
                            </td>
                            <td class="tabledit-view-mode">
                                <span class="tabledit-span">Otto </span>
                            </td>
                            <td class="tabledit-view-mode">
                                <span class="tabledit-span">Otto </span>
                            </td>
                            <td class="tabledit-view-mode">
                                <div class="btn-group btn-group-sm" style="float: none;">
                                    <button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;">
                                        <span class="icofont icofont-ui-edit"></span>
                                    </button>
                                    <button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;">
                                        <span class="icofont icofont-ui-delete"></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection