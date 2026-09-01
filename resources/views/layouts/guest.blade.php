<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Eventure Ceylon') }}</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-body-tertiary">
        <div class="d-flex flex-column align-items-center justify-content-center min-vh-100 py-4">
            <div class="mb-4">
                <a href="/" class="d-inline-flex align-items-center gap-2 text-decoration-none text-dark">
                    <x-application-logo class="text-secondary" style="width: 2.5rem; height: 2.5rem; fill: currentColor;" />
                    <span class="fs-4 fw-semibold">{{ config('app.name', 'Eventure Ceylon') }}</span>
                </a>
            </div>

            <div class="card shadow-sm" style="width: 100%; max-width: 26rem;">
                <div class="card-body p-4">
                    {{ $slot }}
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
