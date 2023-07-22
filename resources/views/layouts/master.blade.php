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
    <header class="w-full flex between items-center px-100 py-6">
      <a href="#" class="logo">Indivel</a>
      <ul class="flex gap-3" id="nav">
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
      <div class="action">
        @if ()
        <a href="/logout">Logout</a>
        @else
        <a href="/auth">Trynow</a>
        @endif
      </div>
    </header>
    @yield('content')
  </div>
  @livewireScripts
  <script src="{{ asset('assets/js/script.js') }}"></script>
  @stack('js')
</body>

</html>