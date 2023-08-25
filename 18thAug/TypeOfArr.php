<?php
// $courses = array("php", "laravel", "Nodejs");
// echo "I like " . $courses[-1];
// $courses[-1];
// echo end ($courses); // end function is used for accessing the array from end
// echo "<br>";
// $coursesLength = count($courses);
// for ($x = 0; $x < $coursesLength; $x++) {
//     echo $courses[$x];
//     echo "<br>";
// }

// Indexing array using forEach
// $courses = array("php", "laravel", "Nodejs");
// foreach ($courses as $key) {
//     echo $key . "<br>";
// }




// Associative array
// $courses = array("Int220" => "PHP", "Int221" => "MVC", "Int222" => "Nodejs");
// echo "Int220 is " . $courses['Int220'] . " Int221 is " . $courses['Int221'] . " Int22 is " . $courses['Int222'];


// $courses["Int220"] = "Php";
// $courses["Int221"] = "MVC";
// $courses["Int222"] = "Nodejs";

// print_r($courses);



// loop in associative array 
$courses = array("Int220" => "PHP", "Int221" => "MVC", "Int222" => "Nodejs");
foreach ($courses as $courses => $value) {
    echo "Key = " . $courses . "," . "value= " . $value;
    echo "<br>";
}



$x = ["Monu", 7, "Aman", 6.4];
foreach ($x as $item) {
    echo $item . " ";
}


// Associative array using for Loop
$courses = array("Int220" => "PHP", "Int221" => "MVC", "Int222" => "Nodejs");
$key = array_keys($courses);
$values = array_values($courses);
for ($x = 0; $x < count($courses); $x++) {
    echo "key = " . $key[$x] . ',' . "Value " . $values[$x] . "<br>";
}

?>