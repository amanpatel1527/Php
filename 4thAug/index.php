<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // $2 = 'Aman';
    $a = 5;
    $b = 8;
    $c = $a + $b;
    $_d = $b;
    echo "The addition of a and b is " . $c . "<br>";
    echo $_d . "<br>";
    $firstname = "Aman";
    $_lastname = "Patel";
    $first_name = "Aman";
    // $first-name = "Aman";  //it's not working
    $firstName = "Aman";
    $firstName99 = NULL;

    $e = 4;
    $f = 2 ^ 63;
    // echo $f."<br>";
    // echo var_dump($f);
    
    $large_number = 9223372036854775807;
    echo var_dump($large_number) . "<br>";

    $large_number2 = 9223372036854775808;
    echo var_dump($large_number2) . "<br>";

    $million = 1000000;
    $large_number3 = 50000000000000 * $million;
    echo var_dump($large_number3), "<br>";

    echo 0.1 + 0.2 - 0.3 . "<br>";

    $abc = "@#$%";
    echo $abc . "<br>";


    $name = "Aman";
    echo "My name is $name<br>";
    echo 'My name is $name<br>';


    // $str1 = "Hello";
    // $str2 = ' World';
    // echo $str1 . $str2;
    

    // $str1 = 1;
    // $str2 = 2;
    // echo $str1 + $str2;
    
    // $var1 = true;
    // $var2 = false;
    // echo $var1+$var2;
    

    $var1 = 4;
    $var2 = 3;
    echo $var1 . $var2;
    ?>
</body>

</html>