<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $homes = HomeModel::all();
        return view('home',compact('homes'));
//        return dd($homes);
    }
}
