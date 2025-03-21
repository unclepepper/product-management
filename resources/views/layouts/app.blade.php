<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Мое приложение')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM6g5n0z5e5e5e5e5e5e5e5e5e5e5e5e5e5e5e" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header>
        <h1>Мое приложение</h1>
        <nav>
            <ul>
                <li><a href="{{ route('products.index') }}">Товары</a></li>
                <li><a href="{{ route('orders.index') }}">Заказы</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Мое приложение. Все права защищены.</p>
    </footer>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
