<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simple Intrest</title>
    <style type="text/css">
        .form-group{
            margin-bottom: 20px;
        }
        .form-group label{
            width: 120px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <form  method="post">
        <div class="form-group">
        <label>Enter Principal :</label>
        <input type="text" name="principal" placeholder="Enter principal"></div>
        
        <div class="form-group">
        <label>Enter Rate :</label>
        <input type="text" name="rate" placeholder="Enter rate"></div>
        
        <div class="form-group">
        <label>Enter Time :</label>
        <input type="text" name="time" placeholder="Enter time"></div>

        <div class="form-group">
        <input type="submit" name="submit"> </div>
   </form>
        <?php
        if(isset($_POST['submit']))
        {
            $principal=$_POST['principal'];
            $rate=$_POST['rate'];
            $time=$_POST['time'];
            
            $si= ($principal * $rate * $time) / 100;
            echo "Simple Interest :".$si; 
        }
        ?>
</body>
</html>