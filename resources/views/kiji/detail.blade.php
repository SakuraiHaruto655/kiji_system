@extends('layouts.common')

@section('title', 'BLOGIFY')

@section('content')
<div class="main-container">
    <div class="column">
        <div class="card">
            <div class="card-header">
                <h3>記事の詳細</h3>
            </div>

            <div class="article-item">
                {{-- 管理者のみユーザーIDを表示 --}}
                @if(Auth::check() && Auth::user()->is_admin)
                <p><strong>ユーザーID:</strong> {{ $kiji->user->id }}</p>
                @endif

                <p><strong>ユーザー名:</strong> {{ $kiji->user->name }}</p>
                <p class="article-title"><strong>タイトル:</strong> {{ $kiji->title }}</p>
                <p><strong>本文:</strong><br>{{ $kiji->body }}</p>
            </div>

            {{-- 管理者か記事作成者のみ編集・削除を表示 --}}
            @if(Auth::check() && (Auth::user()->is_admin || Auth::id() === $kiji->user_id))
            <form method="GET" action="/kiji/edit/{{ $kiji->id }}">
                <input type="submit" class="submit-button" value="編集">
            </form>
            <form method="POST" action="/kiji/delete/{{ $kiji->id }}">
                @csrf
                <button type="submit" class="delete-button" onclick="return confirm('本当に削除しますか？');">
                    削除
                </button>
            </form>
            @endif
        </div>
    </div>
</div>
@endsection
