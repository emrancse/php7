<?php
$students=[
    ["name"=>"Mamnun Bin Masud","age"=>4],
    ["name"=>"Muhibbullah Bin Masud", "age"=>3],
    ["name"=>"Taha Alam","age"=>3.5]
    ];
#Result: 9
echo count($students,1);
echo "<br/>";
#Result: 9
echo count($students,true);
echo "<br/>";
#Result: 9
echo count($students,COUNT_RECURSIVE);
