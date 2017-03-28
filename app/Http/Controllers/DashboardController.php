<?php
/**
 * Created by PhpStorm.
 * User: prasanna
 * Date: 3/15/17
 * Time: 7:50 AM
 */
namespace App\Http\Controllers;

use App\Http\Requests\ProjectAddRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HttpRequest;
use App\Http\Requests\LoginRequest;
use Symfony\Component\HttpFoundation\Session\Session;

class DashboardController extends Controller{
    public function index(HttpRequest $request){
        $session = new Session();
        if ($session->get('status')==='admin'){
            return redirect('dashboard/index');
        }
        return view('DashboardLogIn');
    }

    public function postLogIn(LoginRequest $request){
        $username = $request->get('username');
        $password = $request->get('password');

        $sql = 'SELECT username,role FROM user WHERE password = ?';
        $result = DB::select($sql,[$password]);
        $arr_result = [];
        foreach ($result as $row){
            $arr_result[] = (array)$row;
        }

        //If no user found in the database
        if(empty($arr_result)){
            return redirect('dashboard')
                ->with('error','Username or password you entered is incorrect. Please try again.')
                ->withInput($request->except('password'));
        }

        //Verify user with the input values and database values
        if($username!=$arr_result[0]['username']){
            return redirect('dashboard')
                ->with('error','Username or password you entered is incorrect. Please try again.')
                ->withInput($request->except('password'));
        }

        //check weather the given user is a admin user
        if($arr_result[0]['role']!='admin'){
            return redirect('dashboard')
                ->with('error', 'Only administer can log in to the dashboard')
                ->withInput($request->except('password'));
        }

        $session = new Session();
        $session->set('status','admin');
        $session->set('username',$username);

        if($request->get('rem')=='1') {
            setcookie('username', $username, time() + 60 * 60 * 7);
        }

        return redirect('dashboard/index');
    }

    public function dashboardIndex(HttpRequest $request){
        $session = new Session();
        $request->session()->put('status',$session->get('status'));
        $request->session()->put('username',$session->get('username'));
        return view('Dashboard');
    }

    public function logout(HttpRequest $request){
        $session = new Session();
        $session->clear();
        $request->session()->flush();
        setcookie('username','',-1);
        return redirect('dashboard');
    }

    public function addNewProject(ProjectAddRequest $request){
        $sql = 'SELECT COUNT(*) FROM projects WHERE name=?';
        $result = DB::select($sql,[$request->get('name')]);
        $arrResult = [];
        foreach ($result as $row){
            $arrResult[] = (array)$row;
        }
        if ($arrResult[0]['COUNT(*)'] >= 1){
            return redirect('dashboard/index')
                ->with('error','Project already exist in the database')
                ->withInput($request->except('password'));
        }

        $sql = "INSERT INTO projects (name,description,learn_more) VALUES (?,?,?)";
        DB::insert($sql,[
            $request->get('name'),
            $request->get('description'),
            ($request->get('option')=='1') ? '1' : '0'
        ]);
        return redirect()
            ->back()
            ->with('success','Project successfully inserted');
    }
}