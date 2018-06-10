<?php
echo "Number Sorting";
$numbers = [2,4, 5, 1, 13];
sort($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";

echo "Letters Sorting";
$letters = ['c','a','d','b'];
sort($letters);
echo "<pre>";
print_r($letters);
echo "</pre>";
 
echo "String Sorting";
$strings=["a"=>"aa","a","aaa","abc","abcd","aaaa"];
sort($strings);
echo "<pre>";
print_r($strings);
echo "</pre>";
?>
