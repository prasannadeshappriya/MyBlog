<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Show Home View
    public function index(){
        return view('Home');
    }
}
