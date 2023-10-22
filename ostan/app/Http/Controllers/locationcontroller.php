<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ostan;
use Illuminate\Support\Facades\Redirect;
use App\Models\Shahrestan;

class locationcontroller extends Controller
{
    public function index(){

        $ostan = Ostan::all();

        return view('ostan',['ostan' => $ostan]);
    }

    public function store($id){

        $shahrestan = Shahrestan::where('ostan_id', $id)->get();
        
        return ($shahrestan);

    }

}
