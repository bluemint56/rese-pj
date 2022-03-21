<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/header.css" />
  <title>@yield('header')</title>
</head>
<body>
  <header>
    <div class="menu">
    <div class="nav__menu" id="nav__menu">
      <span class="menu__line--top"></span>
      <span class="menu__line--middle"></span>
      <span class="menu__line--bottom"></span>
    </div>
    <div class="logo">
    <h2>Rese</h2>
    </div>
</div>
  </header>
    <div class="content">
    @yield('content')
    </div>
</body>
</html>