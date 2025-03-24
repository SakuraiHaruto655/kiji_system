@extends('layouts.common')
@section('title', '記事システム')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form method="POST" action="/kiji/add">
                <div class="form-group">
                    @csrf
                    <p class="ext-monospace">タイトル</p><input type="text" name="title" class="form-control">
                    <p class="ext-monospace">本文</p><input type="text" name="body" class="form-control">
                    <br><input type="submit" value="投稿" class="btn btn-default">
                </div>
            </form>
            
        </div>
    </div>
    <div class="mx-auto" style="width: 450px;">
        <div class="row">
            <div class="col-sm-12">
                @foreach($kijis as $kiji)
                    <div class="card border-primary mb-4" style="max-width: 30rem;">
                    <div class="card-body text-primary">
                        <h5 class="card-title">{{$kiji->title}}</h5>
                        <p class="card-text">{{$kiji->body}} </p>
                        <form method="POST" action="/kiji/detail/{{$kiji->id}}">
                            @csrf
                        <input type="submit" value="編集" class="btn btn-danger btn-sm">
                        </form>
                        <form method="POST" action="/kiji/delete/{{$kiji->id}}">
                            @csrf
                            <input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("本当に削除しますか？");'>
                        </form>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection