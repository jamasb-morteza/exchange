<?php

namespace MJamasb\User\Actions;

use MJamasb\User\Models\User;

class UpdateUserAction
{
    public static function handle($user_id, $data)
    {
        $user = User::find($user_id);
        return $user->update($data);
    }
}
