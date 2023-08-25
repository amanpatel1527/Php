<?php
// $a;
// echo $a;
// var_dump($a);
// why do we need  contant function ?
// ===>>constant() is useful if you need to retrieve the value of a constant, but do not know its name. I.e. it is stored in a variable or returned by a function. This function works also with class constants and enum cases.

// $ic = NULL;
// echo $ic;
// $intArr = array(10,20,30);
// echo  $intArr[3];


$x = 10;
$y = 4;

echo $x % $y;
echo "<br>";
echo $x ** $y;
echo "<br>";
echo 5 ** 5;
echo "<br>";



//*************Assignment Operator*********//
$a = 10;
echo $a;
echo "<br>";

$a = 20;
$a += 30;
echo $a;
echo "<br>";

$a = 50;
$a -= 20;

echo $a;
echo "<br>";

$a = 5;
$a *= 25;
echo $a;
echo "<br>";

$a = 50;
$a /= 10;
echo $a;
echo "<br>";

$a = 100;
$a %= 15;
echo $a;
echo "<br>";

// *******************Comparison Operator***************
echo "Comparison Operator <br>";

$x = 25;
$y = 35;
$z = "25";
var_dump($x == $z);
echo "<br>";
var_dump($x === $z);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $z);
echo "<br>";
var_dump($x < $y);
echo "<br>";
var_dump($x > $y);
echo "<br>";
var_dump($x <= $y);
echo "<br>";
var_dump($x >= $y);


echo "<br>Incremenr and Decrement Operator <br>";
$c = 10;
echo ++$c;
echo "<br>";
echo $c;
echo "<br>";

$c = 10;
echo $c++;
echo "<br>";
echo $c;
echo "<br>";

$c = 10;
echo --$c;
echo "<br>";
echo $c;
echo "<br>";

$c = 10;
echo $c--;
echo "<br>";
echo $c;

echo " <br>String Contd <br>";
$x = "Hello";
$y = "World";
echo $x . $y;
echo "<br>";

$x .= $y;

echo $x;

echo "<br> Conditional Operator <br>";
echo $status = (empty($user)) ? "anonymous" : $user;
echo "<br>";

$user = "Michael";
echo $status = (empty($user)) ? "anonymous" : $user;
echo "<br>";

echo $naam = $user2 ?? 'anonymous';
echo "<br>";

$user2 = "Michael";
echo $naam = $user2 ?? 'anonymous';
?>