<?php

// The app is served from the project root (not public/), so asset() must prefix URLs with /public
define('LARAVEL_SERVED_FROM_ROOT', true);


$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// PHP built-in server: let it serve real files from public/ (e.g. /public/welcome/css/main.css) directly
if ($uri !== '/' && str_starts_with($uri, '/public/') && is_file(__DIR__.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';