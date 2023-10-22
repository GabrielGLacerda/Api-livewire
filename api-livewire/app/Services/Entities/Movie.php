<?php

namespace App\Services\Entities;

class Movie {
    
    public string $id;
    public array $titleText;
    public array $releaseYear;
    public array $primaryImage;

    public function __construct(array $data)
    {
        $this->id = data_get($data, 'id');
        $this->titleText = data_get($data, 'titleText');
        $this->releaseYear = data_get($data, 'releaseYear');
        $this->primaryImage = data_get($data, 'primaryImage');
    }
}