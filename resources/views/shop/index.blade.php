@extends('master')
@section('content')
    <!-- Slid Sec -->
    <section class="slid-sec">
        <div class="container">
            <div class="container-fluid">
                <div class="row">

                    <!-- Main Slider  -->
                    <div class="col-md-9 no-padding">

                        <!-- Main Slider Start -->
                        <div class="tp-banner-container">
                            <div class="tp-banner">
                                <ul>
                                @foreach($slides as $values)
                                    <!-- SLIDE  -->
                                        <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                            data-saveperformance="off">
                                            <!-- MAIN IMAGE -->
                                            <img src="{{url($values->image)}}" alt="slider"
                                                 data-bgposition="center bottom"
                                                 data-bgfit="cover" data-bgrepeat="no-repeat">

                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption sfl tp-resizeme"
                                                 data-x="left" data-hoffset="60"
                                                 data-y="center" data-voffset="-110"
                                                 data-speed="800"
                                                 data-start="800"
                                                 data-easing="Power3.easeInOut"
                                                 data-splitin="chars"
                                                 data-splitout="none"
                                                 data-elementdelay="0.03"
                                                 data-endelementdelay="0.4"
                                                 data-endspeed="300"
                                                 style="z-index: 5; font-size:30px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">
                                                {{$values->small_title}}
                                            </div>

                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption sfr tp-resizeme"
                                                 data-x="left" data-hoffset="60"
                                                 data-y="center" data-voffset="-60"
                                                 data-speed="800"
                                                 data-start="1000"
                                                 data-easing="Power3.easeInOut"
                                                 data-splitin="chars"
                                                 data-splitout="none"
                                                 data-elementdelay="0.03"
                                                 data-endelementdelay="0.1"
                                                 data-endspeed="300"
                                                 style="z-index: 6; font-size:50px; color:#0088cc; font-weight:800; white-space: nowrap;">
                                                {{$values->title}}
                                            </div>

                                            <!-- LAYER NR. 3 -->
                                            <div class="tp-caption sfl tp-resizeme"
                                                 data-x="left" data-hoffset="60"
                                                 data-y="center" data-voffset="10"
                                                 data-speed="800"
                                                 data-start="1200"
                                                 data-easing="Power3.easeInOut"
                                                 data-splitin="none"
                                                 data-splitout="none"
                                                 data-elementdelay="0.1"
                                                 data-endelementdelay="0.1"
                                                 data-endspeed="300"
                                                 style="z-index: 7;  font-size:24px; color:#888888; font-weight:500; max-width: auto; max-height: auto; white-space: nowrap;">
                                                {{$values->small_text}}
                                            </div>

                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption sfr tp-resizeme"
                                                 data-x="left" data-hoffset="210"
                                                 data-y="center" data-voffset="5"
                                                 data-speed="800"
                                                 data-start="1300"
                                                 data-easing="Power3.easeInOut"
                                                 data-splitin="chars"
                                                 data-splitout="none"
                                                 data-elementdelay="0.03"
                                                 data-endelementdelay="0.4"
                                                 data-endspeed="300"
                                                 style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">
                                                ${{$values->price}}
                                            </div>

                                            <!-- LAYER NR. 4 -->
                                            <div class="tp-caption lfb tp-resizeme scroll"
                                                 data-x="left" data-hoffset="60"
                                                 data-y="center" data-voffset="80"
                                                 data-speed="800"
                                                 data-start="1300"
                                                 data-easing="Power3.easeInOut"
                                                 data-elementdelay="0.1"
                                                 data-endelementdelay="0.1"
                                                 data-endspeed="300"
                                                 data-scrolloffset="0"
                                                 style="z-index: 8;"><a href="{{$values->btn_link}}"
                                                                        class="btn-round big">Shop Now</a></div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Main Slider  -->
                    <div class="col-md-3 no-padding">

                        <!-- New line required  -->
                        <div class="product">
                            <div class="like-bnr">
                                <div class="position-center-center">
                                    <h5>New line required</h5>
                                    <h4>Smartphone s7</h4>
                                    <span class="price">$259.99</span>
                                </div>
                            </div>
                        </div>

                        <!-- Weekly Slaes  -->
                        <div class="week-sale-bnr">
                            <h4>Weekly <span>Sale!</span></h4>
                            <p>Saving up to 50% off all online
                                store items this week.</p>
                            <a href="{{route('products')}}" class="btn-round">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!-- Shipping Info -->
        <section class="shipping-info">
            <div class="container">
                <ul>

                    <!-- Free Shipping -->
                    <li>
                        <div class="media-left"><i class="flaticon-delivery-truck-1"></i></div>
                        <div class="media-body">
                            <h5>Free Shipping</h5>
                            <span>On order over $99</span>
                        </div>
                    </li>
                    <!-- Money Return -->
                    <li>
                        <div class="media-left"><i class="flaticon-arrows"></i></div>
                        <div class="media-body">
                            <h5>Money Return</h5>
                            <span>30 Days money return</span>
                        </div>
                    </li>
                    <!-- Support 24/7 -->
                    <li>
                        <div class="media-left"><i class="flaticon-operator"></i></div>
                        <div class="media-body">
                            <h5>Support 24/7</h5>
                            <span>Hotline: (+100) 123 456 7890</span>
                        </div>
                    </li>
                    <!-- Safe Payment -->
                    <li>
                        <div class="media-left"><i class="flaticon-business"></i></div>
                        <div class="media-body">
                            <h5>Safe Payment</h5>
                            <span>Protect online payment</span>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- tab Section -->
        <section class="featur-tabs padding-top-60 padding-bottom-60">
            <div class="container">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
                    <li role="presentation">
                        <a href="#special" aria-controls="special" role="tab" data-toggle="tab">New Products</a>
                    </li>
                    <li role="presentation">
                        <a href="#on-sal" aria-controls="on-sal" role="tab" data-toggle="tab">Sale</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active fade in" id="special"> 
                        <div class="item-col-5">
                            @foreach($product_new as $item)
                                <div class="product">
                                    <article>
                                        <img class="img-responsive" src="{{$item->image}}" alt="Image {{$item->name}}">
                                        <span class="new-tag">New</span>
                                        <span class="tag">{{$item->name_type}}</span>
                                        <a href="{{route('product-details',$item->id)}}" class="tittle">{{$item->name}}</a>
                                        <p class="rev margin-top-5"></p>
                                        <div class="price">
                                            ${{$item->price}}
                                        </div>
                                        <a href="{{route('addtocart',$item->id)}}" class="cart-btn">
                                            <i class="icon-basket-loaded"></i>
                                        </a>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- on sale -->
                    <div role="tabpanel" class="tab-pane fade" id="on-sal">
                        <div class="item-col-5">
                            @foreach($products_sale as $item)
                                <div class="product">
                                    <article>
                                        <img class="img-responsive" src="{{$item->image}}" alt="Image {{$item->name}}">
                                        <span class="sale-tag">-{{$item->sale_price}}%</span>
                                        <span class="tag">{{$item->name_type}}</span>
                                        <a href="{{route('product-details',$item->id)}}" class="tittle">{{$item->name}}</a>
                                        <p class="rev margin-top-5"></p>
                                        <div class="price">
                                            ${{$item->price}}
                                            <span>${{($item->price) - ((($item->price)*($item->sale_price))/100)}}</span>
                                        </div>
                                        <a href="{{route('addtocart',$item->id)}}" class="cart-btn">
                                            <i class="icon-basket-loaded"></i>
                                        </a>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <!-- Top Selling Week -->
        <section class="light-gry-bg padding-top-60 padding-bottom-30">
            <div class="container">

                <!-- heading -->
                <div class="heading">
                    <h2>Top Selling of the Week</h2>
                    <hr>
                </div>

                <!-- Items -->
                <div class="item-col-5">

                    <!-- Product -->
                    <div class="product col-2x">
                        <div class="like-bnr">
                            <div class="position-center-center">
                                <h5>Smart Watch 2.0</h5>
                                <p>Space Gray Aluminum Case
                                    with Black/Volt Real Sport Band <span>38mm | 42mm</span></p>
                                <a href="{{route('products')}}" class="btn-round">View Detail</a>
                            </div>
                        </div>
                    </div>

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

        <!-- Main Tabs Sec -->
        <section class="main-tabs-sec padding-top-60 padding-bottom-0">
            <div class="container">
                <ul class="nav margin-bottom-40" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#tv-au" aria-controls="featur" role="tab" data-toggle="tab">
                            <i class="flaticon-computer"></i>
                            TV & Audios <span>{{count($TV)}} items</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#smart" aria-controls="special" role="tab" data-toggle="tab">
                            <i class="flaticon-smartphone"></i>Smartphones & Tablet <span>{{count($Smartphone)}} items</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#deks-lap" aria-controls="on-sal" role="tab" data-toggle="tab">
                            <i class="flaticon-laptop"></i>Desktop & Laptop <span>{{count($Computer)}} items</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#game-com" aria-controls="special" role="tab" data-toggle="tab">
                            <i class="flaticon-gamepad-1"></i>Gaming<span>{{count($Gaming)}} items</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#watches" aria-controls="on-sal" role="tab" data-toggle="tab">
                            <i class="flaticon-computer-1"></i>Accessories<span>{{count($Accessories)}} items</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#access" aria-controls="on-sal" role="tab" data-toggle="tab">
                            <i class="flaticon-commerce"></i>Camera <span>{{count($Camera)}} items</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- TV & Audios -->
                    <div role="tabpanel" class="tab-pane active fade in" id="tv-au">

                        <!-- Items -->
                        <div class="item-slide-5 with-bullet no-nav">
                                        @if(count($TV) > 0)
                                        @foreach($TV as $item)
                                        <div class="product">
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
                                        @endif
                                        </div>

                    <!-- Smartphones -->
                    <div role="tabpanel" class="tab-pane fade" id="smart">
                        <!-- Items -->
                        <div class="item-col-5">
                        @if(count($Smartphone) > 0)
                        @foreach($Smartphone as $item)
                        <div class="product">
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
                        @endif
                        </div>
                    </div>
                    <!-- Desk & Laptop -->
                    <div role="tabpanel" class="tab-pane fade" id="deks-lap">
                        <div class="item-col-5">
                            @if(count($Computer) > 0)
                            @foreach($Computer as $item)
                            <div class="product">
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
                            @endif
                            </div>
                    </div>
                    <!-- Game Console -->
                    <div role="tabpanel" class="tab-pane fade" id="game-com">

                            <div class="item-col-5">
                                    @if(count($Gaming) > 0)
                                    @foreach($Gaming as $item)
                                    <div class="product">
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
                                    @endif
                                    </div>
                    </div>
                    <!-- Watches -->
                    <div role="tabpanel" class="tab-pane fade" id="watches">
                            <div class="item-col-5">
                                    @if(count($Accessories) > 0)
                                    @foreach($Accessories as $item)
                                    <div class="product">
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
                                    @endif
                                    </div>
                    </div>
                    <!-- Accessories -->
                    <div role="tabpanel" class="tab-pane fade" id="access">
                            <div class="item-col-5">
                                    @if(count($Camera) > 0)
                                    @foreach($Camera as $item)
                                    <div class="product">
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
                                    @endif
                                    </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Top Selling Week -->
        <section class="padding-top-60 padding-bottom-60">
            <div class="container">

                <!-- heading -->
                <div class="heading">
                    <h2>From our Blog</h2>
                    <hr>
                </div>
                <div id="blog-slide" class="with-nav">

                    @foreach($blog as $single_blog)
                    <div class="blog-post">
                        <article>
                            <img class="img-responsive" src="{{url($single_blog->image)}}" alt="Image Blog">
                            <span><i class="fa fa-bookmark-o"></i> {{$single_blog->created_at->format('d M ,Y')}}</span>
                            <span><i class="fa fa-comment-o"></i> 86 Comments</span>
                            <a href="{{route('blog-details',$single_blog->id)}}" class="tittle">{{$single_blog->title}}</a>
                            <p>{!!str_limit($single_blog->content,128)!!}</p>
                            <a href="{{route('blog-details',$single_blog->id)}}">Readmore</a>
                        </article>
                    </div>
                    @endforeach

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
@endsection
