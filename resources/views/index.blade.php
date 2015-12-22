<!doctype html>
<html lang="en">
    @include('includes.head')
       @yield('js-top')
       @yield('css')
  <body>
    @include('includes.header')
    <div class="home-contaner row no-padding no-margin">
       @yield('slide')
       @yield('content')
    </div>
    <!-- Footer -->
    @include('includes.footers')

    <script type="text/javascript" src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/commons.js')}}"></script>
    <script src="{{asset('themes/Office-master/js/wow.min.js')}}"></script>
    @yield('js-bootom')
    <script>
      //new WOW().init();
    </script>
  </body>
</html>
