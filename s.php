<?php

$id = $_GET['id'];

$id = $_GET['id'];


function sendMessage(){
    $content = array(
        "en" => 'Flood Level Monitoring App'
        );

    $fields = array(
        'app_id' => "96fd1c8e-f523-4616-9315-6d99a36ae204",
        'included_segments' => array('All'),
        'data' => array("foo" => "bar"),
        'large_icon' =>"ic_launcher_round.png",
        'contents' => $content
    );

    $fields = json_encode($fields);
print("\nJSON sent:\n");
print($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                                               'Authorization: Basic NDEzYTc3ZjEtYmM5Yi00ZjkyLWJjZDItNTM5M2M5ZjA5ZWQx'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

echo $id;
include('connect.php');
	$save1=mysql_query("INSERT INTO stats (status) VALUES ('$id')");
if($id > 12) {
	$status = 'LOW';
}
if($id <= 12 && $id >= 8) {
	$status = 'MODERATE';
	// notif
		$status = 'HIGH';
	include('connect.php');
$result = mysql_query("SELECT * FROM stats ORDER BY ID DESC LIMIT 1");
while($row = mysql_fetch_array($result))
	{
		$stats= $row['status'];
	} 
	
if($stats == $status) {
	
} else {
	echo 'go';
	


	$message = 'Flood Level Monitoring App Advisory (Moderate Level): Lahat ay inaatasan na maging handa at alerto sa pagbaha, maaring pumunta sa pinaka malapit na evacuation center.';
$apicode = 'ST-REGGI313935_13AGG';
$passwd = 'zhj8z6x{r@';
function itexmo($number,$message,$apicode,$passwd){
		$url = 'https://www.itexmo.com/php_api/api.php';
		$itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
		$param = array(
			'http' => array(
				'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
				'method'  => 'POST',
				'content' => http_build_query($itexmo),
			),
		);
		$context  = stream_context_create($param);
		return file_get_contents($url, false, $context);
$response = sendMessage();
$return["allresponses"] = $response;
$return = json_encode( $return);
	include('connect.php');
	$result1 = mysql_query("SELECT * FROM login2");
while($row1 = mysql_fetch_array($result1))
	{
	    
	    
	    
		$contact = $row1['contact'];
		
		
}
	//a
		
		$result = itexmo($contact,$message,$apicode,$passwd);
if ($result == ""){
echo "No response from server!!!
Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
Please CONTACT US for help. ";	
}else if ($result == 0){
}
else{	
echo "Error Num ". $result . " was encountered!";
}

			
		
		
		
		
	}

//end send notification
}
	// end notif
}



if($id < 5) {
	$status = 'HIGH';
	include('connect.php');
$result = mysql_query("SELECT * FROM stats ORDER BY ID DESC LIMIT 1");
while($row = mysql_fetch_array($result))
	{
		$stats= $row['status'];
	} 
	
if($stats == $status) {
	
} else {
	echo 'go';
	
	$message = 'Flood Level Monitoring App Advisory (High Level): Lahat ay inaatasan na maging handa at alerto sa pagbaha, maaring pumunta sa pinaka malapit na evacuation center.';
$apicode = 'ST-REGGI313935_13AGG';
$passwd = 'zhj8z6x{r@';
function itexmo($number,$message,$apicode,$passwd){
		$url = 'https://www.itexmo.com/php_api/api.php';
		$itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
		$param = array(
			'http' => array(
				'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
				'method'  => 'POST',
				'content' => http_build_query($itexmo),
			),
		);
		$context  = stream_context_create($param);
		return file_get_contents($url, false, $context);
}
$response = sendMessage();
$return["allresponses"] = $response;
$return = json_encode( $return);
	include('connect.php');
	$result1 = mysql_query("SELECT * FROM login2");
while($row1 = mysql_fetch_array($result1))
	{
	    
	    
	    
		$contact = $row1['contact'];
		
		
	//a
		
		$result = itexmo($contact,$message,$apicode,$passwd);
if ($result == ""){
echo "No response from server!!!
Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
Please CONTACT US for help. ";	
}else if ($result == 0){
}
else{	
echo "Error Num ". $result . " was encountered!";
}

			
		
		
		
		
	}

//end send notification
}
}
?>