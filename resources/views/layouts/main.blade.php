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
        <link rel="stylesheet" href="css/styles.css">
        <!-- Styles -->
    </head>
    <body>
        <header>
            <nav class="navBar">
                <a href="/" class="logo">BeLive</a>
                <ul class="navBarUl">
                    <li> <a href="/dashboard">Dashboard</a></li>
                    <li> <a href="/cadastro">cadastro</a></li>
                    <li> <a href="/login">Login</a></li>
                </ul>
            </nav>
        </header>

        @yield('content')
        <footer>
            @finefellings &copy; 2024
        </footer>
    </body>
</html>
