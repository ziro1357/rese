@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')


<div class="shop__content">
  <form class="search-form" action="/a" method="get">
    @csrf
    <select class="search-form__area" name="area">
      <option value="">All area</option>
        @foreach ($shops as $shop)
        <option value="{{ $shop['area'] }}">{{ $shop['area'] }}</option>
        @endforeach
    </select>
    <select class="search-form__genre" name="genre">
      <option value="">All genre</option>
        @foreach ($shops as $shop)
        <option value="{{ $shop['genre'] }}">{{ $shop['genre'] }}</option>
        @endforeach
    </select>
    <input class="search-form__item-input" type="text" name="keyword" value="{{ old('keyword') }}">
  </form>
  

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
              <a href="unlike/:shop_{{ $shop['id'] }}" >X</a>
              @else
              <a href="like/:shop_{{ $shop['id'] }}" >♡</a>
              @endif
            @endif
          </div>


      </div>
    </div>
     @endforeach
  </div>


</div>

@endsection