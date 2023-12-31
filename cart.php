<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина</title>
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
<! Начало корзины >
<?php session_start();
if (!isset($_SESSION['cart'])):?>

    <h2>Ваша корзина пуста</h2>

<?php else :?>
    <table>
        <tr>
            <td>id</td>
            <td>количество</td>
            <td>Удалить</td>
        </tr>
        <?php $temp=$_SESSION['cart'];
        foreach($temp as $id=>$kol): ?>
            <tr id="<?=$id?>">
                <td>id товара: <?=$id?></td>
                <td><input type="number" class="count-product" id="<?=$id?>" value="<?=$kol?>"></td>
                <td><button class="btn btn-default btn-del" id="<?=$id?>">Удалить</button></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
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
<! Конец корзины >
</body>
</html>