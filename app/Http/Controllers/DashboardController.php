<?php
/**
 * Created by PhpStorm.
 * User: prasanna
 * Date: 3/15/17
 * Time: 7:50 AM
 */
namespace App\Http\Controllers;

use App\Http\Requests\ProjectAddRequest;
use Illuminate\Http\JsonResponse;
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

        $sql = "SELECT * FROM mobile_app_users WHERE 1";
        $result = DB::select($sql);
        $arrUser = [];
        foreach ($result as $item){
            $arr = (array)$item;
            $sql = "SELECT gpa FROM mobile_app_users_gpa WHERE user_index=?";
            $gpaResult = DB::select($sql,[$arr['user_index']]);
            $arrGpaResult = [];
            foreach ($gpaResult as $row){
                $arrGpaResult[]=(array)$row;
            }
            if(array_has($arrGpaResult,'0')) {
                if (strlen($arrGpaResult[0]['gpa']) <= 6) {
                    $tmpArr = array('gpa' => $arrGpaResult[0]['gpa']);
                }else{
                    $tmpArr = array('gpa' => substr($arrGpaResult[0]['gpa'],0,6));
                }
                $arr = array_merge($arr, $tmpArr);
            }
            $arrUser[]=$arr;
        }
        return view('Dashboard',compact('arrUser'));
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

    public function getToken(){
        $response = new JsonResponse();
        $token = csrf_token();
        $response->setData(['_token'=>$token]);
        return $response;
    }

    public function startSync(HttpRequest $request)
    {
        $user_id = $request['user_id'];
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $full_name = $request['full_name'];

        $sql = "SELECT stat_count FROM mobile_app_users WHERE user_index=?";
        $result = DB::select($sql,[$user_id]);
        $resultArr = [];

        foreach ($result as $row){
            $resultArr[] = (array) $row;
        }

        if(empty($resultArr)){
            $stat_count = '1';
        }else {
            $stat_count = (string)($resultArr[0]['stat_count'] + 1);
        }

        DB::delete("DELETE FROM mobile_app_users WHERE user_index=?",[$user_id]);
        $sql = "INSERT INTO mobile_app_users (user_index,user_name,first_name,last_name,stat_count) VALUES (?,?,?,?,?)";
        DB::insert($sql, [
            $user_id,
            $full_name,
            $first_name,
            $last_name,
            $stat_count
        ]);

        $response = new JsonResponse();
        $response->setData(['status' => 'Data successfully inserted']);
        return $response;
    }

    public function syncDetails(\Illuminate\Http\Request $request)
    {
        $details = $request['details'];
        $arrDetails = json_decode($details, true);
        $ret='';
        //Get the GPA value
        $gpa = $arrDetails['gpa_object'];
        $user_index = $arrDetails['index_number'];

        $sql = "DELETE FROM mobile_app_users_gpa WHERE user_index=?";
        DB::delete($sql, [$user_index]);
        $sql = "INSERT INTO mobile_app_users_gpa (user_index,gpa) VALUES (?,?)";
        DB::insert($sql, [
            $user_index,
            $gpa
        ]);
        $ret=$ret.' GPA information inserted,';

        $sql = "DELETE FROM mobile_app_users_sgpa WHERE user_index=?";
        DB::delete($sql, [$user_index]);
        $sgpa = $arrDetails['sgpa_object'];
        $sql = "INSERT INTO mobile_app_users_sgpa (user_index, semester, sgpa) VALUES(?,?,?)";
        foreach ($sgpa as $item){
            DB::insert($sql,[
                $user_index,
                $item['semester'],
                $item['sgpa_value']
            ]);
        }
        $ret=$ret.' SGPA information inserted';

        $response = new JsonResponse();
        $response->setData(['status' => 'Successful ['.$ret.' ]']);
        return $response;
    }

    public function syncCourse(\Illuminate\Http\Request $request){
        $details = $request['details'];
        $index = $request['user_index'];
        $arrDetails = json_decode($details,true);
        $course_arr = $arrDetails['course_object'];

        $sql = "DELETE FROM mobile_app_details WHERE user_index=?";
        DB::delete($sql, [$index]);

        $sql = "INSERT INTO mobile_app_details (user_index,module_name,grade,credits,code,semester) VALUES (?,?,?,?,?,?)";
        foreach ($course_arr as $item){
            DB::insert($sql,[
                $item['index'],
                $item['name'],
                $item['grade'],
                $item['credits'],
                $item['code'],
                $item['semester']
            ]);

        }
        $response = new JsonResponse();
        $response->setData(['status' => 'Data successfully inserted']);
        return $response;
    }

    public function viewUser($index = null){
        $result = DB::select('SELECT user_name FROM mobile_app_users WHERE user_index=?',[$index]);
        $resultArr = [];
        foreach ($result as $item){
            $resultArr[]=(array)$item;
        }
        $userDetails = $resultArr[0]['user_name'].' ['.$index.']';

        $result = DB::select('SELECT * FROM mobile_app_users_sgpa WHERE user_index=?',[$index]);
        $sgpaArr = [];
        foreach ($result as $item){
            $tmpArr = (array)$item;
            if(strlen($tmpArr['sgpa'])<=6) {
                $sgpaArr[] = $tmpArr;
            }else{
                $tmpArr['sgpa'] = substr($tmpArr['sgpa'],0,6);
                $sgpaArr[] = $tmpArr;
            }
        }

        $result = DB::table('mobile_app_details')
            ->select('*')
            ->where('user_index', $index)
            ->orderBy('semester', 'asc')
            ->get();

        $courseDetails = [];
        $arrSem = array();
        foreach ($result as $item){
            $arr = (array)$item;
            $courseDetails[]=$arr;
            array_push($arrSem,$arr['semester']);
        }

        //Remove Duplicates
        $arrSemester = array_unique($arrSem);

        return view('DashboardView',compact('userDetails','sgpaArr','courseDetails','arrSemester'));
    }
}