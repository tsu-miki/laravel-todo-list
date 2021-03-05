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
      </tr>
      @foreach($posts as $post)
      <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->content }}</td>
        <td>{{ $post->created_at }}</td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection