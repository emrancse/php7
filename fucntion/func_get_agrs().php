<?php

function getSum(){
  $numbers = func_get_args();
  return $sum = $numbers[0] + $numbers[1];
}

echo getSum(20,33);

?>
