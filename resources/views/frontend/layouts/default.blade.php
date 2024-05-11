<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.includes.head')
</head>
<body class="antialiased">
    <div class="container">
        @include('frontend.includes.header')
    </div>

    <main role="main" class="container">
        @yield('frontend.content')
    </main>

    <footer class="footer">
        @include('frontend.includes.footer')
    </footer>
</body>
</html>
