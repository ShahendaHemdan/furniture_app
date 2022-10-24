<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class SinlgeController extends Controller
{
    function getsingle(Request $request){
        $all=$request->input();
        $id=$all['id'];
        $product=product::where('id',$id)->get();
        
        return view('single', compact('product'));
    }
}
