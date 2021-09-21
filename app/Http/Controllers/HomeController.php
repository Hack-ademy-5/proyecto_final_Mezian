<?php

namespace App\Http\Controllers;
use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\AdRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;




class HomeController extends Controller
{


   public function __construct()
   {
    $this->middleware('auth');
    $categories = Category::all();
    View::share('categories', $categories);
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
    $a->category_id = $request->input('category');
    $a->price = $request->input('price');
    $a->user_id = Auth::id();
    $a->save();
    return redirect()->route('home')->with('ad.create.success','Anuncio creado con exito');
}



public function details($id) 
{
    $ad = Ad::findOrFail($id);
    return view("ad.details",["ad"=> $ad]);
}



}

