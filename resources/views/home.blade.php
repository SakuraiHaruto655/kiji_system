@extends('layouts.common')

@section('title', 'BLOGIFY')

@section('content')
<div class="main-container">
    <div class="column">
        <div class="card">
            <div class="card-header">
                <h3>記事一覧</h3>
            </div>
            <div class="card-body">
                @if(isset($kijis) && $kijis->count() > 0)
                @foreach($kijis as $kiji)
                <div class="article-item">
                    <span class="user-label">ユーザー： {{ Auth::user()->name }}</span>
                    <div class="article-title">
                        <a href="/kiji/detail/{{ $kiji->id }}">{{ $kiji->title }}</a>
                    </div>
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