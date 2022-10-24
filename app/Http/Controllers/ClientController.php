<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;

use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function store(Request $request){
        $client=$request->input();
        client::create($client);
        return redirect('check');
    }

    function price(){
        $price =DB::table('carts')->select('price','quantity')->get();
        $total=0;
        foreach($price as $p){
            
            $total+=($p->price*$p->quantity);

        }
        return view('check',['total'=>$total]);
    }

//     function payment(){
//         $d =DB::table('carts')->select('price','quantity','name')->get();
//         $data=[];
        
//     //     $data=[];
//     //     foreach($d as $d){
            
//     //         $total=0;
//     //         $total+=($d->price*$d->quantity)+200;
            
//     //     $data['items']=[
//     //         'name'=>$d->name,
//     //         'price'=>$d->price,
//     //         'quantity'=>$d->quantity,
 
//     //     ] ;
//     //     $data['total']=$total;
//     //     $data['invoice_id']=1;
//     //     $data['invoice_description']='order invoice';
//     //     $data['return_url']=route('payment.success');
//     //     $data['cancel_url']=route('payment.cancel');

//     // }    
        
//     $data = [];
//     $data['items'] = [
//         [
//             'name' => 'Product 1',
//             'price' => 9.99,
//             'desc'  => 'Description for product 1',
//             'qty' => 1
//         ],
//         [
//             'name' => 'Product 2',
//             'price' => 4.99,
//             'desc'  => 'Description for product 2',
//             'qty' => 2
//         ]
//     ];
    
//     $data['invoice_id'] = 1;
//     $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
//     $data['return_url'] = url('payment.success');
//     $data['cancel_url'] = url('/cart');
    
//     $total = 0;
//     foreach($data['items'] as $item) {
//         $total += $item['price']*$item['qty'];
//     }
    
//     $data['total'] = $total;

//     $provider=new ExpressCheckout;
//     $response = $provider->setExpressCheckout($data);

//  $response = $provider->setExpressCheckout($data, true);
//  return redirect($response['paypal_link']);
    
//         // $response=$provider->setExpressCheckout($data);
//         // $response=$provider->setExpressCheckout($data,true);
    
//         //     return redirect($response['paypal_link']) ;
//     }

//     function cancel(){
//         return redirect('check');
//     }

//     function success(Request $request){
        
//         $provider=new ExpressCheckout;
//         $response=$provider->getExpressCheckoutDetails($request->token);
//         if(in_array(strtoupper($response['ACK']),['SUCCESS'])){
//             dd('ok');
//         }else{
//             dd('no');
//         }
//      }
}
