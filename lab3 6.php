<?php
if (isset($_POST['submit'])) {
if(isset($_FILES['photo']['name']) && !empty($_FILES['photo']['name']))
{
//if no errors...
if($_FILES['photo']['error'] == 0) {
//file size validation
if($_FILES['photo']['size'] <=  (1024000)) {
//can't be larger than 1 MB
if ($_FILES['photo']['type'] == 'image/png' || $_FILES['photo']['type'] == 'image/jpeg') { 
//will accept only png and jpeg
//it will upload file into uploads folder
if(move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/'.$_FILES['photo']['name'])){
echo "Upload Success";
} else {
echo "File can not move";
}
} else {
echo "FIle must be png or jpeg";
}
} else{
echo 'Oops!  Your file\'s size is to large.';
}
} else {
//set that to be the returned message
echo  'Ooops!  Upload error';
}
} else {
echo "No file choosen";
}
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
        Your Photo: <input type="file" name="photo" size="25" />
        <input type="submit" name="submit" value="Submit" />
	</form>
</body>
</html>
