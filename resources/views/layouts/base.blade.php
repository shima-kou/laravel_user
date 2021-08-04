<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <header class="base-container">
    <div class="base-header container mx-auto">
      <h1>Laravel</h1>
      <ul>
        <li><a href="{{ url('/') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Resister</a></li>
      </ul>
    </div>
  </header>
  <div class="content max-w-lg mx-auto">
    @yield('content')
  </div>
</body>
</html>
