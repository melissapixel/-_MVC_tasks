<?php
    include 'db.php';
    include 'get_posts.php';
?>

<!DOCTYPE html>
<html lang="ru"> <!-- Установите язык страницы -->
<head>
    <meta charset="UTF-8"> <!-- Кодировка страницы -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Адаптивная вёрстка -->
    <title>Все записи</title> <!-- Название страницы -->
    <link rel="stylesheet" href="css/style.css"> <!-- Подключение CSS стилей -->
    <script src="script.js" defer></script> <!-- Подключение JavaScript файла -->
</head>
<body>

    <header>
        <h1>Все записи</h1>
        <nav>
            <ul>
                <li><a href="index.php">Посты</a></li>
                <li><a href="add.php">Добавить пост</a></li>
            </ul>
        </nav>
    </header>

    <div class="post__block">
        <?= $data->getData(); ?>
    </div>

</body>
</html>