<?php
$students=[
    ["Emran",4],
    ["Masud",3],
    ["borhan",3.5]
    ];
foreach ($students as list($name, $age)) {
    // $a contains the first element of the nested array,
    // and $b contains the second element.
    echo "Name: $name, Age: $age";
}

?>
