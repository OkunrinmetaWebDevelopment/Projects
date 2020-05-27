<?php

require_once("Bitcoin.php");


$apiKey 																= "08837af55cf585e1c9372948da3cf43df526dbe3";
$walletAddress="1DEP8i3QJCsomS4BSMY2RpU1upv62aGvhD";


$bitcoinapp = new Bitcoin($apiKey);

$token="79cc57e43c414f79aa9572780c628598";
$TransactionHash="f854aebae95150b379cc1187d848d58225f3c4157fe992bcd166f58bd5063449";
print_r($bitcoinapp->getBitcoinGeneralInformation($token));
print_r($bitcoinapp->getBitcoinTransactionByTransactionHash($TransactionHash));
print_r($bitcoinapp->getBitcoinTransactionByWalletAddress($walletAddress));
//var_dump($bitcoinapp->getBitcoinGeneralInformation());


