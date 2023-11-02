<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Attendance Management</title> -->
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  @yield('css')
</head>




<body>
  <div class="menu-btn">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </div>
  <div class="title">Rese</div>

  <div class="menu">
    <div class="menu__item">
      <a href="/">HOME</a>
    </div>
    @if (Auth::check())
    <div class="menu__item">
      <form class="" action="/logout" method="post">
          @csrf
      <button class="header-nav__button">Logout</button>
      </form>
    </div>
    <div class="menu__item">
      <a href="/mypage">Mypage</a>
    </div>
    @else
    <div class="menu__item">
      <a href="/register">Registration</a>
    </div>
    <div class="menu__item">
      <a href="/login">Login</a>
    </div>
    @endif

  </div>
  <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>

<script src="{{ asset('js/app.js') }}"></script>

  <main>
    @yield('content')
  </main>
</body>

</html>