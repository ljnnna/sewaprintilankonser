<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function tampilkan($usn){
        return view('login', ['usn' => $usn]);
    }
}
