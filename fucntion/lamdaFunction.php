<?php

// When we pass a annonymous function of another function argument, then it is called lamda function.

// Pass Lambda to function
function shout ($message){
  echo $message();
}

// Call function
shout(function(){
  return "Hello world";
});
?>
