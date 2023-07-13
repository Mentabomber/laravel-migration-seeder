<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tratta;

class MainController extends Controller
{
   public function index(){

    $trattas = Tratta:: all();

    return view("home", compact('trattas'));
   }
}
