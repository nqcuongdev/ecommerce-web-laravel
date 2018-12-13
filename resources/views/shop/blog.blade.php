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

                        <!-- Blog Post -->
                        <div class="blog-post">
                            <article class="row">
                                <div class="col-xs-7"><img class="img-responsive" src="images/blog-img-1.jpg" alt="">
                                </div>
                                <div class="col-xs-5"><span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span>
                                    <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#."
                                                                                                class="tittle">It’s why
                                        there’s nothing else like Mac. </a>
                                    <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla
                                        vitae efficitur mi.<br>
                                        Maecenas sed pulvinar metus. Integer suscipit ac odio vulputate vehicula.
                                        Pellentesque consectetur viverra accumsan. Mauris varius convallis nisl [...]
                                    </p>
                                    <a href="#.">Readmore</a></div>
                            </article>
                        </div>

                        <!-- Blog Post -->
                        <div class="blog-post">
                            <article class="row">
                                <div class="col-xs-7"><img class="img-responsive" src="images/blog-img-2.jpg" alt="">
                                </div>
                                <div class="col-xs-5"><span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span>
                                    <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#."
                                                                                                class="tittle">Get the
                                        power to take your business to the
                                        next level. </a>
                                    <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla
                                        vitae efficitur mi.<br>
                                        Maecenas sed pulvinar metus. Integer suscipit ac odio vulputate vehicula.
                                        Pellentesque consectetur viverra accumsan. Mauris varius convallis nisl [...]
                                    </p>
                                    <a href="#.">Readmore</a></div>
                            </article>
                        </div>

                        <!-- Blog Post -->
                        <div class="blog-post">
                            <article class="row">
                                <div class="col-xs-7"><img class="img-responsive" src="images/blog-img-3.jpg" alt="">
                                </div>
                                <div class="col-xs-5"><span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span>
                                    <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#."
                                                                                                class="tittle">It’s why
                                        there’s nothing else like Mac. </a>
                                    <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla
                                        vitae efficitur mi.<br>
                                        Maecenas sed pulvinar metus. Integer suscipit ac odio vulputate vehicula.
                                        Pellentesque consectetur viverra accumsan. Mauris varius convallis nisl [...]
                                    </p>
                                    <a href="#.">Readmore</a></div>
                            </article>
                        </div>

                        <!-- Blog Post -->
                        <div class="blog-post">
                            <article class="row">
                                <div class="col-xs-7"><img class="img-responsive" src="images/blog-img-4.jpg" alt="">
                                </div>
                                <div class="col-xs-5"><span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span>
                                    <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#."
                                                                                                class="tittle">It’s why
                                        there’s nothing else like Mac. </a>
                                    <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla
                                        vitae efficitur mi.<br>
                                        Maecenas sed pulvinar metus. Integer suscipit ac odio vulputate vehicula.
                                        Pellentesque consectetur viverra accumsan. Mauris varius convallis nisl [...]
                                    </p>
                                    <a href="#.">Readmore</a></div>
                            </article>
                        </div>

                        <!-- Blog Post -->
                        <div class="blog-post">
                            <article class="row">
                                <div class="col-xs-7"><img class="img-responsive" src="images/blog-img-5.jpg" alt="">
                                </div>
                                <div class="col-xs-5"><span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span>
                                    <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#."
                                                                                                class="tittle">Get the
                                        power to take your business to the
                                        next level. </a>
                                    <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla
                                        vitae efficitur mi.<br>
                                        Maecenas sed pulvinar metus. Integer suscipit ac odio vulputate vehicula.
                                        Pellentesque consectetur viverra accumsan. Mauris varius convallis nisl [...]
                                    </p>
                                    <a href="#.">Readmore</a></div>
                            </article>
                        </div>

                        <!-- Blog Post -->
                        <div class="blog-post">
                            <article class="row">
                                <div class="col-xs-7"><img class="img-responsive" src="images/blog-img-6.jpg" alt="">
                                </div>
                                <div class="col-xs-5"><span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span>
                                    <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#."
                                                                                                class="tittle">It’s why
                                        there’s nothing else like Mac. </a>
                                    <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla
                                        vitae efficitur mi.<br>
                                        Maecenas sed pulvinar metus. Integer suscipit ac odio vulputate vehicula.
                                        Pellentesque consectetur viverra accumsan. Mauris varius convallis nisl [...]
                                    </p>
                                    <a href="#.">Readmore</a></div>
                            </article>
                        </div>

                        <!-- pagination -->
                        <ul class="pagination">
                            <li><a href="#" aria-label="Previous"> <i class="fa fa-angle-left"></i> </a></li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#" aria-label="Next"> <i class="fa fa-angle-right"></i> </a></li>
                        </ul>
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

                            <!-- Categories -->
                            <h6>Categories</h6>
                            <div class="checkbox checkbox-primary">
                                <ul>
                                    <li>
                                        <input id="cate1" class="styled" type="checkbox">
                                        <label for="cate1"> Home Audio & Theater </label>
                                    </li>
                                    <li>
                                        <input id="cate2" class="styled" type="checkbox">
                                        <label for="cate2"> TV & Video</label>
                                    </li>
                                    <li>
                                        <input id="cate3" class="styled" type="checkbox">
                                        <label for="cate3"> Camera, Photo & Video</label>
                                    </li>
                                    <li>
                                        <input id="cate4" class="styled" type="checkbox">
                                        <label for="cate4"> Cell Phones & Accessories</label>
                                    </li>
                                    <li>
                                        <input id="cate5" class="styled" type="checkbox">
                                        <label for="cate5"> Headphones</label>
                                    </li>
                                    <li>
                                        <input id="cate6" class="styled" type="checkbox">
                                        <label for="cate6"> Video Games</label>
                                    </li>
                                    <li>
                                        <input id="cate7" class="styled" type="checkbox">
                                        <label for="cate7"> Bluetooth & Wireless Speakers</label>
                                    </li>
                                    <li>
                                        <input id="cate8" class="styled" type="checkbox">
                                        <label for="cate8"> Gaming Console</label>
                                    </li>
                                    <li>
                                        <input id="cate9" class="styled" type="checkbox">
                                        <label for="cate9"> Computers & Tablets</label>
                                    </li>
                                    <li>
                                        <input id="cate10" class="styled" type="checkbox">
                                        <label for="cate10"> Monitors</label>
                                    </li>
                                    <li>
                                        <input id="cate11" class="styled" type="checkbox">
                                        <label for="cate11"> Home Appliances</label>
                                    </li>
                                    <li>
                                        <input id="cate12" class="styled" type="checkbox">
                                        <label for="cate12">Office Supplies </label>
                                    </li>
                                </ul>
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
