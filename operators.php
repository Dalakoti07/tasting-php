<?php
$a = 18;
$b = 4;
echo "$a + $b = " . ($a + $b); //addition
echo "\n";
echo "$a - $b = " . ($a - $b); //subtraction
echo "\n";
echo "($a * $b) = " . ($a * $b); //multiplication
echo "\n";
echo "$a / $b = " . ($a / $b); //division
echo "\n";
echo "$a % $b = " . ($a % $b); //modulus
echo "\n";

$i = 1;
echo $i . "\n"; // Prints 1
// Pre-increment operator increments $i by one, then returns $i
echo ++$i . "\n"; // Prints 2
// Pre-decrement operator decrements $i by one, then returns $i
echo --$i . "\n"; // Prints 1
// Post-increment operator returns $i, then increments $i by one
echo $i++ . "\n"; // Prints 1 (but $i value is now 2)
// Post-decrement operator returns $i, then decrements $i by one
echo $i-- . "\n"; // Prints 2 (but $i value is now 1)

/*The spaceship operator (<=>) is a special kind of comparison operator. It
returns -1 if first expression is lesser than the second expression.
returns 1 if the first expression is greater than the second expression.
returns 0 if the first expression is equal to the second expression.
*/
// Integers
echo (1<=>1) . ","; //prints 0
echo (1<=>2) . ","; //prints -1
echo (2<=>1); //prints 1
echo "\n"; //skips to next line
// Floats
echo (1.5<=>1.5) . ","; //prints 0
echo (1.5<=>2.5) . ","; //prints -1
echo (2.5<=>1.5); //prints 1
echo "\n"; //skips to next line
// Strings
echo ("a"<=>"a") . ","; //prints 0
echo ("a"<=>"b") . ","; //prints -1
echo ("b"<=>"a"); //prints 1



?>