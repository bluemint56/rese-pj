@extends('layouts.app')

@section('css')
@if(app('env')=='local')
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endif
@if(app('env')=='production')
  <link rel="stylesheet" href="{{secure_asset('css/login.css')}}">
@endif
@endsection

@section('title')
login
@endsection

@section('content')
<div class="login-box">
  <div class="login-ttl">
    <p>Login</p>
  </div>
  <div class="l-form">
    <form action="/login" method="POST">
      @csrf
      <img src="{{asset('icon/メールの無料アイコン.svg')}}" class="icon-img">
      <input type="text" name="email" placeholder="Email"><br>
        @if ($errors->has('email'))
          <p class="vali">{{$errors->first('email')}}</p>
        @endif
      <img src="{{asset('icon/カギアイコン.svg')}}" class="icon-img">
      <input type="text" name="password" placeholder="Password"><br>
        @if ($errors->has('password'))
          <p class="vali">{{$errors->first('password')}}</p>
        @endif
      <div class="login-btn">
        <button type="submit" class="l-btn">ログイン</button>
      </div>
    </form>
  </div>
</div>
@endsection