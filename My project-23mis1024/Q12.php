<?php
$numbers = range(200, 250);
$divisible_by_4 = array_filter($numbers, fn($num) => $num % 4 == 0);
echo implode(",", $divisible_by_4);
?>

