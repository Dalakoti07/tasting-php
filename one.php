<?php
$str = "I will be back by";
$num = 5;
  
echo $str;
echo " "; // Output: I will be back by
echo $num; // Output: 5


$foo = true;
if ($foo) {
    echo "true";
} else {
    echo "false";
}

$negative = -3; // negative
$zero = 0; // zero (can also be null or false (as boolean)
$positive = 123; // positive decimal
$zeroPos = 0123; //0 prefix is used to specify octal - octal value = 83 decimal
$hex = 0xAB; //0x prefix is used to specify hexadecimal - hexadecimal value = 171 decimal
$bin = 0b1010; // 0b prefix is used to specify binary - binary value = 10 decimal
var_dump($negative, $zero, $positive, $zeroPos, $hex, $bin); 
/** 
 * The var_dump() function is used to dump information about a variable. This function displays structured
 *  information such as type and value of the given variable. Arrays and objects are 
 * explored recursively with values indented to show structure. 
*/

$foo1 = 1.23;
$foo2 = 10.0;
$bar1 = -INF; // -INF refers to negative infinity
$bar2 = NAN; // NAN stands for 'Not a Number'
var_dump($foo1,$foo2,$bar1,$bar2);

$foo = array(1, 2, 3); // An array of integers created using array fucntion
$bar = ["A", true, 123 => 5]; // Short array syntax, PHP 5.4+
echo $bar[0]; // Returns "A"
echo "\n";
echo $bar[1]; // Returns 1 for true
echo "\n";
echo $bar[123]; // Returns 5
// echo $bar[1234]; // uncommenting this line will give an error because 1234 is inaccessable

$array = array();
$array["foo"] = "bar";
$array["bar"] = "quux";
$array[42] = "hello";
echo $array["foo"]; // Outputs "bar"
echo "\n";
echo $array["bar"]; // Outputs "quux"
echo "\n";
echo $array[42]; // Outputs "hello"

$foo = "I am a string";
echo $foo; // outputs "I am a string"
echo "\n";
echo $foo[3]; // Prints 'm', the third character of the string in $foo.


?>