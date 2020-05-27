<?php

require_once("Bitcoin.php");


$apiKey 																= "08837af55cf585e1c9372948da3cf43df526dbe3";
$walletAddress="1DEP8i3QJCsomS4BSMY2RpU1upv62aGvhD";


$bitcoinapp = new Bitcoin($apiKey);

$block_hash="0000000000000bae09a7a393a8acded75aa67e46cb81f7acaa5ad94f9eacd103";
$TransactionHash="f854aebae95150b379cc1187d848d58225f3c4157fe992bcd166f58bd5063449";
print_r($bitcoinapp->getSingleBlockINFO($block_hash));
print_r($bitcoinapp->getBitcoinTransactionByTransactionHash($TransactionHash));
print_r($bitcoinapp->getBitcoinTransactionByWalletAddress($walletAddress));
print_r($bitcoinapp->getBitcoinUnconfirmedTransaction());
//var_dump($bitcoinapp->getBitcoinGeneralInformation());


