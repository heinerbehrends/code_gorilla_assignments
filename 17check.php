<?php
// only accepts numbers as strings as input. still figuring out if there's a way to convert the very large number to string using some math extension.
$test_number  = "92651109849427955";

function getResultsArray($number_as_string) {
  $digits_array = array();
  $j = strlen($number_as_string);
  for ($i = 0; $i < strlen($number_as_string); $i++) {
    $digits_array[$i] = $number_as_string[$i] * $j;
    $j--;
  }
  return $digits_array;
}

function getSumOfResults($resultArray) {
  $sum = 0;
  foreach($resultArray as $result) {
    $sum += $result;
  }
  return $sum;
}

function checkNumber($number_as_string) {
  return ! (getSumOfResults(getResultsArray($number_as_string)) % 17);
}

echo (checkNumber($test_number) ? "TRUE" : "FALSE") ;
