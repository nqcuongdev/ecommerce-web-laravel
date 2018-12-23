@extends('master-admin')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
    </div>
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Member</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="complex-dt" class="table table-striped table-bordered nowrap">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th style="width:20%;">Name</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($user as $key => $value)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$value->name}}</td>
                                                    <td>{{$value->email}}</td>
                                                    <td>{{$value->address}}</td>
                                                    <td>{{$value->phone}}</td>
                                                    <td>
                                                        @if($value->status == 1)
                                                            <a href="">
                                                                <button class="btn btn-danger">
                                                                    <i class="icofont icofont-ui-block"></i>
                                                                </button>
                                                            </a>
                                                        @else
                                                            <a href="">
                                                                <button class="btn btn-info">
                                                                    <i class="icofont icofont-check"></i>
                                                                </button>
                                                            </a>
                                                            <a href="">
                                                                <button class="btn btn-danger">
                                                                    <i class="ti-trash"></i>
                                                                </button>
                                                            </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Guest</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($guest as $key => $value)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$value->name}}</td>
                                                    <td>{{$value->email}}</td>
                                                    <td>{{$value->address}}</td>
                                                    <td>{{$value->phone}}</td>
                                                    <td>
                                                        <a href="">
                                                            <button class="btn btn-primary">
                                                                <i class="ti-email"></i>
                                                            </button>
                                                        </a>
                                                        <a href="">
                                                            <button class="btn btn-danger">
                                                                <i class="ti-trash"></i>
                                                            </button>
                                                        </a>
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
            </div>
        </div>
    </div>
    </div>
@endsection