<?php
include('../connect.php');
$about = $_POST['about'];
		mysql_query("UPDATE about SET about='$about'");

		echo '<script>alert("About information has been updated.");window.location="about.php";</script>';
?>