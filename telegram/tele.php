
<?php

$token = "1327124530:AAHNwyAu1MFO6zBH_zjtZvW0SlslIweqyGc";

$chatid = "-414640800";
$message="Test message";
//$url = " https://api.telegram.org/bot1324013282:AAHHB8GkrDELu8L_n0ZzXGCiirK8d2kziKk/sendMessage?chat_id=-41464080&text=testmsg0";
//echo $url;



curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot1324013282:AAHHB8GkrDELu8L_n0ZzXGCiirK8d2kziKk/sendMessage?chat_id=$chatid&text=$message ");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);

?>