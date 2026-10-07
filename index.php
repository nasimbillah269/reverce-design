<?php

// The app is served from the project root (not public/), so asset() must prefix URLs with /public
define('LARAVEL_SERVED_FROM_ROOT', true);


$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';