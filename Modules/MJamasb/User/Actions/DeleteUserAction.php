<?php

namespace MJamasb\User\Actions;

use MJamasb\User\Models\User;

class DeleteUserAction
{
    public static function handle($user_id)
    {
        $user = User::find($user_id);
        return $user->delete();
    }
}
