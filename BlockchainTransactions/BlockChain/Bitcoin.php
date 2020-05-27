<?php


class Bitcoin
{
    private $apiBaseUrl													= 'https://blockchain.info/';








    public function getSingleBlockINFO($block_hash)
    {

        $endPoint															= "rawblock/$block_hash";

        $response                     										= array();
        $response["data"]           										= null;

        // get post fields
        $endPointUrl													   = $this -> apiBaseUrl.$endPoint;
        // get curl http headers
       // $curlHttpheaders 													= $this -> getCurlHttpHeaders();
        //set options for curl
        $curlOptions                      									= $this -> getCurlOptions($endPointUrl);

        // convert string return value to json
        $result 															= json_decode( $this->performCurl($curlOptions) );

        if (!is_null($result))
        {
            $response["data"]                								= $result;
        }
        return $response;
    }



       public function getBitcoinTransactionByWalletAddress($bitcoin_address)
    {

        $endPoint															= "rawaddr/$bitcoin_address";

        $response                     										= array();
        $response["data"]           										= null;

        // get post fields
        $endPointUrl													   = $this -> apiBaseUrl.$endPoint;
        // get curl http headers
       // $curlHttpheaders 													= $this -> getCurlHttpHeaders();
        //set options for curl
        $curlOptions                      									= $this -> getCurlOptions($endPointUrl);

        // convert string return value to json
        $result 															= json_decode( $this->performCurl($curlOptions) );

        if (!is_null($result))
        {
            $response["data"]                								= $result;
        }
        return $response;
    }



    public function getBitcoinTransactionByTransactionHash($TransactionHash)
    {

        $endPoint															= "rawtx/$TransactionHash";

        $response                     										= array();
        $response["data"]           										= null;

        // get post fields
        $endPointUrl													   = $this -> apiBaseUrl.$endPoint;
        // get curl http headers
        // $curlHttpheaders 													= $this -> getCurlHttpHeaders();
        //set options for curl
        $curlOptions                      									= $this -> getCurlOptions($endPointUrl);

        // convert string return value to json
        $result 															= json_decode( $this->performCurl($curlOptions) );

        if (!is_null($result))
        {
            $response["data"]                								= $result;
        }
        return $response;
    }


    public function getBitcoinUnconfirmedTransaction()
    {

        $endPoint															= "unconfirmed-transactions?format=json";

        $response                     										= array();
        $response["data"]           										= null;

        // get post fields
        $endPointUrl													   = $this -> apiBaseUrl.$endPoint;
        // get curl http headers
        // $curlHttpheaders 													= $this -> getCurlHttpHeaders();
        //set options for curl
        $curlOptions                      									= $this -> getCurlOptions($endPointUrl);

        // convert string return value to json
        $result 															= json_decode( $this->performCurl($curlOptions) );

        if (!is_null($result))
        {
            $response["data"]                								= $result;
        }
        return $response;
    }


    private function getCurlOptions ($endPointUrl)
    {
        $options                      							    		= [
            CURLOPT_URL            =>$endPointUrl,
            CURLOPT_RETURNTRANSFER => 1,


        ];
        return $options;
    }



    function performCurl ($options)
    {

        $curlObj                            								= curl_init();

        curl_setopt_array($curlObj, $options);

        $curlResponse                       								= curl_exec($curlObj);

        if (curl_errno($curlObj)) {
            $curlResponse                 									= curl_error($curlObj);
        }

        curl_close($curlObj);

        return  $curlResponse;

    }



}
