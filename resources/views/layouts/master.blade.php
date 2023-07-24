<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
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
          <a href="#" class="subtitle">
            Home
          </a>
        </li>
        <li class="list">
          <a href="#" class="subtitle">
            About
          </a>
        </li>
        <li class="list">
          <a href="#" class="subtitle">
            Contacts
          </a>
        </li>
        <li class="list">
          <a href="#" class="subtitle">
            Location
          </a>
        </li>
      </ul>
      <div class="action">
        <!-- <a href="/logout">Logout</a> -->
        <a href="/auth" class="btn primary-border">Trynow</a>
      </div>
    </header>
    @yield('content')
  </div>
  @livewireScripts
  <script src="{{ asset('assets/js/script.js') }}"></script>
  @stack('js')
</body>

</html>