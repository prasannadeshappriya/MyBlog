<?php
/**
 * Created by PhpStorm.
 * User: prasanna
 * Date: 3/6/17
 * Time: 4:26 PM
 */
namespace App\Http\Controllers;
class ProjectController extends Controller{

    public function index()
    {
        //Show Project View
        return view('Project');
    }
}