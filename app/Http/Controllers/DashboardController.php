<?php
/**
 * Created by PhpStorm.
 * User: prasanna
 * Date: 3/15/17
 * Time: 7:50 AM
 */
namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

class DashboardController extends Controller{
    public function index(){
        return view('DashboardLogIn');
    }

    public function postLogIn(LoginRequest $request){
        $username = $request->get('username');
        $password = $request->get('password');

        $s_username = 'prasanna322';
        $s_password = '1000';
        if($username!=$s_username){
            return redirect('dashboard')
                ->with('error','Invalied Username or password !')
                ->withInput($request->except('password'));
        }
        if($password!=$s_password){
            return redirect('dashboard')
                ->with('error','Invalied Username or password !')
                ->withInput($request->except('password'));
        }
        $request->session()->put('status','admin');
        return redirect('dashboard/index');
    }

    public function dashboardIndex(){
        return view('Dashboard');
    }
}