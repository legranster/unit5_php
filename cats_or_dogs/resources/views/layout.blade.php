<!doctype html>
<html lang="en">
@include('includes.head')
<!-- START body -->
<body style="background-color: #4d4d4d !important">
@include('includes.nav')
    <!-- START main -->
    <main role="main" class="container">
        @yield('body')
    </main>
    <!-- END main -->
@include('includes.footer')
</body> <!-- END body -->
</html>