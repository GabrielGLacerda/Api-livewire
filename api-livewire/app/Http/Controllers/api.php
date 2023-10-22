<?php

namespace App\Http\Controllers;

use App\Services\MovieService;

class api extends Controller
{

    public function teste() {
        $service = new MovieService();
  
        $json = $service->movie()->get();
        dd($json);
    }
}
