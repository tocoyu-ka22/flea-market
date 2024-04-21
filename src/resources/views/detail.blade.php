@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
<script src="https://kit.fontawesome.com/446d4c80c9.js" crossorigin="anonymous"></script>
@endsection

@section('content')
<div class="detail__content">
    <div class="merchandise__img">
        <img src="{{ $item->img_url }}" alt="代替テキスト">
    </div>
    <div class="first__half">
        <p class="merchandise__name">{{ $item->name }}</p>
        <p class="merchandise__brand">ブランド名</p>
        <p class="merchandise__price">¥{{ $item->price }}(値段)</p>
        <form class="like">
            <div class="like__button">
                <button class="like__button-submit" type="submit">
                    <i class="fa-regular fa-star fa-2x"></i>
                </button>
                <div class="like__number">0</div>
            </div>
        </form>
        <div class="comment__button">
            <a class="comment__link" href="{{ route('comment', ['id'=>$item->id]) }}">
                <i class="fa-regular fa-comment fa-2x"></i>
            </a>
            <div class="comment__number">0</div>
        </div>
        <div class="sale__button">
            <a class="sale__button-submit" href="{{route('sale', ['id'=>$item->id]) }}">購入する</a>
        </div>
    </div>
    <div class="latter__half">
        <div class="merchandise__description">
            <p class="description__ttl">商品説明</p>
            <p class="description">{{ $item->description }}</p>
        </div>
        <div class="merchandise__information">
            <p class="information">商品の情報</p>
            <p class="category">カテゴリー</p>
            <div class="category__information">
                <p class="category__content">〇〇</p>
            </div><br /><br /><br /><br /><br /><br />
            <p class="condition">商品の状態</p>
            <div class="condition__information">
                <p class="condition__content">〇〇</p>
            </div>
        </div>
    </div>
</div>
@endsection