<?php

$pdo = new PDO('mysql:host=localhost;dbname=php7_practice','root','');

$query = $pdo->query('SELECT * FROM users');

$row = $query->fetch(PDO::FETCH_ASSOC);

echo htmlentities($row['user_name']);




?>