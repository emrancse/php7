<?php

/*
=>There are two types of array according to dimension
   1. single array
   2. nested / multidimension array
=>Arrays are three types based on there index
   1.Numeric / Enumerated array
   2.Associative array
   3.Hybrid array
=> Arrays are declared by two ways
  1. by array() fucntion
  2. array short syntax
*/

// array declaration by array() function

$array1=array (1,3,6,8);
// Or
$array2 = array(

"a" => "Apple",
"b" => "Banana"
);

// array declaration by array short syntax

$array1=[3,4,5,6];
//Or
$array2=["a"=>"Apple","b"=>"Banana"];

// array value show without foreach loop
$arr = array("a"=>"America", "b"=>"Bangladesh", "c"=>"Canada");
reset($arr);
while (list($key, $value) = each($arr)) {
    echo "Value: $key=>$value"."<br/>";
}




?>
