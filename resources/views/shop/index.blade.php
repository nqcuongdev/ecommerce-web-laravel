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

                                    <!-- SLIDE  -->
                                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                        data-saveperformance="off">
                                        <!-- MAIN IMAGE -->
                                        <img src="{{url('SmartTech/images/slider-img-1.jpg')}}" alt="slider" data-bgposition="center bottom"
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
                                            High Quality VR Glasses
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
                                            3D Daydream View
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
                                            Starting at
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
                                            $49.99
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
                                             style="z-index: 8;"><a href="#." class="btn-round big">Shop Now</a></div>
                                    </li>

                                    <!-- SLIDE  -->
                                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                        data-saveperformance="off">
                                        <!-- MAIN IMAGE -->
                                        <img src="{{url('SmartTech/images/slider-img-2.jpg')}}" alt="slider" data-bgposition="center bottom"
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
                                            No restocking fee ($35 savings)
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
                                            M75 Sport Watch
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
                                            Now Only
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
                                            $320.99
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
                                             style="z-index: 8;"><a href="#." class="btn-round big">Shop Now</a></div>
                                    </li>

                                    <!-- SLIDE  -->
                                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                        data-saveperformance="off">
                                        <!-- MAIN IMAGE -->
                                        <img src="{{url('SmartTech/images/slider-img-3.jpg')}}" alt="slider" data-bgposition="center bottom"
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
                                            Get Free Bluetooth when buy
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
                                            Flat SmartWatch
                                        </div>

                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption sfl tp-resizeme"
                                             data-x="left" data-hoffset="60"
                                             data-y="center" data-voffset="0"
                                             data-speed="800"
                                             data-start="1200"
                                             data-easing="Power3.easeInOut"
                                             data-splitin="none"
                                             data-splitout="none"
                                             data-elementdelay="0.1"
                                             data-endelementdelay="0.1"
                                             data-endspeed="300"
                                             style="z-index: 7;  font-size:24px; color:#888888; font-weight:500; max-width: auto; max-height: auto; white-space: nowrap;">
                                            Combo Only:
                                        </div>

                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption sfr tp-resizeme"
                                             data-x="left" data-hoffset="240"
                                             data-y="center" data-voffset=" -5"
                                             data-speed="800"
                                             data-start="1300"
                                             data-easing="Power3.easeInOut"
                                             data-splitin="chars"
                                             data-splitout="none"
                                             data-elementdelay="0.03"
                                             data-endelementdelay="0.4"
                                             data-endspeed="300"
                                             style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">
                                            $590.00
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
                                             style="z-index: 8;"><a href="#." class="btn-round big">Shop Now</a></div>
                                    </li>
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
                                    <span class="price">$259.99</span></div>
                            </div>
                        </div>

                        <!-- Weekly Slaes  -->
                        <div class="week-sale-bnr">
                            <h4>Weekly <span>Sale!</span></h4>
                            <p>Saving up to 50% off all online
                                store items this week.</p>
                            <a href="#." class="btn-round">Shop now</a></div>
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
                            <span>On order over $99</span></div>
                    </li>
                    <!-- Money Return -->
                    <li>
                        <div class="media-left"><i class="flaticon-arrows"></i></div>
                        <div class="media-body">
                            <h5>Money Return</h5>
                            <span>30 Days money return</span></div>
                    </li>
                    <!-- Support 24/7 -->
                    <li>
                        <div class="media-left"><i class="flaticon-operator"></i></div>
                        <div class="media-body">
                            <h5>Support 24/7</h5>
                            <span>Hotline: (+100) 123 456 7890</span></div>
                    </li>
                    <!-- Safe Payment -->
                    <li>
                        <div class="media-left"><i class="flaticon-business"></i></div>
                        <div class="media-body">
                            <h5>Safe Payment</h5>
                            <span>Protect online payment</span></div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- tab Section -->
        <section class="featur-tabs padding-top-60 padding-bottom-60">
            <div class="container">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
                    <li role="presentation" class="active"><a href="#featur" aria-controls="featur" role="tab" data-toggle="tab">Featured</a></li>
                    <li role="presentation"><a href="#special" aria-controls="special" role="tab" data-toggle="tab">Special</a></li>
                    <li role="presentation"><a href="#on-sal" aria-controls="on-sal" role="tab" data-toggle="tab">Onsale</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Featured -->
                    <div role="tabpanel" class="tab-pane active fade in" id="featur">
                        <!-- Items Slider -->
                        <div class="item-slide-5 with-nav">
                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="{{url('SmartTech/images/item-img-1-1.jpg')}}" alt="">
                                    <!-- Content -->
                                    <span class="tag">Latop</span> <a href="#" class="tittle">Laptop Alienware 15 i7
                                        Perfect For Playing Game</a>
                                    <!-- Reviews -->
                                    <p class="rev">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#" class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                </article>
                            </div>
                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="{{url('SmartTech/images/item-img-1-2.jpg')}}" alt=""> <span
                                        class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible
                                        Deportivo Slim Con 8GB</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00 <span>$200.00</span></div>
                                    <a href="#" class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="{{url('SmartTech/images/item-img-1-3.jpg')}}" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente
                                        Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#" class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="{{url('SmartTech/images/item-img-1-4.jpg')}}" alt=""> <span
                                        class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#" class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-5.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7"
                                        128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-6.jpg" alt=""> <span
                                        class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible
                                        Deportivo Slim Con 8GB</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00 <span>$200.00</span></div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-7.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente
                                        Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-8.jpg" alt=""> <span
                                        class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>
                        </div>
                    </div>

                    <!-- Special -->
                    <div role="tabpanel" class="tab-pane fade" id="special">
                        <!-- Items Slider -->
                        <div class="item-col-5">

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-11.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7
                                        Perfect For Playing Game</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-9.jpg" alt=""> <span
                                        class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible
                                        Deportivo Slim Con 8GB</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00 <span>$200.00</span></div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-8.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente
                                        Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-7.jpg" alt=""> <span
                                        class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-6.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7"
                                        128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>
                        </div>
                    </div>

                    <!-- on sale -->
                    <div role="tabpanel" class="tab-pane fade" id="on-sal">
                        <!-- Items Slider -->
                        <div class="item-col-5">

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-3.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7
                                        Perfect For Playing Game</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-1.jpg" alt=""> <span
                                        class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible
                                        Deportivo Slim Con 8GB</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00 <span>$200.00</span></div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-2.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente
                                        Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-5.jpg" alt=""> <span
                                        class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-4.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7"
                                        128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
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
                                <a href="#." class="btn-round">View Detail</a></div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article><img class="img-responsive" src="images/item-img-1-6.jpg" alt=""> <span
                                class="sale-tag">-25%</span>

                            <!-- Content -->
                            <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim
                                Con 8GB</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span
                                    class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00 <span>$200.00</span></div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article><img class="img-responsive" src="images/item-img-1-7.jpg" alt="">
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart
                                Watch M26 Touch Bluetooh </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span
                                    class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article><img class="img-responsive" src="images/item-img-1-8.jpg" alt=""> <span
                                class="new-tag">New</span>

                            <!-- Content -->
                            <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                Bluetooth Con Air Mouse</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span
                                    class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article><img class="img-responsive" src="images/item-img-1-9.jpg" alt="">
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB
                                full HD</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span
                                    class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article><img class="img-responsive" src="images/item-img-1-10.jpg" alt="">
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart
                                Watch M26 Touch Bluetooh </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span
                                    class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article><img class="img-responsive" src="images/item-img-1-11.jpg" alt=""> <span
                                class="new-tag">New</span>

                            <!-- Content -->
                            <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                Bluetooth Con Air Mouse</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span
                                    class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article><img class="img-responsive" src="images/item-img-1-12.jpg" alt="">
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB
                                full HD</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span
                                    class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article><img class="img-responsive" src="images/item-img-1-13.jpg" alt="">
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart
                                Watch M26 Touch Bluetooh </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span
                                    class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Tabs Sec -->
        <section class="main-tabs-sec padding-top-60 padding-bottom-0">
            <div class="container">
                <ul class="nav margin-bottom-40" role="tablist">
                    <li role="presentation" class="active"><a href="#tv-au" aria-controls="featur" role="tab"
                                                              data-toggle="tab"> <i class="flaticon-computer"></i> TV &
                            Audios <span>236 item(s)</span></a></li>
                    <li role="presentation"><a href="#smart" aria-controls="special" role="tab" data-toggle="tab"><i
                                class="flaticon-smartphone"></i>Smartphones <span>150 item(s)</span></a></li>
                    <li role="presentation"><a href="#deks-lap" aria-controls="on-sal" role="tab" data-toggle="tab"><i
                                class="flaticon-laptop"></i>Desk & Laptop <span>268 item(s)</span></a></li>
                    <li role="presentation"><a href="#game-com" aria-controls="special" role="tab" data-toggle="tab"><i
                                class="flaticon-gamepad-1"></i>Game Console <span>79 item(s)</span></a></li>
                    <li role="presentation"><a href="#watches" aria-controls="on-sal" role="tab" data-toggle="tab"><i
                                class="flaticon-computer-1"></i>Watches <span>105 item(s)</span></a></li>
                    <li role="presentation"><a href="#access" aria-controls="on-sal" role="tab" data-toggle="tab"><i
                                class="flaticon-keyboard"></i>Accessories <span>816 item(s)</span></a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- TV & Audios -->
                    <div role="tabpanel" class="tab-pane active fade in" id="tv-au">

                        <!-- Items -->
                        <div class="item-slide-5 with-bullet no-nav">
                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-1.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7
                                        Perfect For Playing Game</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>
                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-2.jpg" alt=""> <span
                                        class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible
                                        Deportivo Slim Con 8GB</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00 <span>$200.00</span></div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-3.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente
                                        Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-4.jpg" alt=""> <span
                                        class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-5.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7"
                                        128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-6.jpg" alt=""> <span
                                        class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible
                                        Deportivo Slim Con 8GB</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00 <span>$200.00</span></div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-7.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente
                                        Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-8.jpg" alt=""> <span
                                        class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-9.jpg" alt=""> <span
                                        class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible
                                        Deportivo Slim Con 8GB</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00 <span>$200.00</span></div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-10.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente
                                        Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-11.jpg" alt=""> <span
                                        class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>
                        </div>
                    </div>

                    <!-- Smartphones -->
                    <div role="tabpanel" class="tab-pane fade" id="smart">
                        <!-- Items -->
                        <div class="item-col-5">

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-11.jpg" alt=""> <span
                                        class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-8.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7"
                                        128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-5.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente
                                        Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-17.jpg" alt=""> <span
                                        class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-15.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7"
                                        128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>
                        </div>
                    </div>
                    <!-- Desk & Laptop -->
                    <div role="tabpanel" class="tab-pane fade" id="deks-lap">

                        <!-- Items -->
                        <div class="item-col-5">

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-2.jpg" alt=""> <span
                                        class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-3.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7"
                                        128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-4.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente
                                        Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-13.jpg" alt=""> <span
                                        class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-15.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7"
                                        128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>
                        </div>
                    </div>
                    <!-- Game Console -->
                    <div role="tabpanel" class="tab-pane fade" id="game-com">

                        <!-- Items -->
                        <div class="item-col-5">

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-9.jpg" alt=""> <span
                                        class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-1.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7"
                                        128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-5.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente
                                        Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-3.jpg" alt=""> <span
                                        class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-2.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7"
                                        128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>
                        </div>
                    </div>
                    <!-- Watches -->
                    <div role="tabpanel" class="tab-pane fade" id="watches">

                        <!-- Items -->
                        <div class="item-col-5">

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-8.jpg" alt=""> <span
                                        class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-9.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7"
                                        128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-17.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente
                                        Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-16.jpg" alt=""> <span
                                        class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-12.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7"
                                        128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>
                        </div>
                    </div>
                    <!-- Accessories -->
                    <div role="tabpanel" class="tab-pane fade" id="access">

                        <!-- Items -->
                        <div class="item-col-5">

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-11.jpg" alt=""> <span
                                        class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-12.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7"
                                        128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-16.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente
                                        Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                            class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span>
                                    </p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-15.jpg" alt=""> <span
                                        class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico
                                        Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article><img class="img-responsive" src="images/item-img-1-14.jpg" alt="">
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7"
                                        128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a></article>
                            </div>
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

                    <!-- Blog Post -->
                    <div class="blog-post">
                        <article><img class="img-responsive" src="images/blog-img-1.jpg" alt=""> <span><i
                                    class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i
                                    class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">It’s why
                                there’s nothing else like Mac. </a>
                            <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae
                                efficitur mi [...] </p>
                            <a href="#.">Readmore</a></article>
                    </div>

                    <!-- Blog Post -->
                    <div class="blog-post">
                        <article><img class="img-responsive" src="images/blog-img-2.jpg" alt=""> <span><i
                                    class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i
                                    class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">Get the
                                power to take your business to the
                                next level. </a>
                            <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae
                                efficitur mi [...] </p>
                            <a href="#.">Readmore</a></article>
                    </div>

                    <!-- Blog Post -->
                    <div class="blog-post">
                        <article><img class="img-responsive" src="images/blog-img-3.jpg" alt=""> <span><i
                                    class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i
                                    class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">It’s why
                                there’s nothing else like Mac. </a>
                            <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae
                                efficitur mi [...] </p>
                            <a href="#.">Readmore</a></article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients img -->
        <section class="light-gry-bg clients-img">
            <div class="container">
                <ul>
                    <li><img src="images/c-img-1.png" alt=""></li>
                    <li><img src="images/c-img-2.png" alt=""></li>
                    <li><img src="images/c-img-3.png" alt=""></li>
                    <li><img src="images/c-img-4.png" alt=""></li>
                    <li><img src="images/c-img-5.png" alt=""></li>
                </ul>
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
