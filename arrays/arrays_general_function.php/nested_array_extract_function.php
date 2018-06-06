<?php
$students=[
    ["name"=>"Emran","age"=>4],
    ["name"=>"shahadad", "age"=>3],
    ["name"=>"bhaishaki","age"=>3.5]
    ];
foreach($students as $singleArray){
   extract($singleArray);
   echo "Name: $name, Age: $age"."<br/>";
}
echo "<br/>";
// numerical nested array

$students=[
    ["Emran",4],
    ["shahadad",3],
    ["bhaishaki",3.5]
    ];
foreach($students as $singleArray){
   extract($singleArray,EXTR_PREFIX_ALL,"a");
   echo "Name: $a_0, Age: $a_1";
}
?>
