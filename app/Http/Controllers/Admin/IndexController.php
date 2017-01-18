<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Http\Model\Admin\User;

class IndexController extends CommonController
{
    //reset admin password
    public function pass()
    {

        if ($input = Input::all()) {
            $original_passwd = $input['password_o'];
            $new_passwd = $input['password'];
            $confirm_passwd = $input['password_confirmation'];
            $rules = [
                'password' => 'required | between:6,20 | confirmed'
            ];
            $message = [
                'password.required' => 'Please type in a new password!',
                'password.between' => 'New password must be between 6-20 characters!',
                'password.confirmed' => 'Confirmation password does not match the new password!',
            ];
            $validator = Validator::make($input, $rules, $message);
            if ($validator->passes()) {

                $user_name_system = session('user')['user_name'];
                $user = User::all()->where('user_name', $user_name_system)->first();
                $user_password_system = $this->decrypt($user->user_pass);  //get admin password from the database

                if ($original_passwd == $user_password_system) {
                    //password yes, go reset
                    $user->user_pass = $this->encrypt($new_passwd);
                    $user->update();
                    return back()->with('errors', 'Password reset Successful!');
                } else {
                    //password no, go back
                    return back()->with('errors', 'Your password is wrong, please try again!');
                }
            } else {
                return back()->withErrors($validator);
            }
        } else {
            return view('admin.pass');
        }
    }

    public function index()
    {
        return view('admin.index');
    }

    public function info()
    {
        return view('admin.info');
    }

    public function add()
    {
        return view('admin.add');
    }

    public function listPage()
    {
        return view('admin.list');
    }

    public function tab()
    {
        return view('admin.tab');
    }

    public function img()
    {
        return view('admin.img');
    }

    public function element()
    {
        return view('admin.element');
    }
}
