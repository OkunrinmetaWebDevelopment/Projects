<?php


class Bitcoin
{
    private $apiBaseUrl													= 'https://api.blockcypher.com/v1/';








    public function getBitcoinGeneralInformation($token)
    {

        $endPoint															= "tokens/$token";

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



       public function getBitcoinTransactionByWalletAddress($walletAddress)
    {

        $endPoint															= "btc/main/addrs/$walletAddress/full";

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

        $endPoint															= "btc/main/txs/$TransactionHash";

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
