<?php


class Bitcoin
{
    private $apiBaseUrl													= 'https://rest.bitcoin.com/v2/';


    // Information About Block Information

    public function getSingleBlockINFO($hash)
    {

        $endPoint															= "block/detailsByHash/$hash";

        $response                     										= array();
        $response["data"]           										= null;

        // get post fields
        $endPointUrl													   = $this -> apiBaseUrl.$endPoint;
        // get curl http headers
         $curlHttpheaders 													= $this -> getCurlHttpHeaders();
        //set options for curl
        $curlOptions                      									= $this -> getCurlOptions($endPointUrl,$curlHttpheaders);

        // convert string return value to json
        $result 															= json_decode( $this->performCurl($curlOptions) );

        if (!is_null($result))
        {
            $response["data"]                								= $result;
        }
        return $response;
    }


    // Information About Wallet Address

    public function getSingleAddressDetails($address)
    {

        $endPoint															= "address/details/$address";

        $response                     										= array();
        $response["data"]           										= null;

        // get post fields
        $endPointUrl													   = $this -> apiBaseUrl.$endPoint;
        // get curl http headers
        $curlHttpheaders 													= $this -> getCurlHttpHeaders();
        //set options for curl
        $curlOptions                      									= $this -> getCurlOptions($endPointUrl,$curlHttpheaders);

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

        $endPoint															= "address/transactions/bitcoincash:$bitcoin_address";

        $response                     										= array();
        $response["data"]           										= null;

        // get post fields
        $endPointUrl													   = $this -> apiBaseUrl.$endPoint;
        // get curl http headers
         $curlHttpheaders 													= $this -> getCurlHttpHeaders();
        //set options for curl
        $curlOptions                      									= $this -> getCurlOptions($endPointUrl,$curlHttpheaders);

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

        $endPoint															= "addrs/$bitcoin_address/txs?from=0&to=20";

        $response                     										= array();
        $response["data"]           										= null;

        // get post fields
        $endPointUrl													   = $this -> apiBaseUrl.$endPoint;
        // get curl http headers
         $curlHttpheaders 													= $this -> getCurlHttpHeaders();
        //set options for curl
        $curlOptions                      									= $this -> getCurlOptions($endPointUrl,$curlHttpheaders);

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

        $endPoint															= "tx/$TransactionID";

        $response                     										= array();
        $response["data"]           										= null;

        // get post fields
        $endPointUrl													   = $this -> apiBaseUrl.$endPoint;
        // get curl http headers
         $curlHttpheaders 													= $this -> getCurlHttpHeaders();
        //set options for curl
        $curlOptions                      									= $this -> getCurlOptions($endPointUrl,$curlHttpheaders);

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

        $endPoint															= "txs/?block=$TransactionHash";

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







    private function getCurlHttpHeaders ()
    {
        $headers = array();
        $headers[] = 'Accept: */*';

        return $headers;
    }



    private function getCurlOptions ($endPointUrl,$headers)
    {
        $options                      							    		= [
            CURLOPT_URL            =>$endPointUrl,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_HTTPHEADER     => $headers,
            CURLOPT_CUSTOMREQUEST  => 'GET'


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
