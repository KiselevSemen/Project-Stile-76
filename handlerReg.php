<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5d052e1195.js" crossorigin="anonymous"></script>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<div class="d-grid gap-2 d-md-block text-center">
    <a class="btn btn" href="/php/main%20page.php" role="button">Stile-76</a>
    <a class="btn btn" href="/php/catalog.php" role="button">Коталог</a>
    <a class="btn btn" href="/php/contacts.php" role="button">Контакты</a>
    <a class="btn btn" href="/php/about%20us.php" role="button">О нас</a>
    <a class="btn btn" href="/php/delivery.php" role="button">Доставка</a>
    <a class="btn btn" href="/php/cart.php" role="button">Корзина</a>
    <a class="btn btn" href="/php/Reg.php" role="button">Регистрация</a>
    <a class="btn btn" href="/php/Login.php" role="button">Вход</a>
    <a class="btn btn" href="/php/promo%20code.php" role="button">Промокод</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>


<?php
//echo"Имя: $name,Фамилия: $lastname,Email: $email,Pass: $pass";
$mysqli = new mysqli("localhost","root","","php1901");
$result = $mysqli->query("SELECT * FROM users WHERE email='email'");
//$mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES ('$name','$lastname','$email','$pass',)");
echo"Регистрация прошла успешно!";