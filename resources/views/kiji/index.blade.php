@extends('layouts.common')
@section('title', '記事システム')
@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
</head>

<body>
    <div class="container">
        <div class="card">
            <form method="POST" action="/kiji/add">
                <div class="form-group">
                    @csrf
                    <p>タイトル</p><input type="text" name="title" class="form-control">
                    <p>本文</p><input type="text" name="body" class="form-control">
                    <br><input type="submit" value="投稿" class="btn btn-default">
                </div>
            </form>

        </div>
    </div>

    @foreach($kijis as $kiji)
    <div class="card">
        <a href="/kiji/detail/{{$kiji->id}}">{{$kiji->title}}</a>
        <form method="POST" action="/kiji/delete/{{$kiji->id}}">
            @csrf
            <input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("本当に削除しますか？");'>
        </form>
    </div>
</body>
@endforeach
@endsection