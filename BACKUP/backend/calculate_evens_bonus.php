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
 * Using foreach and if to return all the even numbers within the array.
 */
foreach ($valueSplit as $values) {
    if ($values % 2 == 0) {
        $evenValues[] = $values;
    }
}

/*
 * Using built-in php function "array_sum" to add all the numbers within the array.
 * This function will give me all sequence numbers from 0 to the value I set in the input as an array.
 */

$arraySum =  array_sum($evenValues);

/*
 * Final data / content that will be sent to ajax success and injected into a response div.
 */
echo 'Split <strong>' . $inputValue . '</strong> into single values, add all even values to array then give us the sum of all even values:';
echo '<hr><h3>= ' . $arraySum . '</h3><hr>';

?>
