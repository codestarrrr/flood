<?php

$id = $_GET['id'];
$status = '';
if($id > 12) {
	$status = 'LOW';
}
if($id <= 12 && $id >= 8) {
	$status = 'MODERATE';
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
	include('connect.php');
	$result1 = mysql_query("SELECT * FROM login2");
while($row1 = mysql_fetch_array($result1))
	{
		$contact = $row1['contact'];
// send sms
	include ( "NexmoMessage.php" );
	$nexmo_sms = new NexmoMessage('594eb0ba', 'd5ULHdy8AX7RCnkO');
	$info = $nexmo_sms->sendText( '+'.$contact, 'Flood Level Monitoring App', 'Flood Level Monitoring App Advisory:Lahat ay inaatasan na maging handa at alerto sa pagbaha, maaring pumunta sa pinaka malapit na evacuation center.' );
	echo $nexmo_sms->displayOverview($info);
	echo 'sent';
 //end send sms
// send android notification
	}

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

$response = sendMessage();
$return["allresponses"] = $response;
$return = json_encode( $return);
//end send notification
}
}

include('connect.php');
	$save1=mysql_query("INSERT INTO stats (status) VALUES ('$status')");
?>