<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <div class="navbar-brand fw-bold">Railway Station</div>
                <div class="hstack gap-3">
                    <a class="badge text-bg-info p-2" href="{{ route('departures') }}">Today's Departures</a>
                    <a class="badge text-bg-secondary p-2" href="/">Show All</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('main-content')
    </main>
</body>
