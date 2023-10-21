<?php

namespace App\Services\Endpoints;

trait HasMovie {
    
    public function movie() {
        return new Movie();
    }
}