@extends('layouts.app')

@section('css')
@if(app('env')=='local')
  <link rel="stylesheet" href="{{asset('css/thanks.css')}}">
@endif
@if(app('env')=='production')
  <link rel="stylesheet" href="{{secure_asset('css/thanks.css')}}">
@endif
@endsection

@section('title')
thanks
@endsection

@section('content')
<div class="thanks-box">
  <p>会員登録ありがとうございます</p>
  <div class="login-btn">
    <a href="/login" class="l-btn">ログインする</a>
  </div>
</div>

@endsection