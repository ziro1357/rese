@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')


<div class="shop__content">
  <div class="search-form">
  </div>

  <div class="shop__table">

      @foreach ($shops as $shop)
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
              <a href="unlike/:shop_{{ $shop['id'] }}" class="shop_detail">X</a>
              @else
              <a href="like/:shop_{{ $shop['id'] }}" class="shop_detail">♡</a>
              @endif
            @endif
          </div>


      </div>
    </div>
     @endforeach
  </div>


</div>

@endsection