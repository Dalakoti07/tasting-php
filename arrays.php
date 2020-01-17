<?php
  $check=array("elephant", array("honey", "sad", 5)); 
  print_r($check);


  $comparisonAdjectives = array(
    array(
        "good",
        "better",
        "best"
    ) ,
    array(
        "bad",
        "worse",
        "worst"
    ) ,
    array(
        "tall",
        "taller",
        "tallest"
    )
);
print_r($comparisonAdjectives);

$comparisonAdjectives[0][0] = "good";
$comparisonAdjectives[0][1] = "better";
$comparisonAdjectives[0][2] = "best";
$comparisonAdjectives[1][0] = "bad";
$comparisonAdjectives[1][1] = "worse";
$comparisonAdjectives[1][2] = "worst";
$comparisonAdjectives[2][0] = "tall";
$comparisonAdjectives[2][1] = "taller";
$comparisonAdjectives[2][2] = "tallest";
print_r($comparisonAdjectives);

// accessing the 2d array
$economy = array(
    array(
        "country" => "Germany",
        "currency" => "Euro",
    ),
    array(
        "country" => "Switzerland",
        "currency" => "Swiss Franc",
    ),
    array(
        "country" => "England",
        "currency" => "Pound",
    )
);

echo "Currency of Germany is: " . $economy[0]["currency"]; // Access array at [0] index

/**
 * Adding element to array
 * Adding Elements at the Start
    *Sometimes you want to add an element to the beginning of an array without modifying any of the current elements within the array. Whenever this is the case, you can use array_unshift() function.
    *array_unshift() prepends passed elements at the front of an array. Note that the list of elements is prepended as a whole so that the prepended elements stay in the same order. All numerical array keys will be modified to start counting from 0.
    *Using array_unshift()
    *array_unshift() has two or more input parameters: the first parameter is the name of the array, and the subsequent parameters are the elements to be added at the start of that array.
 */
$myArray = array(1, 2, 3);
array_unshift($myArray, 4,5);
print_r($myArray)

// array push  to add element at last
$array = [1,2,3];
print_r($array);
array_push($array, 5, 6); // Pushing 5 and 6 at the end of $array
print_r($array); 

// Adding and Replacing Values at Random Position in an Array
$arr=array(1,3,5,7,9);
$arr[23]=71; // adding a new key and its assocaited value
print_r($arr);

$arr[2]=22; // replacing an old value at 2nd index
print_r($arr);

?>