<?php

// $numbers = array(1, 2, 3, 4, 5);
// $result = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] + $numbers[4];
// echo $result;


class person
{
    public $name;

    public function sayHello()
    {
        echo "Hello my name is " . $this->name;
    }
}

$person1 = new person();
$person1->name = "Aman Patel";
$person1->sayHello();

// define("Wishes","Good Mrng");
// echo "<br>";
// echo Wishes;

// const wish = "Hello";
// echo "<br>";
// echo wish;

// echo "<br>";
// echo constant("wish");

// $age=NULL;
// echo $age;

echo "<br>";
define("subject", ["PHP", "HTML", "CSS"]);
echo subject[0];
echo "<br>";
echo subject[1];
echo "<br>";
echo subject[2];



// function test()
// {
//     $name = "Hello";
//     define("Wishes", "Hello");
// }
// function test1()
// {
//     echo Wishes;
// }
// test1();

echo "<br>";
$a = 10;
$b = 5;
$sum = $a + $b;
echo $sum;
echo "<br>";
$diff = $a - $b;
echo $diff;
echo "<br>";
$product = $a * $b;
echo $product;
echo "<br>";
$quot = $a / $b;
echo $quot;


// $name = "Aman";
// $names = "Aman";
// $full = $name . $names; 
// // $full = $name + $names; gives an error 
// echo $full;

$x = 10;
$y = 5;
$isGreater = ($x > $y);
echo "<br>";
echo $isGreater;
echo "<br>";


echo "Hello ";
$isTrue = true;
$isFalse = false;
echo "<br>";
$isLogicalAnd = !($isTrue && $isFalse);
// $isLogicalAnd = ($isTrue && $isFalse);
$isLogicalor = ($isTrue || $isFalse);

echo $isLogicalAnd;
echo "<br>";
echo $isLogicalor;

echo "<br>";

$age = 1;
$isadult = ($age >= 18) ? "Yes" : "No";
echo $isadult;

echo "<br>";

$numbers = array(1, 2, 3, 4, 5);
$sumArray = array_sum(($numbers));
echo $sumArray;
echo "<br>";
$countArray = count($numbers);
echo $countArray;
echo "<br>";

$res = 2 * (3 + 4);
echo $res;




?>