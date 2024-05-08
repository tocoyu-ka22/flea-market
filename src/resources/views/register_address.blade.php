@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register_address.css') }}"/>
@endsection

@section('content')
<div class="register__address-content">
    <h2 class="content__ttl">住所の変更</h2>
    <form class="content__form" action="/purchase/address" method="post">
        <div class="form__group">
            <div class="form__group-ttl">
                <p class="form__label-item">郵便番号</p>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="post-code" class="form__input-item" />
                </div>
                <div class="form__error">
                    <!--バリデーション機能追加-->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <p class="form__label-item">住所</p>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="address" class="form__input-item" />
                </div>
                <div class="form__error">
                    <!--バリデーション機能追加-->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <p class="form__label-item">建物名</p>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="building" class="form__input-item" />
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">更新する</button>
        </div>
    </form>
</div>
@endsection