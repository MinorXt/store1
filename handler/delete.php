<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/store1/db.php';

$id = $_GET['id'];
$pdo->query("delete from characteristics where id='$id'");
header("Location: /store1/index.php");

