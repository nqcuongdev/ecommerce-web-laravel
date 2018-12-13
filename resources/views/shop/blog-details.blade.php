@extends('master')
@section('content')
<!-- Content -->
  <div id="content"> 
    
    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="{{route('index')}}">Home</a></li>
          <li><a href="{{ route('blog') }}">Blog</a></li>
          <li class="active">{{$blog->title}}</li>
        </ol>
      </div>
    </div>
    
    <!-- Blog -->
    <section class="blog-single padding-top-30 padding-bottom-60">
      <div class="container">
        <div class="row">
          <div class="col-md-9"> 
            
            <!-- Blog Post -->
            <div class="blog-post">
              <article> <img class="img-responsive margin-bottom-20" src="{{url($blog->image)}}" alt="Image Blog" > <span>By: <strong>{{$blog->author}}</strong></span> <span><i class="fa fa-bookmark-o"></i> {{$blog->created_at->format('d M Y')}}</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span>
                <h5>{{$blog->title}}</h5>
                <p>{!!$blog->content!!}</p>
              </article>
              
              <!-- Comments -->
              <div class="comments">
                <h6 class="margin-0">Comments (01)</h6>
                <ul>
                  <!-- Comments -->
                  <li class="media">
                    <div class="media-left"> <a href="#" class="avatar"> <img src="images/avatar.jpg" alt=""> </a> </div>
                    <div class="media-body padding-left-20">
                      <h6>Lucian Black <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017 </span> </h6>
                      <p>Suspendisse interdum lacus eget ligula posuere congue, suspendisse sodales cursus lorem vel Donec tincidunt aliquet lacus. Maecenas pulvinarefficiur.... </p>
                    </div>
                  </li>
                </ul>
              </div>
              
              <!-- ADD comments -->
              <div class="add-comments padding-top-20">
                <h6>Leave a Comment</h6>
                
                <!-- FORM -->
                <form>
                  <ul class="row">
                    <li class="col-sm-6">
                      <label>Name
                        <input type="text" class="form-control" name="name" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-6">
                      <label>Email
                        <input type="text" class="form-control" name="email" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>Message
                        <textarea class="form-control" rows="5" placeholder=""></textarea>
                      </label>
                    </li>
                    <li class="col-sm-12 text-left">
                      <button type="submit" class="btn-round">Send Message</button>
                    </li>
                  </ul>
                </form>
              </div>
            </div>
          </div>
          
          <!-- Side Bar -->
          <div class="col-md-3">
            <div class="shop-side-bar"> 
              
              <!-- Search -->
              <div class="search">
                <form>
                  <label>
                    <input type="email" placeholder="Search here">
                  </label>
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
              
              <!-- Recent Posts -->
              <h6>Recent Posts</h6>
              <div class="recent-post"> 
                
                <!-- Recent Posts -->
                <div class="media">
                  <div class="media-left"> <a href="#."><img class="img-responsive" src="images/blog-img-2.jpg" alt=""> </a> </div>
                  <div class="media-body"> <a href="#.">It’s why there’s
                    nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
                </div>
                
                <!-- Recent Posts -->
                <div class="media">
                  <div class="media-left"> <a href="#."><img class="img-responsive" src="images/blog-img-3.jpg" alt=""> </a> </div>
                  <div class="media-body"> <a href="#.">It’s why there’s
                    nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
                </div>
                
                <!-- Recent Posts -->
                <div class="media">
                  <div class="media-left"> <a href="#."><img class="img-responsive" src="images/blog-img-4.jpg" alt=""> </a> </div>
                  <div class="media-body"> <a href="#.">It’s why there’s
                    nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
                </div>
              </div>
              
              <!-- Quote of the Day -->
              <h6>Quote of the Day</h6>
              <div class="quote-day"> <i class="fa fa-quote-left"></i>
                <p>Suspendisse sodales cursus lorem vel
                  efficitur. Donec tincidunt aliquet lacus. Maecenas pulvinar egestas ex eget eleifend. Aenean eget tempus urna [...]</p>
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