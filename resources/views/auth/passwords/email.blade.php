<head>
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
</head>

<body>
    <div class="container">
        <div class="icon-container">
            <img src="{{ asset('image/black_on_trans.png') }}" alt="icon" class="icon">
        </div>

        <div class="card">
            @if (session('status'))
                <div class="alert alert-success" role="alert" style="text-align:center; margin-bottom:15px;">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <label for="email" style="margin-top: 15px;">メールアドレス</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert" style="color:red; font-size:0.9em;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <button type="submit" class="btn btn-primary">
                    パスワード再設定リンクを送信
                </button>
            </form>
        </div>

        <div class="btn btn-link">
            <a href="{{ route('login') }}" style="color: black;">ログインはこちら</a>
        </div>
    </div>
</body>