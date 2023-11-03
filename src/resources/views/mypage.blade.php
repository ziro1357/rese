@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')

<div class="mypage">

  <div class="book">
    <div class="book__title">予約状況</div>

@foreach ($reservations as $key=>$reservation)
      <div class="book-table">
        <div class="book__number">予約{{$key+1}}</div>
          <table class="book__status">
            <tr><th>Shop</th>    <td>{{ $reservation->shop['shop_name'] }}</td></tr>
            <tr><th>Date</th>    <td>{{ $reservation['date'] }}</td></tr>
            <tr><th>Time</th>    <td>{{ $reservation['time'] }}</td></tr>
            <tr><th>number</th>  <td>{{ $reservation['number'] }}</td></tr>
          </table>
      </div>
@endforeach

  </div>

  <div class="like">
    <div class="username"><?php $user = Auth::user(); ?>{{ $user->name }}さん</div>
    <div class="like__title">お気に入り店舗</div>

      <div class="shop__table">

          @foreach ($shops as $shop)
@if($shop->is_liked_by_auth_user())
        <div class="shop__item">
          <div class="shop__img">
            <img src="{{ $shop['img_url'] }}" alt="" />
          </div>
          <div class="shop__summary">
            <div class="shop__name">{{ $shop['shop_name'] }}</div>
              <div class="category">
                <div class="shop__area">#{{ $shop['area'] }}</div>
                <div class="shop__genre">#{{ $shop['genre'] }}</div>
              </div>
              <div class="shop__btn">
	              <a href="detail/:shop_{{ $shop['id'] }}" class="shop_detail">詳しく見る</a>
                @if (Auth::check())
                  @if($shop->is_liked_by_auth_user())
                  <a href="unlike/:shop_{{ $shop['id'] }}">X</a>
                  @else
                  <a href="like/:shop_{{ $shop['id'] }}">♡</a>
                  @endif
                @endif
              </div>


          </div>
        </div>
@endif
          @endforeach
      </div>


  </div>

</div>
@endsection