<?php

namespace App\Services;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class MovieService {

    public PendingRequest $api;
    
    public function __construct() {
        $this->api = Http::withHeaders([
            'X-Rapidapi-Key' => 'a127f35de2msh8c2ac36e4156d02p1203f5jsn6ce2c1741c6e',
            'X-Rapidapi-Host' => 'moviesdatabase.p.rapidapi.com',
        ])->get('https://moviesdatabase.p.rapidapi.com/titles');
    }

}

