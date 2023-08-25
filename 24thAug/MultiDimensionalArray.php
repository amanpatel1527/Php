<?php
// Multidimensional Array
$result = array(
    array("Aman", 7.46, "Pass"),
    array("Akshi", 8.50, "Pass"),
    array("lawish", 4.51, "Fail")
);

echo $result[0][0] . " ---CGPA is : " . $result[0][1] . " and his status is " . $result[0][2] . "<br>";
echo $result[1][0] . " ---CGPA is : " . $result[1][1] . " and his status is " . $result[0][2] . "<br>";
echo $result[2][0] . " ---CGPA is : " . $result[2][1] . " and his status is " . $result[0][2] . "<br>";



echo " <br> <h3> MultiDimensional Array with associative array (Key Value Pair) </h3> <br>";
echo "<br>";

// MultiDimensional Array with associative array (Key Value Pair)
$res = array(
    array(
        "name" => "Manoj",
        "CGPA" => 7.8,
        "Status" => "Pass"
    ),
    array(
        "name" => "Vinod",
        "CGPA" => 8.8,
        "Status" => "Pass"
    ),
    array(
        "name" => "Anuj",
        "CGPA" => 4.8,
        "Status" => "Fail"
    )
);

echo $res[0]["name"] . "---CGPA is " . $res[0]["CGPA"] . " and his status is " . $res[0]["Status"] . "<br>";
echo $res[1]["name"] . "---CGPA is " . $res[1]["CGPA"] . " and his status is " . $res[1]["Status"] . "<br>";
echo $res[2]["name"] . "---CGPA is " . $res[2]["CGPA"] . " and his status is " . $res[2]["Status"] . "<br>";




// Looping

// echo "<br> <h3> Multidimensional array Looping </h3 > <br>";

// $result1 = array(
//     array("Aman", 7.46, "Pass"),
//     array("Akshi", 8.50, "Pass"),
//     array("lawish", 4.51, "Fail")
// );
// for ($row = 0; $row < 3; $row++) {
//     echo "<h4> Row Number $row</h4>";
//     // for ($col = 0; $col < 3; $col++) {
//     //     echo $result1[$row][$col] . "<br>";
//     // }
// }



// echo "<br> <h3> Multidimensional array with combination of for and foreach </h3 > <br>";

// $result1 = array(
//     array("Aman", 7.46, "Pass"),
//     array("Akshi", 8.50, "Pass"),
//     array("lawish", 4.51, "Fail")
// );
// for ($row = 0; $row < 3; $row++) {
//     echo "<h4> Row Number $row</h4>";
//     // for ($col = 0; $col < 3; $col++) {
//     //     echo $result1[$row][$col] . "<br>";
//     // }

//     foreach($result[$row] as $dec)
//     {
//         echo $dec."<br>";
//     }
// }





$book = array(
    "C++" => array("name" => "Begin with C", "copies" => 8),
    "Php" => array("name" => "Begin with php", "copies" => 18),
    "Laravel" => array("name" => "Begin with laravel", "copies" => 22)
);

$keys = array_keys($book);
for ($i = 0; $i < count($book); $i++) {
    echo "<h1> $keys[$i]</h1>";
    foreach ($book[$keys[$i]] as $key => $value) {
        echo $key . " = " . $value . "<br>";
    }
}


$array = array(1,2,3,5,8,13,21,34,55);
$sum = 0;
for($i=0;$i<5;$i++)
{
    $sum+=$array[$i];
    // $sum+=$array[$array[$i]];
}
echo $sum;
?>