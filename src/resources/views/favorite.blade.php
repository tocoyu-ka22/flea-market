@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/favorite.css') }}">
@endsection

@section('content')
<div class="merchandise__list">
    <div class="top__menu">
        <div class="recommend">
            <a class="recommend__link" href="/home">おすすめ</a>
        </div>
        <div class="faborite">
            <a class="favorite__link" href="/favorite">マイリスト</a>
        </div>
    </div>

    <div class="merchandise__card">
        <div class="card__img">
            <img src="">
        </div>
    </div>
</div>
@endsection