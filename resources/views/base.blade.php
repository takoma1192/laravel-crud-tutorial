<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Test Application</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a href="{{ route('index') }}" class="navbar-brand">アプリケーション</a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="ナビゲーションの切り替え">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="Navbar">
    <ul class="navbar-nav mr-auto">
      @if (Auth::check())
      <li class="nav-item">
        <!-- Todo: Link 追加先 -->
        <a href="" class="nav-link">管理サイト</a>
      </li>
      <li class="nav-item">
        <!-- Todo: Link 追加先 -->
        {{-- <button class="btn btn-outline-secondary" form="logout-form">ログアウト</button> --}}
        <button class="btn btn-outline-secondary" style="border:0;" form="logout-form">ログアウト</button>
        <form action="{{ route('logout') }}" id="logout-form" name="logout-form" class="nav-item" method="POST" style="display:none">
          {{ csrf_field() }}
        </form>
      </li>
      @else
      <li class="nav-item">
        <!-- Todo: Link 追加先 -->
        <a href="{{ route('login') }}" class="nav-link">ログイン</a>
      </li>
      <li class="nav-item">
        <!-- Todo: Link 追加先 -->
        <a href="{{ route('register') }}" class="nav-link">登録</a>
      </li>
      @endif
    </ul>
  </div>
</nav>

@yield('content')
  
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>