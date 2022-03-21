<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/thanks.css" />
  <title>会員登録完了</title>
</head>
<body>
@extends('layout.header')

@section('header')

@section('content')
<div class="thanks-box">
  <p>会員登録ありがとうございます</p>
  <div class="login-btn">
    <a href="/login" class="l-btn">ログインする</a>
  </div>
</div>

@endsection
</body>
</html>