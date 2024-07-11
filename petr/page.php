<?php
    include 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
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
                <img src="image1.jpg" alt="Image 1">
                <img src="image2.jpg" alt="Image 2">
                <img src="image3.jpg" alt="Image 3">
                <img src="image4.jpg" alt="Image 4">
            </div>
            <button class="prev button-sldr">Prev</button>
            <button class="next button-sldr">Next</button>
        </div>
    </div>    
    <script src="script.js"></script>
</body>
</html>