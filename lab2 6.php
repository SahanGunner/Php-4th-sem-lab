<?php
$values = array("Ram"=>"31","Hari"=>"41","Sita"=>"39","Gita"=>"40");
echo "Sorting arrays in ascending order, according to the value:" . "<br>";
asort($values);
print_r($values);
echo "<hr>";
echo "Sorting arrays in ascending order, according to the key:" . "<br>";
ksort($values);
print_r($values);
echo "<hr>";
echo "Sorting arrays in descending order, according to the value:" . "<br>";
arsort($values);
print_r($values);
echo "<hr>";
echo "Sorting arrays in descending order, according to the key:" . "<br>";
krsort($values);
print_r($values);
?>