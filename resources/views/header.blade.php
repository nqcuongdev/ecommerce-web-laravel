<div class="top-bar">
    <div class="container">
        <p>Welcome to SmartTech center!</p>
        <div class="right-sec">
            <ul>
                @if(Auth::check())
                    @if(Auth::user()->status == 1)
                        <li>Hello, {{Auth::user()->name}} wellcome back !</li>
                        <li><a href="{{route('post.logout')}}">Logout</a></li>
                    @endif
                @else
                    <li><a href="{{route('get.login')}}">Login/Register </a></li>
                @endif 
                <li><a href="https://goo.gl/maps/isvYAFqverq">Store Location </a></li>
                <li><a href="#">FAQ </a></li>
                <li><a href="#">Blog</a></li>
            </ul>
            <div class="social-top">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Header -->
<header>
    <div class="container">
        <div class="logo"><a href="{{route('index')}}"><img src="{{url('SmartTech/images/logo.png')}}" alt=""></a></div>
        <div class="search-cate">
            <select class="selectpicker">
                <option> All Categories</option>
                @foreach($category as $item)
                    <option> {{$item->name_category}}</option>
                @endforeach
            </select>
            <input type="search" placeholder="Search entire store here...">
            <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
        </div>

        <!-- Cart Part -->
        @if(Cart::count() != 0)
        <ul class="nav navbar-right cart-pop">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">
                <span class="itm-cont">{{Cart::count()}}</span>
                <i class="flaticon-shopping-bag"></i>
                <strong>My Cart</strong><br>
                <span>{{Cart::count()}} item(s) - ${{Cart::subtotal()}}</span>
            </a>
            <ul class="dropdown-menu">
                @foreach($cart as $item)
                <li>
                    
                    <div class="media-left">
                        <a href="#" class="thumb">
                            <img src="{{url($item->options->image)}}" class="img-responsive" alt="{{$item->name}}">
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="#" class="tittle">{{$item->name}}</a>
                        <span>${{$item->price}} x {{$item->qty}}</span>
                    </div>
                </li>
                @endforeach
                <li class="btn-cart"><a href="{{route('yourcart')}}" class="btn-round">View Cart</a></li>
            </ul>
            @else

            @endif
        </li>
    </ul>
</div>

<!-- Nav -->
<nav class="navbar ownmenu">
    <div class="container">

        <!-- Categories -->
        <div class="cate-lst"><a data-toggle="collapse" class="cate-style" href="#cater"><i
            class="fa fa-list-ul"></i> Our Categories </a>
            <div class="cate-bar-in">
                <div id="cater" class="collapse">
                    <ul>
                        @foreach($category_menu as $item)
                            @if(count($item['children']) > 0)
                            <li class="sub-menu"><a href="#">{{$item->name_category}}</a>
                                <ul>
                                    @foreach($item['children'] as $children)
                                    <li><a href="#">{{$children['name_type']}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @else
                            <li><a href="#">{{$item->name_category}}</a></li>
                            @endif 
                            @endforeach
                        </ul>
                        
                            </div>
                        </div>
                    </div>

                    <!-- Navbar Header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn"
                        aria-expanded="false">
                        <span>
                            <i class="fa fa-navicon"></i>
                        </span>
                    </button>
                </div>
                <!-- NAV -->
                <div class="collapse navbar-collapse" id="nav-open-btn">
                    <ul class="nav">
                        <li class="active">
                            <a href="{{route('index')}}">Home </a>
                        </li>
                        <li>
                            <a href="{{route('products')}}">Shop</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">Contact</a>
                        </li>
                        <li>
                            <a href="{{route('abouts')}}">About</a>
                        </li>
                    </ul>
                </div>

                <!-- NAV RIGHT -->
                <div class="nav-right"><span class="call-mun"><i class="fa fa-phone"></i> <strong>Hotline:</strong> (+84) 33 731 7788</span>
                </div>
            </div>
        </nav>
    </header>
