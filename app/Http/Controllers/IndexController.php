<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function select(){
        $item=product::all();
        return view('index',['items'=>$item]);
    }

    function selectshop(){
        $item=product::all();
        return view('shop',['items'=>$item]);
    }
}
