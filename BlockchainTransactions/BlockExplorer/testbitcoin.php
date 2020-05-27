<?php

require_once("Bitcoin.php");


$apiKey 																= "08837af55cf585e1c9372948da3cf43df526dbe3";
$walletAddress="mmhmMNfBiZZ37g1tgg2t8DDbNoEdqKVxAL";


$bitcoinapp = new Bitcoin($apiKey);

$block_hash="0000000000000000079c58e8b5bce4217f7515a74b170049398ed9b8428beb4a";
$TransactionHash="00000000fa6cf7367e50ad14eb0ca4737131f256fc4c5841fd3c3f140140e6b6";
$transactionid="5756ff16e2b9f881cd15b8a7e478b4899965f87f553b6210d0f8e5bf5be7df1d";
print_r($bitcoinapp->getSingleBlockINFO($block_hash));
print_r($bitcoinapp->getBitcoinTransactionByTransactionHash($TransactionHash));
print_r($bitcoinapp->getBitcoinTransactionByWalletAddress($walletAddress));
print_r($bitcoinapp->getBitcoinTransactionByTransactionID($transactionid));
//var_dump($bitcoinapp->getBitcoinGeneralInformation());


