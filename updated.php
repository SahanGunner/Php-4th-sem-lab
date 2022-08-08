<?php 
     $conn = mysqli_connect('localhost','root',"","php_lab");
        if (!$conn) {
            die("sorry we failed to connect:" .mysqli_connect_error());
        }
        $sql = "SELECT * FROM `db_first_lab` WHERE updated_by = 'smita';";
        $result = mysqli_query($conn,$sql);
// Usage of WHERE Clause to fetch data from the database
$num = mysqli_num_rows($result);
echo $num . " records found in the DataBase<br>";
$no=1;
if($num> 0){  
    while($row = mysqli_fetch_assoc($result)){ 
        echo $no .  ". Hello ". $row['name'] ;
        echo "<br>";
        $no = $no +1;
    }
}

// Usage of WHERE Clause to Update Data
$sql = "UPDATE `db_first_lab` SET `created_by` = 'Smita' WHERE `db_first_lab`.`id` = 8;";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";
if($result){
    echo "We updated the record successfully";
}
else{
    echo "We could not update the record successfully";
}
?>