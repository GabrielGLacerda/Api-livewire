<?php

namespace App\Http\Controllers;

use App\Services\MovieService;

class api extends Controller
{

    public function teste() {
        $service = new MovieService();
  
        return  $json = $service->movie()->get();
        // return $json = $service->getM();
        // dd($json);
    }
}
