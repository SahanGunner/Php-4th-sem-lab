<!DOCTYPE html>
<html>
<head>
	<title>Array using foreach loop</title>
</head>
<body>
<?php 
$students = [['Sahan',1,35,40,30,25,28],
			['Smita',2,30,50,30,35,38],
			['Sahil',3,25,30,20,22,20],
			['Zaira',5,37,48,35,23,26]];
 ?>
	<table border="1" cellspacing="0" cellpadding="3">
		<tr>
			<th>Name </th>
			<th>Roll_no</th>
			<th>Web II</th>
			<th>Account</th>
			<th>DSA</th>
			<th>DBMS</th>
			<th>Economics</th>
			<th>Total </th>
		</tr>
		<?php 
		foreach ($students as $value) {
			$total= $value [2] + $value [3] + $value [4] + $value [5] + $value [6];
		 ?>
		 <tr>
		 	<td><?php echo $value [0] ?></td>
		 	<td><?php echo $value [1] ?></td>
		 	<td><?php echo $value [2] ?></td>
		 	<td><?php echo $value [3] ?></td>
		 	<td><?php echo $value [4] ?></td>
		 	<td><?php echo $value [5] ?></td>
		 	<td><?php echo $value [6] ?></td>
		 	<td><?php echo $total ?></td>
		 </tr>
		<?php } ?>
	</table>
</body>
</html>