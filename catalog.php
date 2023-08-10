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
<!Начало главных кнопок сайта >
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
<! Конец главных кнопок сайта >
<br  />
<! Начало банера >
<style>

    footer {
        padding: 40px 50px;
        background: #C0C0C0;
        color: #000000;5
    }
    a {
        color: #C0C0C0;
    }
</style>

<footer>
    <h1 class="text fst-italic" >Stile-76</h1>
    <h2 class="text-center fst-italic">Скидка на кроссовки, кеды и другую обувь 30% — по промокод: PHP1995.</h2>
</footer>
<! Конец банера >
<br  />
<! Начало фирм представляющие магазин >
<div class="dropdown">
    <a class="btn btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Фирмы
    </a>

    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/php/Cotalog%20Dop/Cotalog.nike.php">Nike</a></li>
        <li><a class="dropdown-item" href="/php/Cotalog%20Dop/Cotalog.adidas.php">Adidas</a></li>
        <li><a class="dropdown-item" href="/php/Cotalog%20Dop/Cotalog.vans.php">Vans</a></li>
    </ul>
</div>
<! Конец фирм представляющие магазин >
<br  />
<! Начало товаров сайта >
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
            <img src="/php/img/slide2.0.jpg" alt="...">
            <div class="caption">
                <a class="btn btn" href="/php/Cotalog%20Dop/Cotalog.3.php" role="button">Перейти к товару</a>
                <h3>Товар 2</h3>
                <p></p>
                <p><button class="btn btn" id="2">Купить</button></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="/php/img/slide5.0.jpg" alt="...">
            <div class="caption">
                <a class="btn btn" href="/php/Cotalog%20Dop/Cotalog.4.php" role="button">Перейти к товару</a>
                <h3>Товар 3</h3>
                <p></p>
                <p><button class="btn btn" id="3">Купить</button></p>
            </div>
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
</div>
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="/php/img/slide9.5.jpg" alt="...">
        <div class="caption">
            <a class="btn btn" href="/php/Cotalog%20Dop/Cotalog.6.php" role="button">Перейти к товару</a>
            <h3>Товар 5</h3>
            <p></p>
            <p><button class="btn btn" id="5">Купить</button></p>
        </div>
    </div>
</div>
</div>
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="/php/img/slide9.6.jpg" alt="...">
        <div class="caption">
            <a class="btn btn" href="/php/Cotalog%20Dop/Cotalog.7.php" role="button">Перейти к товару</a>
            <h3>Товар 6</h3>
            <p></p>
            <p><button class="btn btn" id="6">Купить</button></p>
        </div>
    </div>
</div>
</div>
<! Конец товара сайта >
<script src="jquery-2.2.3.min.js"></script>
<script>
    //изменение количества
    $('.count-product').change(function () { //изменение содержимого инпута
        var col = $(this).val(); //получаем количество
        if (col<1){ col = 1; $(this).val(1); } //если ввели меньше 1 установим 1
        var id = $(this).attr('id'); //получаем id товара
        $.ajax({//аякс-запрос
            type: "POST",//метод
            url: 'cartamount.php',//куда передаем
            data: {col_tov: col, id_tov: id},//данные
            success: function() {//получаем результат
                //тут можно пересчитать сумму
            }
        });
    });
    //удаление товара
    $('.btn-del').click(function () { //клик на кнопку
        var id = $(this).attr('id'); //получаем id товара
        $.ajax({//аякс-запрос
            type: "POST",//метод
            url: 'cartdel.php',//куда передаем
            data: {id_tov: id},//данные
            success: function(data) {//получаем результат
                //тут можно пересчитать сумму
                $('tr#'+id).css('display', 'none');//скрываем строку таблицы
            }
        });
    });
</script>
<! Начало добавления товара в корзину >
<a class="btn btn" href="/php/cart.php">
    Корзина
    <span class="badge basker_kol">0</span>
</a>
<! Конец добавления товара в корзину >

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>