<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

require_once 'resources/org/code/Code.class.php';

class LoginController extends CommonController
{
    //admin login template
    public function login()
    {

        if ($input = Input::all()) {

            $user_input_code = strtoupper($input['code']);
            $system_code = $this->getCode();

            if ($user_input_code != $system_code) {
                return back()->with('msg', 'Incorrect Validation Code');
            } else {
                $input_user_name = $input['user_name'];
                $input_user_pass = $input['user_pass'];

                $user = User::all()->where('user_name', $input_user_name)->first();

                if ($user) {

                    $system_user_pass = $this->decrypt($user->user_pass);

                    if ($input_user_pass == $system_user_pass) {

                        session(['user'=>$user]);
                        return redirect('admin/index');
                    } else {
                        return back()->with('msg', 'Error: Incorrect Password');
                    }
                } else {
                    return back()->with('msg', 'Error: No Such User');
                }
            }

        } else {

            session(['user'=>null]);
            return view('admin.login');
        }
    }

    //make validation code
    public function code()
    {

        $code = new \Code();
        $code->make();
    }

    //get validation code
    public function getCode()
    {

        $code = new \Code();
        $val = $code->get();
        return $val;
    }

    //encrypt
    public function encrypt($str)
    {
        $res = Crypt::encrypt($str);
        return $res;
    }

    //decrypt
    public function decrypt($str)
    {
        $res = Crypt::decrypt($str);
        return $res;
    }

    public function logout(){

        session(['user'=>null]);
        return redirect('admin/login');
    }
}
