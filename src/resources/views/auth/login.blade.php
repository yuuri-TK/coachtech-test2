@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<main class="login">
    <h2 class="login__title">Login</h2>

    <div class="login-form">
        <form action="/login" method="POST">
            @csrf

            <div class="login-form__group">
                <label class="login-form__label">メールアドレス</label>
                <input
                    class="login-form__input"
                    type="email"
                    name="email"
                    placeholder="例: test@example.com"
                    value="{{ old('email') }}"
                >
                @error('email')
                <p class="login-form__error">{{ $message }}</p>
                @enderror
            </div>

            <div class="login-form__group">
                <label class="login-form__label">パスワード</label>
                <input
                    class="login-form__input"
                    type="password"
                    name="password"
                    placeholder="例: coachtech1106"
                >
                @error('password')
                <p class="login-form__error">{{ $message }}</p>
                @enderror
            </div>

            <div class="login-form__button">
                <button class="login-form__button-submit" type="submit">
                    ログイン
                </button>
            </div>
        </form>
    </div>
</main>
@endsection