<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/done.css" />
  <title>予約完了</title>
</head>
<body>
@extends('layout.header')

@section('header')

@section('content')
<div class="done-box">
  <p>ご予約ありがとうございます</p>
  <div class="back-btn">
    <a href="/reservation/{reservation_id}" class="b-btn">戻る</a>
  </div>
</div>
@endsection
</body>
</html>