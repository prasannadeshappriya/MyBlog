<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function index(){
        return view('Article');
    }


    public function viewTutorial($index = null){
        if($index == 'android1') {
            return view('article/Article1');
        }else{
            return redirect()->back();
        }
    }

}

