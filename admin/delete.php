
<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../connect.php');
$id=$_GET['id'];
 $sql = "delete from evacuation where id='$id'";
 mysql_query( $sql);

echo "<script type=\"text/javascript\">window.location.href = 'index.php';</script>"; 

?>