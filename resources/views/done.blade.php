@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/done.css">
@endsection

@section('title')
done
@endsection

@section('content')
<div class="done-box">
  <p>ご予約ありがとうございます</p>
  <div class="back-btn">
    <a href="/reservation/{reservation_id}" class="b-btn">戻る</a>
  </div>
</div>
@endsection