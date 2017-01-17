<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

require_once 'resources/org/code/Code.class.php';

class LoginController extends CommonController
{
    //admin login template
    public function login(){

        if($input = Input::all()){

            $user_input_code = strtoupper($input['code']);
            $system_code = $this->getCode();

            if($user_input_code != $system_code){
                return back()->with('msg','Incorrect Validation Code');
            }else{
                dd('Validation Successful');
            }

        }else{
            return view('admin.login');
        }
    }

    //make validation code
    public function code(){

        $code = new \Code();
        $code -> make();
    }

    //get validation code
    public function getCode(){

        $code = new \Code();
        $val = $code ->get();
        return $val;
    }
}
