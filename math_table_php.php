<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <table>
    <tr>
      <th>numbers</th>
      <th>second power</th>
      <th>third power</th>
    </tr>
    <?php
    function powerOf($number, $power) {
      $result = $number;
      for ($i=0; $i<$power-1; $i++) {
        $result = $result * $number;
      }
      return $result;
    }

    function powerOfArray($arrayOfNumbers, $power) {
      $resultArray = array();
      for ($i=0; $i<count($arrayOfNumbers); $i++) {
        array_push($resultArray, powerOf($arrayOfNumbers[$i], $power));
      }
      return $resultArray;
    }

    $oneToTen = range(1, 10);
    $powerOfArrays = array($oneToTen, powerOfArray($oneToTen, 2), powerOfArray($oneToTen, 3));

    function drawTable($arrayOfArrays) {
      for ($i=0; $i<count($arrayOfArrays[0]); $i++) {
        echo "<tr>";
        for ($j=0; $j<count($arrayOfArrays); $j++) {
          echo "<td>".$arrayOfArrays[$j][$i]."</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    }
    drawTable($powerOfArrays);
    ?>
</body>
</html>
