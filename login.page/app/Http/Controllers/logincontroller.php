<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Login;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function indexlogin(){
        return view('login');
    }

    public function showlogin(){

       $data = Login::all();

        return view('page',["data" => $data]);
    }

    public function storelogin(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'pass' => 'confirmed',
        ]);

        $login = new Login();
         
        $login->name = request('name');
        $login->lastname = request('lastname');
        $login->mobile = request('mobile');
        $login->email = request('email');
        $login->pass = request('pass');
        $login->passv = request('pass_confirmation');
    
        $login->save();
        
        return redirect('/page');
    }

    public function indexsignup(){
        return view('/signup');
    }

    public function storesignup(){

        $mobile = request('mobile');
        $pass = request('pass');
        
        $result = DB::table('login')->where('mobile', $mobile)
        ->where('pass', $pass)
        ->exists();

     if($result){
        return redirect('/detail');
     }
     else{
        return view('/signup');
     }
    }

    public function showsignup(){
        return view('detail');
    }
    }
