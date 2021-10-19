<?php

namespace MJamasb\AAShared\Actions;

use Illuminate\Database\Eloquent\Model;

class GetActionColumnViewAction
{
    public static function handle($row)
    {
        return view('AAShared::action_column', [
            'view_route' => route('currencies.show', ['currency' => $row->id]),
            'edit_route' => route('currencies.edit', ['currency' => $row->id]),
            'delete_route' => route('currencies.destroy', ['currency' => $row->id]),
        ]);
    }
}
