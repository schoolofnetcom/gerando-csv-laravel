<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Exports\UsersExportQuery;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function exportable()
    {
        return (new UsersExport)->download('users_exportable.xlsx');
    }

    public function exportQuery()
    {
        return (new UsersExportQuery('Dr'))->download('users_exportable_query.xlsx');
    }

    public function save()
    {
        return Excel::store(new UsersExport, 'users.xlsx', 'public');
        return Excel::store(new UsersExport, 'users.csv', 'public', \Maatwebsite\Excel\Excel::CSV);
    }

    public function import()
    {
        Excel::import(new UsersImport, storage_path('app/public/users.xlsx'));

        return redirect('/')->with('success', 'All good!');
    }
}
