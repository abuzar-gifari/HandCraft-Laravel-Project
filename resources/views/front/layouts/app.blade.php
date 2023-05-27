<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>handcraft</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link rel="stylesheet" href="{{ asset('css/abc.css') }}">
      <link rel="stylesheet" href="css/components.css">
      @yield('css')
   </head>
   <body>
      <header class="header">
         <a href="#" class="logo"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> <strong>Hand</strong>Craft </a>
         @include('front.layouts.nav')
         <div id="menu-btn" class="fas fa-bars"></div>
      </header>
      @yield('content')
      <script src="js/script.js"></script>
   </body>
</html>
