<?php
include('../connect.php');
$name = $_POST['name'];
$classroom = $_POST['classroom'];
$toilet = $_POST['toilet'];
$water = $_POST['water'];
$lightning = $_POST['lightning'];
$contact = $_POST['contact'];
$person = $_POST['person'];


$save=mysql_query("INSERT INTO evacuation (name,classroom,toilet,water,lightning,contact,person) VALUES ('$name','$classroom','$toilet','$water','$lightning','$contact','$person')");

echo "<script type=\"text/javascript\">window.alert('Evacuation Center has been added.');window.location.href = 'index.php';</script>"; 

?>