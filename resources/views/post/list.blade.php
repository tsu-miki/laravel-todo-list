<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ToDoリスト</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
        <a class="navbar-brand" href="#">ToDoリスト</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">ToDo一覧 <span class="sr-only"></span></a>
            <a class="nav-item nav-link" href="#">登録</a>
            <a class="nav-item nav-link" href="#">削除</a>
            <a class="nav-item nav-link" href="#">更新</a>
          </div>
        </div>
      </nav>
    </header>
    <br>
    <div class="container">
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
    </div>
</body>
</html>