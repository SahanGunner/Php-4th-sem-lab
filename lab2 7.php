<?php
$temp = array(50,60,70,90,42,62,52,87,32,45,75,25,60,61,66,65,
57,65,32,45,75,45,45,55,56,57,58,59,60,61,62,63,64);
$average = array_sum($temp) / count($temp);
echo "The average weight of provided data is: " . $average;
echo "<hr>";
sort($temp);
echo "Five lowest weights are:";
for($i=0; $i<5; $i++){
    echo " " . $temp[$i];
  }
echo "<hr>";
rsort($temp);
echo "Five highest weights are:";
for($i=0;$i<5;$i++){
    echo " " . $temp[$i];
  }
?>