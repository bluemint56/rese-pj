<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/my_page.css" />
  <title>マイページ</title>
</head>
<body>
@extends('layout.header')

@section('header')

@section('content')
<div class="user-name">
  <p>test</p>{{--{{$user->name}}--}}
</div>

<div class="user-content">
  <div class="reservation-box">
  <h2>予約状況</h2>
<div class="r-content">
  <div class="reservation-info">
  <img src="{{asset('icon/時計の無料アイコン.svg')}}" class="clock">
  <p>予約1</p>
  <form action="/reservation/{reservation_id}" method="POST">
    @csrf
    <button type="submit" class="delete-btn">×</button>
  </div>
  <table>
    <tr>
      <th>Shop</th>
      <td>仙人</td>{{--{{}}--}}
    </tr>
    <tr>
      <th>Date</th>
      <td>2021-04-01</td>{{--{{$reservation->date}}--}}
    </tr>
    <tr>
      <th>Time</th>
      <td>17:00</td>{{--{{$reservation->time}}--}}
    </tr>
    <tr>
      <th>Number</th>
      <td>1人</td>{{--{{$reservation->number}}--}}
    </tr>
  </table>
  </div>
</div>

</div>
@endsection
</body>
</html>