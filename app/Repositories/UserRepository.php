<?php
namespace App\Repositories;

use App\User;

class UserRepository
{

    public function all()
    {
        return User::all();
    }

    public static function delete(User $user)
    {
        return $user->delete();
    }

    public function persist(User $user)
    {
        return $user->save();
    }
}