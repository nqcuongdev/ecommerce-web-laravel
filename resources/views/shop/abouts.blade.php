@extends('master')
@section('content')
    <!-- Content -->
    <div id="content">
        <!-- Linking -->
        <div class="linking">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li class="active">About Us</li>
                </ol>
            </div>
        </div>s
        <!-- About Sec -->
        <section class="about-sec padding-top-60 padding-bottom-60">
            <div class="container">

                <!-- About Adds -->
                <div class="about-adds">
                    <div class="position-center-center">
                        <h2>SmartTech
                            <small> Digital & Electronic Center</small>
                        </h2>
                        <a href="{{route('products')}}" class="btn-round">Shop with Us</a></div>
                </div>
            </div>
        </section>
        <!-- Shipping Info -->
        <section class="shipping-info padding-bottom-60">
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
                            <span>Hotline: (+84) 33 731 7788</span></div>
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

        <!-- Team -->
        <section class="padding-top-60 padding-bottom-60">
            <div class="container">

                <!-- heading -->
                <div class="heading">
                    <h2>Meet Our Team</h2>
                    <hr>
                </div>
                <div class="team">
                    <div class="row">
                        <div class="col-md-3"><img class="img-responsive"
                                                   src="{{url('Smarttech/images/team-img-1.jpg')}}" alt="">
                            <h3>Cuong Nguyen</h3>
                            <span>IT</span></div>
                        <div class="col-md-3"><img class="img-responsive"
                                                   src="{{url('Smarttech/images/team-img-2.jpg')}}" alt="">
                            <h3>Maria Ozawa</h3>
                            <span>Ceo/Founder SmartTech</span></div>
                        <div class="col-md-3"><img class="img-responsive"
                                                   src="{{url('Smarttech/images/team-img-3.jpg')}}" alt="">
                            <h3>Cuong</h3>
                            <span>Ceo/Founder SmartTech</span></div>
                        <div class="col-md-3"><img class="img-responsive"
                                                   src="{{url('Smarttech/images/team-img-4.jpg')}}" alt="">
                            <h3>nqCuong</h3>
                            <span>IT</span></div>
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
@endsection
