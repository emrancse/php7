<?php
include("myProjectOne.php");
include("myProjectTwo.php");
 
 
echo "<h2>Namespace MyProject1</h2>";
echo MyProject1\a,"<br>";
echo MyProject1\test(),"<br>";
$obj=new MyProject1\Test;
echo $obj->b,"<br>";
$obj->sayHello();
 
 
echo "<h2>Namespace MyProject2</h2>";
echo MyProject2\a,"<br>";
echo MyProject2\test(),"<br>";
$obj=new MyProject2\Test;
echo $obj->b,"<br>";
$obj->sayHello();