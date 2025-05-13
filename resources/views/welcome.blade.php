<!DOCTYPE html>
<html>
    <head>
        <title>Blogify</title>
    </head>
    <body>
        <header>
            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">
                            ダッシュボード
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}">
                            ログイン
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                新規登録
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
