@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
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
      <img src="{{asset('icon/カギアイコン.svg')}}" class="icon-img">
      <input type="text" name="password" placeholder="Password"><br>
      <div class="login-btn">
        <button type="submit" class="l-btn">ログイン</button>
      </div>
    </form>
  </div>
</div>
@endsection