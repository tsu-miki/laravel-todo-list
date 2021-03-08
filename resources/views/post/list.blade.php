@extends('layout')
@section('title', 'ToDoリスト一覧')
@section('content') 
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>ToDo一覧</h1>
    <table class="table table-hover">
      <tr>
        <th>ID</th>
        <th>内容</th>
        <th>登録時間</th>
        <th></th>
        <th></th>
      </tr>
      @foreach($posts as $post)
      <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->content }}</td>
        <td>{{ $post->created_at }}</td>
        <td><button type="button" class="btn btn-primary" onclick="location.href='/post/edit/{{ $post->id }}'">編集</button></td>
        <form method="POST" action="{{ route('delete', $post->id) }}" onSubmit="return checkDelete()">
        @csrf
        <td><button type="submit" class="btn btn-danger">削除</button></td>
        </form>
      </tr>
      @endforeach
    </table>
  </div>
</div>
<script>
function checkDelete(){
if(window.confirm('削除してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection