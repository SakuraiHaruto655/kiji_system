<head>
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
</head>

<body>
    <div class="container">
        <div class="icon-container">
            <img src="{{ asset('image/black_on_trans.png') }}" alt="icon" class="icon">
        </div>

        <div class="card" style="text-align: center;">
            <div class="card-header" style="margin-bottom: 20px;">登録完了</div>

            <p style="font-size: 1.1em; color: #333; margin-bottom: 8px;">
                新規会員登録が完了しました。
            </p>
            <p style="color: #555; margin-bottom: 25px;">
                下のボタンからログイン画面へお進みください。
            </p>

            <a href="{{ route('login') }}"
                class="btn btn-primary"
                style="width: 100%; max-width: 300px; text-decoration: none; display: inline-block;">
                ログイン画面へ
            </a>
        </div>
    </div>
</body>