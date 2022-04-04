@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/shop_all.css')}}">
@endsection

@section('title')
shop_all
@endsection

@section('content')
<div class="shop-search">
  <form action="/shop/search" method="GET">
    @csrf
    <input type="search"  list="area" name="area" class="find">
    <datalist id="area">
      <option value="東京都">
      <option value="大阪府">
      <option value="福岡県">
    </datalist>

    <input type="search" list="genre" name="genre" class="find">
    <datalist id="genre">
      <option value="寿司">
      <option value="焼肉">
      <option value="居酒屋">
      <option value="イタリアン">
      <option value="ラーメン">
    </datalist>

    <input type="text" placeholder="Search ..." name="name" class="find">
    <button type="submit" class="search"><img src="{{asset('icon/検索用の虫眼鏡アイコン素材.svg')}}" class="search-img"></button>
  </form>
</div>

<div class="shops">
@foreach($shops as $shop)
<div class="detail">
  <img src="{{$shop->image_url}}"><br>
  <p class="name">{{$shop->name}}</p><br>
  <div class="area-genre">
    <p>#{{$shop->area->name}}</p>
    <p>#{{$shop->genre->name}}</p><br>
  </div>
  <div class="detail-heart">
    <a href="{{route('shop.detail', $shop->id)}}" class="shop-d">詳しくみる</a>
    @if(Auth::check())
      @if($like = null)
        <form action="/shop/unlike" method="GET">
          @csrf
        <button type="submit" class="like-heart">
          <img src="{{asset('icon/ハートのマーク.svg')}}" class="heart" id="heart-color">
        </button>
        </form>
      @else
        <form action="/shop/like" method="GET">
          @csrf
        <button type="submit" class="like-heart">
          <img src="{{asset('icon/ハートのマーク.svg')}}" class="heart" id="heart-color">
        </button>
        </form>
      @endif
    @endif
    <script src="{{asset('js/likes.js')}}"></script>
  </div>
</div>
@endforeach
</div>

@endsection