<?php
//To specify a boolean literal, use the constants TRUE or FALSE. Both are case-insensitive.

/*
the following values are considered FALSE:
the boolean FALSE itself
the integer 0 (zero)
the float 0.0 (zero)
the empty string, and the string "0"
an array with zero elements
the special type NULL (including unset variables)
SimpleXML objects created from empty tags
Every other value is considered TRUE (including any resource and NAN).


*/


echo "<pre>";
var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)
echo "</pre>";



?>
