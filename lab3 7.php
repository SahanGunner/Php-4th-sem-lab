<?php 
    if(isset($_POST['submit'])){
    	if(isset($_POST['user']) && !empty($_POST['user']) && trim($_POST['user'])){
    		$user=$_POST['user'];
    	}else{
    		$erruser='Enter your name';
    	}


    	if(isset($_POST['mail']) && !empty($_POST['mail']) && trim($_POST['mail'])){
    		$mail=$_POST['mail'];
    		if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
    			$errmail='Enter validate Email';
    		}
    	}else{
    		$errmail='Enter your Email Address';
    	}


    	if(isset($_POST['date']) && !empty($_POST['date']) && trim($_POST['date'])){
    		$date=$_POST['date'];
    		if(preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $date)){
    			$errdate='Enter valid date';
    		}
    	}else{
    		$errdate='Enter your date of birth';
    	}


    	if(isset($_POST['phone']) && !empty($_POST['phone']) && trim($_POST['phone'])){
    		$phone=$_POST['phone'];
    		$length=strlen($phone);
    		if($length != 10){
    			$errphone='your number must be 10 digits';
    		}
    	}else{
    		$errphone='Enter your phone number';
    	}	
    }
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.form-group{
			margin-bottom: 20px;
			margin-top: 20px;
		}
		.form-group label{
			width: 100px;
			display: inline-block;
		}
		.error{
			color: red;
		}
	</style>
</head>
<body>
	 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	 	<fieldset>
	 	     <legend>Registration</legend>
	 		   <div class="form-group">
	 		      <label>Username:</label>
	 		      <input type="text" name="user" value="<?php echo (isset($user)?$user:'') ?> ">
	 		      <span class="error">
	 		      	 <?php echo (isset($erruser)?$erruser:'') ?>
	 		      </span>
               </div>
               <div class="form-group">
	 		      <label>Email:</label>
	 		      <input type="text" name="mail" value="<?php echo (isset($mail)?$mail:'') ?>">
	 		      <span class="error">
	 		      	 <?php echo (isset($errmail)?$errmail:'') ?>
	 		      </span>
	 		   </div>
	 		   <div class="form-group">
	 		      <label>Date of birth:</label>
	 		      <input type="text" name="date" value="<?php echo (isset($date)?$date:'') ?> "  title="YYYY-MM-DD">
	 		      <span class="error">
	 		      	 <?php echo (isset($errdate)?$errdate:'') ?>
	 		      </span>
	 		   </div>
	 		   <div class="form-group">
	 		      <label>Phone No:</label>
	 		      <input type="number" name="phone" value="<?php echo (isset($phone)?$phone:'') ?>">
	 		      <span class="error">
	 		      	 <?php echo (isset($errphone)?$errphone:'') ?>
	 		      </span>
	 		   </div>
	 		   <div class="form-group">
	 		   	  <input type="submit" value="Register" name="submit" >
	 		      <input type="reset" value="Reset">
	 		   </div>
	    </fieldset>
	 </form>
</body>
</html>