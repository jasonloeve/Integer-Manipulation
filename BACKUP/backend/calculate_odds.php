<?php

/*
 * Get input value via ajax from html form on click event.
 */

$inputValue = $_POST["inputValue"];

/*
 * Using built-in php function "str_split" to split the string up into single values as an array.
 */

$valueSplit = str_split($inputValue, 1);

/*
 * Using foreach count and if to return all the odd-indexed values within the array.
 */

$i = 0;
foreach ($valueSplit as $values) {
    if  ($i % 2 == 0){
        $odds[] = $values;
    }
    $i++;
}

/*
 * Using built-in php function "array_sum" to add all the numbers within the array.
 */

$arraySum =  array_sum($odds);

/*
 * Final data / content that will be sent to ajax success and injected into a response div.
 */

echo 'Split string into array, get odd-indexed values in array, then give us the sum of all odd values:';
echo '<hr><h3>= ' . $arraySum . '</h3><hr>';

?>