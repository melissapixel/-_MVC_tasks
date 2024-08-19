<?php
header('Content-Type: application/json');

$filename = 'data.txt';

// Получение списка пользователей
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode(file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));
}

// Добавление нового пользователя
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    if (isset($input['name']) && isset($input['email'])) {
        $user = $input['name'] . ',' . $input['email'] . "\n";
        file_put_contents($filename, $user, FILE_APPEND);
        echo json_encode(['status' => 'User added']);
    } else {
        echo json_encode(['error' => 'Invalid input']);
    }
}
?>