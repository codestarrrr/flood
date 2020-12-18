<?php
include('connect.php');
$name= $_POST['name'];
$username= $_POST['username'];
$password= $_POST['password'];
$address= $_POST['address'];
$contact=  '0'.$_POST['contact'];
$type= '';

$result = mysql_query("SELECT * FROM login2 WHERE contact = '$contact'");
$count=mysql_num_rows($result);
if ($count > 0 ) {
	echo '<script>alert("Mobile Number already registered.");window.location.href = \'index.php\';</script>';
} else {
	echo 'a';
	$save1=mysql_query("INSERT INTO login2 (name,barangay, contact,type) VALUES ('$name','$address','$contact','$type')");
	$save1=mysql_query("INSERT INTO login3 (username,password,type1) VALUES ('$username','$password','$type')");
	
echo "<script type=\"text/javascript\">window.alert('You have been registered. You can now enter your login information.');window.location.href = 'index.php';</script>"; 
}

?>
