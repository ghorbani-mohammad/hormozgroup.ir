<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('head')
    <link rel="stylesheet" href="/css/bootstrap.minified.css">
    <style type="text/css">
      @font-face{
          font-family: iransans;
          font-style: normal;
          font-weight: normal;
          font-display: swap;
          src: url(/fonts/IRANSans-web.woff2);
      }
      @font-face{
          font-family: iransans;
          font-style: normal;
          font-weight: lighter;
          font-display: swap;
          src: url(/fonts/IRANSans-Light-web.woff2);
      }
      @font-face{
          font-family: iransans;
          font-style: normal;
          font-weight: bold;
          font-display: swap;
          src: url(/fonts/IRANSans-Bold-web.woff2);
      }
      body{
        font-family: iransans, Tahoma;
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

    <a href="tel:09358811546"><img class="float fixed-bottom ml-3 mb-3 d-sm-none" src="images/call2.webp" alt="تماس با ما" style="height:70px !important;width:70px;"></a>

    
    @include('footer')
    
    <link rel="stylesheet" href="/css/font-awesome.minified.css">
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
   

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>

    <script>
        $(function() {
          $('.lazy').lazy({threshold:100});
        });
        $(function() {
          $('.lazy-delay').lazy({delay:1000});
        });
    </script>
  </body>
</html>
