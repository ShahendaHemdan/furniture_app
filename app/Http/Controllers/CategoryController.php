<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
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
            category::create($alldata);
            return redirect('category');
    }

    function select(){
            $alldata=category::all();
            return view('admin/category',['alldata'=>$alldata]);
    }


    function delete($id){
        $categ=category::findorfail($id);
        $categ->delete();
        return redirect('category');
 }
}

