<?php
/**
 * EVENTURE CEYLON - Simple Router
 * Serves the home, login, and register pages
 */

$requestUri = trim($_SERVER['REQUEST_URI'], '/');
$basePath = str_replace(basename(__DIR__), '', $_SERVER['SCRIPT_NAME']);
$path = str_replace($basePath, '', $requestUri);

// Remove query string
$path = explode('?', $path)[0];

// Serve home page
if ($path === '' || $path === '/') {
    include __DIR__ . '/../resources/views/home/index.blade.php';
    exit;
}

// Serve login page
if ($path === 'login') {
    include __DIR__ . '/../resources/views/auth/login.blade.php';
    exit;
}

// Serve register page
if ($path === 'register') {
    include __DIR__ . '/../resources/views/auth/register.blade.php';
    exit;
}

// Serve static files (CSS, JS, images)
$filePath = __DIR__ . '/' . $path;
if (is_file($filePath)) {
    // Set proper content type
    $ext = pathinfo($filePath, PATHINFO_EXTENSION);
    $mimeTypes = [
        'css' => 'text/css',
        'js' => 'application/javascript',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'png' => 'image/png',
        'gif' => 'image/gif',
        'svg' => 'image/svg+xml',
        'ico' => 'image/x-icon',
        'woff' => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf' => 'font/ttf',
    ];

    header('Content-Type: ' . ($mimeTypes[$ext] ?? 'text/plain'));
    readfile($filePath);
    exit;
}

// 404 error
http_response_code(404);
echo '<!DOCTYPE html>
<html>
<head>
    <title>404 - Page Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background: #f5f5f5;
        }
        h1 {
            color: #333;
            font-size: 3em;
        }
        p {
            color: #666;
            font-size: 1.2em;
        }
        a {
            color: #D4AF37;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>404</h1>
    <p>Page not found</p>
    <p><a href="/">← Go Home</a></p>
</body>
</html>';
