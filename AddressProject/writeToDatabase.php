<?php

require_once('./conn.php');
/**
 *
 */
class WriteToDB extends DbConnection
{
	private $ID;
	private $getresponse;

	function __construct($ID,$getresponse)
	{
		$this->ID = $ID;
		$this->getresponse = $getresponse;
      #$curencyID,$getresponse
	}

  public function writeMultiAddressToDB(){
		     #var_dump($getresponse);

	$decoded         =json_decode($this->getresponse, true );
	$curencyID       =$this->ID;
	$address         = $decoded['addresses'][0]['address'];
	$totalsent       = $decoded['addresses'][0]['total_sent'];
	$totalreceived   =$decoded['addresses'][0]['total_received'];
        $final_balance	 = $decoded['addresses'][0]['final_balance'];
        $n_tx	         =$decoded['addresses'][0]['n_tx'];




	$db=new DbConnection();
	$conn=$db->connect();
	$sql = "INSERT INTO address (address, total_sent, total_received,final_balance,n_tx,currency_id) VALUES (?,?,?,?,?,?)";
	$stmt= $conn->prepare($sql);
	$stmt->execute([$address,$totalsent,$totalreceived,$final_balance,$n_tx,$curencyID]);
	$new_id = $conn->lastInsertId();
	echo "New address record created successfully last ID is"."<br>".$new_id."<br>";


	$txs= $decoded['txs'];
					#echo "<br>";
        $size=count($txs);


        for($x = 0; $x < $size; $x++) {


		  $hash               =$decoded['txs'][$x]['hash'];

		  $confirmations      =$decoded['txs'][$x]['confirmations'];

		  $change             =$decoded['txs'][$x]['change'];

		  $timeutc	      =$decoded['txs'][$x]['time_utc'];

	          $newtime             =date('Y-m-d h:i:s', strtotime($timeutc));

		  echo "<br>";
                  echo $size;
		  echo "<br>";
		
		  $sql = "INSERT INTO hashkey (hash_key, confirmations, change_hash,time_utc,address_id) VALUES (?,?,?,?,?)";
		  $stmt= $conn->prepare($sql);
		  $stmt->execute([$hash,$confirmations,$change,$newtime,$new_id]);
		  echo "New hashkey record created successfully"."<br>".$size."<br>";

          }




}







	public function writeCurrencyAddressToDB(){
		 $decoded   =json_decode($this->getresponse, true );
                   #return var_dump($decoded);
		if (is_array($decoded) || is_object($decoded)){
			 foreach ($decoded['rich1000'] as $chunk) {
				 $address    = $chunk['addr'];
				 $curencyID  =$this->ID;
                        #echo $text=" CurrencyID "."<br>".$curencyID."<br>".$address."<br>"."<br>";
				 try {
					 $db=new DbConnection();
					 $conn=$db->connect();
					 $sql = "INSERT INTO ChainsCryptoCurrencyAddressList(Currencyaddres,currency_id) VALUES ('$address', '$curencyID')";
					 $conn->exec($sql);
					 #echo "New record created successfully";
				     }
				     catch(PDOException $e)
				     {
					echo $sql . "<br>" . $e->getMessage();
				     }

				       $conn = null;
	                  }
                 }

	}

}


/*$test= new WriteToDB();
$newtest=$test->writeCurrencyAddressToDB();
echo $newtest;*/







?>
