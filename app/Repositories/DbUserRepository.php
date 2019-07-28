<?php

namespace App\Repositories;

class DbUserRepository implements UserRepository {
    public function create($attribution)
    {
        dd('creating a new user');
    }
}
