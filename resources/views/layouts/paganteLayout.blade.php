<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>

    <title>Pagante</title>
  </head>
  <body>
    @include('pagesElements.header')
    @yield('content')
  </body>
</html>
