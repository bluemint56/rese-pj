<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/shop_all.css" />
  <title>店舗一覧</title>
</head>
<body>
@extends('layout.header')

@section('header')

@section('content')
<div class="shop-search">
  <form action="/shop/search" method="GET">
    @csrf
    <input type="search" autocomplete="on" list="area">
    <datalist id="area">
      <option value="東京都">
      <option value="大阪府">
      <option value="福岡県">
    </datalist>

    <input type="search" autocomplete="on" list="genre">
    <datalist id="genre">
      <option value="寿司">
      <option value="焼肉">
      <option value="居酒屋">
      <option value="イタリアン">
      <option value="ラーメン">
    </datalist>

    <input type="text" placeholder="Search ...">
  </form>
</div>

@foreach($shops as shop)
<div class="detail">
  {{$shop->img_url}}
  {{$shop->name}}
  {{$shop->area_id}}
  {{$shop->genre_id}}
  <a href="/detail/{shop_id}" class="shop-d">詳しくみる</a>
  <img src="{{asset('icon/ハートのマーク.svg')}}" class="heart">
</div>
@endforeach

@endsection
</body>
</html>