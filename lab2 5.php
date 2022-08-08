<?php
$num = array(1,2,3,4,5);
$add = '$';
array_splice($num,3,0,$add);
echo "<pre>";
print_r($num);
echo "</pre>";
?>