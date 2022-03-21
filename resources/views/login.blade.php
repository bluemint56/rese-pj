<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/login.css" />
  <title>ログイン</title>
</head>
<body>
@extends('layout.header')

@section('header')

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
  </form>
  </div>
</div>
@endsection
</body>
</html>