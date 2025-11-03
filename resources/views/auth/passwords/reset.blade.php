<head>
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
</head>

<body>
    <div class="container">
        <div class="icon-container">
            <img src="{{ asset('image/black_on_trans.png') }}" alt="icon" class="icon">
        </div>

        <div class="card">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <label for="email" style="margin-top: 15px;">メールアドレス</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert" style="color:red; font-size:0.9em;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password">新しいパスワード</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert" style="color:red; font-size:0.9em;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password-confirm">新しいパスワード（確認）</label>
                <input id="password-confirm" type="password" class="form-control"
                       name="password_confirmation" required autocomplete="new-password">

                <button type="submit" class="btn btn-primary">パスワードをリセット</button>
            </form>
        </div>

        <div style="color: black; text-align: center; margin-top: 20px;">
            ログインページへ戻る
        </div>
        <div class="btn btn-link">
            <a href="{{ route('login') }}" style="color: black;">ログインはこちら</a>
        </div>
    </div>
</body>
