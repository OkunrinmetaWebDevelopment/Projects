<?php

require_once("Bitcoin.php");



$bitcoinapp = new Bitcoin();

$block_hash="0000000000000000079c58e8b5bce4217f7515a74b170049398ed9b8428beb4a";
$TransactionHash="00000000fa6cf7367e50ad14eb0ca4737131f256fc4c5841fd3c3f140140e6b6";
$walletAddress="qzs02v05l7qs5s24srqju498qu55dwuj0cx5ehjm2c";
print_r($bitcoinapp->getSingleAddressDetails($walletAddress));
print_r($bitcoinapp->getSingleBlockINFO($block_hash));
//print_r($bitcoinapp->getBitcoinTransactionByTransactionHash($TransactionHash));
print_r($bitcoinapp->getBitcoinTransactionByWalletAddress($walletAddress));
//print_r($bitcoinapp->getBitcoinUnconfirmedTransaction());
//var_dump($bitcoinapp->getBitcoinGeneralInformation());


