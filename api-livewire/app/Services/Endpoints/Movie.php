<?php

namespace App\Services\Endpoints;

use App\Services\MovieService;

class Movie {

    private MovieService $service;
    
    public function __construct()
    {
         $this->service = new MovieService();
    }

    public function get() {
        return $this->service->api->get('/titles');
    }
}