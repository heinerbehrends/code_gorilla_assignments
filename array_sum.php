<?php
function arraySum($array1, $array2) {
  $result_array = array();
  for ($i = 0; $i < count($array1); $i++) {
    array_push($result_array, $array1[$i] + $array2[$i]);
  }
  return $result_array;
}
$array1 = array(5,6,7,8,9,10,11,12,13,14);
$array2 = array(0,2,4,6,8,10,12,14,16,18);
$array3 = arraySum($array1, $array2);
print_r($array3);
?>
