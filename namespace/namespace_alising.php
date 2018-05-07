<?php
use User\Member\Profile as L;
include 'file1.php';
$usr = new L\userData('1', 'Ankur');
echo "<pre>";
print_r($usr->get_user());
L\normalMethod();
echo "</pre>";
 
?>