@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')

<div class="admin">

    <h2 class="admin-title">Admin</h2>

    <div class="search-form">
        <form action="/admin" method="get">

            <input type="text" name="keyword" placeholder="名前やメールアドレスを入力してください">

            <select name="gender">
                <option value="">性別</option>
                <option value="男性">男性</option>
                <option value="女性">女性</option>
                <option value="その他">その他</option>
            </select>

            <select name="category">
                <option value=""disabled selected>お問い合わせの種類</option>
                <option value="delivery">商品のお届けについて</option>
                <option value="exchange">商品の交換について</option>
                <option value="trouble">商品トラブル</option>
                <option value="shop">ショップへのお問い合わせ</option>
                <option value="other">その他</option>
            </select>

            <input
                type="date"
                name="date"
                class="search-date"
                value="{{ request('date') }}"
>

            <button type="submit" class="search-btn">検索</button>

            <a href="/admin" class="reset-btn">リセット</a>

        </form>
    </div>

    <div class="admin-top">

        <button class="export-btn">
            エクスポート
        </button>

    </div>

    <table class="admin-table">

        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
        </tr>

        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->last_name }} {{ $contact->first_name }}</td>
            <td>{{ $contact->gender }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->category->name ?? '不明' }}</td>

            <td>
                <button class="detail-btn">
                    詳細
                </button>
            </td>
        </tr>
        @endforeach

    </table>

    <div class="pagination">
        {{ $contacts->appends(request()->query())->links() }}
    </div>

</div>

@endsection