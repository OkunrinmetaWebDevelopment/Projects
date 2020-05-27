<?php


class Bitcoin
{
    private $apiBaseUrl													= 'https://api.cryptoapis.io/v1/';
    private $apiKey;


    public function __Construct ($apiKey)
    {
        $this -> apiKey                 								= $apiKey;
    }


/*curl -X GET 'https://api.cryptoapis.io/v1/bc/btc/mainnet/info' \
-H 'ContentType: application/json' \
-H 'X-API-Key:"08837af55cf585e1c9372948da3cf43df526dbe3"'/

curl https://api.blockcypher.com/v1/tokens/79cc57e43c414f79aa9572780c628598

*/

    public function getBitcoinGeneralInformation()
    {

        $endPoint															= "bc/btc/mainnet/info";

        $response                     										= array();
        $response["data"]           										= null;

        // get post fields
        $endPointUrl													   = $this -> apiBaseUrl.$endPoint;
        // get curl http headers
        $curlHttpheaders 													= $this -> getCurlHttpHeaders();
        //set options for curl
        $curlOptions                      									= $this -> getCurlOptions($curlHttpheaders,$endPointUrl);

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

        $endPoint															= "bc/btc/testnet/address/$walletAddress/transactions";

        $response                     										= array();
        $response["data"]           										= null;

        // get post fields
        $endPointUrl													   = $this -> apiBaseUrl.$endPoint;
        // get curl http headers
        $curlHttpheaders 													= $this -> getCurlHttpHeaders();
        //set options for curl
        $curlOptions                      									= $this -> getCurlOptions($curlHttpheaders,$endPointUrl);

        // convert string return value to json
        $result 															= json_decode( $this->performCurl($curlOptions) );

        if (!is_null($result))
        {
            $response["data"]                								= $result;
        }
        return $response;
    }

    private function getCurlOptions ($headers,$endPointUrl)
    {
        $options                      							    		= [
            CURLOPT_URL            =>$endPointUrl,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_HTTPHEADER     => $headers,

        ];
        return $options;
    }

    private function getCurlHttpHeaders ()
    {
        $headers = array();
        $headers[] = 'Contenttype: application/json';
        $headers[] = 'X-Api-Key: 08837af55cf585e1c9372948da3cf43df526dbe3';

        return $headers;
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
