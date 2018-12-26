@extends('master')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col col-lg-12">
                <h1>Infomation User</h1>
            </div>
      <div class="col col-lg-3">
            @if(Auth::guard('users')->user()->image != 0)
                <img class="img-responsive" src="{{url(Auth::guard('users')->user()->image)}}" alt="{{Auth::guard('users')->user()->name}}">
            @else
                <img class="img-responsive" src="{{url('/SmartTech/images/avatar/users-defauls.png')}}" alt="{{Auth::guard('users')->user()->name}}">
            @endif
      </div>
      <div class="col col-lg-9">
            <ul class="nav nav-tabs nav-pills margin-bottom-40" id="myTab" role="tablist">
                <li role="presentation">
                    <a class="nav-link active" data-toggle="tab" arial-controls="edittab" href="#edittab" role="tab">Update Your Information</a>
                </li>
                <li role="presentation">
                    <a class="nav-link" data-toggle="tab" arial-controls="order" href="#order" role="tab">Your Order</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active fade in" id="edittab" role="tabpanel">
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <strong>{{$message}}</strong>
                    </div>
                    @endif
                    <form action="" method="POST" enctype="multipart/form-data" class="form-group" style="margin-top:10px;">
                        {{csrf_field()}}
                        <div class="col-9">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{Auth::guard('users')->user()->name}}">
                        </div>
                        <div class="col-9">
                            <label for="">Email</label>
                            <input type="email" name="email" disabled class="form-control" disabled value="{{Auth::guard('users')->user()->email}}">
                        </div>
                        <div class="col-9">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" value="{{Auth::guard('users')->user()->address}}">
                        </div>
                        <div class="col-9">
                            <label for="">Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{Auth::guard('users')->user()->phone}}">
                        </div>
                        <div class="col-9">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col col-5">
                            <input type="submit" class="btn-success form-control" style="margin-top:10px;">
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="order" role="tabpanel">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                    <tbody>
                    @if($order != NULL)
                    @foreach($order as $values)
                    <tr>
                        <th scope="row">{{$values->id}}</th>
                        <td>{{$values->qty}}</td>
                        <td>${{$values->total}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                    @endif
                </div>
            </div>                  
      </div>
    </div>
</div>
</section>
@endsection