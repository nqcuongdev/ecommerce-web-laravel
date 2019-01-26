@extends('master')
@section('content')

    <!-- Content -->
    <div id="content">

        <!-- Products -->
        <section class="padding-top-40 padding-bottom-60">
            <div class="container">
                <div class="row">


                    <!-- Products -->
                    <div class="col-md-12">

                        <!-- Short List -->
                        <div class="short-lst">
                            <h2>Cell Phones & Accessories</h2>
                            <ul>
                                <!-- Short List -->
                                <li>
                                    <p>{{$products->count()}} results</p>
                                </li>
                            </ul>
                        </div>

                        <!-- Items -->
                        <div class="item-col-4 fillter_pr">
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
@endsection