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
                            <form class="delivery">
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
                                            <input class="form-control" type="text" id="fullname">
                                        </label>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-sm-12">
                                        <label> Address
                                            <input class="form-control" type="text" id="address">
                                        </label>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-sm-6">
                                        <label> Phone
                                            <input class="form-control" type="text" id="phone">
                                        </label>
                                    </div>

                                    <!-- Number -->
                                    <div class="col-sm-6">
                                        <label> Email
                                            <input class="form-control" type="email" id="email">
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
                                    <select id="tax" class="form-control">
                                        <option value="0"><span>7 - 12 days</span></option>
                                        <option value="25"><span>4 - 7 days</span></option>
                                        <option value="75"><span>24 - 48 Hours</span></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>

                <!-- Button -->
                <div class="pro-btn">
                    <a href="{{route('yourcart')}}" class="btn-round btn-light">Back to Payment</a>
                    <a href="{{--{{route('confirm')}}--}}#" class="btn-round confirm">Go Confirmation</a>
                </div>
            </div>
        </section>
<script>
    $(document).ready(function(){

        $(".delivery").change(function(){
            var token = $("input[name='_token']").val();
            var fullname = $("#fullname").val();
            var address = $("#address").val();
            var phone = $("#phone").val();
            var email = $("#email").val();
            var tax = $("#tax").val();

            $(".confirm").click(function(){

                $.ajax({
                    url: 'ajax-post-oder',
                    type: 'POST',
                    data: {token: 'token',fullname: 'fullname',address: 'address',phone: 'phone',email: 'email',tax: 'tax'},
                })
                .done(function(res) {
                    console.log("success");
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });
                
            });
        });
    });
</script>
@endsection
