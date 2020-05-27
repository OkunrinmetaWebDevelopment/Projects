<?php

require_once("Bitcoin.php");



$bitcoinapp = new Bitcoin();

$block_hash="0000000000000000079c58e8b5bce4217f7515a74b170049398ed9b8428beb4a";
$TransactionHash="00000000fa6cf7367e50ad14eb0ca4737131f256fc4c5841fd3c3f140140e6b6";
$walletAddress="{\"addr\":\"1dice8EMZmqKvrGE4Qc9bUFf9PX3xaYDp 1dice97ECuByXAvqXpaYzSaQuPVvrtmz6\"}";
$TransactionID="94a000efc8133b2efa5d2366ca39844b3275b80560f2871ef0ee7198be6590b0";
print_r($bitcoinapp->getAddressBalance($walletAddress));
print_r($bitcoinapp->getBitcoinTransactionByMultipleWalletAddress($walletAddress));
print_r($bitcoinapp->getBitcoinTransactionByTransactionID($TransactionID));
print_r($bitcoinapp->getBitcoinTransactionReceipt($TransactionID,$walletAddress));


/*print_r($bitcoinapp->getAddressBalance($walletAddress));
print_r($bitcoinapp->getSingleBlockINFO($block_hash));
//print_r($bitcoinapp->getBitcoinTransactionByTransactionID($TransactionHash));
print_r($bitcoinapp->getBitcoinTransactionByMultipleWalletAddress($walletAddress));
//print_r($bitcoinapp->getBitcoinTransactionReceipt());
//var_dump($bitcoinapp->getBitcoinGeneralInformation());


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.blockonomics.co/api/balance');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);


$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$postfileds="{\"addr\":\"1dice8EMZmqKvrGE4Qc9bUFf9PX3xaYDp 1dice97ECuByXAvqXpaYzSaQuPVvrtmz6\"}";
curl_setopt($ch, CURLOPT_POSTFIELDS, $postfileds);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
var_dump($result);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);*/
