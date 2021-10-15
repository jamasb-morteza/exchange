<?php

namespace MJamasb\User\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use MJamasb\User\Models\User;

class UserTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('Created', 'created_at')->sortable()->format(fn($value, $column, $row) => $row->jalali_created_at),
            Column::make('Name')->sortable()->searchable()->sortable(),
            Column::make('E-mail', 'email')->searchable()->sortable(),
            Column::make('Verified', 'email_verified_at')->format(fn($value, $column, $row) => $row->jalali_email_verified_at),
        ];
    }

    public function query(): Builder
    {
        return User::query();
    }
}
