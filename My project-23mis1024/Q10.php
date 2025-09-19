<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

$merged = [];
for ($i = 0; $i < count($array1); $i++) {
    array_unshift($array1[$i], $array2[$i]);
    $merged[] = $array1[$i];
}

echo "<pre>";
print_r($merged);
echo "</pre>";
?>

