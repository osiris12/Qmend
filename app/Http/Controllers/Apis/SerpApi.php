<?php

namespace App\Http\Controllers\Apis;

use GoogleSearchResults;

class SerpApi
{
    private const API_KEY = "3189fd2851e716f227e91a753bee4c613adcaaed998662c51e913719314ff076";
//    public string $coordinates = "41.919613, -87.722713,20.1z";

    public function query($arguments)
    {
        $client = new GoogleSearchResults(self::API_KEY);
        $response = $client->get_json($arguments);
        dd(json_encode($response, JSON_PRETTY_PRINT));
    }
}
