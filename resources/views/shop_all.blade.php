@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/shop_all.css')}}">
@endsection

@section('title')
shop_all
@endsection

@section('content')
<div class="shop-search">
  <form action="/shop/search" method="GET" id="search_form">
    @csrf
    <select  name="area_id" class="area-select" id="input_area" onchange="submit(this.form)">
      <option value="0">All area</option>
      <option value="1">東京都</option>
      <option value="2">大阪府</option>
      <option value="3">福岡県</option>
    </select>

    <select name="genre_id" class="genre-select" id="input_genre" onchange="submit(this.form)">
      <option value="0">All genre</option>
      <option value="1">寿司</option>
      <option value="2">焼肉</option>
      <option value="3">居酒屋</option>
      <option value="4">イタリアン</option>
      <option value="5">ラーメン</option>
    </select>

    <input type="text" placeholder="Search ..." name="name" class="name-find" value="{{ old('name')
    }}" id="input_name" onchange="submit(this.form)">
  </form>
</div>

<div class="shops">
  @foreach($shops as $shop)
    <div class="detail">
      <div class="detail-flex">
          <img src="{{$shop->image_url}}" class="img"/>
        <div class="detail-block">
          <p class="name">{{$shop->name}}</p>
          <div class="area-genre">
            <p>#{{$shop->area->name}}</p>
            <p>#{{$shop->genre->name}}</p>
          </div>
          <div class="detail-heart">
            <a href="{{route('shop.detail', $shop->id)}}" class="shop-d">詳しくみる</a>
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
      </div>
    </div>
  @endforeach
</div>
@endsection