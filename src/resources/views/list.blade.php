@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/list.css') }}">
@endsection

@section('content')
<div class="list__content">
    <div class="content__ttl">
        <h2 class="ttl">商品の出品</h2>
    </div>
    <form class="list__form">
        <div class="merchandise__img">
            <p class="img__ttl">商品画像</p>
            <div class="img__content">
                <button class="img__choice" type="submit">画像を選択する</button>
            </div>
        </div>

        <div class="merchandise__detail">
            <p class="detail__ttl">商品の詳細</p>
            <div class="form__group">
                <div class="form__group-ttl">
                    <p class="form__label-item">カテゴリー</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input-text">
                        <input type="text" class="form__input-item" name="category" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-ttl">
                    <p class="form__label-item">商品の状態</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input-text">
                        <input type="text" class="form__input-item" name="condition" />
                    </div>
                </div>
            </div>
        </div>

        <div class="merchandise__information">
            <p class="information__ttl">商品名と説明</p>
            <div class="form__group">
                <div class="form__group-ttl">
                    <p class="form__label-item">商品名</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input-text">
                        <input type="text" class="form__input-item" name="name" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-ttl">
                    <p class="form__label-item">商品の説明</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input-text">
                        <textarea class="form__input-textarea" name="description" cols="1000" rows="10"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="sale__price">
            <p class="sale__price-ttl">販売価格</p>
            <div class="form__group">
                <div class="form__group-ttl">
                    <p class="form__label-item">販売価格</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input-text">
                        <input type="text" value="￥" placeholder="" class="form__input-item" name="price" />
                    </div>
                </div>
            </div>
        </div>

        <div class="list__button">
            <button class="list__button-submit" type="submit">出品する</button>
        </div>
    </form>
</div>
@endsection