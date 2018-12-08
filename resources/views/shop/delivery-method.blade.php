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
                    <li class="col-sm-3 current">
                        <div class="media-left"><i class="flaticon-delivery-truck"></i></div>
                        <div class="media-body"><span>Step 2</span>
                            <h6>Delivery Methods</h6>
                        </div>
                    </li>

                    <!-- Step 4 -->
                    <li class="col-sm-3">
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
                <div class="pay-method">
                    <div class="row">
                        <div class="col-md-6">

                            <!-- Your information -->
                            <div class="heading">
                                <h2>Your information</h2>
                                <hr>
                            </div>
                            <form>
                                <div class="row">

                                    <!-- Name -->
                                    <div class="col-sm-6">
                                        <label> First name
                                            <input class="form-control" type="text">
                                        </label>
                                    </div>

                                    <!-- Number -->
                                    <div class="col-sm-6">
                                        <label> Last Name
                                            <input class="form-control" type="text">
                                        </label>
                                    </div>

                                    <!-- Card Number -->
                                    <div class="col-sm-7">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label> Country </label>
                                                <select class="selectpicker">
                                                    <option> USA</option>
                                                    <option> USA</option>
                                                    <option> USA</option>
                                                    <option> USA</option>
                                                    <option> USA</option>
                                                    <option> USA</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-6">
                                                <label> City </label>
                                                <select class="selectpicker">
                                                    <option> City</option>
                                                    <option> City</option>
                                                    <option> City</option>
                                                    <option> City</option>
                                                    <option> City</option>
                                                    <option> City</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <label> State
                                            <input class="form-control" type="text">
                                        </label>
                                    </div>

                                    <!-- Zip code -->
                                    <div class="col-sm-4">
                                        <label> Zip code
                                            <input class="form-control" type="text">
                                        </label>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-sm-8">
                                        <label> Address
                                            <input class="form-control" type="text">
                                        </label>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-sm-6">
                                        <label> Phone
                                            <input class="form-control" type="text">
                                        </label>
                                    </div>

                                    <!-- Number -->
                                    <div class="col-sm-6">
                                        <label> Email
                                            <input class="form-control" type="email">
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Select Your Transportation -->
                        <div class="col-md-6">
                            <div class="heading">
                                <h2>Select Your Transportation</h2>
                                <hr>
                            </div>
                            <div class="transportation">
                                <div class="col-sm-10">
                                    <select name="tax" class="form-control">
                                        <option value="0"><span>7 - 12 days</span></option>
                                        <option value="25"><span>4 - 7 days</span></option>
                                        <option value="75"><span>24 - 48 Hours</span></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="pro-btn"><a href="{{route('yourcart')}}" class="btn-round btn-light">Back to Payment</a> <a
                        href="{{route('confirm')}}" class="btn-round">Go Confirmation</a></div>
            </div>
        </section>
@endsection
