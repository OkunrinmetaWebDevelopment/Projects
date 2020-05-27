<?php


class Bitcoin
{
    private $apiBaseUrl													= 'https://www.blockonomics.co/api/';





    // Information About Wallet Address

    public function getAddressBalance($address)
    {

        $endPoint															= "balance";

        $response                     										= array();
        $response["data"]           										= null;

        // get post fields
        $endPointUrl													   = $this -> apiBaseUrl.$endPoint;

        $postFields															= $address;
        // get curl http headers
        $curlHttpheaders 													= $this -> getCurlHttpHeaders();
        //set options for curl
        $curlOptions                      									= $this -> getCurlOptions($endPointUrl,$curlHttpheaders,$postFields);

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

        $endPoint															= "searchhistory";

        $response                     										= array();
        $response["data"]           										= null;

        // get post fields
        $endPointUrl													   = $this -> apiBaseUrl.$endPoint;

        $postFields															= $bitcoin_address;
        // get curl http headers
         $curlHttpheaders 													= $this -> getCurlHttpHeaders();
        //set options for curl
        $curlOptions                      									= $this -> getCurlOptions($endPointUrl,$curlHttpheaders,$postFields);

        // convert string return value to json
        $result 															= json_decode( $this->performCurl($curlOptions) );

        if (!is_null($result))
        {
            $response["data"]                								= $result;
        }
        return $response;
    }



    public function getBitcoinTransactionByMultipleWalletAddress($bitcoin_address)
    {

        $endPoint															= "searchhistory";

        $response                     										= array();
        $response["data"]           										= null;

        // get post fields
        $endPointUrl													   = $this -> apiBaseUrl.$endPoint;

        $postFields															= $bitcoin_address;
        // get curl http headers
        $curlHttpheaders 													= $this -> getCurlHttpHeaders();
        //set options for curl
        $curlOptions                      									= $this -> getCurlOptions($endPointUrl,$curlHttpheaders,$postFields);

        // convert string return value to json
        $result 															= json_decode( $this->performCurl($curlOptions) );

        if (!is_null($result))
        {
            $response["data"]                								= $result;
        }
        return $response;
    }




    public function getBitcoinTransactionByTransactionID($TransactionID)
    {

        $endPoint															= "tx_detail?txid=$TransactionID";

        $response                     										= array();
        $response["data"]           										= null;

        // get post fields
        $endPointUrl													   = $this -> apiBaseUrl.$endPoint;
        // get curl http headers
         $curlHttpheaders 													= $this -> getCurlHttpHeaders();
        //set options for curl
        $curlOptions                      									= $this -> getSecondCurlOptions($endPointUrl,$curlHttpheaders);

        // convert string return value to json
        $result 															= json_decode( $this->performCurl($curlOptions) );

        if (!is_null($result))
        {
            $response["data"]                								= $result;
        }
        return $response;
    }



    public function getBitcoinTransactionReceipt($TransactionID,$bitcoin_address)
    {

        $endPoint															= "tx?txid=$TransactionID&addr=$bitcoin_address";

        $response                     										= array();
        $response["data"]           										= null;

        // get post fields
        $endPointUrl													   = $this -> apiBaseUrl.$endPoint;
        // get curl http headers
        $curlHttpheaders 													= $this -> getCurlHttpHeaders();
        //set options for curl
        $curlOptions                      									= $this -> getSecondCurlOptions($endPointUrl,$curlHttpheaders);

        // convert string return value to json
        $result 															= json_decode( $this->performCurl($curlOptions) );

        if (!is_null($result))
        {
            $response["data"]                								= $result;
        }
        return $response;
    }



    private function getCurlHttpHeaders ()
    {
        $headers = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';

        return $headers;
    }

    private function getSecondCurlOptions ($endPointUrl,$headers)
    {
        $options                      							    		= [
            CURLOPT_URL            =>$endPointUrl,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_HTTPHEADER     => $headers,
            CURLOPT_CUSTOMREQUEST  => 'GET'


        ];
        return $options;
    }

    private function getCurlOptions ($endPointUrl,$headers,$postFields)
    {
        $options                      							    		= [
            CURLOPT_URL            =>$endPointUrl,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_HTTPHEADER     => $headers,
            CURLOPT_POSTFIELDS     =>$postFields,
            CURLOPT_POST           =>1


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
