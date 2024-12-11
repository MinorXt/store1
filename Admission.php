<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/store1/db.php';

$id = $_GET['id'];
$characteristics = $pdo->query("select c.id, c.date_time,  c.amount, product.name from characteristics as c left join product on c.product_id = product.id where c.product_id = '$id'")->fetchAll(PDO::FETCH_ASSOC);
$name_pro = $pdo->query("select name from product where id = '$id'")->fetch(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Поступление</h1>
    <div class="nav">
        <a href="index.php">Назад</a>
        <br>
        <a href="Add_admission.php?id_product=<?=$id?>"> Добавить информацию о поступлении товара</a>
    </div>
        <div class="cards">
            <?php foreach ($characteristics as $item):?>
                <div class="card">
                    <p class="title"> <?=$name_pro['name']?></p>
                    <p>Дата поступления - <?=$item['date_time']?></p>
                    <p>количество - <?=$item['amount']?></p>
                    <a href="/store1/handler/delete.php?id=<?=$item['id']?>">Удалить поступление</a>
            </div>
            <?php endforeach;?>
    </div>
</div>
</body>
</html>