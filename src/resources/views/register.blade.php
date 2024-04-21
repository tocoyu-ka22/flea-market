@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__content">
    <div class="content__ttl">
        <h2 class="content__ttl-item">会員登録</h2>
    </div>
    @if($errors->any())
    <div class="register__error">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form class="register__form" action="/register" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-ttl">
                <p class="form__label-item">名前</p>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="name" name="name" value="{{ old('name') }}" class="form__input-item">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <p class="form__label-item">メールアドレス</p>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="email" name="email" value="{{ old('email') }}" class="form__input-item">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <p class="form__label-item">パスワード</p>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="password" name="password" class="form__input-item">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <p class="form__label-item">パスワード確認</p>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="password" name="password_confirmation" class="form__input-item">
                </div>
            </div>
        </div>
        
        <div class="register__button">
            <button class="register__button-submit" type="submit">登録する</button>
        </div>
    </form>

    <div class="login__button">
        <a class="login__button-link" href="/login">ログインはこちら</a>
    </div>
</div>
@endsection