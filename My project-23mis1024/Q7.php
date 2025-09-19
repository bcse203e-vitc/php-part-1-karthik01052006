<?php
$array = [1, 2, 3, 4, 5];
echo "Original array: ";
print_r($array);
echo "<br>";

array_splice($array, 3, 0, '$');
echo "After inserting '$' the array is: ";
print_r($array);
?>

