<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
</head>

<style>
    body {
        margin: 0;
    }

    ul,
    li,
    ol,
    menu {
        list-style: none;
    }

    a {
        text-decoration: none;
        color: currentColor;
    }

    #app {
        height: 100vh;
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
    }

    .container {
        max-width: 1920px;
        margin: 0 auto;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .jc-center {
        justify-content: center;
    }

    .d-flex {
        display: flex;
    }

    .p-30 {
        padding: 30px;
    }

    .m-50 {
        margin: 0 50px;
    }

    .gap-20 {
        gap: 20px;
    }

    .logo {
        width: 50px;
    }

    .main_content {
        flex-grow: 1;
    }

    .home {
        max-width: 600px;
    }

    .cover {
        width: 250px;
    }
</style>

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