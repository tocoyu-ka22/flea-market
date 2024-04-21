@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/comment.css') }}">
<script src="https://kit.fontawesome.com/446d4c80c9.js" crossorigin="anonymous"></script>
@endsection

@section('content')
<div class="comment__content">
    <div class="merchandise__img">
        <img src="{{ $item->img_url }}" alt="代替テキスト">
    </div>
    <div class="merchandise__information">
        <p class="name">{{ $item->name }}</p>
        <p class="brand">ブランド名</p>
        <p class="price">¥{{ $item->price }}(値段)</p>
    </div>
    <form class="like">
        <div class="like__button">
            <button class="like__button-submit" type="submit">
                <i class="fa-regular fa-star fa-2x"></i>
            </button>
            <div class="like__number">0</div>
        </div>
    </form>
    <div class="comment__tag">
        <a class="comment__link" href="/comment">
            <i class="fa-regular fa-comment fa-2x"></i>
        </a>
        <div class="comment__number">0</div>
    </div>
    <div class="comment__item">
        <div class="profile">
            <div class="user__img">
                <img src="" alt="代替テキスト">
            </div>
            <div class="user__name">
                <p class="user__name-item">名前</p>
            </div>
        </div>
        <div class="comment">
            <p class="comment__detail">コメント内容が反映されます。</p>
        </div>
    </div>
    <form class="comment__box">
        <div class="comment__form">
            <p class="comment__form-ttl">商品へのコメント</p>
            <div class="comment__form-content">
                <div class="comment__form-input">
                    <textarea class="comment__textarea" name="textarea" cols="100" rows="10"></textarea>
                </div>
            </div>
            <div class="comment__button">
                <button class="comment__button-submit" type="submit">コメントを送信する</button>
            </div>
        </div>
    </form>
</div>
@endsection