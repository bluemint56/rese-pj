@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/shop_detail.css')}}">
@endsection

@section('title')
shop_detail
@endsection

@section('content')
<div class="derail-content">
  <div class="shop-info">
    <div class="shop-ttl">
      <a href="/" class="back"><</a>
      <h3 class="shop-name">{{$shop->name}}</h3>
    </div>
    <img src="{{$shop->image_url}}">
    <p>#{{$shop->area->name}}#{{$shop->genre->name}}</p>
    <p>{{$shop->content}}</p>
  </div>

  <div class="reservation">
    <h3 class="r-ttl">予約</h3>
    <form action="/reservation" method="POST">
      @csrf
      <div class="r-input">
        <input type="date" name="date" ><br>
        <input type="time" name="time"><br>
        <input type="number" name="number"><br>
      </div>

      <div class="reservation-info">
        <table>
          <tr>
            <th>Shop</th>
            <td></td>
          </tr>
          <tr>
            <th>Date</th>
            <td></td>
          </tr>
          <tr>
            <th>Time</th>
            <td></td>
          </tr>
          <tr>
            <th>Number</th>
            <td>人</td>
          </tr>
        </table>
      </div>

      <div class="r-btn">
        <button type="submit" class="reservation-btn">予約する</button>
      </div>
  </div>
</div>
@endsection