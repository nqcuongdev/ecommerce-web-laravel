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
                                        <h4>Editable Table</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">                        
                        <div class="col-lg-6">
                            <div class="card-header">
                            <h5>Category Management</h5>
                            <button type="button" class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger" data-modal="modal_category"><i class="icofont icofont-plus m-r-5"></i> Add
                                        </button>
                        </div>
                            <div class="card-block">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="category">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($category as $item)
                                    <tr>
                                        <td class="tabledit-view-mode">
                                            <span class="tabledit-span">{{$item->id}}</span>
                                            <input class="tabledit-input form-control input-sm" type="text" name="id"
                                                   value="{{$item->id}}">
                                        </td>
                                        <td class="tabledit-view-mode">
                                            <span class="tabledit-span">{{$item->name_category}}</span>
                                            <input class="tabledit-input form-control input-sm" type="text" name="name"
                                                   value="{{$item->name_category}}">
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                        <div class="md-modal md-effect-1 addcontact" id="modal_category">
                        <form action="{{route('postcategory')}}" method="POST">
                            {{csrf_field()}}
                            <div class="md-content">
                                <h3 class="f-26">Add Categorys</h3>
                                <div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-txt-primary" name="name">
                                        </div> 
                                    </div>
                                    
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">
                                                Add
                                            </button>
                                        <button type="button" class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">
                                                Close
                                            </button>
                                    </div>
                                </div>
                        </form>
                    </div> 
                    </div>
                        <div class="col-lg-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
