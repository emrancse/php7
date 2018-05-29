<?php

$pdo = new PDO('mysql:host=localhost;dbname=php7_practice','root','');
$sql = "SELECT * FROM users";
$query = $pdo->query($sql);

// $row = $query->fetch(PDO::FETCH_BOTH);
// $row = $query->fetch(PDO::FETCH_ASSOC);
// $row = $query->fetch(PDO::FETCH_OBJ);
$row = $query->fetch(PDO::FETCH_NUM);

echo "<pre>";
print_r($row);
echo "</pre>";

?>
