<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="canonical" href="{!! str_replace('www.', '', URL::current()) !!}">
    <link rel="stylesheet" href="/css/bootstrap.minified.css">
    @yield('head')
    <style type="text/css">
      @font-face{
          font-family: iransans;
          font-style: normal;
          font-weight: normal;
          src: url(/fonts/IRANSansWebFaNum.woff2);
          font-display: swap;
      }
      @font-face{
          font-family: iransans;
          font-style: normal;
          font-weight: lighter;
          src: url(/fonts/IRANSansWebFaNum_Light.woff2);
          font-display: swap;
      }
      @font-face{
          font-family: iransans;
          font-style: normal;
          font-weight: bold;
          src: url(/fonts/IRANSansWebFaNum_Bold.woff2);
          font-display: swap;
      }
      body{
        font-family: iransans, tahoma;
      }
      html,body{
        height: 100%;
      }
      .container{
        min-height: 85%;
      }
    </style>
  </head>

  <body>
    @include('contactHeader')
    @include('nav')
    <div class="container-fluid" style=" padding: 0px;">
      
      @yield('container-fluid-carousel')

    </div>

    <div class="container" style="direction: rtl;">
      @yield('container')
    </div>

    <div class="container-fluid px-0" style="direction: rtl;">
      @yield('content')
    </div>

    <a href="tel:09358811546"><img class="float fixed-bottom ml-3 mb-3 d-sm-none" src="/images/call.png" alt="" style="height:70px !important;width:70px;"></a>

    @include('footer')

    <script src="/js/all.js"></script>
   @yield('scripts')
  </body>
</html>
