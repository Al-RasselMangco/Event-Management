<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'MSU Venue Event Management') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/style.css', 'resources/js/app.js'])
    </head>
    <body>
        <header>
            <div class="container">
                @if (Route::has('login'))
                    <nav>
                        <div class="brand">{{ config('app.name', 'MSU Venue Event Management') }}</div>
                        <div class="nav-actions">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn">Register</a>
                                @endif
                            @endauth
                        </div>
                    </nav>
                @endif
            </div>
        </header>

        <main>
            <div class="container">
                <section class="hero">
                    <h1>Welcome to MSU venue event management system</h1>
                    <p>Plan, book, and manage venue events with ease.</p>
                </section>
            </div>
        </main>

        <footer>
            <div class="container">
                {{-- Editable footer: replace with your own content/links --}}
                <small>&copy; {{ date('Y') }} MSU. All rights reserved.</small>
            </div>
        </footer>
    </body>
</html>
