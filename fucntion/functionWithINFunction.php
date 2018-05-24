<?php

function foo(){
  function bar(){
    echo "I am from bar function.";
  }
}

// bar();

foo();
bar();

?>
