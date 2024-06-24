@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection

@section('content')
<div class="edit__content">
    <div class="content__ttl">
        <h2 class="ttl">プロフィール設定</h2>
    </div>
    <form class="edit__form" action="/edit" method="post">
        @csrf
        <div class="user__img-edit">
            <img src="{{ $profiles->img_url }}" alt="代替テキスト">
            <button class="img__edit-button" type="submit">画像を選択する</button>
        </div>
        @if (count($errors) > 0)
        <p class="error_message">入力に問題があります</p>
        @endif
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
                @error('name')
                {{$errors->first('name')}}
                @enderror
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
                @error('postcode')
                {{$errors->first('postcode')}}
                @enderror
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
                @error('address')
                {{$errors->first('address')}}
                @enderror
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