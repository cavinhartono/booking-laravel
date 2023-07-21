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
      <a href="#" class="logo">Indivel</a>
      <ul class="nav flex gap-1">
        <li class="list"></li>
        <li class="list"></li>
        <li class="list"></li>
      </ul>
      <div class="action"></div>
    </header>
    @yield('content')
  </div>
  @livewireScripts
  @stack('js')
</body>

</html>