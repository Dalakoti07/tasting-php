<?php
$foo = "bar"; // foo has value "bar"
$$foo = "data"; // bar has value "data"
echo "\$foo:\t"; 
echo $foo; //prints bar
echo "\n"; 

echo "\${\$foo}:\t"; 
echo ${$foo}; //prints data
echo "\n";

echo "\$\$foo:\t"; 
echo $$foo; //prints data
echo "\n";

echo "\$bar:\t"; 
echo $bar; //prints data
echo "\n";


$fooBar = 'baz';
$varPrefix = 'foo';

echo "\$fooBar:\t\t\t\t";
echo $fooBar; // Outputs "baz"
echo"\n";

echo "\${\$varPrefix . 'Bar'}:\t\t"; //varPrefix will give value foo and the dot operator concatenates it with Bar hence making it fooBar. 
                                     //Putting $ before fooBar makes it a variable variable.
echo ${$varPrefix . 'Bar'}; // Also outputs "baz"

// Using {} is only mandatory when the name of the variable is itself an expression, like this:
${$variableNamePart1 . $variableNamePart2} = $value;

// defining constants
const PI = 3.14; // float
define("EARTH_IS_FLAT", false); // boolean
const UNKNOWN = null; // null
define("APP_ENV", "dev"); // string
const MAX_SESSION_TIME = 60 * 60; // integer, using (scalar) expressions is ok
const APP_LANGUAGES = ["de", "en"]; // arrays
define("BETTER_APP_LANGUAGES", ["lu", "de"]); // arrays

//caution for below statemnt
// const TIME = time(); // fails with a fatal error! 

// To check if constant is defined, use the defined function.
/**
 * The following code shows how you can use the defined function to check if the constants GOOD and AWESOME exist or not. 
 * Ignore the keywords if and else for now. You will learn about them later. 
 * For now, all you need to know is that if and else are used to decide if a particular part of the code needs to be executed.
 */
define("GOOD", false);
if (defined("GOOD")) {
  echo "GOOD is defined.\n" ; // prints "GOOD is defined"

  if (GOOD)
    echo "GOOD is true." ; // does not print anything, since GOOD is false
  else 
    echo "GOOD is false.";
}

if (!defined("AWESOME")) {
  define("AWESOME", true); // awesome was not defined. Now we have defined it
}

// To get all defined constants, including those created by PHP, use the PHP function get_defined_constants. The following code snippet shows how this is done:
$constants = get_defined_constants();
var_dump($constants); // prints a very large list

// To get only those constants that were defined by your app call the function at the beginning and at the end of your script (normally after the bootstrap process).
$constants = get_defined_constants();
define("HELLO", "hello");
define("WORLD", "world");
$new_constants = get_defined_constants();
$myconstants = array_diff_assoc($new_constants, $constants); //compares array keys and values, and returns the differences.
var_export($myconstants); //return the structured value of $myconstants 
// now this was mathematically sound
/**
 * we used PHP’s array_diff_assoc function. This function takes two parameters, 
 * compares the keys and values of both and returns the difference. In this case, it returned all the newly defined constants.
 */



?>