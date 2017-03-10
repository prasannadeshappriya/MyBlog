<?php
/**
 * Created by PhpStorm.
 * User: prasanna
 * Date: 3/10/17
 * Time: 4:33 AM
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class Request extends FormRequest{
    public function authorize(){
        return $this->input('address')=='';
    }

}