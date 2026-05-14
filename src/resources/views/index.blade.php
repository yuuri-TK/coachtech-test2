@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<main class="contact">
    <h2 class="contact-title">Contact</h2>

    <form action="{{ route('contact.confirm') }}" method="POST">
        @csrf

        <!--名前-->
        <div class="form__group">
            <label class="form__label">
                お名前<span>※</span>
            </label>

            <div class="form-input-name">
                <input type="text" name="last_name" placeholder="例:山田">
                <p class="error">
                    @error('last_name')
                        {{ $message }}
                    @enderror
                </p>
                <input type="text" name="first_name" placeholder="例:太郎">
                <p class="error">
                    @error('first_name')
                        {{ $message }}
                    @enderror
                </p>
            </div>
        </div>

        <!--性別-->
        <div class="form__group">
            <label class="form__label">
                性別<span>※</span>
            </label>

            <div class="form-radio">
                <label><input type="radio" name="gender" value="男性">男性</label>
                <label><input type="radio" name="gender" value="女性">女性</label>
                <label><input type="radio" name="gender" value="その他">その他</label>
            </div>
        </div>

        <!--メール-->
        <div class="form__group">
            <label class="form__label">
                メールアドレス<span>※</span>
            </label>

            <input class="form__input" type="email" name="email" placeholder="例: test@example.com">
            <p class="error">
                @error('email')
                    {{ $message }}
                @enderror
            </p>
        </div>

        <!--電話番号-->
        <div class="form__group">
            <label class="form__label">
                電話番号<span>※</span>
            </label>

            <div class="form-tel">
                <input type="text" name="tel" placeholder="080">
                <p class="error">
                    @error('tel')
                        {{ $message }}
                    @enderror
                </p>
                <span>-</span>
                <input type="text" name="tel_2" placeholder="1234">
                <p class="error">
                    @error('tel')
                        {{ $message }}
                    @enderror
                </p>
                <span>-</span>
                <input type="text" name="tel_3" placeholder="5678">
                <p class="error">
                    @error('tel')
                        {{ $message }}
                    @enderror
                </p>
            </div>
        </div>

        <!--住所-->
        <div class="form__group">
            <label class="form__label">
                住所<span>※</span>
            </label>

            <input class="form__input" type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
            <p class="error">
                @error('address')
                    {{ $message }}
                @enderror
            </p>
        </div>

        <!--建物名-->
        <div class="form__group">
            <label class="form__label">建物名</label>

            <input class="form__input" type="text" name="building" placeholder="例: 千駄ヶ谷マンション101">
        </div>

        <!--お問い合わせの種類-->
        <div class="form__group">
            <label class="form__label">
                お問い合わせの種類<span>※</span>
            </label>

            <select class="form__select" name="category" required>
                <p class="error">
                    @error('category')
                        {{ $message }}
                    @enderror
                </p>
                <option value="" disabled selected>選択してください</option>
                <option value="delivery">商品のお届けについて</option>
                <option value="exchange">商品の交換について</option>
                <option value="trouble">商品トラブル</option>
                <option value="shop">ショップへのお問い合わせ</option>
                <option value="other">その他</option>
            </select>
        </div>

        <!--お問い合わせ内容-->
        <div class="form__group">
            <label class="form__label">
                お問い合わせ内容<span>※</span>
            </label>

            <textarea
                class="form__textarea"
                name="detail"
                placeholder="お問い合わせ内容をご記載ください"
                required
            ></textarea>
            <p class="error">
                @error('detail')
                    {{ $message }}
                @enderror
            </p>
        </div>

        <div class="form__button">
            <button type="submit">確認画面</button>
        </div>

    </form>
</main>
@endsection