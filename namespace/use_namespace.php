<?php
// define MyProject1 namespace
namespace MyProject1;
const a="America";
function test(){
    echo "Hello I'm From MyProject1 Namespace";
}
class Test{
    public $b="Bangladesh";
    public function sayHello(){
        echo "Hello Bangladesh! From MyProject1 Namespace<br>";
    }
}
 
// define MyProject2 namespace
namespace MyProject2;
const a="Africa";
function test(){
    echo "Hello I'm From MyProject2 Namespace";
}
class Test{
    public $b="Bharma";
    public function sayHello(){
        echo "Hello Bharma! From MyProject2 Namespace<br>";
    }
}
 
echo "<h2>Namespace MyProject1 Use</h2>";
use MyProject1; // now start using MyProject1 Namespace
 
echo MyProject1\a,"<br>";
echo MyProject1\test(),"<br>";
$obj=new MyProject1\Test;
echo $obj->b,"<br>";
$obj->sayHello();
 
echo "<h2>Namespace MyProject2 Use</h2>";
use MyProject2; //now start using MyProject2 namespace
 
echo MyProject2\a,"<br>";
echo MyProject2\test(),"<br>";
$obj=new MyProject2\Test;
echo $obj->b,"<br>";
$obj->sayHello();