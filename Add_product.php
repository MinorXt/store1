<?php
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
        <h1>Добавление</h1>
        <form action="/store1/handler/add_product.php" method="post">
            <input type="text" placeholder="Название" name="name" id="name">
            <input type="text" placeholder="Цена" name="price" id="price">
            <input type="text" placeholder="Артикул" name="article" id="article">
            <input type="submit" id="btn">
        </form>
    </div>
</body>
</html>
