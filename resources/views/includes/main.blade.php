<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body id="home" class="wide">
<!-- Wrap all content -->
<div class="wrapper">

    @include('includes.header')
    @yield('content')

   @include('includes.footer')

</div>
    @include('includes.script')

</body>
</html>

