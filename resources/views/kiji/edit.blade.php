@extends('layouts.common')

@section('title', '記事の修正')

@section('content')
<div class="main-container">
    <div class="column">
        <div class="card">
            <div class="card-header">
                <h3>記事の修正</h3>
            </div>

            <form method="POST" action="/kiji/update/{{ $kiji->id }}">
                @csrf

                <div class="form-group">
                    <label for="title">タイトル</label>
                    <input type="text" name="title" required value="{{ $kiji->title }}">
                </div>

                <div class="form-group">
                    <label for="body">本文</label>
                    <textarea name="body" required rows="5">{{ $kiji->body }}</textarea>
                </div>

                <button type="submit" class="submit-button" name="mode" value="rev">修正</button>
            </form>
        </div>
    </div>
</div>
@endsection