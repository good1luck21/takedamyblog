@extends('welcome')

@section('content')

<form action="/posts/{{$post->id}}/update" method="post">
  {{ csrf_field() }}
  @method('patch')
  <input type="text" name="title" value="{{ $post->title }}" placeholder="タイトル">
  <input type="text" name="content" value="{{ $post->content}}" placeholder="本文">
  <input type="submit" value="投稿">
</form>

@endsection