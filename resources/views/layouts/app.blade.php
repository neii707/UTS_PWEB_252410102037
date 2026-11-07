<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'NeiiHeree - Music Web')</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>  

  @include('components.navbar')

  <div class="app-mockup page-home" id="main-mockup" style="margin-top: 20px;">
    <div class="mobile-frame">
        @yield('content')
    </div>
  </div>

  @include('components.footer')

</body>
</html>