<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/store1/db.php';

$products = $pdo->query("SELECT * FROM product");
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
    <h1>Каталог товаров</h1>
    <div class="nav">
        <a href="Add_product.php" id="add_product">Добавить товар</a>
        <br>
        <a href="Add_admission.php"> Добавить информацию о поступлении товара</a>
    </div>
    <div class="content">
        <div class="cards">
            <?php foreach ($products->fetchAll(PDO::FETCH_ASSOC) as $product):?>
            <div class="card">
                    <p class="title"><?=$product['name']?></p>
                   <div class="about">
                       <p>Цена - <?=$product['price']?></p>
                       <p>Артикул - <?=$product['article']?></p>
                   </div>
                    <a href="Admission.php?id=<?=$product['id']?>">Поступление</a>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
</body>
</html>