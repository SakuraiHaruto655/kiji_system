<head>
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
</head>

<body>
    <div class="container">
        <div class="icon-container">
            <img src="{{ asset('image/black_on_trans.png') }}" alt="icon" class="icon">
        </div>

        <div class="card">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <label for="name" style="margin-top: 15px;">お名前</label>
                <input id="name" type="text"
                       class="form-control @error('name') is-invalid @enderror"
                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert" style="color:red; font-size:0.9em;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="email">メールアドレス</label>
                <input id="email" type="email"
                       class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert" style="color:red; font-size:0.9em;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password">パスワード</label>
                <input id="password" type="password"
                       class="form-control @error('password') is-invalid @enderror"
                       name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert" style="color:red; font-size:0.9em;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password-confirm">パスワード（確認）</label>
                <input id="password-confirm" type="password" class="form-control"
                       name="password_confirmation" required autocomplete="new-password">

                <button type="submit" class="btn btn-primary">新規会員登録</button>
            </form>
        </div>

        <div style="color: black; text-align: center; margin-top: 20px;">
            すでにアカウントをお持ちですか？
        </div>
        <div class="btn btn-link">
            <a href="{{ route('login') }}" style="color: black;">ログインはこちら</a>
        </div>
    </div>
</body>
