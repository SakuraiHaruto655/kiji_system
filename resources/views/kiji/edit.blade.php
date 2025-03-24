<form method="POST" action="/kiji/update/{{$kiji->id}}">
    @csrf
    <label for="title">タイトル</label>
    <input type="text" name="title" required value="{{$kiji->title}}">

    <label for="body">本文</label>
    <input type="text" name="body" required value="{{$kiji->body}}">

    <input type="submit" class="submit_btn" value="修正">
</form>