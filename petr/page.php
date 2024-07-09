<?php
    include 'index.php';
?>
<!DOCTYPE html>
<html lang="en-RU">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Название страницы</title>
    </head>
    <body>
        <div class="main__block">
            <?php $database->getData(); ?>
            <br>
            <?php $database->getData_2(); ?>
        </div>
    </body>
</html>