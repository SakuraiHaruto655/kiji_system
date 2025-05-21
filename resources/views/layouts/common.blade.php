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
                <span class="user-label">ユーザー： {{ Auth::user()->name }}</span>
            </li>
            <li class="nav-item">
                <a href="/kiji/create" class="button">記事を作成する</a>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}" style="display: inline; margin: 0;">
                    @csrf
                    <button type="submit" class="logout-button">ログアウト</button>
                </form>
            </li>
            @else
            <li class="nav-item">
                <a class="button" href="{{ route('login') }}">ログイン</a>
            </li>
            @endif
        </ul>
    </header>

    <div>
        @yield('content')
    </div>
</body>

</html>