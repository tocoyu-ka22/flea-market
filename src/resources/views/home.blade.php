@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
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

    <div class="flex__item">
        @foreach ($items as $item)
        <a href="{{ route('detail', ['id'=>$item->id]) }}" class="merchandise__card">
            <div class="card__img">
                <img src="{{ $item->img_url }}" alt="代替テキスト" width="150" height="150">
            </div>
            <p class="card__name">{{ $item->name }}</p>
            <p class="card__price">{{ $item->price }}円</p>
        </a>
        @endforeach
    </div>
</div>
@endsection

