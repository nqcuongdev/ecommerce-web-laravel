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

                    <!-- Check Item List -->
                    <ul class="row check-item">
                        <li class="col-xs-6">
                            <p>E-book Reader Lector De Libros Digitales 7''</p>
                        </li>
                        <li class="col-xs-2 text-center">
                            <p>$200.00</p>
                        </li>
                        <li class="col-xs-2 text-center">
                            <p>02 Items</p>
                        </li>
                        <li class="col-xs-2 text-center">
                            <p>$400.00</p>
                        </li>
                    </ul>

                    <!-- Check Item List -->
                    <ul class="row check-item">
                        <li class="col-xs-6">
                            <p>Portero Visor Timbre Camara Ip Wifi lunax 2.7</p>
                        </li>
                        <li class="col-xs-2 text-center">
                            <p>$100.00</p>
                        </li>
                        <li class="col-xs-2 text-center">
                            <p>01 Items</p>
                        </li>
                        <li class="col-xs-2 text-center">
                            <p>$100.00</p>
                        </li>
                    </ul>


                    <!-- Delivery infomation -->
                    <div class="heading margin-top-50">
                        <h2>Delivery infomation</h2>
                        <hr>
                    </div>

                    <!-- Information -->
                    <ul class="row check-item infoma">
                        <li class="col-sm-3">
                            <h6>Name</h6>
                            <span>Alex Adkins</span></li>
                        <li class="col-sm-3">
                            <h6>Phone</h6>
                            <span>(+100) 987 654 3210</span></li>
                        <li class="col-sm-3">
                            <h6>Country</h6>
                            <span>USA</span></li>
                        <li class="col-sm-3">
                            <h6>Email</h6>
                            <span>Alexadkins@gmail.com</span></li>
                        <li class="col-sm-3">
                            <h6>City</h6>
                            <span>NewYork</span></li>
                        <li class="col-sm-3">
                            <h6>State</h6>
                            <span>NewYork</span></li>
                        <li class="col-sm-3">
                            <h6>Zipcode</h6>
                            <span>01234</span></li>
                        <li class="col-sm-3">
                            <h6>Address</h6>
                            <span>569 Lexington Ave, New York, NY</span></li>
                    </ul>

                    <!-- Information -->
                    <ul class="row check-item infoma exp">
                        <li class="col-sm-6"><span>Expert Delivery</span></li>
                        <li class="col-sm-3">
                            <h6>24 - 48 hours</h6>
                        </li>
                        <li class="col-sm-3">
                            <h5>+25</h5>
                        </li>
                    </ul>

                    <!-- Totel Price -->
                    <div class="totel-price">
                        <h4>
                            <small> Total Price:</small>
                            $525.00
                        </h4>
                    </div>
                </div>

                <!-- Button -->
                <div class="pro-btn"><a href="{{route('getdeliverymethod')}}" class="btn-round btn-light">Back to
                        Delivery</a> <a href="{{route('index')}}" class="btn-round">Confirmation</a></div>
            </div>
        </section>
@endsection
