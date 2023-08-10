<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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

<?php
if (!isset($_POST['m'])){
} else {
    $kupon = $_POST['m'].$_POST['d'];
    $dr = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    $drr   = array( "A", "B", "C", "D", "E", "F", "G", "H", "I", "J");
    $data = str_replace($dr, $drr, $kupon);
    $kupon2 = $kupon * 79 * 89 * 99 * 99 * 99;
    $kupon2 = "$data-$kupon2";
    echo "Ваш купон: \"<b>$kupon2</b>\"";
};
echo "<h1 class='text-center'>Действительный промокод!</h1>";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
