<?php

function getSum(){
  $arguments_number = func_num_args();
  echo "Number of arguments: $arguments_number";
}

getSum(2,3,4);


?>
