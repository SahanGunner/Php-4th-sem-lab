<?php 	
   //check for form submission instance
  if (isset($_POST['register'])) {
  	//check for username field
  	if (isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name'])) {
  		$username =  $_POST['name'];
  	} else {
  		$errUsername =  'Enter Username';
  	}

  	if (isset($_POST['desc']) && !empty($_POST['desc'])) {
  		$desc= $_POST['desc'];
  	} else {
  		$errdesc =  'Enter desc';
  	}

  	if (isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])) {
  		$email = $_POST['email'];
  		if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
  			$errEmail = 'Enter valid email';
  		}
  	} else {
  		$errEmail = 'Enter Your Email';
  	}
}
	 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];
		$conn = mysqli_connect('localhost','root',"","sahan_1");
		if (!$conn) {
			die("sorry we failed to connect:" .mysqli_connect_error());
		}
		// else {
		// echo "Connection sucessful";
		// }
		$sql = "INSERT INTO `contact` ( `name`, `email`, `concern`, `date_time`) VALUES ('$name', '$email', '$desc', current_timestamp())";
		$result = mysqli_query($conn,$sql);
		if($result){
			echo " Recorded Sucessfully";
		}
		else{
			echo "Not Sucessfull";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form </title>
	<style type="text/css">
		.error{
			color: red;
			display: inline;
		}
	</style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
		<div style="width:80%">
				<table width="90" align="center">
					<tr> 
						<td> Name:</td>
						<td>
							<input type="text" name="name" value="<?php echo (isset($username)?$username:''); ?>" >
							<span class ="error">
								<?php 
									echo (isset($errUsername)?$errUsername:'');
								 ?>
								</span>
						</td>
					</tr>
					<tr> 
						<td> Email:</td>
						<td>
							<input type="text" name="email" value="<?php echo (isset($Email)?$Email:''); ?>" >
							<span class="error">
								<?php 
									echo (isset($errEmail)?$errEmail:'');
								 ?>
								</span>
						</td>
					</tr>
					<tr>
						<td>desc:</td>
						<td>
							<input type="desc" name="desc" value="<?php echo (isset($desc)?$desc:''); ?>">
							<span class="error">
								<?php 
									echo (isset($errdesc)?$errdesc:'');
								 ?>
							</span>
						</td>
					</tr>
					<tr>
						<td><button type="Submit" name="register">Submit</button></td>
					</tr>
				</table>
		</div>
	</form>
</body>
</html>