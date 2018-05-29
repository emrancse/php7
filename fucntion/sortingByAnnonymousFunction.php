<?php
$people = array(
  array( 'name' => 'Omran', 'age' => 39 ),
  array( 'name' => 'ShiShir', 'age' => 23 ),
  array( 'name' => 'Badol', 'age' => 46 )
);

usort( $people, function( $personA, $personB ) {
return ( $personA['age'] < $personB['age'] ) ? -1 : 1;
} );

foreach($people as $val){
    echo "$val[name] is $val[age] years old"."<br/>";
}
?>
