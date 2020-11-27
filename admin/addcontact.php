<?php
include('../connect.php');
$dept = $_POST['dept'];
$contact = $_POST['contact'];


$save=mysql_query("INSERT INTO contact (dept,number) VALUES ('$dept','$contact')");

echo "<script type=\"text/javascript\">window.alert('Contact information has been added.');window.location.href = 'contact.php';</script>"; 

?>