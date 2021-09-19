<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RevisorController;

class RevisorController extends Controller
{
   public function __construct()
 {
     $this->middleware('auth.revisor');
 }


   public function index()
    {
      dd("Solo para revisores");
    }


}
