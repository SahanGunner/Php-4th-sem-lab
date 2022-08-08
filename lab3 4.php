<?php 
if (isset($_POST['btnLogin'])) {

	$err = [];

	if (isset($_POST['username']) && !empty($_POST['username']) && trim($_POST['username'])) {
		$username = $_POST['username'];
	} else {
		$err['username'] = 'Enter username';
	}

	if (isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])) {
		$password = $_POST['password'];
	} else {
		$err['password'] = 'Enter password';
	}

	if (count($err) == 0) {
		//process to login into system
		if ($username == 'sahan' && $password == 'sahan123' ) {
			//start new session
			session_start();
			//store data into session
			$_SESSION['username'] = $username;

			//check remember me 
			if (isset($_POST['remember'])) {
				//store username into cookie
				setcookie('username',$username,time() + (24*60*60));
			}

			//redirect to next page
			header('location:dashboard.php');
		} else {
			echo 'Login Failed';
		}
	}
} 

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<h3>Login Page</h3>
<span>
	<?php if (isset($_GET['msg']) && $_GET['msg'] == 1) {
		echo 'Login to access your account';
	} ?>
</span>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	<div>
		<label for="username">Username</label>
		<input type="text" name="username" value="<?php echo isset($username)?$username:''; ?>">
		<span><?php echo isset($err['username'])?$err['username']:''; ?></span>
	</div>
	
	<div>
		<label for="password">Password</label>
		<input type="password" name="password">
		<span><?php echo isset($err['password'])?$err['password']:''; ?></span>
	</div>
	<div>
		<input type="checkbox" name="remember" value="remember">
		Remember Me for 24 hours
		<span><?php echo isset($err['password'])?$err['password']:''; ?></span>
	</div>
	
	<div>
		<input type="submit" name="btnLogin">
		<input type="reset" name="btnReset">
	</div>
</form>
</body>
</html>