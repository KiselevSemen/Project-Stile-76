<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина для сайта</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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

<div class="dropdown">
    <a class="btn btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Фирмы
    </a>

    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/php/Cotalog%20Dop/Cotalog.nike.php">Nike</a></li>
        <li><a class="dropdown-item" href="">Adidas</a></li>
        <li><a class="dropdown-item" href="">Vans</a></li>
    </ul>
</div>

<br  />
<div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="/php/img/slide1.0.jpg" alt="...">
            <div class="caption">
                <a class="btn btn" href="/php/Cotalog%20Dop/Cotalog.1.php" role="button">Перейти к товару</a>
                <h3>Товар 1</h3>
                <p></p>
                <p><button class="btn btn" id="1">Купить</button></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="/php/img/slide9.4.jpg" alt="...">
            <div class="caption">
                <a class="btn btn" href="/php/Cotalog%20Dop/Cotalog.5.php" role="button">Перейти к товару</a>
                <h3>Товар 4</h3>
                <p></p>
                <p><button class="btn btn" id="4">Купить</button></p>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
