<?php

function getSum(){
  $numOne = func_get_arg(0);
  $numSecond = func_get_arg(1);

  return $sum = $numOne + $numSecond;
}

echo getSum(12,23);

?>
