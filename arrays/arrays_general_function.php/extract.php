<?php
$student=["name"=>"Emran","age"=>34,"address"=>"Dhaka,Bangladesh"];
extract($student);
echo "Name: $name, Age: $age, Address: $address";

echo "<br/>";


// for numerical array

$student=["Emran",34,"Dhaka,Bangladesh"];
extract($student,EXTR_PREFIX_ALL,"a");
echo "Name: $a_0, Age: $a_1, Address: $a_2";

?>
