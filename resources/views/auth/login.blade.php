<head>
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
</head>

<body>
    <div class="container">
        <div class="icon-container">
            <img src="{{ asset('image/black_on_trans.png') }}" alt="icon" class="icon">
        </div>
        <div class="card">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email" class="col-md-4 col-form-label text-md-end" style="margin-top: 15px;">メールアドレス</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="password" class="col-md-4 col-form-label text-md-end">パスワード</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <button type="submit" class="btn btn-primary">
                    ログイン
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    パスワードを忘れた方はこちら
                </a>
                    @endif
            </form>
        </div>
        <div style="color: black; text-align: center; margin-top: 20px;">
            アカウントをもっていませんか？
        </div>
        <div class="btn btn-link">
            <a class="btn btn-link" href="{{ route('register') }}" style="color: black;">
                新規会員登録
            </a>
        </div>
    </div>
</body>