
<p>{{$kiji->user_id}}</p>
<p>{{$kiji->title}}</p>
<p>{{$kiji->body}}</p>

<form method="GET" action="/kiji/edit/{{$kiji->id}}">
    <input type="submit" class="submit_btn" value="編集">
</form>