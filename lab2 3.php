<?php
$list = array("Nepal" => "Kathmandu", "India" => "New Delhi", "Australia" => "Sydney", 
"Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", 
"Slovakia" => "Bratislava", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", 
"Spain" => "Madrid");
foreach($list as $country => $capital) {
    echo "The capital of " . $country . " is " . $capital . ".";
    echo "<br>";
  }
?>