<?php
$color = array('white', 'green', 'red');
echo implode(', ', $color) . ",<br>";

foreach ($color as $col) {
    echo "<ul><li>{$col}</li></ul>";
}
?>

