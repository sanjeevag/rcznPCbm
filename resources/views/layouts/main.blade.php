<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
  @include('layouts.nav')
  @yield('content')
  @include('layouts.footer')
  @yield('scripts')
</body>

</html>