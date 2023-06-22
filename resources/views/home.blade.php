<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <header>
        <h1>Hello World</h1>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/history">Storia</a></li>
            <li><a href="/contacts">Contatti</a></li>
            <li><a href="/products">Prodotti</a></li>
            <li><a href="/account">Account</a></li>
        </ul>
    </header>

    <main>
        <h2>Benvenuto su Laravel</h2>
    </main>
</body>

</html>