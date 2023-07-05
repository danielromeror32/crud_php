<?php 

$url = "https://api.dailymotion.com/videos?channel=news&limit=10";
$response = file_get_contents($url);    
$data = json_decode($response);

echo "hello";
?>