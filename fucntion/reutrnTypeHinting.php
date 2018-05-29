<?php
// function sum($a, $b): int {
//     return $a + $b;
// }
//
// // Note that a float will be returned.
// var_dump(sum(3, 2.5));  //Result: 5

declare(strict_types=1);
// function sum($a, $b): int {
//     return $a + $b;
// }
//
// // Note that a float will be returned.
// var_dump(sum(3, 2));

// class A{
//     public $name="Mr. Khaled";
// }
//
// function TypeHint1():A{
//     return new A;
// }
//
// function TypeHint2():A{
//     return "Hello World";
// }
//
// try {
//     var_dump(typeHint1());
//     var_dump(typeHint2());
// } catch (TypeError $e) {
//     echo 'Error: '.$e->getMessage();
// }

function TypeHint1():array{
    return ["a","b","c"];
}

function TypeHint2():A{
    return "Hello World";
}

try {
  echo "<pre>";
    var_dump(typeHint1());
    var_dump(typeHint2());
  echo "</pre>";  
} catch (TypeError $e) {
    echo 'Error: '.$e->getMessage();
}
?>
