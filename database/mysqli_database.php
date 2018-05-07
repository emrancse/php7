<?php

# create a database connection object
$conn = new mysqli('localhost','root','','php7_practice');

$query = $conn->query("SELECT * FROM users");

$row = $query->fetch_assoc();

echo htmlentities($row['user_name']);


 ?>
