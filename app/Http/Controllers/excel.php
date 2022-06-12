<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class Exxcel extends Controller
{
    public function import() 
    {
        Excel::import(new UsersImport, 'xx.xlsx');
        
        return redirect('/')->with('success', 'All good!');
    }
    //
}
