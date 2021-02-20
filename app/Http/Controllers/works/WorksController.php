<?php

namespace App\Http\Controllers\works;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    //
    public function index()
    {
       
        return view('dashboard.works.index');
    }
}
