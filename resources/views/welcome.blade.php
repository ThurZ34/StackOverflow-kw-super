<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="container mt-5">
        <h1>Hello, Bootstrap!</h1>
        <p>Bootstrap 5 berhasil diinstall di Laravel 12.</p>

        <div class="alert alert-success" role="alert">
          Ini adalah contoh alert dari Bootstrap.
        </div>

        <button type="button" class="btn btn-primary">Tombol Primary</button>
        <button type="button" class="btn btn-secondary">Tombol Secondary</button>
    </div>
</body>
</html>
