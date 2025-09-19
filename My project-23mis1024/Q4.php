<?php
$x = array(1, 2, 3, 4, 5);
echo "Original array: ";
print_r($x);
echo "<br>";

unset($x[2]);
$x = array_values($x);
echo "After deleting the element: ";
print_r($x);
?>

