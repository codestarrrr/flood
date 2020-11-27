<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		header("location: index1.php");
		exit();
	} else {
		
		include('connect.php');
			$id=$_SESSION['SESS_MEMBER_ID'];
			
		$contact=$_POST['contact'];
	$result=mysql_query("SELECT * FROM login2 WHERE id = '$id'")or die (mysql_error());
	
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);
		
		if ($count > 0){
			header("location: user/index.php");
		$_SESSION['SESS_MEMBER_ID'] = isset($member['id']);
	
	
	$contact = $_POST['contact'];
	$result = mysql_query("SELECT * FROM login2 WHERE id = '$id'")or die (mysql_error());
	while($row = mysql_fetch_array($result))
		{
		$position = $row['type'];
		}
		
	if ($position=='')
	{
	 $qry="SELECT * FROM login2 WHERE id = '$id'";
		$result=mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				session_write_close();
				header("location: user/index.php");
				exit();
			}else {
				header("location: index.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
		
	}
	}
?>