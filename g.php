<?php

$id = $_GET['id'];

include('connect.php');
	$save1=mysql_query("INSERT INTO stats (status) VALUES ('$id')");
$status = '';
if($id > 11) {
	$status = 'LOW';
}
if($id <= 10 && $id >= 5) {
	$status = 'MODERATE';
	// notification
	
	include('connect.php');
	
	
	

// send sms
//	include ( "NexmoMessage.php" );
//	$nexmo_sms = new NexmoMessage('8ecd7d19', 't3sMQMOa5GJMka2Y');
//	$info = $nexmo_sms->sendText( '+639481219447', 'Flood Level Monitoring App', 'Moderate Level: Ang lahat ay inaatasan na maging handa at alerto sa maaaring pagtaas ng baha sa lugar. Ihanda ang mga kakailanganin na bagay kung sakaling kailangan lumikas. ' );
//	echo $nexmo_sms->displayOverview($info);
//	echo 'sent';
 //end send sms
// send android notification
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
	
	// end notification
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
	
	include ( "NexmoMessage.php" );
	echo 'go';
	include('connect.php');
	
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
	

	
//	$nexmo_sms = new NexmoMessage('8ecd7d19', 't3sMQMOa5GJMka2Y');
//	$info = $nexmo_sms->sendText( '+639481219447', 'Flood Level Monitoring App', 'High Level: Ang lahat ay inaatasan na lumikas na sa kanilang mga tahanan dahil sa mataas na pagbaha sa lugar. Pumunta sa malapit na Evacuation Area.' );
//	echo $nexmo_sms->displayOverview($info);
//	echo 'sent';
 //end send sms
// send android notification


}
}

?>