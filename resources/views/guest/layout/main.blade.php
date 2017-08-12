<!DOCTYPE html>
<html>
@include('guest.layout.head')

<body>

  @include('guest.layout.header-banner')
  @include('guest.layout.main-menu')
  @include('guest.layout.menu-mobile')
  @yield('content')
  @include('guest.layout.footer')
</body>

</html>
