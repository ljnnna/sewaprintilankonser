<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListItemController extends Controller
{
    function tampilkan($kategori, $namaitem){
        return view('list_item', ['kategori' => $kategori, 'namaitem' => $namaitem]);
    }
}
