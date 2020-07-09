<?php


namespace App\Repository;

use GuzzleHttp\Client;

class RestCountryApiRepository implements ApiConetable
{

    public function getRequestBackFromApi($data)
    {


        $endpoint = 'https://restcountries.eu/rest/v2/name/'.$data;
        $client = new Client();

        $response = $client->request('GET', $endpoint);
        $array = json_decode($response->getBody()->getContents(), true);

        $data = [
            'iso_3'=>strtoupper($array[0]['languages'][0]['iso639_2']),
            'capital'=>$array[0]['capital'],
            'area'=>$array[0]['area'],
            'flag'=>$array[0]['flag'],
            'currency_code'=>$array[0]['currencies'][0]['code'],
            'currency_symbol'=>$array[0]['currencies'][0]['symbol']
        ];

        return $data;
    }
}
