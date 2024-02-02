<?php

namespace App\Security\interfaces;

interface AuthenticateUserInterface
{
    public function authenticate(string $email, string $password): bool;

    public function authenticateFromShop(string $email): bool;
}