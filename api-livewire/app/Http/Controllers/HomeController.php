<?php

namespace App\Http\Controllers;

use App\Services\MovieService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeView() {

        $service = new MovieService();
        $movies = $service->movie()->get();
        return view('home');
    }
}
