<?php

namespace App\Http\Controllers;

use App\Models\crudFik;
use App\Models\crudSMA;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $datafik = crudFik::all();
        $datasma = crudSMA::all();

        return view('admin.index', compact('datafik', 'datasma'));
    }
}
