<html>
<body>
<?php
$txt= "hello world";
$x=10;
$y=10.5;
echo $x;
echo "<br>";
echo $y;
echo "<br>";
echo $txt;
?>
<?php
echo "<br>";
$cars = array("volvo","bmw","toyota");
var_dump($cars);
?>
<?php
echo "<br>";
class Car{
    function Car(){
        $this->model= "maruthi suzuki";
    }

}
//create an object
$herbie=new Car();
//show object properties
echo $herbie->model;
?>
<?php
echo "<br>";
echo strlen("hello world!");
echo "<br>";
echo str_word_count("hello world");
echo "<br>";
echo strrev("hello world");
echo "<br>";
echo strpos("hello world","world");
echo "<br>";
echo str_replace("world","hi","hello world");
?>


</body>
</html>

