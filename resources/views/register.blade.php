@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('title')
register
@endsection

@section('content')
<div class="register-box">
  <div class="r-ttl">
  <p>Registration</p>
  </div>
  <div class="r-form">
    <form action="/register" method="POST">
      @csrf
      <img src="{{asset('icon/人物アイコン.svg')}}" class="icon-img">
      <input type="text" name="name" placeholder="Username"><br>
      <img src="{{asset('icon/メールの無料アイコン.svg')}}" class="icon-img">
      <input type="text" name="email" placeholder="Email"><br>
      <img src="{{asset('icon/カギアイコン.svg')}}" class="icon-img">
      <input type="text" name="password" placeholder="Password"><br>
      <div class="register-btn">
        <button type="submit" class="r-btn">登録</button>
      </div>
    </form>
  </div>
</div>

@endsection