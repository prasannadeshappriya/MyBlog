<?php
/**
 * Created by PhpStorm.
 * User: prasanna
 * Date: 3/6/17
 * Time: 4:26 PM
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller{

    public function index()
    {
        $sql = 'SELECT * FROM projects WHERE 1';
        $result = DB::select($sql);
        $arrResult = [];
        foreach ($result as $row){
            $arrResult[] = (array)$row;
        }
        if(empty($arrResult)) {
            //Show Project View without details
            return view('Project');
        }else{
            return view('Project',compact('arrResult'));
        }
    }
}