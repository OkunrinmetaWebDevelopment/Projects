<?php

include('API.php');

/**
 *
 */
class APIRUN
{

	function __construct($queryString,$curency)
	{
		$this->queryString    = $queryString;
                $this->curency        = $curency;
	}


	public function getAPIAttr(){
	       $getqueryString       =$this->queryString;
	       $getcurency           =$this->curency;
	       $ApiKey               ="";
	       $APIUrl               ="https://chainz.cryptoid.info/$getcurency/api.dws?$getqueryString";
	       $Apiclass_instance    = new APIREST($APIUrl);
	       $myTrades             = $Apiclass_instance->call(array('X-MBX-APIKEY:'.$ApiKey));
	       return $myTrades;

	}

	 public function getAPIAddress(){
		$getqueryString        =$this->queryString;
		$getcurency            =$this->curency;
		$ApiKey                ="";
		$APIUrl                ="https://chainz.cryptoid.info/$getcurency/api.dws?$getqueryString";
		$Apiclass_instance     = new APIREST($APIUrl);
		$myTrades              = $Apiclass_instance->call(array('X-MBX-APIKEY:'.$ApiKey));
		return $myTrades;

	}
}










?>
