@extends('layouts.common')

@section('title', 'BLOGIFY')

@section('content')
<div class="main-container">
    <div class="column">
        <div class="card">
            <div class="card-header">
                <h3>新規記事投稿</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="/kiji/add">
                    @csrf
                    <div class="form-group">
                        <label for="title">タイトル</label>
                        <input type="text" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="body">本文</label>
                        <textarea id="body" name="body" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="submit-button">投稿</button>
                </form>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <div class="card-header">
                <h3>記事一覧</h3>
            </div>
            <div class="card-body">
                @if(isset($kijis) && $kijis->count() > 0)
                @foreach($kijis as $kiji)
                <div class="article-item">
                    <div class="article-title">
                        <a href="/kiji/detail/{{ $kiji->id }}">{{ $kiji->title }}</a>
                    </div>
                    <form method="POST" action="/kiji/delete/{{ $kiji->id }}">
                        @csrf
                        <button type="submit" class="delete-button" onclick="return confirm('本当に削除しますか？');">削除</button>
                    </form>
                </div>
                @endforeach
                @else
                <p>記事はありません。</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection