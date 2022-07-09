<!DOCTYPE html>
<html lang="en">
<head>
    @include('client.components.head')
    @yield('title')
</head>
<body>
    @include('client.components.loader')
    @include('client.components.header')
    @include('client.components.navigation')

    @yield('main_content')

    @include('client.components.footer')
    @include('client.components.copyright')

    @include('client.components.js')
</body>
</html>
