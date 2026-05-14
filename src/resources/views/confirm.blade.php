@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm">
    <h2 class="confirm__title">Confirm</h2>

<form action="/thanks" method="post">
    @csrf

    <table class="confirm-table">

        <tr>
            <th>お名前</th>
            <td>
                {{ $inputs['last_name'] }}
                {{ $inputs['first_name'] }}

                <input type="hidden" name="last_name" value="{{ $inputs['last_name'] }}">
                <input type="hidden" name="first_name" value="{{ $inputs['first_name'] }}">
            </td>
        </tr>

        <tr>
            <th>性別</th>
            <td>
                {{ $inputs['gender'] }}

                <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">
            </td>
        </tr>

        <tr>
            <th>メールアドレス</th>
            <td>
                {{ $inputs['email'] }}

                <input type="hidden" name="email" value="{{ $inputs['email'] }}">
            </td>
        </tr>

        <tr>
            <th>電話番号</th>
            <td>
                {{ $inputs['tel'] }}

                <input type="hidden" name="tel" value="{{ $inputs['tel'] }}">
            </td>
        </tr>

        <tr>
            <th>住所</th>
            <td>
                {{ $inputs['address'] }}

                <input type="hidden" name="address" value="{{ $inputs['address'] }}">
            </td>
        </tr>

        <tr>
            <th>建物名</th>
            <td>
                {{ $inputs['building'] }}

                <input type="hidden" name="building" value="{{ $inputs['building'] }}">
            </td>
        </tr>

        <tr>
            <th>お問い合わせの種類</th>
            <td>
                {{ $inputs['category'] }}

                <input type="hidden" name="category" value="{{ $inputs['category'] }}">
            </td>
        </tr>

        <tr>
            <th>お問い合わせ内容</th>
            <td>
                {{ $inputs['detail'] }}

                <input type="hidden" name="detail" value="{{ $inputs['detail'] }}">
            </td>
        </tr>

    </table>

    <div class="confirm__button">
        <button class="confirm__button-submit" type="submit">
            送信
        </button>

        <button class="confirm__button-fix" type="button" onclick="history.back()">
            修正
        </button>
    </div>

</form>
</div>
@endsection

