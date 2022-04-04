@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/my_page.css">
@endsection

@section('title')
my_page
@endsection

@section('content')
<div class="user-content">

  <div class="user-name">

  </div>

  <div class="reservation-likes">
  <div class="reservation-box">
    <h2>予約状況</h2>
    <div class="r-content">
      <div class="reservation-info">
        <img src="{{asset('icon/時計の無料アイコン.svg')}}" class="clock">
        <p>予約1</p>
        <form action="/reservation/{reservation_id}" method="GET">
          @csrf
          <button type="submit" class="delete-btn">×</button>
      </div>

    <table>
      <tr>
        <th>Shop</th>
        <td>{{$reservation->id->name}}</td>
      </tr>
      <tr>
        <th>Date</th>
        <td>{{$reservation->date}}</td>
      </tr>
      <tr>
        <th>Time</th>
        <td>{{$reservation->time}}</td>
      </tr>
      <tr>
        <th>Number</th>
        <td>{{$reservation->number}}</td>
      </tr>
    </table>
    </div>
  </div>

  <div class="like-shops">
    <h2>お気に入り店舗</h2>
    <div class="like-content">
    @foreach($shops as $shop)
    <div class="likes">
        <img src="{{$shop->image_url}}">
        <p>{{$shop->name}}</p>
        <p>#{{$shop->area->name}}#{{$shop->genre->name}}</p>
        <div class="detail-heart">
          <a href="{{route('shop.detail', $shop->id)}}" class="shop-d">詳しくみる</a>
          <img src="{{asset('icon/ハートのマーク.svg')}}" class="heart">
        </div>
    </div>
    @endforeach
    </div>
  </div>
  </div>
</div>

</div>
@endsection