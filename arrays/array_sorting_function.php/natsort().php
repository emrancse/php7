<?php
$array= array("img12.png", "img10.png", "img2.png", "img1.png");
asort($array);
echo "Standard sorting\n";
echo "<pre>";
print_r($array);
echo "</pre>";

$array = array("img12.png", "img10.png", "img2.png", "img1.png");
natsort($array);
echo "\nNatural order sorting\n";
echo "<pre>";
print_r($array);
echo "</pre>";
?>
