<?php 
 
$itemsToWrite = array('Alpha', 'Bravo', 'Charlie'); //an array of strings 

foreach($itemsToWrite as $item){ //iterating through each element of array itemsToWrite
    echo "$item\n"; //displaying each element of array in console
}

// for loop example
$i;
for ($i = 0;$i < 10;$i++)
{
    $i = $i * 2;
    echo "Value of i is: $i\n";
}
echo "Final value of i is: $i\n";

// coverting for loop to while loop
$i=0 ;
while ($i<10) {
  $i = $i*2;
  echo "Value of i is: $i\n";
  $i++;
}
echo "Final value of i is: $i\n";  



?>      