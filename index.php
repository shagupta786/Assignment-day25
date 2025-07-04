<!DOCTYPE html>
<html>
<head>
    <title>Day 21 - PHP Conditionals, Loops & Functions</title>
</head>
<body>

<h2>1. Grade Checker Using Conditionals</h2>

<?php
$marks = 85;  // you can change this to test

echo "Marks: $marks<br>";

/* using if-else */
if ($marks >= 90 && $marks <= 100) {
    $grade = "A";
} elseif ($marks >= 80 && $marks <= 89) {
    $grade = "B";
} elseif ($marks >= 70 && $marks <= 79) {
    $grade = "C";
} else {
    $grade = "Fail";
}
echo "Grade using if-else: $grade<br>";

/* using switch (with true, to handle range) */
switch (true) {
    case ($marks >= 90 && $marks <= 100):
        $grade2 = "A";
        break;
    case ($marks >= 80 && $marks <= 89):
        $grade2 = "B";
        break;
    case ($marks >= 70 && $marks <= 79):
        $grade2 = "C";
        break;
    default:
        $grade2 = "Fail";
}
echo "Grade using switch: $grade2<br>";
?>

<hr>

<h2>2. Loop Practice</h2>

<h3>For loop: print numbers from 1 to 10</h3>
<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
?>
<br>

<h3>While loop: print even numbers from 1 to 20</h3>
<?php
$j = 1;
while ($j <= 20) {
    if ($j % 2 == 0) {
        echo $j . " ";
    }
    $j++;
}
?>

<hr>

<h2>3. PHP Function to calculate square</h2>
<?php
function square($number) {
    return $number * $number;
}

$val1 = 5;
$val2 = 9;

echo "Square of $val1 is: " . square($val1) . "<br>";
echo "Square of $val2 is: " . square($val2) . "<br>";
?>

</body>
</html>