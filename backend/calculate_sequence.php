<?php

/*
 * Get input value via ajax from html form on click event.
 */
$inputValue = $_POST["inputValue"];

/*
 * Using built-in php function "range" with a start constant value of 0.
 * This function will give me all sequence numbers from 0 to the value I set in the input as an array.
 */

$arrayValues = range(0, $inputValue);

/*
 * Using built-in php function "array_sum" to add all the numbers within the array.
 * This function will give me all sequence numbers from 0 to the value I set in the input as an array.
 */

$arraySum =  array_sum($arrayValues);

/*
 * Final data / content that will be sent to ajax success and injected into a response div.
 */

echo 'Sequence of numbers from <strong>0</strong> to <strong>' . $inputValue . '</strong>, Add sequence to an array then work out sum of all numbers in array:';
echo '<hr><h3>= ' . $arraySum . '</h3><hr>';
echo '<small><i>*Building this out in Gaussian elimination algorithm may solve speed issues while using ajax, I\'ve gone for the faster route using built-in php functions.</i>';

/*
 * NOTES
 * I would like to have built this out using Gaussian elimination algorithm.
 * Currently this function is limited to computing a smaller amount of numbers,
 * I think this may be due to ajax speed and the time taken to compute larger sums.
 */

?>