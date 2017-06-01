<?php
/**
 * Created by PhpStorm.
 * User: prasanna
 * Date: 3/6/17
 * Time: 4:26 PM
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Chumper\Zipper\Facades\Zipper;
use Illuminate\Http\Request;

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

    public function viewProject($name=null){
        //For heroku server
        //  Moodle Mobile App Project
        //For local server
        //  Mobile App Project
        if($name == 'Moodle Mobile App Project') {
            return view('project/Project1');
        }if($name == 'Train Schedule App'){
                return view('project/Project2');
        }else{
            return redirect()->back();
        }
    }

    public function downloadFiles($name=null){
        if($name == 'download app 1'){
            $files = glob(public_path('js/*'));
            Zipper::make('mydir/MoodleMobileApp.zip')->add($files)->close();
            return response()->download(public_path('mydir/MoodleMobileApp.zip'));
        }else if($name == 'download app 2'){
            $files = glob(public_path('js/*'));
            Zipper::make('mydir/TrainScheduleApp.zip')->add($files)->close();
            return response()->download(public_path('mydir/TrainScheduleApp.zip'));
        }
    }
}