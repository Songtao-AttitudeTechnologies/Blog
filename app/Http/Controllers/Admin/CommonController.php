<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
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
}
