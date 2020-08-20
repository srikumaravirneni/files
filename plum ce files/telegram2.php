<?php
//https://api.telegram.org/bot1327124530:AAHNwyAu1MFO6zBH_zjtZvW0SlslIweqyGc/setwebhook?url=https://plumerp.co.in/pscript/telegram2.php

$path = "https://api.telegram.org/bot1327124530:AAHNwyAu1MFO6zBH_zjtZvW0SlslIweqyGc"; 
$update = json_decode(file_get_contents("php://input"), TRUE);
$chatId = $update["message"]["chat"]["id"];
$messageid = $update["message"]["from"]["id"];
$message = $update["message"]["text"];

$dd=date("Y/m/d");
$t=date("h:i:sa");

if (strpos($message, "/date") === 0) 
{
	file_get_contents($path."/sendmessage?chat_id=".$messageid."&text=Today's date is ".$dd."");
	
}

if (strpos($message, "/time") === 0) 
{
	file_get_contents($path."/sendmessage?chat_id=".$messageid."&message_id=".$messageid."&text=Current time is ".$t."");
	
}

/*
function telegramForwardButton($url, $text = 'button') {
  $share_url = 'https://t.me/share/url?url='.rawurlencode($url).'&text='.rawurlencode($text);
  return "<a href=\"{$share_url}\">Share</a>";
  
}
*/
/*
$location = substr($message, 9);
$weather = json_decode(file_get_contents("https://openweathermap.org/find?q=".$location."&appid=mytoken"c), TRUE)["weather"][0]["main"];
file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Here's the weather in ".$location.": ". $weather);
*/
?>