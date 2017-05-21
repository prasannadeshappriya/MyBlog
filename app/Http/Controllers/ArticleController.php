<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function index(){
        return view('Article');
    }


    public function viewTutorial($index = null){
        if($index.equalTo('android1')) {
            return view('article/Article1');
        }
    }

}

