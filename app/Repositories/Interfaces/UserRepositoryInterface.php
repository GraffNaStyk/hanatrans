<?php

namespace App\Repositories\Interfaces;

use App\Entities\User;

interface UserRepositoryInterface
{
    public function getUserByCredentials(string $email): ?User;
}
