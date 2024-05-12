<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.components.head')
</head>
<body class="antialiased">
    <div class="container">
        @include('frontend.components.header')
    </div>

    <main role="main" class="container">
        @yield('frontend.content')
    </main>

    <footer class="footer">
        @include('frontend.components.footer')
    </footer>
    @include('frontend.components.footer_links')
</body>
</html>
