<?php
// Получаем путь запроса
$requestUri = $_SERVER['REQUEST_URI'];

// Проверяем, заканчивается ли на .html
if (preg_match('/^(.*)\.html$/', $requestUri, $matches)) {
    $target = $matches[1];
    // 301 редирект
    header("Location: $target", true, 301);
    exit;
}

// Если не .html — можно отдать 404 или просто ничего не делать
http_response_code(404);
echo "Not found.";
