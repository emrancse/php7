<?php

/*
# php supports ten priimitive data types.
 1. four scalar data types
    =>boolelan
    =>integer
    =>float
    =>string
2. four compound types
   =>array
   =>object
   =>callable
   =>iterable
3. two special types
  =>resource
  =>null
# there are some pesudo types such as- mixed, number, callback,void
# to check the data type and value of an expression, we can use var_dump() function
# to get the data type stirng name, we can use gettype() function
# to change data type permanently, we can use settype() function
# to change data type temporary, we can do this by type casting
# php engine knows data type automatically and it is called type juggling.


*/

$a_bool = true;   // a boolean
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an integer

echo gettype($a_bool)."<br/>"; // prints out:  boolean
echo gettype($a_str)."<br/>";  // prints out:  string

// If this is an integer, increment it by four
if (is_int($an_int)) {
    $an_int += 4;
}

// If $a_bool is a string, print it out
// (does not print out anything)
if (is_string($a_bool)) {
    echo "String: $a_bool";
}


?>
