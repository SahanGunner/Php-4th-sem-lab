<?php
$conn = mysqli_connect('localhost','root',"","php_lab");
        if (!$conn) {
            die("sorry we failed to connect:" .mysqli_connect_error());
        }
$sql = "DELETE FROM `db_first_lab` WHERE `db_first_lab`.`id` = 11";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";

if($result){
    echo "Delete successfully";
}
else{
    $err = mysqli_error($conn);
    echo "Not Delete successfully due to this error --> $err";
}

?>