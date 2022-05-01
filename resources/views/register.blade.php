@extends('layouts.app')

@section('css')
@if(app('env')=='local')
  <link rel="stylesheet" href="{{asset('css/register.css')}}">
@endif
@if(app('env')=='production')
  <link rel="stylesheet" href="{{secure_asset('css/register.css')}}">
@endif
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
        @if ($errors->has('name'))
          <p class="vali">{{$errors->first('name')}}</p>
        @endif
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
      <div class="register-btn">
        <button type="submit" class="r-btn">登録</button>
      </div>
    </form>
  </div>
</div>

@endsection