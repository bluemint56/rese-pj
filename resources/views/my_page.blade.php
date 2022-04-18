@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/my_page.css')}}">
@endsection

@section('title')
my_page
@endsection

@section('content')
<div class="user-content">

  <div class="user-name">
    {{$user->name}}さん
  </div>

  <div class="reservation-likes">
    <div class="reservation-box">
      <h2 class="content-title">予約状況</h2>
          @foreach($user->reservations as $index => $reservation)
            <div class="r-content">
              <div class="reservation-info">
                <img src="{{asset('icon/時計の無料アイコン.svg')}}" class="clock">
                <p>予約{{$index+1}}</p>
                <form action="{{route('delete', $reservation->id)}}" method="GET">
                  @csrf
                  <input type="hidden" name="id" value="{{$reservation->id}}"/>
                  <button type="submit" class="delete-btn">×</button>
                </form>
              </div>

              <table class="reservation-table">
                <form action="{{route('update')}}" method="POST">
                  @csrf
                  <input type="hidden" name="id" value="{{$reservation->id}}">
                <tr>
                  <th>Shop</th>
                  <td>{{$reservation->shop->name}}</td>
                </tr>
                <tr>
                  <th>Date</th>
                  <td>
                    予約日: {{$reservation->date}}
                    <input type="date" name="date" class="up-date">
                  </td>
                </tr>
                <tr>
                  <th>Time</th>
                  <td>
                    予約時刻: {{$reservation->time}}
                    <select id="input_time" name="time" class="up-time">
                      <option value="17:00:00">17:00</option>
                      <option value="17:30:00">17:30</option>
                      <option value="18:00:00">18:00</option>
                      <option value="18:30:00">18:30</option>
                      <option value="19:00:00">19:00</option>
                      <option value="19:30:00">19:30</option>
                      <option value="20:00:00">20:00</option>
                      <option value="20:30:00">20:30</option>
                      <option value="21:00:00">21:00</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th>Number</th>
                  <td>
                    予約人数: {{$reservation->number}}人
                    <select id="input_number" name="number" class="up-number">
                      <option value="1">1人</option>
                      <option value="2">2人</option>
                      <option value="3">3人</option>
                      <option value="4">4人</option>
                      <option value="5">5人</option>
                      <option value="6">6人</option>
                      <option value="7">7人</option>
                      <option value="8">8人</option>
                      <option value="9">9人</option>
                      <option value="10">10人</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th></th>
                  <td><button type="submit" class="update-btn">予約変更</button></td>
                </tr>
                </form>
              </table>
            </div>
          @endforeach
    </div>

    <div class="like-shops">
      <h2 class="content-title">お気に入り店舗</h2>
      <div class="like-content">
        @foreach($user->likes as $like)
          <div class="likes">
              <img src="{{$like->shop->image_url}}" class="img">
              <p class="shop-name">{{$like->shop->name}}</p>
              <p>#{{$like->shop->area->name}}#{{$like->shop->genre->name}}</p>
              <div class="detail-heart">
                <a href="{{route('shop.detail', $like->shop->id)}}" class="shop-d">詳しくみる</a>
              @if($shop->likes->isEmpty())
                <form action="{{route('shop.like')}}" method="GET">
                  @csrf
                  <input type="hidden" name="shop_id" value="{{$shop->id}}">
                  <button type="submit" class="unlike-heart">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M380.63,32.196C302.639,33.698,264.47,88.893,256,139.075c-8.47-50.182-46.638-105.378-124.63-106.879
                    C59.462,30.814,0,86.128,0,187.076c0,129.588,146.582,189.45,246.817,286.25c3.489,3.371,2.668,3.284,2.668,3.284
                    c1.647,2.031,4.014,3.208,6.504,3.208v0.011c0,0,0.006,0,0.011,0c0,0,0.006,0,0.011,0v-0.011c2.489,0,4.856-1.177,6.503-3.208
                    c0,0-0.821,0.086,2.669-3.284C365.418,376.526,512,316.664,512,187.076C512,86.128,452.538,30.814,380.63,32.196z"></path></svg>
                  </button>
                </form>
              @else
                <form action="{{route('shop.unlike')}}" method="GET">
                  @csrf
                  <input type="hidden" name="shop_id" value="{{$shop->id}}">
                  <button type="submit" class="like-heart">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M380.63,32.196C302.639,33.698,264.47,88.893,256,139.075c-8.47-50.182-46.638-105.378-124.63-106.879
                    C59.462,30.814,0,86.128,0,187.076c0,129.588,146.582,189.45,246.817,286.25c3.489,3.371,2.668,3.284,2.668,3.284
                    c1.647,2.031,4.014,3.208,6.504,3.208v0.011c0,0,0.006,0,0.011,0c0,0,0.006,0,0.011,0v-0.011c2.489,0,4.856-1.177,6.503-3.208
                    c0,0-0.821,0.086,2.669-3.284C365.418,376.526,512,316.664,512,187.076C512,86.128,452.538,30.814,380.63,32.196z"></path></svg>
                  </button>
                </form>
              @endif
              </div>
          </div>
        @endforeach
    </div>
  </div>
</div>
@endsection