<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravelitos</title>
    @yield('title')
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <div class="container">
    </div>
    @yield('container')
    @vite('resources/js/app.js')

    @livewireScripts
</body>
</html>
