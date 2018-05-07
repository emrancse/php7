<?php

$conn = new mysqli("localhost","root","","php7_practice");

// show error number

if(!$conn){
	echo "Failed to connect database:".$conn->connect_error.$conn->connect_errno;
}

$conn->close();




?>