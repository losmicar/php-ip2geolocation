# php-ip2geolocation - Geo Location details with PHP

Grab users Geo Location details using ClarifyIP &amp; PHP

## Getting Started

Getting users Geo location is simplified using Curl and ClarifyIP service (free service up to 10k requests per month).

### Prerequisites

PHP Curl
[ClarifyIP API KEY](http://clarifyip.com).

## How to implement

### Example 1

```php
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
```

### Example 2

```php
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
```