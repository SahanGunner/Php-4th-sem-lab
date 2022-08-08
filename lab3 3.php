
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tax problem</title>
</head>
<body>
	<form action="lab3.3.display.php" method="post">
            	Enter a income amount of married: <input type="number" name="married" ><br>
                Enter a income amount of unmarried: <input type="number" name="unmarried" ><br>
            	<input type="submit" name="submit" id="submit" value="Submit" >
		</form>
		<?php
    if (isset($_POST['submit'])) {
    $married = $_POST['married'];
    $unmarried = $_POST['unmarried'];
    if (!empty($married)&&!empty($unmarried)) {
        amount_married($married);
        amount_married($unmarried);   
    }
    else
            echo "Enter amount";
}
function amount_married($amount){
            if($amount<=450000){
                $tax1=0.01*$amount;
                echo "The tax amount is $tax1<br>";
            }
            else if($amount>450000 &&$amount<=550000){
                $temp = 450000*0.01;
                $remaining_amount = $amount - 450000;
                $tax1 = $temp + ($remaining_amount* 0.10);
                echo "The tax amount is $tax1<br>";
            }
            else if($amount>550000 && $amount<=750000){
                $temp = (450000 * 0.01) + (100000 * 0.10);
                $remaining_amount=$amount-550000;
                $tax1 = $temp + ($remaining_amount* 0.20);
                echo "The tax amount is $tax1<br>";
            }
            else if($amount>750000 && $amount<=1300000){
                $temp = (450000 * 0.01) + (100000 * 0.10)+(200000*0.20);
                $remaining_amount=$amount-750000;
                $tax1 = $temp + ($remaining_amount* 0.30);
                echo "The tax amount is $tax1<br>";
            }
            else{
            $temp = (450000 * 0.01) + (100000 * 0.10)+(200000*0.20)+(550000*0.30); 
            $remaining_amount=$amount-1300000;
            $tax1 = $temp + ($remaining_amount* 0.35);
            echo "The tax amount is $tax1<br>";
            }
}
function amount_unmarried($amount){
    if($amount<=400000){
        $tax=0.01*$amount;
        echo "The tax amount is $tax";
    }
    else if($amount>400000&&$amount<=500000){
        $temp = 400000*0.01;
        $remaining_amount = $amount - 400000;
        $tax = $temp + ($remaining_amount* 0.10);
        echo "The tax amount is $tax";
    }
    else if($amount>500000&&$amount<=750000){
        $temp = (400000 * 0.01) + (100000 * 0.10);
        $remaining_amount=$amount-500000;
        $tax = $temp + ($remaining_amount* 0.20);
        echo "The tax amount is $tax";

    }
    else if($amount>750000&&$amount<=1300000){
        $temp = (400000 * 0.01) + (100000 * 0.10)+(250000*0.20);
        $remaining_amount=$amount-750000;
        $tax = $temp + ($remaining_amount* 0.30);
        echo "The tax amount is $tax";

    }
    else{
    $temp = (450000 * 0.01) + (100000 * 0.10)+(250000*0.20)+(550000*0.30); 
    $remaining_amount=$amount-1300000;
    $tax = $temp + ($remaining_amount* 0.35);
    echo "The tax amount is $tax";
    }
}
?>
	
</body>
</html>