<?php

namespace App\Http\Controllers;
use App\Models\cart;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class CartController extends Controller
{
    function store(Request $request){
        $data=$request->input();
        cart::create($data);
        return redirect('cart');
    }

    function show(){
        $data=cart::all();
        $total=0;
        $data=cart::all();
        $price =DB::table('carts')->select('price','quantity')->get();
        foreach($price as $p){
            $total+=($p->price*$p->quantity);

        }
        return view('cart',['data'=>$data,'total'=>$total]);
    }

    function delete($id){
        $item=cart::find($id);
        $item->delete();
        return redirect('cart');
    }
}
