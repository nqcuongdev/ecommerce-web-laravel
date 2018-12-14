@extends('master')
@section('content')
    <!-- Content -->
    <div id="content">

        <!-- Ship Process -->
        <div class="ship-process padding-top-30 padding-bottom-30">
            <div class="container">
                <ul class="row">

                    <!-- Step 1 -->
                    <li class="col-sm-3">
                        <div class="media-left"><i class="fa fa-check"></i></div>
                        <div class="media-body"><span>Step 1</span>
                            <h6>Shopping Cart</h6>
                        </div>
                    </li>

                    <!-- Step 3 -->
                    <li class="col-sm-3">
                        <div class="media-left"><i class="fa fa-check"></i></div>
                        <div class="media-body"><span>Step 2</span>
                            <h6>Delivery Methods</h6>
                        </div>
                    </li>

                    <!-- Step 4 -->
                    <li class="col-sm-3 current">
                        <div class="media-left"><i class="fa fa-check"></i></div>
                        <div class="media-body"><span>Step 3</span>
                            <h6>Confirmation</h6>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Payout Method -->
        <section class="padding-bottom-60">
            <div class="container">
                <!-- Payout Method -->
                <div class="pay-method check-out">

                    <!-- Shopping Cart -->
                    <div class="heading">
                        <h2>Shopping Cart</h2>
                        <hr>
                    </div>

                    @foreach($information_order as $key => $list_order)
                    <ul class="row check-item">
                        <li class="col-xs-6">
                            <p>{{$list_order->name}}</p>
                        </li>
                        <li class="col-xs-2 text-center">
                            <p>${{$list_order->price}}</p>
                        </li>
                        <li class="col-xs-2 text-center">
                            <p>{{$list_order->qty}} Items</p>
                        </li>
                        <li class="col-xs-2 text-center">
                            <p>${{$list_order->total}}</p>
                        </li>
                    </ul>
                    @endforeach

                    <!-- Delivery infomation -->
                    <div class="heading margin-top-50">
                        <h2>Delivery infomation</h2>
                        <hr>
                    </div>
                    
                    @if(Auth::guard('users')->check() == null)
                    nothing
                    @else
                    <ul class="row check-item infoma">
                        <li class="col-sm-3">
                            <h6>Name</h6>
                            <span>{{Auth::guard('users')->user()->name}}</span>
                        </li>
                        <li class="col-sm-3">
                            <h6>Phone</h6>
                            <span>{{Auth::guard('users')->user()->phone}}</span>
                        </li>
                        <li class="col-sm-3">
                            <h6>Email</h6>
                            <span>{{Auth::guard('users')->user()->email}}</span>
                        </li>
                        <li class="col-sm-3">
                            <h6>Address</h6>
                            <span>{{Auth::guard('users')->user()->address}}</span>
                        </li>
                    </ul>
                    @endif

                    <!-- Information -->
                    <ul class="row check-item infoma exp">
                        <li class="col-sm-6"><span>Expert Delivery</span></li>
                        <li class="col-sm-3">
                            <h6>
                                @if($get_shipping->shipping == 0)
                                    7 - 12 days
                                @elseif($get_shipping->shipping == 25)
                                    4 - 7 days
                                @elseif($get_shipping->shipping == 75)
                                    24 - 48 hours
                                @endif
                            </h6>
                        </li>
                        <li class="col-sm-3">
                            <h5>
                                @if($get_shipping->shipping == 0)
                                    0
                                @elseif($get_shipping->shipping == 25)
                                    +25
                                @elseif($get_shipping->shipping == 75)
                                    +75
                                @endif
                            </h5>
                        </li>
                    </ul>

                    <!-- Totel Price -->
                    <div class="totel-price">
                        <h4>
                            <small> Total Price:</small>
                            ${{$get_shipping->total}}
                        </h4>
                    </div>
                </div>

                <!-- Button -->
                <div class="pro-btn"><a href="{{route('getdeliverymethod')}}" class="btn-round btn-light">Back to
                        Delivery</a> <a href="{{route('index')}}" class="btn-round">Confirmation</a></div>
            </div>
        </section>
@endsection
