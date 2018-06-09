<?php
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$result = compact("city", "state", "event");
echo "<pre>";
print_r($result);
echo "</pre>";
?>
