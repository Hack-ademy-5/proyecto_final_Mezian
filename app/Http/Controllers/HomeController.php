<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use App\Http\Requests\AdRequest;




class HomeController extends Controller
{


   public function __construct()
   {
    $this->middleware('auth');
   }
    
  public function index()
  {
    return view('home');
  }


 public function newAd() 
  {
     return view ('ad.new'); 
  }



public function createAd (AdRequest $request)
{
    $a = new Ad();
    $a->title = $request->input('title');
    $a->body = $request->input('body');
    $a->save();
    return redirect()->route('home')->with('ad.create.success','Anuncio creado con exito');
}

}

