<?php

namespace Ravuthz\LaravelAuth;

use App\Models\User;
use Exception;

class AuthService
{
    public function findAny($orWhere)
    {
        return User::orWhere($orWhere)->first();
    }

    public function isAnyUnique($orWhere)
    {
        return User::orWhere($orWhere)->doesntExist();
    }

    public function createUser(array $payload)
    {
        return User::create($payload);
    }

    /**
     * @throws Exception
     */
    public function registerUser(array $userData)
    {
        $username = collect($userData)->only('email', 'username')->toArray();

        if ($this->isAnyUnique($username)) {
            return $this->createUser($userData);
        }

        return throw new Exception('Email or Username already exists');
    }
}