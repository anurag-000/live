<?php
$access_token = '1000.a679600bdaac0281dcc154d1babf63db.4ee8e702fc566e3c8fed3479bd4d682e';
$getUrl = "https://desk.zoho.in/api/v1/tickets";

$headers = [];
$headers[] = "Content-Type: application/pdf";
$headers[] = "Authorization: Zoho-oauthtoken $access_token";
print_r($headers);
 $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $getUrl);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
// curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
 $result_fetch_pot = curl_exec($ch);
echo $result_fetch_pot ; 
curl_close($ch);
// echo file_put_contents("test.pdf",$result_fetch_pot);
return $result_fetch_pot;
?>