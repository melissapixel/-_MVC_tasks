<!DOCTYPE html>
<html lang="ru"> <!-- Установите язык страницы -->
<head>
    <meta charset="UTF-8"> <!-- Кодировка страницы -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Адаптивная вёрстка -->
    <title>Добавить запись</title> <!-- Название страницы -->
    <link rel="stylesheet" href="css/style.css"> <!-- Подключение CSS стилей -->
    <script src="script.js" defer></script> <!-- Подключение JavaScript файла -->
</head>
<body>

    <header>
        <h1>Добавить запись</h1>
        <nav>
            <ul>
                <li><a href="index.php">Посты</a></li>
                <li><a href="add.php">Добавить пост</a></li>
            </ul>
        </nav>
    </header>

    <div class="post__block">
        <form action="">
            <div class="post__block-head"><input type="text" name="head" placeholder="Заголовок"></div>
            <div class="post__block-post">
                <textarea name="text"></textarea>
            </div>
            <div class="post__block-head"><input type="submit" value="Опубликовать"></div>
        </form>
    </div>

</body>
</html>