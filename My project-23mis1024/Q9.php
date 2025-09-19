<?php
$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$average = array_sum($temperatures) / count($temperatures);
echo "Average Temperature is: " . round($average, 1) . "<br>";

sort($temperatures);
echo "List of five lowest temperatures: " . implode(', ', array_slice($temperatures, 0, 5)) . "<br>";
echo "List of five highest temperatures: " . implode(', ', array_slice($temperatures, -5)) . "<br>";
?>

