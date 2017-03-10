<?php
/**
 * Created by PhpStorm.
 * User: prasanna
 * Date: 3/10/17
 * Time: 4:33 AM
 */
namespace App\Http\Requests;

class ContactRequest extends Request{
    public function rules(){
        return [
            'name'=>'required',
            'email'=>'required',
            'message'=>'required|max:10000'
        ];
    }

}