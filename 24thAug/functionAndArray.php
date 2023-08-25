<?php
$name = array("Manoj", "Rahul", "Anesh");
$marks = array("75", "89", "44");
$a = array("Block 33", "Block 34", "Block 34", "Block 36", "Block 36", "Block 38");
print_r(array_count_values($a));
// $c = array_combine($name, $marks);
// print_r($c);/
// echo "<br>";
// print_r(array_chunk($name,2));




$res = array(
    array(
        0 => "Manoj",
        1 => 7.8,
        2 => "Pass"
    ),
    array(
        0 => "Vinod",
        1 => 8.8,
        2 => "Pass"
    ),
    array(
        0 => "Anuj",
        1 => 4.8,
        2 => "Fail"
    )
);

// echo "<br>";
// $keys = array_keys($res);
// echo var_dump($keys);
// echo $res[0][0] . "---CGPA is " . $res[0][1] . " and his status is " . $res[0][2] . "<br>";
// echo $res[1][0] . "---CGPA is " . $res[1][1] . " and his status is " . $res[1][2] . "<br>";
// echo $res[2][0] . "---CGPA is " . $res[2][1] . " and his status is " . $res[2][2] . "<br>";
?>