@extends('master')
@section('content')
    <div class="linking">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="#">{{$products->category}}</a></li>
                <li class="active">{{$products->name}}</li>
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
                                            <input value="cate{{$item->id}}" id="cate{{$item->id}}" class="styled" type="checkbox" @if($products->id_category == $item->id) checked @endif>
                                            <label for="cate{{$item->id}}">{{$item->name_category}}</label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Categories -->
                        </div>
                    </div>
                    <!-- Products -->
                    <div class="col-md-9">
                        <div class="product-detail">
                            <div class="product">
                                <div class="row">
                                    <!-- Slider Thumb -->
                                    <div class="col-xs-5">
                                        <article class="slider-item on-nav">
                                            <div id="slider" class="flexslider">
                                                <ul class="slides">
                                                    @foreach(json_decode($products->details_image) as $single_image)
                                                    <li>
                                                        <img src="{{url($single_image)}}" alt="Carousel Image">
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div id="carousel" class="flexslider">
                                                <ul class="slides">
                                                    @foreach(json_decode($products->details_image) as $single_image)
                                                    <li>
                                                        <img src="{{url($single_image)}}" alt="Carousel Image">
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Item Content -->
                                    <div class="col-xs-7">
                                        <span class="tags">Smartphones</span>
                                        <h5>{{$products->name}}</h5>
                                        <div class="row">
                                            <div class="col-sm-6">
                                       <span class="price">
                                           @if($products->sale_price == 0)
                                               ${{$products->price}}
                                           @else
                                               ${{($products->price) - (($products->price)/100)*$products->sale_price}}
                                           @endif
                                        </span>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Availability:
                                                    @if($products->available == 1)
                                                        <span class="in-stock">In stock</span>
                                                    @else
                                                        <span class="out-of-stock">Out of stock</span>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <!-- List Details -->
                                        <ul class="bullet-round-list">
                                            {!! $products->technical_description !!}
                                        </ul>
                                        <!-- Quinty -->
                                        <form action="" method="POST">
                                        <div class="margin-top-25 ">
                                            <div class="quinty">
                                                {{csrf_field()}}
                                                <input type="text" value="{{$products->id}}" hidden class="id">
                                                <input type="number" class="qtycart" value="1">
                                            </div>
                                            <a href="#" class="btn-round" id="atc">
                                                <i class="icon-basket-loaded margin-right-5"></i>
                                                Add to Cart
                                            </a>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Details Tab Section-->
                            <div class="item-tabs-sec">
                                <!-- Nav tabs -->
                                <ul class="nav" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#pro-detil" role="tab" data-toggle="tab">Product Details</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#ship" role="tab" data-toggle="tab">Shipping & Payment</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="pro-detil">
                                        {!! $products->description !!}
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="ship">
                                        You can go to showroom to buy it
                                        or provide your information for shipping
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Related Products -->
                        <section class="padding-top-30 padding-bottom-0">
                            <!-- heading -->
                            <div class="heading">
                                <h2>Related Products</h2>
                                <hr>
                            </div>
                            <!-- Items Slider -->
                            <div class="item-slide-4 with-nav">
                                <!-- Product -->
                                @foreach($products_list as $item)
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
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- Your Recently Viewed Items -->
        <section class="padding-bottom-60">
            <div class="container">
                <!-- heading -->
                <div class="heading">
                    <h2>Your Recently Viewed Items</h2>
                    <hr>
                </div>
                <!-- Items Slider -->
                <div class="item-slide-5 with-nav">
                    <!-- Product -->
                    @foreach($products_list as $item)
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
                </div>
            </div>
        </section>
@endsection
