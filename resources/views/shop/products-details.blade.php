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
                                        <div class="margin-top-25 ">
                                            <div class="quinty">
                                                <input type="number" value="01">
                                            </div>
                                            <a href="{{route('addtocart',$products->id)}}" class="btn-round"><i
                                                    class="icon-basket-loaded margin-right-5"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Details Tab Section-->
                            <div class="item-tabs-sec">
                                <!-- Nav tabs -->
                                <ul class="nav" role="tablist">
                                    <li role="presentation" class="active"><a href="#pro-detil" role="tab"
                                                                              data-toggle="tab">Product Details</a></li>
                                    <li role="presentation"><a href="#ship" role="tab" data-toggle="tab">Shipping &
                                            Payment</a></li>
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
                                <div class="product">
                                    <article>
                                        <img class="img-responsive" src="images/item-img-1-1.jpg" alt="">
                                        <!-- Content -->
                                        <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15
                                            i7 Perfect For Playing Game</a>
                                        <!-- Reviews -->
                                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                                class="fa fa-star-o"></i> <span
                                                class="margin-left-10">5 Review(s)</span></p>
                                        <div class="price">$350.00</div>
                                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                    </article>
                                </div>
                                <!-- Product -->
                                <div class="product">
                                    <article>
                                        <img class="img-responsive" src="images/item-img-1-2.jpg" alt=""> <span
                                            class="sale-tag">-25%</span>
                                        <!-- Content -->
                                        <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible
                                            Deportivo Slim Con 8GB</a>
                                        <!-- Reviews -->
                                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                                class="fa fa-star-o"></i> <span
                                                class="margin-left-10">5 Review(s)</span></p>
                                        <div class="price">$350.00 <span>$200.00</span></div>
                                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                    </article>
                                </div>
                                <!-- Product -->
                                <div class="product">
                                    <article>
                                        <img class="img-responsive" src="images/item-img-1-3.jpg" alt="">
                                        <!-- Content -->
                                        <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj
                                            Inteligente Smart Watch M26 Touch </a>
                                        <!-- Reviews -->
                                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                                class="fa fa-star-o"></i> <span
                                                class="margin-left-10">5 Review(s)</span></p>
                                        <div class="price">$350.00</div>
                                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                    </article>
                                </div>
                                <!-- Product -->
                                <div class="product">
                                    <article>
                                        <img class="img-responsive" src="images/item-img-1-4.jpg" alt=""> <span
                                            class="new-tag">New</span>
                                        <!-- Content -->
                                        <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado
                                            Inalambrico Bluetooth Con Air Mouse</a>
                                        <!-- Reviews -->
                                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                                class="fa fa-star-o"></i> <span
                                                class="margin-left-10">5 Review(s)</span></p>
                                        <div class="price">$350.00</div>
                                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                    </article>
                                </div>
                                <!-- Product -->
                                <div class="product">
                                    <article>
                                        <img class="img-responsive" src="images/item-img-1-5.jpg" alt="">
                                        <!-- Content -->
                                        <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook
                                            7" 128GB full HD</a>
                                        <!-- Reviews -->
                                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                                class="fa fa-star-o"></i> <span
                                                class="margin-left-10">5 Review(s)</span></p>
                                        <div class="price">$350.00</div>
                                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                    </article>
                                </div>
                                <!-- Product -->
                                <div class="product">
                                    <article>
                                        <img class="img-responsive" src="images/item-img-1-6.jpg" alt=""> <span
                                            class="sale-tag">-25%</span>
                                        <!-- Content -->
                                        <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible
                                            Deportivo Slim Con 8GB</a>
                                        <!-- Reviews -->
                                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                                class="fa fa-star-o"></i> <span
                                                class="margin-left-10">5 Review(s)</span></p>
                                        <div class="price">$350.00 <span>$200.00</span></div>
                                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                    </article>
                                </div>
                                <!-- Product -->
                                <div class="product">
                                    <article>
                                        <img class="img-responsive" src="images/item-img-1-7.jpg" alt="">
                                        <!-- Content -->
                                        <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj
                                            Inteligente Smart Watch M26 Touch </a>
                                        <!-- Reviews -->
                                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                                class="fa fa-star-o"></i> <span
                                                class="margin-left-10">5 Review(s)</span></p>
                                        <div class="price">$350.00</div>
                                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                    </article>
                                </div>
                                <!-- Product -->
                                <div class="product">
                                    <article>
                                        <img class="img-responsive" src="images/item-img-1-8.jpg" alt=""> <span
                                            class="new-tag">New</span>
                                        <!-- Content -->
                                        <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado
                                            Inalambrico Bluetooth Con Air Mouse</a>
                                        <!-- Reviews -->
                                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                                class="fa fa-star-o"></i> <span
                                                class="margin-left-10">5 Review(s)</span></p>
                                        <div class="price">$350.00</div>
                                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                    </article>
                                </div>
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
                    <div class="product">
                        <article>
                            <img class="img-responsive" src="images/item-img-1-1.jpg" alt="">
                            <!-- Content -->
                            <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7 Perfect
                                For Playing Game</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span
                                    class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                    <!-- Product -->
                    <div class="product">
                        <article>
                            <img class="img-responsive" src="images/item-img-1-2.jpg" alt=""> <span class="sale-tag">-25%</span>
                            <!-- Content -->
                            <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim
                                Con 8GB</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span
                                    class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00 <span>$200.00</span></div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                    <!-- Product -->
                    <div class="product">
                        <article>
                            <img class="img-responsive" src="images/item-img-1-3.jpg" alt="">
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart
                                Watch M26 Touch Bluetooh </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span
                                    class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                    <!-- Product -->
                    <div class="product">
                        <article>
                            <img class="img-responsive" src="images/item-img-1-4.jpg" alt=""> <span
                                class="new-tag">New</span>
                            <!-- Content -->
                            <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                Bluetooth Con Air Mouse</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span
                                    class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                    <!-- Product -->
                    <div class="product">
                        <article>
                            <img class="img-responsive" src="images/item-img-1-5.jpg" alt="">
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB
                                full HD</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span
                                    class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                    <!-- Product -->
                    <div class="product">
                        <article>
                            <img class="img-responsive" src="images/item-img-1-6.jpg" alt=""> <span class="sale-tag">-25%</span>
                            <!-- Content -->
                            <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim
                                Con 8GB</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span
                                    class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00 <span>$200.00</span></div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                    <!-- Product -->
                    <div class="product">
                        <article>
                            <img class="img-responsive" src="images/item-img-1-7.jpg" alt="">
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart
                                Watch M26 Touch Bluetooh </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span
                                    class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                    <!-- Product -->
                    <div class="product">
                        <article>
                            <img class="img-responsive" src="images/item-img-1-8.jpg" alt=""> <span
                                class="new-tag">New</span>
                            <!-- Content -->
                            <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                Bluetooth Con Air Mouse</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span
                                    class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                        </article>
                    </div>
                </div>
            </div>
        </section>
@endsection
