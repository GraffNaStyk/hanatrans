<?php

namespace App\Security;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Security\interfaces\AuthenticateUserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthenticator implements AuthenticateUserInterface
{
    public function __construct(
        private readonly Request $request,
        protected readonly UserRepositoryInterface $userRepository
    )
    {
    }

    public function authenticate(string $email, string $password): bool
    {
        $user = $this->userRepository->getUserByCredentials($email);

        if ($user && Hash::check($password, $user->getPassword())) {
            Auth::login($user);
            $this->request->session()->regenerate();
            return true;
        }

        return false;
    }

    public function authenticateFromShop(string $email): bool
    {
        $user = $this->userRepository->getUserByCredentials($email);

        if ($user) {
            Auth::login($user);
            $this->request->session()->regenerate();
            return true;
        }

        return false;
    }
}
