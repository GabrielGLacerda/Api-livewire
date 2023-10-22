<?php

namespace App\Services\Endpoints;

use App\Services\MovieService;
use App\Services\Entities\Movie;
use Illuminate\Support\Collection;

class Titles {

    private MovieService $service;
    
    public function __construct()
    {
         $this->service = new MovieService();
    }

    public function get(): Collection {
        return $this->transform(
                    $this->service
                        ->api
                        ->get('/titles')
                        ->json('data')
        );
        
    }

    private function transform(mixed $json): Collection {
        return collect($json)->map(fn ($movie) => new Movie($movie));
    }
}