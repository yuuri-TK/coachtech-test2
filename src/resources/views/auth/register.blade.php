@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<main class="register">
    <h2 class="register__title">Register</h2>

    <form class="register-form" action="{{ route('register') }}" method="post">
        @csrf

        <div class="register-form__group">
            <label class="register-form__label">お名前</label>
            <input class="register-form__input" type="text" name="name" placeholder="例: 山田　太郎" value="{{ old('name') }}">
            @error('name')
            <p class="register-form__error">{{ $message }}</p>
            @enderror
        </div>

        <div class="register-form__group">
            <label class="register-form__label">メールアドレス</label>
            <input class="register-form__input" type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
            @error('email')
            <p class="register-form__error">{{ $message }}</p>
            @enderror
        </div>

        <div class="register-form__group">
            <label class="register-form__label">パスワード</label>
            <input class="register-form__input" type="password" name="password" placeholder="例: coachtech1106">
            @error('password')
            <p class="register-form__error">{{ $message }}</p>
            @enderror
        </div>

        <button class="register-form__button" type="submit">
            登録
        </button>
    </form>
</main>
@endsection