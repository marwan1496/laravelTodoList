<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Todalist</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')

    <div class="container">
      @include('inc.messages')

      @yield('content')

      <footer id="footer" class="text-center">
        <p>copyright &copy; 2019</p>
      </footer>
    </div>
  </body>
</html>
