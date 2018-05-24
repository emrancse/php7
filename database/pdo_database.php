<?php

$pdo = new PDO('mysql:host=localhost;dbname=php7_practice','root','');

$query = $pdo->query('SELECT * FROM users');

// $row = $query->fetch(PDO::FETCH_ASSOC);
// $row = $query->fetch(PDO::FETCH_BOTH);
// $row = $query->fetch(PDO::FETCH_OBJ);
$row = $query->fetch(PDO::FETCH_NUM);

echo "<pre>";
print_r($row);
echo "</pre>";




?>
