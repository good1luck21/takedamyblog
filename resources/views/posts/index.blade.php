@extends('welcome')

@section('content')
@forelse($posts as $post)
  {{$post->title}} | <a href="/posts/{{$post->id}}">詳細</a> | <a href="/posts/{{$post->id}}/edit">編集</a> | 
  <a href="#" class="del" data-id="{{$post->id}}">削除</a>
  <form action="/posts/{{$post->id}}/delete" method="POST" id="form-{{$post->id}}">
    {{csrf_field()}}
    {{method_field('delete')}}
  </form>
@empty
  <h1>空です</h1>
@endforelse

<script>
  let targets = document.getElementsByClassName('del');
  for(let i = 0; i < targets.length; i++){
    targets[i].addEventListener('click', function(e){
      e.preventDefault();
      if(confirm("本当に削除しますか?")){
        let target_form = document.getElementById('form-' + this.dataset.id)
        console.log(target_form);
        target_form.submit();
      }
    })
  }
  console.log(targets);
</script>

@endsection