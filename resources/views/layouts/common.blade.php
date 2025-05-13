<!DOCTYPE html>
<html lang="ja">

<head>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
</head>

<body>
    <header>
        <a href="/home">
            <div>
                <img src="{{ asset('image/white_on_trans.png') }}" alt="icon">
            </div>
        </a>

        <ul class="navbar-nav">
            @if(Auth::check())
            <li class="nav-item">
                <!-- ユーザー名をクリックしてプルダウンメニュー表示 -->
                <details>
                    <summary>{{ Auth::user()->name }}</summary>
                    <menu>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">
                                ログアウト
                            </button>
                        </form>
                    </menu>
                </details>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">ログイン</a>
            </li>
            @endif
        </ul>
    </header>

    <div>
        @yield('content')
    </div>
</body>

</html>