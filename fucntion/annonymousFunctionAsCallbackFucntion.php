<?php
$arr = range(1, 10);
foreach(array_filter($arr, function($val) { return $val % 2 == 0; }) as $val){
    echo $val,"<br/>";
}
//Result: 2,4,6,8,10
?>
