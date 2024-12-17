<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AccuielController;


class AccueilController extends Controller
{
   public function index(){
    return view('accueil');
   }
}
