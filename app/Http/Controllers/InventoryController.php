<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    function create(){
        return view('inventory.create');
    }
}
