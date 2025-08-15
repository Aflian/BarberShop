<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Hairstyle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
        $getService = Service::all();
        $getModel = Hairstyle::all();

        return view('welcome',compact('getService','getModel'));
   }
}
