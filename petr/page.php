<?php
    include 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="header">
        <div class="width-header">
            <div class="logo"><img src="" alt=""></div>
            <div class="search-input"><input type="text"><input type="button" value="Искать"></div>
            <div class="header-link">О нас</div>
            <div class="header-link">Форум</div>
            <div class="header-link">Новости</div>
            <div class="enter-block">
                <div class="enter-link">Войти</div>
                <div class="enter-link">Рeгистрация</div>
            </div>
        </div>
    </div>
    <div id="container">
        <textarea id="myTextarea" oninput="autoResize()"></textarea>
    </div>
    <!-- <div>
        <div class="login-container">
            <form class="login-form">
                <h2>Login Form</h2>
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="slider">
            <div class="slides">
                <img src="photo.jpg" alt="Image 1">
                <img src="photo_2.jpg" alt="Image 2">
                <img src="photo.jpg" alt="Image 3">
                <img src="photo.jpg" alt="Image 4">
            </div>
            <button class="prev button-sldr">Prev</button>
            <button class="next button-sldr">Next</button>
        </div>
    </div> -->
    <script src="script.js"></script>
</body>
</html>