<?php

namespace MJamasb\User\Actions;

use MJamasb\User\Models\User;

class GetUsersActionWithPaginate
{
    public static function handle()
    {
        $users = User::paginate();
        return $users;
    }
}
