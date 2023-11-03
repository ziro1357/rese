@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
<script src="{{ asset('/js/detail.js') }}"></script>
@endsection

@section('content')


<div class="detail">
  <div class="detail__content">
    <div class="detail__name">
      <a href="" class=""><</a>
      <div>{{ $detail['shop_name'] }}</div>
    </div>
    <div class="detail__img">
      <img src="{{ $detail['img_url'] }}" alt="" />
    </div>
    <div class="category">
      <div class="shop__area">#{{ $detail['area'] }}</div>
      <div class="shop__genre">#{{ $detail['genre'] }}</div>
    </div>
    <div class="outline">
      <div class="">{{ $detail['outline'] }}</div>
    </div>
  </div>


  <form class="book-form" action="/reservation" method="post">
    @csrf
    <div class="book-form__title">予約</div>
    <input class="book-form__date" type="date" name="date" id="input-date" value="2023-04-01"/>
    <input class="book-form__time" type="time" name="time" id="input-time" value="18:00">
    <select name="number" id="input-number">
      <option value="1">１人</option>
      <option value="2">２人</option>
      <option value="3">３人</option>
      <option value="4">４人</option>
      <option value="5">５人</option>
      <option value="6">６人</option>
      <option value="7">７人</option>
      <option value="8">８人</option>
      <option value="9">９人</option>
      <option value="10">10人</option>
    </select>

    <table class="book-form__confirm">
      <tr><th>Shop</th><td>{{ $detail['shop_name'] }}</td></tr>
      <tr><th>Date</th><td><span id="disp-date"></td></tr>
      <tr><th>Time</th><td><span id="disp-time"></td></tr>
      <tr><th>number</th><td><span id="disp-number"></span>人</td></tr>
    </table>

    <input type="hidden" name="shop_id" value="{{ $detail['id'] }}"/>

    <div class="book-form__button">
      <button class="book-form__button-submit" type="submit">予約する</button>
    </div>

  </form>

</div>

@endsection