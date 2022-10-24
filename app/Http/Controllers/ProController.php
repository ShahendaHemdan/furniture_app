<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProController extends Controller
{
    function get($id){
        return view('productdetails');
    }
}
