<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    function insert(Request $data){
        $alldata=$data->input();
        $image=$data->file('image');
        $imgname=$image->getClientOriginalName();
        $path=$image->move('images',$imgname);
        $imgloc=$path->getPathname();
        $alldata['image']=$imgloc;
        product::create($alldata);
        return redirect('product');
 }





function delete($id){
    $categ=product::findorfail($id);
    $categ->delete();
    return redirect('product');
}

 function select(){
    $cname= DB::table('categories')->get();
    $brandname= DB::table('brands')->get();
    $data=product::all();

    return view('admin/product',[
        'cname'=>$cname,
        'brandname'=>$brandname,
        'data'=>$data
]);
 }


}
