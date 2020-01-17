<?php
// string interpolation
$name = 'Joel';
echo "Hello $name, Nice to see you."; // $name will be replaced with `Joel`

/*
There are only two string operators:
Concatenation (.):
Concatenation Assignment (.=)
*/
$a = "water";
$b = "bottle";
$c = $a . $b; // $c => "waterbottle" or ab
echo $c;


$foo = 'Hello world';
echo $foo[6]; // returns 'w'
echo "\n";
echo $foo{6}; // also returns 'w'
echo "\n";
echo substr($foo, 6, 1); // also returns 'w'
echo "\n";
echo substr($foo, 6, 2); // returns 'wo'

/**
 * In PHP you can use the strpos method to get the position/occurrence of a substring in another string.
 *  If the substring does not exist, the strpos returns fasle.
 */
echo "The occurence of hay is at position: ".strpos("haystack", "hay")."\n"; // int(0)
echo "The occurence of stack is at position: ".strpos("haystack", "stack")."\n"; // int(3)

$foo = 'hello world';

$foo[6] = 'W'; // capitalizes the 'w' in 'hello world'
echo $foo;
echo "\n";

$foo{0} = 'H'; // capitalizes the 'h' in 'hello world'
echo $foo;
echo "\n";

$bar = substr_replace($foo, '!', 11, 1); // results in $bar = 'Hello World!'
echo $bar;
echo "\n";

$bar = substr_replace($foo, 'Whi', 6, 2); // results in 'Hello Whirld'
// Note that the replacement string need not be the same length as the substring replaced
echo $bar;
echo "\n";

// length of string
$my_str = 'Welcome to Educative!';
echo strlen($my_str);

// counting number of words
$my_str = 'The quick brown fox jumps over the lazy dog.';
echo str_word_count($my_str);



?>