<?php

namespace App\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UsersCollection extends Data
{
    public function __construct(
        public string $title,
        public DataCollection $users,
    ) {
    }
}

