<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Eventure Ceylon') }}</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        @vite(['resources/css/app.css'])
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center gap-2" href="/">
                    <x-application-logo style="width: 2rem; height: 2rem; fill: currentColor;" />
                    <span>{{ config('app.name', 'Eventure Ceylon') }}</span>
                </a>

                <div class="d-flex gap-2">
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-primary">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                        @endif
                    @endauth
                </div>
            </div>
        </nav>

        <header class="bg-body-tertiary py-5 border-bottom">
            <div class="container text-center py-5">
                <h1 class="display-4 fw-bold">Discover Sri Lanka with Eventure Ceylon</h1>
                <p class="lead text-muted col-lg-8 mx-auto">
                    Browse curated tour packages, plan your itinerary, and book your next
                    Sri Lankan adventure — all in one place.
                </p>
                @guest
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg mt-3">Get started</a>
                @endguest
            </div>
        </header>

        <main class="container py-5">
            <p class="text-center text-muted">
                Tour packages, bookings, and itinerary planning are coming soon.
            </p>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
