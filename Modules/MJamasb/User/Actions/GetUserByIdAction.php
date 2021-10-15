<?php

namespace MJamasb\User\Actions;

use MJamasb\User\Models\User;

class GetUserByIdAction
{
    public static function handle($user_id)
    {
        $user = User::find($user_id);
        return $user;
    }
}
