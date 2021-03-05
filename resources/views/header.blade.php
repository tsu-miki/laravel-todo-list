<nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
    <a class="navbar-brand" href="#">ToDoリスト</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{ route('posts') }}">ToDo一覧 <span class="sr-only"></span></a>
            <a class="nav-item nav-link" href="{{ route('create') }}">登録</a>
            <a class="nav-item nav-link" href="#">削除</a>
            <a class="nav-item nav-link" href="#">更新</a>
        </div>
    </div>
</nav>