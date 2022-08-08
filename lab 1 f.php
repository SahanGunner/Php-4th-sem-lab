<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	$info = [ 'name' => 'Ram Bahadur', 'address' => 'Lalitpur','email' =>'info@ram.com',
	 'phone' =>98454545,'website' => 'www.ram.com'];
	 ?>
	 <table border="1" cellspacing ="0">
	 	<tr>
	 		<th>Name</th>
	 		<th>Address</th>
	 		<th>Email</th>
	 		<th>Phone</th>
	 		<th>Website</th>
	 	</tr>
	 	<?php 
	 	for ($i=0; $i <1 ; $i++) { 
	
	 	 ?>
	 	<tr>
	 		<td><?php echo $info['name'] ?></td>
	 		<td><?php echo $info['address'] ?></td>
	 		<td><?php echo $info['email'] ?></td>
	 		<td><?php echo $info['phone'] ?></td>
	 		<td><?php echo $info['website'] ?></td>
	 	</tr>
	 <?php } ?>
	 </table>
</body>
</html>