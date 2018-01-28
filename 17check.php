<?php
// only accepts numbers as strings as input. still figuring out if there's a way to convert the very large number to string using some math extension.
$test_number  = "92651109849427955";

function getResultsArray($very_large_number) {
  $digits_array = array();
  $j = strlen($very_large_number);
  for ($i = 0; $i < strlen($very_large_number); $i++) {
    $digits_array[$i] = $very_large_number[$i] * $j;
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

function checkNumber($very_large_number) {
  return ! (getSumOfResults(getResultsArray($very_large_number)) % 17);
}

echo (checkNumber($test_number) ? "TRUE" : "FALSE") ;
