<?php 
session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<h1>Dashboard</h1>
<p>Welcome <?php echo $_SESSION['username'] ?></p>
<a href="lab3 4.php">Logout</a>
</body>
</html>