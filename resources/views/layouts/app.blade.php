<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>@yield('titolo')</title>
  </head>
  <body>

    <header>
      @include('partials/header')
    </header>

    <main class="clearfix">
      @yield('content')
    </main>

    <footer>
      @include('partials/footer')
    </footer>

  </body>
</html>
