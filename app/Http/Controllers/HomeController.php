<?php

namespace App\Http\Controllers;
use  App\Models\User;
use Illuminate\Support\Facades\Hash;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/auth/login');
    }


    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $data)
    {
        $validator=$data->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'image'=>'mimes:jpeg,jpg,png|max:1000'

        ]);

        $alldata=$data->input();
        $image=$data->file('image');
        $imgname=$image->getClientOriginalName();
        $path=$image->move('images',$imgname);
        $imgloc=$path->getPathname();
        $alldata['image']=$imgloc;
          User::create([
            'name' => $alldata['name'],
            'email' => $alldata['email'],
            'password' => Hash::make($alldata['password']),
            'image'=>$alldata['image'],


        ]);

        return  redirect('register') ;
    }


    function select(){
        $data=User::select()->get();
        return  view('auth/register',['data'=>$data]) ;
    }


    function delete($id){
        $item=User::find($id);
        $item->delete();
        return redirect('register');
    }

}
