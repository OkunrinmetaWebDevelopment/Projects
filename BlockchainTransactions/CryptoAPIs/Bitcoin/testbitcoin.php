<?php

require_once("Bitcoin.php");


$apiKey 																= "08837af55cf585e1c9372948da3cf43df526dbe3";


$bitcoinapp = new Bitcoin($apiKey);

print_r($bitcoinapp->getBitcoinGeneralInformation());
print_r($bitcoinapp->getBitcoinTransactionByWalletAddress("mtFYoSowT3i649wnBDYjCjewenh8AuofQb"));
//var_dump($bitcoinapp->getBitcoinGeneralInformation());


