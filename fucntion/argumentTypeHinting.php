<?php

// function TypeHint(int $a){
//     var_dump($a);
// }
//
// TypeHint(5.5); //Output: (int)5

// declare(strict_types=1);
// function TypeHint(int $a){
//     var_dump($a);
// }
//
// TypeHint(5);

declare(strict_types=1);
// function TypeHint(array $a){
//     return $a;
// }
//
// try {
//     echo "<pre>";
//     var_dump(typeHint([5,6,5.5]));
//     echo "</pre>";
// } catch (TypeError $e) {
//     echo 'Error: '.$e->getMessage();
// }

class A{
    public $name="Mr. Khaled";
    public $email="khaled@mail.com";
    public $address="Dhaka,Bangladesh";
}


function TypeHint(A $a){
    return $a;
}

try {
    echo "<pre>";
    var_dump(typeHint(new A));
    echo "</pre>";
    //var_dump(typeHint("Hello World"));
} catch (TypeError $e) {
    echo 'Error: '.$e->getMessage();
}


?>
