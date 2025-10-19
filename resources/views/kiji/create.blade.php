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
</div>
@endsection