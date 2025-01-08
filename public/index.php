<?php

// Включаем отображение всех ошибок
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define ("ROOT",  dirname(__DIR__));
define ("PUBLIC",  ROOT . '/public');
define ("CORE",  ROOT . '/core');
define ("APP",  ROOT . '/app');
define ("CONTROLLERS",  APP . '/controllers');
define ("VIEWS",  APP . '/views');

require CORE . '/funcs.php';

// Получаем URI запроса
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Убираем начальный слеш
$uri = ltrim($uri, '/');

// Определяем путь к контроллеру
$controllerPath = '../app/controllers/' . ($uri ?: 'index') . '.php';

// Проверяем существование файла контроллера
if (file_exists($controllerPath)) {
    require $controllerPath;
} else {
    // Если файл не найден, можно вывести 404 ошибку
    http_response_code(404);
    echo "404 Not Found";
}



/*define ("ROOT",  dirname(__DIR__));
define ("PUBLIC",  ROOT . '/public');
define ("CORE",  ROOT . '/core');
define ("APP",  ROOT . '/app');
define ("CONTROLLERS",  APP . '/controllers');
define ("VIEWS",  APP . '/views');
define ("PATH",  ROOT . 'http://localhost:8080');

require CORE . '/funcs.php';

require CONTROLLERS . '/index.php';*/