@extends('layout')
@section('title', 'ToDo登録')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ToDo登録ページ</h2>
        <form method="POST" action="{{ route('register') }}" onSubmit="return checkSubmit()">
        @csrf
            <div class="form-group">
                <label for="content">
                    内容
                </label>
                <input
                    id="content"
                    name="content"
                    class="form-control"
                    rows="4"
                >{{ old('content') }}</input>
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
                    投稿する
                </button>
            </div>
        </form>
    </div>
</div>
<script>
function checkSubmit(){
if(window.confirm('送信してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection