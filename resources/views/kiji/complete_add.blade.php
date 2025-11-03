@extends('layouts.common')

@section('title', 'BLOGIFY')

@section('content')
<div class="main-container">
    <div class="column">
        <div class="card">
            <div class="card-header">
                <h3>投稿完了</h3>
            </div>

            <div class="article-item" style="text-align: center; padding: 40px 20px;">
                <p style="font-size: 1.5em; color: #333;">記事の投稿が完了しました。</p>
                <p style="font-size: 1.5em; color: #555;">以下ボタンから記事一覧に戻ることができます。</p>
            </div>
            <form method="GET" action="/home" style="margin-top: 30px;">
                <input type="submit" class="submit-button" value="記事一覧へ戻る">
            </form>
        </div>
    </div>
</div>
@endsection