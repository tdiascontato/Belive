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
                    @auth
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><form action="/logout" method="post">
                        @csrf
                        <a href="/logout"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">Logout</a>
                    </form></li>
                    @endauth
                    @guest
                    <li> <a href="/register">cadastro</a></li>
                    <li> <a href="/login">Login</a></li>
                    @endguest
                </ul>
            </nav>
            <form action="/" method="get" class="search">
                <input  type="text" placeholder="Pesquisar história.." class="inputSearch" name='search' />
                <input class="btnSearch" value="?" type="submit"/>
            </form>
        </header>

        @yield('content')
        <footer class="footer">
            <a href="/">Siga para o início</a>
            <a href="/register">Ir para o cadastro</a>
            <a href="/login">Ir para o login</a>
            <a href="/dashboard">Ir para o dashboard</a>
            <a href="https://instagram.com/finefellings"> &copy; finefellings2024</a>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
