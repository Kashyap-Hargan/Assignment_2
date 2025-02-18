<!-- question 1  -->

<?php

$input = "This is a PHP string";

// Check if the string contains "PHP"
if ($input ==  "PHP") 
{
    echo "The string contains 'PHP'.\n";
} else {
    echo "The string does not contain 'PHP'.\n";
}

$modified_string = str_replace(" ", "_", $input_string);

$modified_string = strtoupper($modified_string);

echo "Modified string: $modified_string\n";
?>


<!-- Question 2 -->

<?php

$name = "Kashyap";
$email = "Kashyp@example.com";
$age = "22";


if (strlen($name) < 3) {
    echo "Error: Name must be at least 3 characters long.\n";
} else {
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Error: Invalid email format.\n";
    } else {
       
        if ($age == " ")
        { 
            if (!is_numeric($age)) {
                echo "Error: Age must be a number.\n";
            } else {
                echo "All inputs are valid!\n";
            }
        } else {
            echo "All inputs are valid!\n";
        }
    }
}
?>



<!-- Question 3 -->


<?php

$value = 10;

echo "first value: $value\n";
$value++;
echo "After increment: $value\n";
$value--;
echo "After decrement: $value\n";
?>



<!-- Question 4 -->

<?php

$day_number = 4;

switch ($day_number) {
    case 1:
        echo "Monday\n";
        break;
    case 2:
        echo "Tuesday\n";
        break;
    case 3:
        echo "Wednesday\n";
        break;
    case 4:
        echo "Thursday\n";
        break;
    case 5:
        echo "Friday\n";
        break;
    case 6:
        echo "Saturday\n";
        break;
    case 7:
        echo "Sunday\n";
        break;
    default:
        echo "Error: Invalid input. Please enter a number between 1 and 7.\n";
}
?>

<!-- Question 5 -->

<?php
$age = 65;
$student = false;

$base_price = 10;

if ($age < 12) {
    $final_price = $base_price * 0.5;  
} elseif ($age >= 60) {
    $final_price = $base_price * 0.7;  
} elseif ($student) {
    $final_price = $base_price * 0.8;  
} else {
    $final_price = $base_price;
}


echo "Ticket Price: $" + number_format($final_price, 2);
?>



<!-- Question 6 -->


<?php
// Pass by value
function doubleValue($num)
{
    $num *= 2;
    return $num;
}

// Pass by reference
function doubleReference($num) {
    $num *= 2;
}


$value = 5;
echo "Pass by value - Before: $value\n";
$result = doubleValue($value);
echo "Pass by value - After: $result\n";


$value = 5;
echo "Pass by reference - Before: $value\n";
doubleReference($value);
echo "Pass by reference - After: $value\n";


?>


<!-- Question 7 -->


<?php

for ($i = 0; $i <= 20; $i++)
 {
    if ($i % 3 == 0 && $i % 5 == 0)
     {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo "$i\n";
    }
}
?>


<!-- Question 8 -->


<?php

function calculateArea($length, $width)
 {
    return $length * $width;
}


function calculatePerameter($length, $width)
 {
    return 2 * ($length + $width);
}

// Call functions
$length = 5;
$width = 10;
echo "Area: " +  calculateArea($length, $width) + "\n";
echo "Perimeter: " + calculatePerameter($length, $width) + "\n";
?>


<!-- question 9  -->


