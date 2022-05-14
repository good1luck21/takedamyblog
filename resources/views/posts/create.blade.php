@extends('welcome')

@section('content')

<form action="/posts/store" method="post">
  {{ csrf_field() }}
  @if($errors->has('title'))
    <p style="color:red">{{$errors->first('title')}}</p>
  @endif
  <input type="text" name="title" placeholder="タイトル">
  <input type="text" name="content" placeholder="本文">
  <input type="submit" value="投稿">
</form>
@endsection