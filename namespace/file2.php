<?php
// use User\Member\Profile;
// include 'file1.php';
// $usr = new Profile\userData('1', 'Ankur');
// echo "<pre>";
// print_r($usr->get_user());
// Profile\normalMethod();
// echo "</pre>";



use User\Member\Profile\userData;
include 'file1.php';
$usr = new userData('1', 'Ankur');
echo "<pre>";
print_r($usr->get_user());
echo "</pre>";

?>