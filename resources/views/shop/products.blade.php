@extends('master')
@section('content')
    <!-- Linking -->
    <div class="linking">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{route('index')}}">Home</a></li>
                <li class="active">Shop</li>
            </ol>
        </div>
    </div>

    <!-- Content -->
    <div id="content">

        <!-- Products -->
        <section class="padding-top-40 padding-bottom-60">
            <div class="container">
                <div class="row">

                    <!-- Shop Side Bar -->
                    <div class="col-md-3">
                        <div class="shop-side-bar">

                            <!-- Categories -->
                            <h6>Categories</h6>
                            <div class="checkbox checkbox-primary">
                                <ul>
                                    @foreach($category as $item)
                                        <li>
                                            <input value="cate{{$item->id}}" id="cate{{$item->id}}" class="styled" type="checkbox">
                                            <label for="cate{{$item->id}}">{{$item->name_category}}</label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
{{-- 
                            <!-- Categories -->
                            <h6>Price</h6>
                            <!-- PRICE -->
                            <div class="cost-price-content">
                                <div id="price-range" class="price-range"></div>
                                <span id="price-min" class="price-min">20</span>
                                <span id="price-max" class="price-max">80</span>
                                <a href="#" class="btn-round" id="filter">Filter</a>
                            </div> --}}
                        </div>
                    </div>

                    <!-- Products -->
                    <div class="col-md-9">

                        <!-- Short List -->
                        <div class="short-lst">
                            <h2>Cell Phones & Accessories</h2>
                            <ul>
                                <!-- Short List -->
                                <li>
                                    <p>Showing 1–12 of {{$products->count()}} results</p>
                                </li>
                                <!-- by Default -->
                                <li>
                                    <select class="selectpicker">
                                        <option>Low to High</option>
                                        <option>High to Low</option>
                                    </select>
                                </li>
                            </ul>
                        </div>

                        <!-- Items -->
                        <div class="item-col-3 fillter_pr">
                            <!-- Product -->
                            @foreach($products as $item)
                                <div class="product" data-category="cate{{$item->id_category}}">
                                    <article>
                                        <a href="{{route('product-details',$item->id)}}">
                                            <img class="img-responsive" src="{{url($item->image)}}" alt="{{$item->name}}">
                                        </a>
                                        @if($item->sale_price != 0)
                                            <span class="sale-tag">-{{$item->sale_price}}%</span>  
                                        @endif
                                        @if($item->new_product == 1)
                                            <span class="new-tag">New</span>
                                        @endif
                                        <span class="tag">{{$item->name_type}}</span>
                                        <a href="{{route('product-details',$item->id)}}" class="tittle">
                                            {{$item->name}}
                                        </a>
                                        <p class="rev margin-top-5"></p>
                                        <div class="price">
                                            @if($item->sale_price == 0)
                                                ${{$item->price}}
                                            @else
                                                ${{$item->price}}
                                                <span>
                                                    ${{($item->price) - ((($item->price)*($item->sale_price))/100)}}
                                                </span>
                                            @endif
                                        </div>
                                        <a href="{{route('addtocart',$item->id)}}" class="cart-btn">
                                            <i class="icon-basket-loaded"></i>
                                        </a>
                                    </article>
                                </div>
                            @endforeach
                        <!-- pagination -->
                            {{$products->links()}}
                        </div>
                    </div>
                </div>
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
    {{-- Fillter product flow category --}}
    <script>
        $('input[type="checkbox"]').click(function() {
        if ($('input[type="checkbox"]:checked').length > 0) {
            $('.product').hide();
            $('input[type="checkbox"]:checked').each(function() {
                $('.product[data-category=' + this.id + ']').show();
            });
        } else {
            $('.product').show();
        }
    });
    </script>
    {{-- <script>
        $(document).ready(function ($) {

            //  Price Filter ( noUiSlider Plugin)
            $("#price-range").noUiSlider({
                range: {
                    'min': [0],
                    'max': [1000]
                },
                start: [40, 940],
                connect: true,
                serialization: {
                    lower: [
                        $.Link({
                           target: $("#price-min")
                        })
                    ],
                    upper: [
                        $.Link({
                            target: $("#price-max")
                        })
                    ],
                    format: {
                        // Set formatting
                        decimals: 2,
                        prefix: '$'
                    }
                }
            });

            
            $('body').on('click', '#filter', function (event) {
                var price-min = $("#price-min").text();
                var price-max = $("#price-max").text();


            });
        })
    </script> --}}
@endsection
