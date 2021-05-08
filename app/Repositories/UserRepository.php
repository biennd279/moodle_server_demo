<?php


namespace App\Repositories;


use App\Models\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    public function getModel()
    {
        return User::class;
    }
}