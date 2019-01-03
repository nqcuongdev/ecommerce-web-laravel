@extends('master')
@section('content')
  <!-- Content -->
  <div id="content"> 
    
    <!-- Oder-success -->
    <section>
      <div class="container"> 
        <!-- Payout Method -->
        
        <div class="order-success"> <i class="fa fa-check"></i>
          <h6>Congratulation! Your order has been processed</h6>
          <a href="{{route('products')}}" class="btn-round">Return to Shop</a> 
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