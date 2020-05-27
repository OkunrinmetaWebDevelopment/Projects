<?php

require_once('./conn.php');

class getFROMDB extends DbConnection
{
  public $myJSON="";

	function __construct()
	{


	}

  public function getCurrencyListFromDB(){

          try {
              $db=new DbConnection();
              $conn=$db->connect();
              $stmt = $conn->prepare("SELECT * FROM cryptoID.ChainsCryptoCurrencyList");
              $stmt->execute();
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $arr[] = $row;
              }
          }
          catch(PDOException $e) {
              echo "Error: " . $e->getMessage();
          }
          $dbdata=json_encode($arr);
          return $dbdata;
          $conn = null;

  }


	public function getCurrencyAndItsAddressesFromDB(){


            try {
                    $db=new DbConnection();
                    $conn=$db->connect();
                    $stmt = $conn->prepare("SELECT ChainsCryptoCurrencyList.currencyRecordID, ChainsCryptoCurrencyList.coinName, ChainsCryptoCurrencyList.abbreviation,ChainsCryptoCurrencyAddressList.Currencyaddres
                    FROM ChainsCryptoCurrencyList
                    INNER JOIN ChainsCryptoCurrencyAddressList ON ChainsCryptoCurrencyList.currencyRecordID=ChainsCryptoCurrencyAddressList.currency_id");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                          $arr[] = $row;
                    }
            }
            catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
            }
            $dbdata=json_encode($arr);
            return $dbdata;
            $conn = null;





	}



}



/*$test= new getFROMDB();
$newtest=$test->getCurrencyAndItsAddressesFromDB();
echo $newtest;*/



?>
