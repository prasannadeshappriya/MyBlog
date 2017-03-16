<?php
/**
 * Created by PhpStorm.
 * User: prasanna
 * Date: 3/16/17
 * Time: 5:08 AM
 */
namespace App\Http\Requests;

class LoginRequest extends Request{
    public function rules(){
        return [
            'password'=>'required|min:4|max:255',
            'username'=>'required'
        ];
    }
}