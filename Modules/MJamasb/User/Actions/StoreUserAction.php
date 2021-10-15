<?php

namespace MJamasb\User\Actions;

use MJamasb\User\Models\User;

class StoreUserAction
{
    public static function handle($data)
    {
        $user = User::create($data);
        return $user;
    }
}
