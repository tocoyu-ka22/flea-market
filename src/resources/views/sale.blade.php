@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sale.css') }}">
@endsection

@section('content')
<div class="sale__content">
    <div class="merchandise__information">
        <div class="merchandise__img">
            <img src="{{ $item->img_url }}" alt="代替テキスト">
        </div>
        <div class="merchandise__name-price">
            <p class="name">{{ $item->name }}</p>
            <p class="price">¥{{ $item->price }}</p>
        </div>
    </div>
    <div class="sale__method">
        <p class="method">支払い方法</p>
        <a class="method__change-link" href="/">変更する</a>
    </div>
    <div class="sale__address">
        <p class="address">配送先</p>
        <a class="address__change-link" href="/register_address">変更する</a>
    </div>
    <div class="sale__detail">
        <div class="goods__price">
            <p class="goods__price-ttl">商品代金</p>
            <p class="goods__price-content">¥{{ $item->price }}</p>
        </div>
        <div class="payment__price">
            <p class="payment__price-ttl">支払い代金</p>
            <p class="payment__price-content">¥{{ $item->price }}</p>
        </div>
        <div class="payment__method">
            <p class="payment__method-ttl">支払い方法</p>
            <p class="payment__method-content">コンビニ払い</p>
        </div>
    </div>
    <div class="sale__button">
        <a class="sale__link" href="">購入する</a>
    </div>
</div>
@endsection