<?php
$url = 'http://oop.local/api/index.php';
$data = array(
    'name' => 'Ангелина Позняк',
    'email' => 'angelor@mail.com'
);

// Преобразуем данные массива в JSON
$data_json = json_encode($data);

// Настройка потока ввода для отправки POST-запроса
$options = array(
    'http' => array(
        'header'  => "Content-Type: application/json\r\n",
        'method'  => 'POST',
        'content' => $data_json,
    ),
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

if ($result === FALSE) {
    // Обработка ошибки
    echo "Ошибка при отправке запроса.";
} else {
    // Выводим ответ
    echo $result;
}
?>