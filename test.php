<?php

// set IP address and API access key 
$ip = isset($_GET['ip']) ? $_GET['ip'] : (!empty($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']));
//Add some fancy check is IP valid
$access_key = 'YOUR_ACCESS_KEY';
// Initialize CURL:
$ch = curl_init('https://api.clarifyip.com/?ip='.$ip.'&key='.$access_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Store the data:
$json = curl_exec($ch);
curl_close($ch);
header('Content-type:application/json');
print_r($json);

?>
