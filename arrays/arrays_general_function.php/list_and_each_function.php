<?php
$student=["name"=>"Emran Hosen","age"=>34,"address"=>"Dhaka,Bangladesh"];
while (list($key, $value) = each($student)) {
    echo "$key : $value "."<br/>";
}

?>
