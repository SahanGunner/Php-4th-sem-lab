<?php  #1. Write PHP script to display mark sheet into following format using for each loop and 
#array. (change marks data) 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>To print Result</title>
	<style type="text/css">
		.Pass{
		background:#6f6;
		}
		.Fail{
			background: #f66;
		}
	</style>
</head>
<body>
	<?php 
	$Roll_30 = [
		['name' => 'Smita', 'Roll_no'=>34,'Web'=>78,'DBMS'=>98, 'DSA'=>98, 
		'Account'=>88, 'ECO'=>88],
		['name' => 'Sahan', 'Roll_no'=>30,'Web'=>68,'DBMS'=>78, 'DSA'=>95, 
		'Account'=>88, 'ECO'=>67],
		['name' => 'Sahil', 'Roll_no'=>31,'Web'=>58,'DBMS'=>52, 'DSA'=>58, 
		'Account'=>58, 'ECO'=>68],
		['name' => 'Ronit', 'Roll_no'=>22,'Web'=>78,'DBMS'=>88, 'DSA'=>78, 
		'Account'=>45, 'ECO'=>78]
	];
	 ?>
	 <table border="1" cellspacing="0" cellpadding="5">
	<tr>
			<th>SN</th>
			<th>Name </th>
			<th>Roll_no</th>
			<th>Web II</th>
			<th>Account</th>
			<th>DSA</th>
			<th>DBMS</th>
			<th>Economics</th>
			<th>Total </th>
			<th>Percentage</th>
			<th>Result</th>
			<th>Division</th>
		</tr>
		<?php 
		foreach ($Roll_30 as $key => $value) {
			$total= $value['Web'] + $value['DBMS'] + $value['DSA'] + $value['Account'] + $value['ECO'];
			$percentage = $total/5;
			$result='Pass';
			 if($value['ECO']<50|| $value['Web'] <50||  $value['DBMS'] <50 ||$value['DSA'] <50||
			 $value['Account']<50){
			 	$result='Fail';
			}
			$division= 'First division';
			 if ($percentage <60 && $percentage>=48) {
			 	$division='Second division';
			 }
			 	elseif ($percentage <100 && $percentage>=80) {
			 	$division='Distinsion';
			 	}
			 	elseif ($value['ECO']<50|| $value['Web'] <50||  $value['DBMS'] <50 ||$value['DSA'] <50||
			 $value['Account']<50){
			 	$division='Fail';
			 	}
		 ?>
			<tr class="<?php echo $result ?>">
				<td><?php echo $key+1 ?></td>
				<td><?php echo $value ['name'] ?></td>
				<td><?php echo $value ['Roll_no'] ?></td>
				<td><?php echo $value ['Web'] ?></td>
				<td><?php echo $value ['DBMS'] ?></td>
				<td><?php echo $value ['DSA'] ?></td>
				<td><?php echo $value ['Account'] ?></td>
				<td><?php echo $value ['ECO'] ?></td>
				<td><?php echo $total ?></td>
				<td><?php echo $percentage ?></td>
				<td><?php echo $result ?></td>
				<td><?php echo $division ?></td>
				<?php } ?>
			</tr>
		
	</table>
</body>
</html>