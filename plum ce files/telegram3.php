<?php
$path = "https://api.telegram.org/bot1327124530:AAHNwyAu1MFO6zBH_zjtZvW0SlslIweqyGc"; 
$update = json_decode(file_get_contents("php://input"), TRUE);
$chatId = $update["message"]["chat"]["id"];
$messageid = $update["message"]["from"]["id"];
$message = $update["message"]["text"];


$bot_token = "1327124530:AAHNwyAu1MFO6zBH_zjtZvW0SlslIweqyGc"; 
//$chat_id = "1390203770"; 
$reply = "Working";
$url = "https://api.telegram.org/bot".$bot_token."/sendMessage";

$keyboard = array(
"keyboard" => array(array(array(
"text" => "/button"
),
array(
"text" => "contact",
"request_contact" => true // This is OPTIONAL telegram button

),
array(
"text" => "location",
"request_location" => true // This is OPTIONAL telegram button

)

)),
"one_time_keyboard" => true, // Can be FALSE (hide keyboard after click)
"resize_keyboard" => true // Can be FALSE (vertical resize)
);

$postfields = array(
'chat_id' => "$chat_id",
'text' => "$reply",
'reply_markup' => json_encode($keyboard)
);

print_r($postfields);
if (!$curld = curl_init()) {

}

curl_setopt($curld, CURLOPT_POST, true);
curl_setopt($curld, CURLOPT_POSTFIELDS, $postfields);
curl_setopt($curld, CURLOPT_URL,$url);
curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec($curld);

curl_close ($curld);

?>