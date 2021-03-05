@extends('layout')
@section('title', 'ToDoリスト一覧')
@section('content') 
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>ToDo一覧</h1>
    <table class="table table-hover">
      <tr>
        <th>ID</th>
        <th>登録時間</th>
        <th>内容</th>
        <th></th>
      </tr>
      <tr>
        <td>1</td>
        <td>2020/06/30</td>
        <td>テスト</td>
        <td></td>
      </tr>
    </table>
  </div>
</div>
@endsection