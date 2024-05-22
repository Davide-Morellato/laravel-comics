<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>
        @yield('title')
    </title>
</head>

<body>
    <div id="app">
        <header>
            @include('partials.header')
        </header>

        <main class="main_content">
            @yield('content')
        </main>

        <footer>
            @include('partials.footer')
        </footer>
    </div>
</body>

</html>