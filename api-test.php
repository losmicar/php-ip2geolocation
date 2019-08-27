<?php

// set IP address and API access key 
$ip = '185.245.87.169';
$access_key = 'YOUR_ACCESS_KEY';
// Initialize CURL:
$ch = curl_init('https://api.clarifyip.com/?ip='.$ip.'&key='.$access_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Store the data:
$json = curl_exec($ch);
curl_close($ch);
// Decode JSON response:
$api_result = json_decode($json, true);
// Output the "latitude" object inside "location"
echo $api_result['location']['latitude'];

?>
