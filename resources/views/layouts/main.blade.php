<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="/note/create">Add note</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>Footer</footer>
</body>
</html>