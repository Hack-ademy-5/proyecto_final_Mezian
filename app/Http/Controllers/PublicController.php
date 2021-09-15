<?php

namespace App\Http\Controllers;
use App\Models\Ad;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    
    public function index()
   {
    
    $ads = Ad::orderBy('created_at','desc')->take(5)->get();
    return view('home',compact('ads'));
   }
}
