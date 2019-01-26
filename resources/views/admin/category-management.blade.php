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
                                    <h4>Editable Category</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Category Management</h5>
                        <button type="button"
                        class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"
                        data-modal="modal_category">
                        <i class="icofont icofont-plus m-r-5"></i> Add
                    </button>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <div class="dt-responsive table-responsive">
                        <form action="" method="POST">
                            {{csrf_field()}}
                        <table id="res-config" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tables" ng-repeat="category in categories" ng-init="category.show=true" ng-show="category.show">        
                                    <td class="view-mode">
                                        <span class="text_id"><% category.id %></span>
                                    </td>
                                    <td class="view-mode">
                                        <span class="text_name"><% category.name_category %></span>
                                    </td>
                                    <td>
                                        <button type="button" id="edit" class="btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;" ng-click="showEdit(category)">
                                            <span class="icofont icofont-ui-edit"></span>
                                        </button>
                                        <button type="button" id="disable" class="btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;">
                                            <i class="icofont icofont-ui-block"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="tables" ng-repeat="category in categories" ng-show="!category.show">
                                    <td class="view-mode">
                                        <input class="fr_id form-control" disabled type="text" name="id" value="<% category.id %>" ng-model="category.id">
                                    </td>
                                    <td class="view-mode">
                                        <input class="fr_name form-control" type="text" name="name_category" value="<% category.name_category %>" ng-model="category.name_category">
                                    </td>
                                    <td>
                                        {{-- <button type="button" class="btn btn-info waves-effect waves-light" style="float: none;margin: 5px;" ng-click="showEdit(category)">
                                            <i class="icofont icofont-check"></i>
                                        </button> --}}
                                        <button type="button" id="save" class="btn btn-success waves-effect waves-light" style="float: none;margin: 5px;" ng-click="saveEdit(category)">
                                            Save
                                        </button>
                                        <button type="button" id="back" class="btn btn-warning waves-effect waves-light" style="float: none;margin: 5px;" ng-click="showEdit(category)">
                                            Back
                                        </button>
                                    </td>
                                </tr>
                                
                            </tbody> 
                        </table>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-1 addcontact" id="modal_category">
                    {{-- <form action="{{route('postcategory')}}" method="POST">
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
            </form>
        </div>
    </div>
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Editable Product Type</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5>Products Type Category</h5>
            <button type="button"
                class="btn btn-success waves-effect waves-light f-right d-inline-block md-trigger"
                data-modal="modal_type">
                <i class="icofont icofont-plus m-r-5"></i> Add
            </button>
        </div>
        <div class="card-block">
        <div class="table-responsive">
            <div class="dt-responsive table-responsive">
                <form action="" method="POST">
                    {{csrf_field()}}
                <table id="res-config" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($type as $item)
                            <tr class="table_type">
                                <td class="view_type">
                                    <input class="type_id form-control d-none" disabled type="text"
                                                value="{{$item->id}}">
                                    <span class="type_text_id">{{$item->id}}</span>
                                </td>
                                <td class="view-type">
                                    <input class="type_name form-control d-none" type="text"
                                                value="{{$item->name_type}}">
                                    <span class="type_text_name">{{$item->name_type}}</span>
                                    </td>
                                <td class="view-type">
                                    <select name="edit_type" id="type_category" class="type_category form-control d-none">
                                        @foreach($category_all as $items)
                                            <option value="{{$items->id}}" @if($items->id == $item->id_category) selected @endif>{{$items->name_category}}</option>
                                        @endforeach
                                    </select>
                                    <span class="type_text_category">{{$item->name_category}}</span>
                                </td>
                                <td class="view-type">
                                    <button type="button" id="type_edit" class="btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;">
                                        <span class="icofont icofont-ui-edit"></span>
                                    </button>
                                    @if($item->status == 1)
                                        <a href="{{route('disabletype',$item->id)}}">
                                            <button type="button" id="type_disable" class="btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;">
                                                <i class="icofont icofont-ui-block"></i>
                                            </button>
                                        </a>
                                    @else
                                        <a href="{{route('activetype',$item->id)}}">
                                            <button type="button" class="btn btn-info waves-effect waves-light" style="float: none;margin: 5px;">
                                                <i class="icofont icofont-check"></i>
                                            </button>
                                        </a>
                                    @endif
                                    <button type="button" id="type_save" class="btn btn-success waves-effect waves-light d-none" style="float: none;margin: 5px;">
                                        Save
                                    </button>
                                    <button type="button" id="type_back" class="btn btn-warning waves-effect waves-light d-none" style="float: none;margin: 5px;">
                                        Back
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1 addcontact" id="modal_type">
            <form action="{{route('posttype')}}" method="POST">
                {{csrf_field()}}
                <div class="md-content">
                    <h3 class="f-26">Add Type</h3>
                    <div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-txt-primary" name="name_type">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <select name="id_category" class="form-control">
                                    <option value="0">Select One Category Only</option>
                                    @foreach($category_all as $item)
                                        <option value="{{$item->id}}">{{$item->name_category}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">Add</button>
                        <button type="button" class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">Close</button>
                    </div>
                </div>
            </form>
        </div> --}}
    </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@section('angularjs')
    <script>
        var app = angular.module('myApp',['ngMaterial'], function($interpolateProvider) {
            $interpolateProvider.startSymbol('<%');
	        $interpolateProvider.endSymbol('%>');
        }).constant('API', 'http://127.0.0.1:8000/');

        app.controller('MyController',  function($scope, $http, API){
            $http.get(API + 'admin/api-category')
            .then(function(res) {
                $scope.categories = res.data;
            });
            $scope.showEdit = function(object) {
                object.show = !object.show;
            };

            $scope.saveEdit = function(object) {
                object.show = !object.show;
                var data = $.param({
                    name_category: object.name_category
                });
                var config = {
                    header: {'Content-Type' : 'application/x-www-form-urlendcoded'}
                };
                $http.post(API + 'admin/edit-category/' + object.id, data, config)
                .then(function(res) {
                    console.log('Success')
                }, function() {
                    console.log('Fail');
                });
            };

            
            
        });
    </script>
@endsection
@endsection
