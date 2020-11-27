<?php
include('../connect.php');
$id = $_GET['id'];

 $sql = "delete from contact where id='$id'";
 mysql_query( $sql);

//echo "<script type=\"text/javascript\">window.location.href = 'contact.php';</script>"; 

?>