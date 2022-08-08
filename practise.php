<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="post">
		<label>First Number</label>
		<input type="Number" name="first_num"><br>
		<label>second Number</label>
		<input type="Number" name="second_num"><br>
		<label>third Number</label>
		<input type="Number" name="third_num"><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>
<?php 
	//Set the default timezone to UTC.  
date_default_timezone_set('UTC');  
echo "<strong>Display current date dd/mm/yyyy format 
</strong><br />"; 
echo date("d/m/Y")."<br />";  
echo "<strong>Display current date mm/dd/yyyy format</strong> 
"."<br />";  
echo date("m/d/Y")."<br />";  
echo "<strong>Display current date mm­dd­yyyy format </strong>"."<br 
/>";  
echo date("m-d-Y")."<br />";  
echo "<strong>Display like Monday 6th of March 1996 </strong>"."<br 
/>";  
echo date("l jS \of F Y")."<br />";  
echo "<strong>Display the above format with time </strong>"."<br />";  
echo date('l jS \of F Y h:i:s A')."<br />";
 ?>