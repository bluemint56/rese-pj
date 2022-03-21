<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/register.css" />
  <title>会員登録ページ</title>
</head>
<body>
@extends('layout.header')

@section('header')

@section('content')
<div class="register-box">
  <div class="r-ttl">
  <p>Registration</p>
</div>
<div class="r-form">
  <form action="/register" method="POST">
    @csrf
<img src="{{asset('icon/人物アイコン.svg')}}" class="icon-img"><input type="text" name="name" placeholder="Username"><br>
<img src="{{asset('icon/メールの無料アイコン.svg')}}" class="icon-img"><input type="text" name="email" placeholder="Email"><br>
<img src="{{asset('icon/カギアイコン.svg')}}" class="icon-img"><input type="text" name="password" placeholder="Password"><br>
<div class="register-btn">
  <button type="submit" class="r-btn">登録</button>
</form>
</div>
</div>
</div>

@endsection
</body>
</html>