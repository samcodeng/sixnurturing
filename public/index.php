<?php

$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

if (!is_string($requestPath)) {
    http_response_code(400);
    exit('Bad request');
}

if (PHP_SAPI === 'cli-server' && $requestPath !== '/') {
    $requestedFile = realpath(__DIR__ . $requestPath);

    if (
        is_string($requestedFile)
        && str_starts_with($requestedFile, __DIR__ . DIRECTORY_SEPARATOR)
        && is_file($requestedFile)
    ) {
        return false;
    }
}

$routes = [
    '/' => ['home.php', 'Six Nurturing Home Limited'],
    '/about' => ['about.php', 'About us | Six Nurturing Home Limited'],
    '/services' => ['services.php', 'Our services | Six Nurturing Home Limited'],
    '/our-approach' => ['approach.php', 'Our approach | Six Nurturing Home Limited'],
    '/careers' => ['careers.php', 'Careers | Six Nurturing Home Limited'],
    '/contact' => ['contact.php', 'Contact us | Six Nurturing Home Limited'],
];

$requestPath = rtrim($requestPath, '/') ?: '/';

if (!isset($routes[$requestPath])) {
    http_response_code(404);
    $pageTitle = 'Page not found | Six Nurturing Home Limited';
    $currentPage = '';
    require __DIR__ . '/views/404.php';
    exit;
}

[$page, $pageTitle] = $routes[$requestPath];
$currentPage = pathinfo($page, PATHINFO_FILENAME);

require __DIR__ . '/views/' . $page;
