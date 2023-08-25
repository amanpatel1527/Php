<?php
echo "-------Flip array Function--------- <br><br>";
$a = array("a" => "red", "b" => "green", "c" => "blue", "d" => "black");
$result = array_flip($a);
print_r($result);
echo "<br><br>";

echo "-------intersection array Function--------- <br><br>";
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "black");
$a2 = array("e" => "blue", "f" => "green", "g" => "white");
$a3 = array("red", "blue");
$result1 = array_intersect($a1, $a2, $a3);
print_r($result1);

?>