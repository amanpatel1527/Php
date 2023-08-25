<!-- The if Statement -->
<?php
// $d = date("D");
// if ($d == "Thu") {
//     echo "It's Thursday";
// }


// $t = date("H");

// if($t<"20")
// {
//     echo "Have a good Day!!";
// }

// $num = 12;
// if ($num < 100) {
//     echo $num . " is less than 100";
// }



// The if else Statement
// $d = date("D");
// if ($d == "Thu") {
//     echo "Have a nice weekend!!";
// } else {
//     echo "Have a nice day!";
// }


// $num = 4;
// if($num%2==0)
// {
//     echo $num. " is even number";
// }else {
//     echo $num . " is an odd number";
// }


// The if else if Statement
// $d = date("D");
// if($d =="Thu"){
//     echo "Today is Thursday!!";
// } else if($d == "Sun")
// {
//     echo "Today is Sunday";
// }
// else 
// {
//     echo "Have a nice Day!!";
// }


// Nested if 
// $age = 18;
// $nationality = "Indian";
// if ($nationality == "Indian") {
//     if ($age >= 18) {
//         echo "Eligible";
//     } else {
//         echo "You're under age";
//     }
// } else {
//     echo "Not Eligible because you're not an INDIAN";
// }



// Switch Statement

// $num = 20;
// switch ($num) {
//     case 10:
//         echo "number is equal to 10";
//         break;
//     case 20:
//         echo "number is equal to 20";
//         break;
//     case 30:
//         echo "number is equal to 20";
//         break;
//     default:
//         echo "Enter a valid number";
// }
// $ch = 'A';
// switch ($ch) {
//     case 'a':
//         echo "It's a vowel";
//         break;
//     case 'e':
//         echo "It's a vowel";
//         break;
//     case 'i':
//         echo "It's a vowel";
//         break;
//     case 'o':
//         echo "It's a vowel";
//         break;
//     case 'u':
//         echo "It's a vowel";
//         break;
// default:
//     echo "It's a consonant";
// }


// This code run only in php not in another language (expression in switch case statement)
// $num = 9;
// switch ($num) {
//     case ($num <= 10):
//         echo $num;
// }




$ch = 'a';
$a = 10;
switch ($ch) {

    case 'a':
        echo "It's a vowel <br>";
        switch ($a) {
            case 10:
                echo $a . " equal to 10";
                break;
        }
        break;
    case 'e':
        echo "It's a vowel";
        break;
    case 'i':
        echo "It's a vowel";
        break;
    case 'o':
        echo "It's a vowel";
        break;
    case 'u':
        echo "It's a vowel";
        break;
    default:
        echo "It's a consonant";
}
?>