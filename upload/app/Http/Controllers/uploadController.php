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

      $name = request('field1');

      $path = $request->file('field2')->storeAs('public/images', $name);

      $url = new Upload();

      $url->name = request('field1');
      $url->path = $path;
      $url->save();

      return redirect()->back();
   }

   public function show()
   {

      $data = Upload::all();

      return view('show', compact('data'));
   }
}
