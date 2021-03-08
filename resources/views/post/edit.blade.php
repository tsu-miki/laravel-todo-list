@extends('layout')
@section('title', 'ToDo編集')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ToDo編集ページ</h2>
        <form method="POST" action="{{ route('update') }}" onSubmit="return checkSubmit()">
        @csrf
            <input type="hidden" name="id" value="{{ $post->id }}" >
            <div class="form-group">
                <label for="content">
                    内容
                </label>
                <input
                    id="content"
                    name="content"
                    class="form-control"
                    value="{{ $post->content }}"
                    type="text"
                >
                @if ($errors->has('content'))
                    <div class="text-danger">
                        {{ $errors->first('content') }}
                    </div>
                @endif
            </div>
            <div class="mt-5">
                <a class="btn btn-secondary" href="{{ route('posts') }}">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">
                    更新する
                </button>
            </div>
        </form>
    </div>
</div>
<script>
function checkSubmit(){
if(window.confirm('更新してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection