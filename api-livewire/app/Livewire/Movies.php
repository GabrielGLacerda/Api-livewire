<?php

namespace App\Livewire;

use App\Services\MovieService;
use Livewire\Component;

class Movies extends Component
{

    public $movies = new MovieService();

    public function render()
    {
        return view('livewire.movies');
    }
}
