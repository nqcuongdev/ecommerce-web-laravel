@extends('master')
@section('content')
    <!-- Content -->
    <div id="content">

        <!-- Ship Process -->
        <div class="ship-process padding-top-30 padding-bottom-30">
            <div class="container">
                <ul class="row">

                    <!-- Step 1 -->
                    <li class="col-sm-3 current">
                        <div class="media-left"><i class="flaticon-shopping"></i></div>
                        <div class="media-body"><span>Step 1</span>
                            <h6>Shopping Cart</h6>
                        </div>
                    </li>

                    <!-- Step 2 -->
                    <li class="col-sm-3">
                        <div class="media-left"><i class="flaticon-business"></i></div>
                        <div class="media-body"><span>Step 2</span>
                            <h6>Payment Methods</h6>
                        </div>
                    </li>

                    <!-- Step 3 -->
                    <li class="col-sm-3">
                        <div class="media-left"><i class="flaticon-delivery-truck"></i></div>
                        <div class="media-body"><span>Step 3</span>
                            <h6>Delivery Methods</h6>
                        </div>
                    </li>

                    <!-- Step 4 -->
                    <li class="col-sm-3">
                        <div class="media-left"><i class="fa fa-check"></i></div>
                        <div class="media-body"><span>Step 4</span>
                            <h6>Confirmation</h6>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Shopping Cart -->
        <section class="shopping-cart padding-bottom-60">
            <div class="container">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Items</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Total Price</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach($cart as $item)
                    <!-- Item Cart -->
                    <tr>
                        <td>
                            <div class="media">
                                <div class="media-left"><a href="#"> 
                                    <img class="img-responsive" src="{{url($item->options->image)}}" alt=""> </a>
                                </div>
                                <div class="media-body">
                                    <p>{{$item->name}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-center padding-top-60">${{$item->price}}</td>
                        <td class="text-center"><!-- Quinty -->

                            <div class="quinty padding-top-20">
                                <form action="" method="POST">
                                    {{csrf_field()}}
                                    <input type="text" id="rowId" hidden value="{{$item->rowId}}">
                                    <input type="number" id="quantity" value="{{ $item->qty }}" name="qty">
                                </form>
                            </div>
                        </td>
                        <td id="totalprice" class="text-center padding-top-60">${{number_format($item->qty * $item->price)}}</td>
                        <td class="text-center padding-top-60"><a href="{{route('removeitem',$item->rowId)}}" class="remove"><i
                                    class="fa fa-close"></i></a></td>
                    </tr>
                @endforeach

                    </tbody>
                </table>
                <!-- Promotion -->
                <div class="promo">
                    <div class="coupen">
                        <label> Promotion Code
                            <input type="text" placeholder="Your code here">
                            <button type="submit"><i class="fa fa-arrow-circle-right"></i></button>
                        </label>
                    </div>

                    <!-- Grand total -->
                    <div class="g-totel">
                        <h5>Grand total: <span>${{Cart::subtotal()}}</span></h5>
                    </div>
                </div>

                <!-- Button -->
            <div class="pro-btn"><a href="{{route('products')}}" class="btn-round btn-light">Continue Shopping</a> <a href="#"
                                                                                                       class="btn-round">Go
                        Payment Methods</a></div>
            </div>
        </section>

        <!-- Newslatter -->
        <section class="newslatter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Subscribe our Newsletter <span>Get <strong>25% Off</strong> first purchase!</span></h3>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <input type="email" placeholder="Your email address here...">
                            <button type="submit">Subscribe!</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Content -->
    <script>
        $(document).ready(function(){
            $(".quinty").change(function(){

                var token = $("input[name='_token']").val()
                var rowId = $(this).parent().find("#rowId").val();
                var qty = $(this).parent().find("#quantity").val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({ 
                    dataType: "json",
                    url: 'update/'+rowId+'/'+qty,
                    type: 'GET',
                    cache: false,
                    data: {"_token":token,"id":rowId,"qty":qty},
                    success: function(data){
                        $.each(data, function(index, element){
                            var totalprice = element.price*element.qty;
                            var subtotal =+ totalprice;
                            console.log(totalprice);
                            console.log(subtotal);
                        })
                    }
                });
            });
        });
    </script>
@endsection
