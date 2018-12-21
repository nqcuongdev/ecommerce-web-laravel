@extends('master-admin')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body invoice-list-page">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card card-border-primary">
                                <div class="card-header">
                                    <h5>{{$customer->customer_name}}</h5>
                                    <div class="dropdown-secondary dropdown f-right">
                                        <button class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light" type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pending</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <a class="dropdown-item waves-light waves-effect" href="#!">
                                                <span class="point-marker bg-danger"></span>Paid
                                            </a>
                                            <a class="dropdown-item waves-light waves-effect" href="#!">
                                                <span class="point-marker bg-warning"></span>Return
                                            </a>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="list list-unstyled">
                                                <li>Invoice : {{$customer->oder_id}}</li>
                                                <li>Issued on: <span class="text-semibold">{{$order->created_at->format('d/m/Y')}}</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="list list-unstyled text-right">
                                                <li>$8,750</li>
                                                <li>Method: <span class="text-semibold">SWIFT</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="task-list-table">
                                        <p class="task-due"><strong> Due : </strong><strong class="label label-primary">23 hours</strong></p>
                                    </div>
                                    <div class="task-board m-0">
                                        <a href="invoice.html" class="btn btn-info btn-mini b-none"><i class="icofont icofont-eye-alt m-0"></i></a>
                                        <!-- end of dropdown-secondary -->
                                        <div class="dropdown-secondary dropdown">
                                            <button class="btn btn-info btn-mini dropdown-toggle waves-light b-none txt-muted" type="button" id="dropdown14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
                                            <div class="dropdown-menu" aria-labelledby="dropdown14" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-alarm"></i> Print Invoice</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-attachment"></i> Download invoice</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-spinner-alt-5"></i> Edit Invoice</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-edit"></i> Remove Invoice</a>
                                            </div>
                                            <!-- end of dropdown menu -->
                                        </div>
                                        <!-- end of seconadary -->
                                    </div>
                                    <!-- end of pull-right class -->
                                </div>
                                <!-- end of card-footer -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection