@extends('master')
@section('content')
    <!-- Content -->
    <div id="content">

        <!-- Linking -->
        <div class="linking">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li class="active">Blog</li>
                </ol>
            </div>
        </div>

        <!-- Blog -->
        <section class="blog-page padding-top-30 padding-bottom-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        @foreach($blog as $item)
                        <!-- Blog Post -->
                        <div class="blog-post">
                            <article class="row">
                                <div class="col-xs-7"><img class="img-responsive" src="{{url($item->image)}}" alt="Image Blog">
                                </div>
                                <div class="col-xs-5">
                                    <span>
                                        <i class="fa fa-bookmark-o"></i>
                                        {{$item->created_at->format('d M Y')}}
                                    </span>
                                    <span><i class="fa fa-comment-o"></i> 86 Comments</span>
                                    <a href="{{route('blog-details',$item->id)}}" class="tittle">{{$item->title}}</a>
                                    <p>{!! str_limit($item->content,425) !!}</p>
                                    <a href="{{route('blog-details',$item->id)}}">Readmore</a></div>
                            </article>
                        </div>
                        @endforeach
                        <!-- pagination -->
                        {{$blog->links()}}
                    </div>

                    <!-- Side Bar -->
                    <div class="col-md-3">
                        <div class="shop-side-bar">

                            <!-- Search -->
                            <div class="search">
                                <form>
                                    <label>
                                        <input type="text" placeholder="Search here">
                                    </label>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>

                            <!-- Recent Posts -->
                            <h6>Recent Posts</h6>
                            <div class="recent-post">

                                <!-- Recent Posts -->
                                <div class="media">
                                    <div class="media-left"><a href="#."><img class="img-responsive"
                                                                              src="images/blog-img-2.jpg" alt=""> </a>
                                    </div>
                                    <div class="media-body"><a href="#.">It’s why there’s
                                            nothing else like Mac. </a>
                                        <span>25 Dec, 2017 </span><span> 86 Comments</span></div>
                                </div>

                                <!-- Recent Posts -->
                                <div class="media">
                                    <div class="media-left"><a href="#."><img class="img-responsive"
                                                                              src="images/blog-img-3.jpg" alt=""> </a>
                                    </div>
                                    <div class="media-body"><a href="#.">It’s why there’s
                                            nothing else like Mac. </a>
                                        <span>25 Dec, 2017 </span><span> 86 Comments</span></div>
                                </div>

                                <!-- Recent Posts -->
                                <div class="media">
                                    <div class="media-left"><a href="#."><img class="img-responsive"
                                                                              src="images/blog-img-4.jpg" alt=""> </a>
                                    </div>
                                    <div class="media-body"><a href="#.">It’s why there’s
                                            nothing else like Mac. </a>
                                        <span>25 Dec, 2017 </span><span> 86 Comments</span></div>
                                </div>
                            </div>

                            <!-- Quote of the Day -->
                            <h6>Quote of the Day</h6>
                            <div class="quote-day"><i class="fa fa-quote-left"></i>
                                <p>Suspendisse sodales cursus lorem vel
                                    efficitur. Donec tincidunt aliquet lacus. Maecenas pulvinar egestas ex eget
                                    eleifend. Aenean eget tempus urna [...]</p>
                            </div>
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
@endsection
