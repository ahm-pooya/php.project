<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Upload;

class uploadController extends Controller
{
   public function index()
   {
      $data = Upload::all();
      return view('upload', compact('data'));
   }

   public function store(Request $request)
   {

      
      $file = $request->file('uploadfile');
      $name = time() . '.' . $file->getClientOriginalExtension();
      $path = $file->storeAs('public/images', $name);
      

      $url = new Upload();

      $url->namemahsol = request('namemahsol');
      $url->nameaks = $name;
      $url->path = $path;
      $url->save();

      return redirect('upload');
   }

   public function show()
   {
      $data = Upload::all();
      return view('show', compact('data'));
   }

   public function test($id){

      return Upload::all();
   }

}
