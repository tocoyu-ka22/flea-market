@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection

@section('content')
<div class="edit__content">
    <div class="content__ttl">
        <h2 class="ttl">プロフィール設定</h2>
    </div>
    <form class="edit__form">
        <div class="user__img-edit">
            <img src="" alt="代替テキスト">
            <button class="img__edit-button" type="submit">画像を選択する</button>
        </div>
        <div class="edit__form-content">
            <div class="form__group">
                <div class="form__group-ttl">
                    <p class="form__label-item">ユーザー名</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input-text">
                        <input type="text" class="form__input-item" name="name" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-ttl">
                    <p class="form__label-item">郵便番号</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input-text">
                        <input type="text" class="form__input-item" name="post-code" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-ttl">
                    <p class="form__label-item">住所</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input-text">
                        <input type="text" class="form__input-item" name="address" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-ttl">
                    <p class="form__label-item">建物名</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input-text">
                        <input type="text" class="form__input-item" name="building" />
                    </div>
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">更新する</button>
        </div>
    </form>
</div>
@endsection