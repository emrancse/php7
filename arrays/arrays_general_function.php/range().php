<?php
$numbers=range(5,10);
echo "Ascending Order: <br/>";
echo "<pre>";
print_r($numbers);
echo "<br/>";
echo "Descending Order: <br/>";
$numbers2=range(10,5);
print_r($numbers2);

$letters=range("a","f");
echo "Ascending Order: <br/>";
print_r($letters);
echo "<br/>";
echo "Descending Order: <br/>";
$letters2=range("f","a");
print_r($letters2);

echo "</pre>";
?>
