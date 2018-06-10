<?php
echo "Number Sorting in Reverse Order";
$numbers = [2,4, 5, 1, 13];
rsort($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";

echo "Letters Sorting in Reverse Order";
$letters = ['c','a','d','b'];
rsort($letters);
echo "<pre>";
print_r($letters);
echo "</pre>";

echo "String Sorting in Reverse Order";
$strings=["a"=>"aa","a","aaa","abc","abcd","aaaa"];
rsort($strings);
echo "<pre>";
print_r($strings);
echo "</pre>";
?>
