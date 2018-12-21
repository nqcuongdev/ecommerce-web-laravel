@extends('master-admin')
@section('content')
<div class="pcoded-content">
	<div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>List order</h5>
                                    <a href="" class="float-right"><button class="btn btn-inverse">Export to Excel</button></a>
                                </div>
                                <div class="card-block table-border-style">
                                    <div class="table-responsive">
                                        <table class="table table-lg table-styling">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th>#</th>
                                                    <th>ID Order</th>
                                                    <th>ID Customer</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Date Order</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orders as $key => $order)

                                                <tr>
                                                    <th scope="row">{{$key+1}}</th>
                                                    <td>{{$order->id}}</td>
                                                    <td>{{$order->id_customer}}</td>
                                                    <td>

                                                        @if($order->status == 1)
                                                            <label class="label label-md label-warning">Pending</label>
                                                        @elseif($order->status == 2)
                                                            <label class="label label-md label-success">Success</label>
                                                        @else
                                                            <label class="label label-md label-danger">Failed</label>
                                                        @endif
                                                        
                                                    </td>
                                                    <td>{{$order->total}}</td>
                                                    <td>{{$order->created_at->format('d/m/Y')}}</td>
                                                    <td>
                                                        <a href="{{route('get.order-details',$order->id)}}">
                                                            <button class="btn btn-info">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                        </a>
                                                        @if($order->status == 2)
                                                            <button class="btn btn-danger">
                                                                <i class="ti-trash"></i>
                                                            </button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection