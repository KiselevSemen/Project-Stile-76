<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5d052e1195.js" crossorigin="anonymous"></script>
    <title>Регестрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
<!--Начало регистрации-->
</style>
<h1 class="text-center fw-light">Добро пожаловать!</h1>
<script src="https://kit.fontawesome.com/4b60d4127d.js" crossorigin="anonymous"></script>
<div class="container my-3">
    <h1 class="text-center"></h1>
    <div class=".col-md-5 mx-auto">
        <form action="/php/class/handlerReg.php" method="post">
            <div class="input-group md-3">
                <span class="input-group-text fw-light"><i class="fa-sharp fa-solid fa-user"><p class="text-warning bg-dark"></p></i></span>
                <input type="text" class="form-control" placeholder="Имя">
            </div>
            <div class="input-group md-3">
                <span class="input-group-text fw-light"><i class="fa-sharp fa-solid fa-user"><p class="text-warning bg-dark"></p></i></span>
                <input type="text" class="form-control" placeholder="Фамилия">
            </div>
            <div class="input-group md-3">
                <span class="input-group-text fw-light"><i class="fa-solid fa-at"><p class="text-warning bg-dark"></p></i></span>
                <input type="text" class="form-control" placeholder="E-mail">
            </div>
            <div class="input-group md-3">
                <span class="input-group-text fw-light"><i class="fa-solid fa-key"><p class="text-warning bg-dark"></p></i></span>
                <input type="text" class="form-control" placeholder="Пароль">
            </div>
            <div class="input-group md-3">
                <input type="submit" class="form-control btn btn-secondary fw-light">
            </div>
        </form>
    </div>
</div>
</div>
<!--Конец регистрации-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
