<?php

$token = "1327124530:AAHNwyAu1MFO6zBH_zjtZvW0SlslIweqyGc";
$chatid = "-438211239";
$messageid="122";
$text="<href=9949081133>";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, curl_setopt($ch, CURLOPT_URL,"https:api.telegram.org/bot1327124530:AAHNwyAu1MFO6zBH_zjtZvW0SlslIweqyGc/sendMessage?chat_id=".$chatid."&text=".$text.""));
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);

//https://api.telegram.org/bot1327124530:AAHNwyAu1MFO6zBH_zjtZvW0SlslIweqyGc/deleteMessage?chat_id=".$chatid."&message_id=".$messageid.
//$text="test edited";
//curl_setopt($ch,CURLOPT_URL,"https://api.telegram.org/bot1327124530:AAHNwyAu1MFO6zBH_zjtZvW0SlslIweqyGc/getUpdates");
//curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot1327124530:AAHNwyAu1MFO6zBH_zjtZvW0SlslIweqyGc/sendMessage?chat_id=$chatid&text=$message");
//https://api.telegram.org/bot1327124530:AAHNwyAu1MFO6zBH_zjtZvW0SlslIweqyGc/deleteMessage?chat_id=-1001430037771&message_id=143
//https://api.telegram.org/bot$token/editMessageText?chat_id=$chatid&message_id=$messageid&text=urlencode$text
/*$share_url=""
function telegramForwardButton($url, $text = 'button') {
  $share_url = 'https://t.me/share/url?url='.rawurlencode($url).'&text='.rawurlencode($text);
  return "<a href=\"{$share_url}\">Share</a>";
}*/

?>
