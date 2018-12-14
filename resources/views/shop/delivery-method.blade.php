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
            @if(Auth::guard('users')->check() == null)
            <div class="container">
                <!-- Payout Method -->
                <div class="pay-method">
                    <div class="row">  
                        <form action="{{ route('post.post-oder') }}" method="POST">
                        <div class="col-md-6">

                            <!-- Your information -->
                            <div class="heading">
                                <h2>Your information</h2>
                                <hr>
                            </div>
                            
                                {{csrf_field()}}
                                <div class="row">

                                    <!-- Name -->
                                    <div class="col-sm-12">
                                        <label> Full name
                                            <input class="form-control" type="text" name="fullname">
                                        </label>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-sm-12">
                                        <label> Address
                                            <input class="form-control" type="text" name="address">
                                        </label>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-sm-6">
                                        <label> Phone
                                            <input class="form-control" type="number" name="phone">
                                        </label>
                                    </div>

                                    <!-- Number -->
                                    <div class="col-sm-6">
                                        <label> Email
                                            <input class="form-control" type="email" name="email">
                                        </label>
                                    </div>
                                </div>
                            
                        </div>

                        <!-- Select Your Transportation -->
                        <div class="col-md-6">
                            <div class="heading">
                                <h2>Select Your Transportation</h2>
                                <hr>
                            </div>
                            <div class="transportation">
                                <div class="col-sm-10">
                                    <select name="shipcost" class="form-control">
                                        <option value="0"><span>7 - 12 days</span></option>
                                        <option value="25"><span>4 - 7 days</span></option>
                                        <option value="75"><span>24 - 48 Hours</span></option>
                                    </select>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-6 margin-top-10 margin-left-5">
                            <a href="{{route('get.login')}}">You don't have account ? Register now !</a>
                        </div>
                        </div>
                </div>

                <!-- Button -->
                <div class="pro-btn">
                    <a href="{{route('yourcart')}}" class="btn-round btn-light">Back to Payment</a>
                    <button type="submit" class="btn-round confirm">Go Confirmation</button>
                </div>
            </div>
                    </form>
                    @else
                    <div class="container">
                <!-- Payout Method -->
                        <div class="pay-method">
                            <div class="row">  
                            <form action="{{ route('post.post-oder') }}" method="POST">
                                {{csrf_field()}}
                                <div class="col-md-6">
                                    <div class="contact-info">
                                        <h5>Your name: {{Auth::guard('users')->user()->name}}</h5>
                                        <h6>Address: {{Auth::guard('users')->user()->address}}</h6>
                                        <h6>Email: {{Auth::guard('users')->user()->email}}</h6>
                                        <h6>Phone Number: {{Auth::guard('users')->user()->phone}}</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="heading">
                                        <h2>Select Your Transportation</h2>
                                        <hr>
                                    </div>
                                    <div class="transportation">
                                        <div class="col-sm-10">
                                            <select name="shipcost" class="form-control">
                                                <option value="0"><span>7 - 12 days</span></option>
                                                <option value="25"><span>4 - 7 days</span></option>
                                                <option value="75"><span>24 - 48 Hours</span></option>
                                            </select>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="pro-btn">
                            <a href="{{route('yourcart')}}" class="btn-round btn-light">Back to Payment</a>
                            <input type="submit" class="btn-round confirm" value="Go Confirmation">
                        </div>
                    </div>
                    </form>
                    
                    
            @endif
        </section>
@endsection
