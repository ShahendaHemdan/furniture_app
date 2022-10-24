<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function select(){
        $cat= DB::table('categories')->get();
        $brand= DB::table('brands')->get();
        $product= DB::table('products')->get();
        $message= DB::table('clients')->get();


        $catcount=$cat->count();
        $brandcount=$brand->count();
        $productcount=$product->count();

         return view('admin/dash',[
            'cat'=>$catcount,
            'brand'=>$brandcount,
            'product'=>$productcount,
            'message'=>$message
    ]);
     }
    


}
