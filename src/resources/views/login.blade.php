@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login__content">
    <div class="content__ttl">
        <h2 class="content__ttl-item">ログイン</h2>
    </div>
    @if ($errors->any())
    <div class="login__error">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form class="login__form" action="/login" method="post">
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
        
        <div class="login__button">
            <button class="login__button-submit" type="submit">ログインする</button>
        </div>
    </form>

    <div class="register__button">
        <a class="register__button-link" href="/register">会員登録はこちら</a>
    </div>
</div>
@endsection