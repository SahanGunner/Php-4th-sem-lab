<?php
if (isset($_POST['submit'])) {
if(isset($_FILES['resume']['name']) && !empty($_FILES['resume']['name']))
{
//if no errors...
if($_FILES['resume']['error'] == 0) {
//file size validation
if($_FILES['resume']['size'] <=  (1024000)) {
//can't be larger than 1 MB
if ($_FILES['resume']['type'] == 'application/pdf' || $_FILES['resume']['type'] == 'application/docs') { 
//will accept only pdf and docx
//it will upload file into uploads folder
if(move_uploaded_file($_FILES['resume']['tmp_name'], 'uploads/'.$_FILES['resume']['name'])){
echo "Upload Success";
} else {
echo "File can not move";
}
} else {
echo "FIle must be pdf or docx";
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
        Your resume: <input type="file" name="resume"  />
        <input type="submit" name="submit" value="Submit" />
	</form>
</body>
</html>
