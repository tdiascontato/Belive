<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/styles.css">
        <!-- Styles -->
    </head>
    <body>
        <header class="header">
            <nav class="navBar">
                <a class="logo" href="/">BeLive</a>
                <ul class="navBarUl">
                    <li> <a href="/posts/create">Criar Post</a></li>
                    <li> <a href="/cadastro">cadastro</a></li>
                    <li> <a href="/login">Login</a></li>
                </ul>
            </nav>
            <div class="search">
                <input class="inputSearch" type="text"/>
                <input class="btnSearch" value="?" type="button"/>
            </div>
        </header>

        @yield('content')
        <footer class="footer">
            <a href="/">Siga para o início</a>
            <a href="/cadastro">Ir para o cadastro</a>
            <a href="/login">Ir para o login</a>
            <a href="/dashboard">Ir para o dashboard</a>
            <a href="https://instagram.com/finefellings"> &copy; finefellings2024</a>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
