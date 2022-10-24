<?php

namespace App\Http\Controllers;

use App\Models\brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        }
    function insert(Request $data){
            $alldata=$data->input();
            $image=$data->file('image');
            $imgname=$image->getClientOriginalName();
            $path=$image->move('images',$imgname);
            $imgloc=$path->getPathname();
            $alldata['image']=$imgloc;
            brand::create($alldata);
            return redirect('brand');
    }

    function select(){
            $data=brand::all();
             return view('admin/brand',['data'=>$data]);
    }


    function delete($id){
        $categ=brand::findorfail($id);
        $categ->delete();
        return redirect('brand');
 }
}
