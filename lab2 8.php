<?php
$brand = array('A' => 'Apple', 'B' => 'Bird', 'C' => 'Carbon');
$brand = array_map('strtoupper',$brand);
print_r($brand);
?>