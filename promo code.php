<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<!--Начало главных кнопок сайта-->
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
<!--Конец главных кнопок сайта-->
<br />
<!--Начало промокода-->
<script src="https://kit.fontawesome.com/4b60d4127d.js" crossorigin="anonymous"></script>
<div class="container my-3">
    <h1 class="text-center"></h1>
    <div class=".col-md-5 mx-auto">
        <form action="/php/class/hendlerPromo%20code.php">
            <div class="input-group md-3">
                <input type="text" class="form-control" placeholder="Промокод">
            </div>
            <div class="input-group md-3">
                <input type="submit" class="form-control btn btn-secondary fw-light">
            </div>
        </form>
    </div>
</div>
</div>
<div class="text-center fst-italic">
    Ваш промокод должен состоять из 8-20 символов, содержать буквы и цифры и не должен содержать пробелов, специальных символов или эмодзи.
</div>
<!--Конец промокода-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
