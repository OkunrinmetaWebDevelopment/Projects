<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.cryptoapis.io/v1/bc/btc/mainnet/info');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Contenttype: application/json';
$headers[] = 'X-Api-Key: 08837af55cf585e1c9372948da3cf43df526dbe3';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
//echo $result;
print_r($result);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
