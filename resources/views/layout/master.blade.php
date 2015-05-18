<!DOCTYPE html>
<html class="no-js" lang="en-US" prefix="og: http://ogp.me/ns#" itemscope itemtype="http://schema.org/Product">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>@yield("title")</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="@yield('description')">

      <link rel="shortcut icon" type="image/ico" href="/assets/images/favicon.ico" />

      <!-- Google+ because that one guy in your company is gonna ask about it -->
      <meta itemprop="name" content="@yield('gplus-name')">
      <meta itemprop="description" content="@yield('gplus-description')">
      <meta itemprop="image" content="@yield('gplus-image')">

      <!-- Facebook tags, because you know you're gonna add them -->
      <meta property="og:site_name" content="@yield('og-sitename')">
      <meta property="og:title" content="@yield('og-title')">
      <meta property="og:type" content="@yield('og-type')">
      <meta property="og:description" content="@yield('og-description')">
      <meta property="og:image" content="@yield('og-image')">

      <!-- Because of course Twitter needs meta tags too -->
      <meta name="twitter:card" content="summary">
      <meta name="twitter:url" content="@yield('t-url')">
      <meta name="twitter:title" content="@yield('t-title')">
      <meta name="twitter:description" content="@yield('t-description')">
      <meta name="twitter:image" content="@yield('t-image')">

      <script src="//ajax.googleapis.com/ajax/libs/webfont/1.5.10/webfont.js"></script>
      <script>
         WebFont.load({google: { families: ['Roboto:400,500,700,700italic,500italic,400italic:latin'] }});
      </script>

      <link rel="stylesheet" href="/assets/css/application.css">
      <script src="/assets/js/modernizr.min.js"></script>
   </head>
   <body>
      @yield('content')
      @include('fragments.scripts')
   </body>
</html>
