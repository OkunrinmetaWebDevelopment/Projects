<?php

include('run.php');
include('./getFromDatabase.php');
include('./writeToDatabase.php');


class PullDataFromEndPoint
{

	function __construct()
	{
	
	}
  /*This is an example using the btc coin.*/
  public function getmultiaddr(){
	  
	$check= new getFROMDB();
	$responseJSON=$check->getCurrencyAndItsAddressesFromDB();
	#echo $responseJSON;
	$decoded = json_decode( $responseJSON, true );
	$getresponse="";
	$curencyID="";

	foreach ($decoded as $item) {

		$curencyID              = $item['currencyRecordID'];
		$curencyAddress         = $item['Currencyaddres'];
		$curencyabbreviation    = $item['abbreviation'];
		$curency=$curencyabbreviation;
		$q="multiaddr";
		$active=$curencyAddress;
	        $key="9d7fef524c1a";
		$queryString="q=$q&active=$active&key=$key";
	        $run=new APIRUN($queryString,$curency);
		$getresponse=$run->getAPIAttr();
		#echo $getresponse;
                $data= new WriteToDB($curencyID,$getresponse);
		$transferdata=$data->writeMultiAddressToDB();
		echo $transferdata;
		#echo $text="MultiADDRESS OF "."<br>".$curencyabbreviation."<br>".$getresponse."<br>"."<br>";
		#echo $text=" BLOCKCHAIN INFO OF A CURRENCY USING ADDRESS AS SEARCH PARAMETER "."<br>"."<br>".$getresponse."<br>"."<br>";

       }

  }


  /*This is the function that gets the address of a particular currency.
    This address is gotten from the rich query which returns  the rich list top 1000 (JSON format)
  */
	public function getaddress(){
		$check         = new getFROMDB();
		$responseJSON  =$check->getCurrencyListFromDB();
                $decoded       = json_decode($responseJSON, true );
	       #$results = array();
               $getresponse="";
		foreach ($decoded as $item) {
			$curencyID              =     $item['currencyRecordID'];
			$curencyName            =     $item['coinName'];
                        $curencyabbreviation    =     $item['abbreviation'];

			$q="rich";
			$queryString="q=$q";
			$run=new APIRUN($queryString,$curencyabbreviation);
			$getresponse=$run->getAPIAddress();

			$data= new WriteToDB($curencyID,$getresponse);
			$transferdata=$data->writeCurrencyAddressToDB();
			echo $transferdata;
			#echo $text="ADDRESS OF "."<br>".$curencyName."<br>".$getresponse."<br>"."<br>";

    }
      #echo $text="ADDRESS OF "."<br>".$curencyName."<br>".$getresponse."<br>"."<br>";
  }

}



$test= new PullDataFromEndPoint();
$newtest=$test->getmultiaddr();
echo $newtest;



?>
