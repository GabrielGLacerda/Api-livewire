<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Sometype+Mono&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ asset('css/home.css') }}>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="m-0 p-0 box-border bg-gradient-to-r from-cyan-950 to-cyan-900">
        <livewire:header/>
        <livewire:movies/>
    </body>
</html>