<?php
$array= array('IMG0.png','img12.png','img10.png','img2.png','img1.png','IMG3.png');
echo "<pre>";
natsort($array);
echo "Natural sorting (Case Sensitive)\n";
echo "<pre>";
print_r($array);
echo "</pre>";

$array= array('IMG0.png','img12.png','img10.png','img2.png','img1.png','IMG3.png');
natcasesort($array);
echo "\nNatural order sorting (case-insensitive)\n";
echo "<pre>";
print_r($array);
echo "</pre>";
?>
