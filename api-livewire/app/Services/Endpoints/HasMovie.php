<?php

namespace App\Services\Endpoints;
use App\Services\Endpoints\Titles;

trait HasMovie {
    
    public function movie() {
        return new Titles();
    }
}