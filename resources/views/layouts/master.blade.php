<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css">
  <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
  <title>@stack('title')</title>
  @stack('css')
  @livewireStyles
</head>

<body>
  <div class="container">
    <header class="header">
      <a href="#" class="subtitle">Indivel</a>
      <ul class="nav" id="nav">
        <li class="list active">
          <a href="#">
            Home
          </a>
        </li>
        <li class="list">
          <a href="#">
            About
          </a>
        </li>
        <li class="list">
          <a href="#">
            Contacts
          </a>
        </li>
        <li class="list">
          <a href="#">
            Location
          </a>
        </li>
      </ul>

      <!-- <a href="/logout">Logout</a> -->
      <a href="/auth" class="btn primary-border">Trynow</a>

    </header>
    @yield('content')
  </div>
  @livewireScripts
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <script src="{{ asset('assets/js/script.js') }}"></script>
  @stack('js')
</body>

</html>