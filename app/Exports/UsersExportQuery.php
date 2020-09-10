<?php

namespace App\Exports;

use App\User;
use Illuminate\Database\Query\Builder;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class UsersExportQuery implements FromQuery
{
    use Exportable;

    private $prefix;

    public function __construct($prefix)
    {
        $this->prefix = $prefix;
    }

    public function query()
    {
        return User::query()->where('name', 'like', "{$this->prefix}%");
    }
}
