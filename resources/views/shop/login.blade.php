@extends('master')
@section('content')
    <div id="content">
        <div class="linking">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li class="active">Authentication</li>
                </ol>
            </div>
        </div>

        <section class="login-sec padding-top-30 padding-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Login Your Account</h5>

                        <form action="{{route('post.login')}}" method="POST">
                            {{csrf_field()}}
                            <ul class="row">
                                @if(count($errors)>0)
                                    <ul class="alert alert-danger">
                                        @foreach($errors->all() as $errs)
                                            <li>
                                                {{$errs}}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                                @if(Session::has('flag'))
                                    <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                                @endif
                                <li class="col-sm-12">
                                    <label>Email
                                        <input type="email" class="form-control" name="email">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>Password
                                        <input type="password" class="form-control" name="password">
                                    </label>
                                </li>
                                <li class="col-sm-6">
                                    <div class="checkbox checkbox-primary">
                                        <input id="cate1" class="styled" type="checkbox">
                                        <label for="cate1"> Keep me logged in </label>
                                    </div>
                                </li>
                                <li class="col-sm-6"><a href="#" class="forget">Forgot your password?</a></li>
                                <li class="col-sm-12 text-left">
                                    <button type="submit" class="btn-round">Login</button>
                                </li>
                            </ul>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <h5>Don’t have an Account? Register now</h5>

                        <form action="{{route('post.register')}}" method="POST">
                            {{ csrf_field() }}
                            <ul class="row">
                                @if(count($errors)>0)
                                    <ul class="alert alert-danger">
                                        @foreach($errors->all() as $err)
                                            <li>
                                                {{$err}}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                                @if(Session::has('flag_reg'))
                                    <div class="alert alert-{{Session::get('flag_reg')}}">
                                        {{Session::get('message')}}
                                    </div>
                                @endif
                                <li class="col-sm-12">
                                    <label>Full Name
                                        <input type="text" class="form-control" name="name">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>Email
                                        <input type="text" class="form-control" name="email">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>Password
                                        <input type="password" class="form-control" name="password">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>Re-Password
                                        <input type="password" class="form-control" name="re-password">
                                    </label>
                                </li>
                                <li class="col-sm-12 text-left">
                                    <button type="submit" class="btn-round">Register</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
