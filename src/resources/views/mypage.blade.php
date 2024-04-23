@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="mypage__content">
    <div class="user__information">
        <div class="user__img">
            <img class="rounded_circle" src="" alt="プロフィール画像">
        </div>
        <div class="user__name">
            <h2 class="name">{{ $user->name }}</h2>
        </div>
        <div class="plofile__edit">
            <a href="/edit" class="plofile__edit-link">プロフィールを編集</a>
        </div>
    </div>

    <div class="top__menu">
        <div class="list">
            <a class="list__link" href="/">出品した商品</a>
        </div>
        <div class="sale">
            <a class="sale__link" href="/">購入した商品</a>
        </div>
    </div>

    <div class="flex__item">
        <a href="" class="merchandise__card">
            <div class="card__img">
                <img src="" alt="代替テキスト" width="150" height="150">
            </div>
        </a>
    </div>
</div>
@endsection