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
                <p><strong>ユーザーID:</strong> {{ $kiji->user_id }}</p>
                <p class="article-title"><strong>タイトル:</strong> {{ $kiji->title }}</p>
                <p><strong>本文:</strong><br>{{ $kiji->body }}</p>
            </div>

            <form method="GET" action="/kiji/edit/{{ $kiji->id }}">
                <input type="submit" class="submit-button" value="編集">
            </form>
        </div>
    </div>
</div>
@endsection