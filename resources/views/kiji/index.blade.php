@extends('layouts.common')
@section('title', '記事システム')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form method="POST" action="/kiji/add">
                <div class="form-group">
                    {{ csrf_field() }}
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
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection