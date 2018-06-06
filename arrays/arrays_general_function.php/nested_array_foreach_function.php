<?php
$students=[
    ["name"=>"Emran","age"=>4],
    ["name"=>"Shahadad", "age"=>3],
    ["name"=>"Bhaishaki","age"=>3.5]
    ];
foreach($students as $singleArray){
    foreach($singleArray as $key=>$value){
        echo "$key : $value \n";
    }
}

?>
