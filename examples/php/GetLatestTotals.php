<?php

/**
 * Class GetLatestTotals
 */
class GetLatestTotals
{
    /**
     * Endpoint for getting latest totals
     *
     * @var string
     */
    private static $endpointUrl = 'https://covid-19-data.p.rapidapi.com/totals';

    /**
     * RapidAPI host
     *
     * @var string
     */
    private static $rapidApiHost = 'covid-19-data.p.rapidapi.com';

    /**
     * YOUR RapidAPI key
     * @var string
     */
    private static $rapidApiKey = 'YOUR_RAPIDAPI_KEY';

    /**
     * Get latest totals with CURL
     *
     * @param string $format
     * @return array
     */
    public function withCURL(string $format = 'json')
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => self::$endpointUrl . '?format=' . $format,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => '',
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'x-rapidapi-host: ' . self::$rapidApiHost,
                'x-rapidapi-key: ' . self::$rapidApiKey
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        if($format === 'xml') {
            $xml = simplexml_load_string($response);
            $response = json_encode($xml);
        }

        return json_decode($response);
    }
}
$getLatestTotals = new getLatestTotals();

print_r($getLatestTotals->withCURL());