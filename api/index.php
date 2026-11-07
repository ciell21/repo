<?php

/**
 * Vercel serverless entry point for the Laravel application.
 *
 * Vercel's filesystem is read-only except for /tmp, so point Laravel's
 * writable paths at /tmp before bootstrapping the framework.
 */

$directories = [
    '/tmp/views',
    '/tmp/cache',
    '/tmp/sessions',
];

foreach ($directories as $directory) {
    if (! is_dir($directory)) {
        @mkdir($directory, 0777, true);
    }
}

$defaults = [
    'VIEW_COMPILED_PATH' => '/tmp/views',
    'CACHE_STORE' => 'array',
    'SESSION_DRIVER' => 'cookie',
    'LOG_CHANNEL' => 'stderr',
    'APP_CONFIG_CACHE' => '/tmp/config.php',
    'APP_EVENTS_CACHE' => '/tmp/events.php',
    'APP_PACKAGES_CACHE' => '/tmp/packages.php',
    'APP_ROUTES_CACHE' => '/tmp/routes.php',
    'APP_SERVICES_CACHE' => '/tmp/services.php',
];

foreach ($defaults as $key => $value) {
    if (getenv($key) === false) {
        putenv("{$key}={$value}");
        $_ENV[$key] = $value;
        $_SERVER[$key] = $value;
    }
}

require __DIR__.'/../public/index.php';
