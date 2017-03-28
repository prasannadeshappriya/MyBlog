<?php
/**
 * Created by PhpStorm.
 * User: prasanna
 * Date: 3/16/17
 * Time: 9:07 PM
 */
namespace  App\Http\Requests;
class ProjectAddRequest extends Request{
    public function rules(){
        return [
            'name' => 'required|max:100|min:1',
            'description' => 'required|max:10000|min:1',
        ];
    }
}