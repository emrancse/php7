<?php
// $client="Farhan";
// $output=function() use($client){
//         echo "Welcome ".$client;
// };
//
// $output();
// //output: Welcome Farhan

function myClosure( $num ) {
return function( $x ) use( $num ){
return $num * $x;
};
}

$closure = myClosure( 10 );
echo $closure( 2 ).'<br/>';// Result: 20
echo $closure( 3 ).'<br/>';// Result: 30
?>
