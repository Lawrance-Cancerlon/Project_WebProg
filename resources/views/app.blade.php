<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="assets/style.scss">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    @vite('resources/css/app.css')
</head>
<body class="bg-surface-container">
    <header class="px-4">
        @yield('navbar')
    </header>

    <main class="">
        @yield('content')
    </main>

    <script src="assets/script.js" type="module"></script>
</body>
</html>