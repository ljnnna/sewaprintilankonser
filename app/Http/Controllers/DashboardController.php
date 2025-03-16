<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function tampilkan($namadmin){
        return view('dashboard', ['namadmin' => $namadmin]);
    }
}
