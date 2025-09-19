<?php
$array = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");

asort($array);
echo "Ascending order by value: ";
print_r($array);
echo "<br>";

ksort($array);
echo "Ascending order by key: ";
print_r($array);
echo "<br>";

arsort($array);
echo "Descending order by value: ";
print_r($array);
echo "<br>";

krsort($array);
echo "Descending order by key: ";
print_r($array);
?>

