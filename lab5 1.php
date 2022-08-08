<?php   
   //check for form submission instance
  if (isset($_POST['register'])) {
    //check for username field
    if (isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name'])) {
        $username =  $_POST['name'];
    } else {
        $errUsername =  'Enter Username';
    }

    if (isset($_POST['status']) && !empty($_POST['status'])) {
        $status= $_POST['status'];
    } else {
        $errstatus =  'Enter status';
    }

    if (isset($_POST['rank']) && !empty($_POST['rank']) && trim($_POST['rank'])) {
        $rank = $_POST['rank'];
    } else {
        $errrank = 'Enter Your rank';
    }
    if (isset($_POST['cby']) && !empty($_POST['cby']) && trim($_POST['cby'])) {
        $cby = $_POST['cby'];
    } else {
        $errcby = 'Enter Your cby';
    }
    if (isset($_POST['upby']) && !empty($_POST['upby']) && trim($_POST['upby'])) {
        $upby = $_POST['upby'];
    } else {
        $errupby = 'Enter Your upby';
    }
}
     if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $rank = $_POST['rank'];
        $status = $_POST['status'];
        $created_by= $_POST['cby'];
        $updated_by= $_POST['upby'];

        $conn = mysqli_connect('localhost','root',"","php_lab");
        if (!$conn) {
            die("sorry we failed to connect:" .mysqli_connect_error());
        }
        // else {
        // echo "Connection sucessful";
        // }
        $sql = "INSERT INTO `db_first_lab` ( `name`, `rank`, `status`, `created_by`, `updated_by`) VALUES ('$name', '$rank', '$status', '$created_by','$updated_by')";
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
                        <td> Rank:</td>
                        <td>
                            <input type="text" name="rank" value="<?php echo (isset($rank)?$rank:''); ?>" >
                            <span class="error">
                                <?php 
                                    echo (isset($errrank)?$errrank:'');
                                 ?>
                                </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Status:</td>
                        <td>
                            <input type="radio" name="status" value= " <?php echo ($status==1)?'checked':'' ?> ">Active
                             <input type="radio" name="status" value= "<?php echo ($status==0)?'checked':'' ?> ">DeActive<br><br>
                                <?php 
                                    echo (isset($errstatus)?$errstatus:'');
                                 ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                    <td>Created By:</td>
                        <td>
                            <input type="text" name="cby" placeholder="Created_by" >
                        </td>
                    </tr>
                    <tr>
                    <td>Updated By:</td>
                        <td>
                            <input type="text" name="upby" placeholder="Updated_by" >
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