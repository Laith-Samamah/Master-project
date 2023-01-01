<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content=" " />   
      <!-- Title -->
      <title>@yield('title')</title>   
      <!-- Favicon  -->
      <link rel="shortcut icon" href="{{ asset('images/titlelogo.png') }}" />
      
      <!-- *********** CSS Files *********** -->
      <!-- Plugin CSS -->
      <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />
      <!-- Styles CSS -->
      <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
      
      @stack('styles')
    </head>

    <body >
        @yield('content')
        @stack('scripts')
    </body>
</html>
