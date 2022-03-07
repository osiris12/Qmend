<?php

namespace App\Api;

use App\Interfaces\ApiInterface;

class GoogleMapsApi implements ApiInterface
{
    private string $apiUser = env('GOOGLE_MAPS_API_USER');
    private string $apiPassword = env('GOOGLE_MAPS_API_PASSWORD');
    public function makeRequest($endpoint)
    {
        // TODO: Implement makeRequest() method.
    }
}
